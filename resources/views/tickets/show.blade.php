<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-R">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiket untuk {{ $ticket->guest->name }}</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f3f4f6;
      text-align: center;
    }

    .ticket {
      background: white;
      padding: 2rem;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 1.5rem;
      margin-bottom: 0.5rem;
    }

    h2 {
      font-size: 1.25rem;
      margin-bottom: 1.5rem;
      font-weight: normal;
    }

    .qr-code {
      margin-bottom: 1.5rem;
    }

    code {
      background: #eee;
      padding: 0.25rem 0.5rem;
      border-radius: 0.25rem;
    }
  </style>
</head>

<body>
  <div class="ticket">
    <h1>{{ $ticket->guest->event->event_name }}</h1>
    <h2>Tiket untuk: <strong>{{ $ticket->guest->name }}</strong></h2>

    <div class="qr-code">
      {{-- Tampilkan SVG QR Code --}}
      {!! $qrCode !!}
    </div>

    <p>Tunjukkan QR Code ini kepada staf di pintu masuk.</p>
    <p><small>Kode Tiket: <code>{{ $ticket->ticket_code }}</code></small></p>
  </div>
</body>

</html>