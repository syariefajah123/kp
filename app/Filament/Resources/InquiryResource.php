<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InquiryResource\Pages;
use App\Models\Inquiry;

use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\BadgeColumn;

class InquiryResource extends Resource
{
    protected static ?string $model = Inquiry::class;

    protected static ?string $navigationIcon = 'heroicon-o-bell';

    protected static ?string $navigationLabel = 'Pesanan Masuk';

    protected static ?string $navigationBadgeTooltip = 'Pesanan Baru';

    // BADGE NOTIFIKASI
    public static function getNavigationBadge(): ?string
    {
        return (string) static::getModel()::where('status', 'baru')->count();
    }

    // FORM
    public static function form(Form $form): Form
    {
        return $form->schema([

            TextInput::make('nama')->disabled(),
            TextInput::make('whatsapp')->disabled(),
            TextInput::make('email')->disabled(),
            TextInput::make('produk')->disabled(),
            Textarea::make('pesan')->disabled(),

            Select::make('status')
                ->options([
                    'baru' => 'Baru',
                    'dibaca' => 'Dibaca',
                    'diproses' => 'Diproses',
                    'selesai' => 'Selesai',
                ])
                ->required(),

        ]);
    }

    // TABLE
    public static function table(Table $table): Table
    {
        return $table->columns([

            TextColumn::make('nama')->searchable(),
            TextColumn::make('whatsapp'),
            TextColumn::make('produk'),

            BadgeColumn::make('status')
                ->colors([
                    'danger' => 'baru',
                    'warning' => 'dibaca',
                    'primary' => 'diproses',
                    'success' => 'selesai',
                ]),

            TextColumn::make('created_at')
                ->dateTime('d M Y H:i'),

        ])
        ->actions([

            // WHATSAPP (FIXED)
            Tables\Actions\Action::make('whatsapp')
                ->label('WhatsApp')
                ->icon('heroicon-o-phone')
                ->color('success')
                ->url(function ($record) {

                    // HAPUS semua non angka
                    $url = preg_replace('/[^0-9]/', '', $record->whatsapp);

                    // ubah 0 depan jadi 62
                    $url = preg_replace('/^0/', '62', $url);

                    return 'https://wa.me/' . $url;
                })
                ->openUrlInNewTab()
                ->action(function ($record) {
                    $record->update([
                        'status' => 'diproses',
                    ]);
                }),

            // SELESAI
            Tables\Actions\Action::make('selesai')
                ->label('Selesai')
                ->icon('heroicon-o-check')
                ->color('primary')
                ->action(function ($record) {
                    $record->update([
                        'status' => 'selesai',
                    ]);
                }),

            // EDIT
            Tables\Actions\EditAction::make()
                ->after(function ($record) {

                    if ($record->status == 'baru') {
                        $record->update([
                            'status' => 'dibaca',
                        ]);
                    }

                }),

            Tables\Actions\DeleteAction::make(),

        ]);
    }

    // PAGE
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInquiries::route('/'),
            'edit' => Pages\EditInquiry::route('/{record}/edit'),
        ];
    }
}