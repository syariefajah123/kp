<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;

use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('nama')
                    ->required(),

                Select::make('jenis')
                    ->options([
                        'cup' => 'Paper Cup',
                        'bag' => 'Paper Bag',
                        'container' => 'Container',
                        'bowl' => 'Paper Bowl',
                        'custom' => 'Custom',
                        'accessories' => 'Accessories',
                    ])
                    ->required(),

                TextInput::make('kategori')
                    ->placeholder('contoh: Food Grade, Eco Friendly, Premium')
                    ->helperText('Pisahkan dengan koma')
                    ->required(),

                Textarea::make('deskripsi'),

                FileUpload::make('gambar')
                    ->image()
                    ->disk('public')
                    ->directory('products')
                    ->preserveFilenames()
                    ->maxSize(2048),

                Toggle::make('is_active')
                    ->default(true),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                ImageColumn::make('gambar'),

                TextColumn::make('nama')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('jenis'),

                TextColumn::make('kategori'),

                IconColumn::make('is_active')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->dateTime(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}