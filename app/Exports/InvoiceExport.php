<?php

namespace App\Exports;

use App\Models\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithTitle;

class InvoiceExport implements FromView, WithTitle
{
    public $invoice;

    public function __construct(Invoice $invoice)
    {
        $this->invoice = $invoice;
    }

    public function view(): View
    {
        return view('invoices.export', [
            'invoice' => $this->invoice
        ]);
    }

    /**
     * @return string
     */
    /**
     * @return string
     */
    public function title(): string
    {
        $rawTitle = 'Invoice ' . ($this->invoice->invoice_number ?? $this->invoice->id);
        $title = preg_replace('/[\/\\\\\?\*\[\]\:\<\>\|]/', '', $rawTitle);
        $title = preg_replace('/[\x00-\x1F\x7F]/', '', $title);
        $title = trim($title);
        $title = mb_substr($title, 0, 31, 'UTF-8');
        return empty($title) ? 'Inv-' . $this->invoice->id : $title;
    }
}
