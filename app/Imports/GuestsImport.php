<?php

namespace App\Imports;

use App\Models\Guest;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuestsImport implements ToModel, WithHeadingRow
{
    use Importable, SkipsFailures;

    private $eventId;

    public function __construct(int $eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // Debugging (hapus setelah berhasil)
        Log::info('Row data:', $row);

        return new Guest([
            'event_id' => $this->eventId,
            'name' => $row['nama'] ?? null,
            'whatsapp_number' => $row['whatsapp_number'] ?? null,
        ]);
    }
}
