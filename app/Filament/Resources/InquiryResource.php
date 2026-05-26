<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InquiryResource\Pages;
use App\Models\Inquiry;

use Filament\Forms;
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

    protected static ?string $navigationIcon = 'heroicon-o-chat-alt';

    protected static ?string $navigationLabel = 'Pesan Client';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('nama')
                    ->disabled(),

                TextInput::make('whatsapp')
                    ->disabled(),

                TextInput::make('email')
                    ->disabled(),

                TextInput::make('produk')
                    ->disabled(),

                Textarea::make('pesan')
                    ->disabled()
                    ->rows(6),

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

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('nama')
                    ->searchable(),

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
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInquiries::route('/'),
            'create' => Pages\CreateInquiry::route('/create'),
            'edit' => Pages\EditInquiry::route('/{record}/edit'),
        ];
    }
}