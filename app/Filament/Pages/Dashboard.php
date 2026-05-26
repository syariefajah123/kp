<?php

namespace App\Filament\Resources;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\IconColumn;
use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

   public static function form(Form $form): Form
{
    return $form
        ->schema([

            TextInput::make('nama')
                ->required()
                ->maxLength(255),

            TextInput::make('kategori')
                ->required()
                ->maxLength(255),

            Textarea::make('deskripsi')
                ->rows(5),

            FileUpload::make('gambar')
                ->image()
                ->directory('products'),

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

           TextColumn::make('kategori')
                ->searchable(),

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
