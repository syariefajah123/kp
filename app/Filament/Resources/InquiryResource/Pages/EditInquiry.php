<?php

namespace App\Filament\Resources\InquiryResource\Pages;

use App\Filament\Resources\InquiryResource;
use Filament\Resources\Pages\EditRecord;

class EditInquiry extends EditRecord
{
    protected static string $resource = InquiryResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if ($this->record->status === 'baru') {

            $this->record->update([
                'status' => 'dibaca',
            ]);
        }

        return $data;
    }
}