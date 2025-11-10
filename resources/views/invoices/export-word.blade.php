<h1>Invoice #{{ $invoice->invoice_number ?? 'N/A' }}</h1>

<table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
    <tr>
        <td style="width: 50%; vertical-align: top;">
            <h3>From:</h3>
            <p>{{ $invoice->event->name ?? 'Event Name' }}</p>
            <p>{{ $invoice->event->location ?? 'Event Location' }}</p>
            <p>{{ $invoice->event->date ?? 'Event Date' }}</p>
        </td>
        <td style="width: 50%; vertical-align: top;">
            <h3>To:</h3>
            <p>{{ $invoice->user->name ?? 'Customer Name' }}</p>
            <p>{{ $invoice->user->email ?? 'Customer Email' }}</p>
        </td>
    </tr>
</table>

<div style="margin-top: 30px;">
    <h3>Invoice Details</h3>
    <table style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="border: 1px solid #ddd; padding: 8px;">Description</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Quantity</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Price</th>
                <th style="border: 1px solid #ddd; padding: 8px;">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;">Event Registration</td>
                <td style="border: 1px solid #ddd; padding: 8px;">1</td>
                <td style="border: 1px solid #ddd; padding: 8px;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
                <td style="border: 1px solid #ddd; padding: 8px;">Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>
</div>

<div style="margin-top: 30px; text-align: right;">
    <h3>Summary</h3>
    <p>Total: Rp {{ number_format($invoice->total_amount ?? 0, 0, ',', '.') }}</p>
    <p>Status: {{ $invoice->status ?? 'N/A' }}</p>
</div>