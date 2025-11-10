<?php

namespace App\Notifications;

use App\Models\Invoice; // Added
use App\Models\User; // Added (assuming the notifiable is a User)
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VoucherInvalidatedNotification extends Notification
{
    use Queueable;

    public Invoice $invoice; // Added
    public string $reason; // Added

    /**
     * Create a new notification instance.
     */
    public function __construct(Invoice $invoice, string $reason) // Modified
    {
        $this->invoice = $invoice;
        $this->reason = $reason;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $invoiceUrl = url('/invoices/' . $this->invoice->id); // Assuming an invoice show route

        return (new MailMessage)
                    ->subject('Pemberitahuan: Voucher Dibatalkan dari Faktur Anda')
                    ->greeting('Halo ' . $notifiable->name . ',')
                    ->line('Kami ingin memberitahukan bahwa voucher yang sebelumnya diterapkan pada faktur Anda telah dibatalkan.')
                    ->line('**Detail Faktur:**')
                    ->line('Nomor Faktur: ' . $this->invoice->invoice_number)
                    ->line('Kode Voucher: ' . ($this->invoice->voucher ? $this->invoice->voucher->code : 'N/A'))
                    ->line('Alasan Pembatalan: ' . $this->reason)
                    ->line('Total Awal (sebelum voucher): Rp ' . number_format($this->invoice->original_total_before_voucher, 0, ',', '.'))
                    ->line('Diskon Voucher: Rp ' . number_format($this->invoice->voucher_discount_amount, 0, ',', '.'))
                    ->line('Total Baru yang Harus Dibayar: Rp ' . number_format($this->invoice->current_total, 0, ',', '.'))
                    ->action('Lihat Faktur Anda', $invoiceUrl)
                    ->line('Jika faktur Anda sebelumnya sudah lunas, mungkin ada sisa pembayaran yang perlu diselesaikan.')
                    ->line('Mohon periksa faktur Anda dan hubungi kami jika Anda memiliki pertanyaan.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'invoice_id' => $this->invoice->id,
            'invoice_number' => $this->invoice->invoice_number,
            'voucher_code' => $this->invoice->voucher->code ?? 'N/A',
            'reason' => $this->reason,
            'new_total' => $this->invoice->current_total,
        ];
    }
}
