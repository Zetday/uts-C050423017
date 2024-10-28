<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Lokasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LokasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LokasiResource\RelationManagers;

class LokasiResource extends Resource
{
    protected static ?string $model = Lokasi::class;


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Lokasi';
    protected static ?string $pluralLabel = 'Lokasi';
    protected static ?string $slug = 'lokasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('nama_lokasi')
                    ->required()
                    ->label('Nama Lokasi'),
                Textarea::make('deskripsi_lokasi')
                    ->label('Deskripsi Lokasi'),
                TextInput::make('lantai')
                    ->numeric()
                    ->label('Lantai')
                    ->placeholder('Contoh: 1'),
                TextInput::make('ruangan')
                    ->label('Ruangan')
                    ->placeholder('Contoh: A101')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('nama_lokasi')->label('Nama Lokasi'),
                Tables\Columns\TextColumn::make('deskripsi_lokasi')->label('Deskripsi Lokasi')->limit(50),
                Tables\Columns\TextColumn::make('lantai')->label('Lantai'),
                Tables\Columns\TextColumn::make('ruangan')->label('Ruangan'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListLokasis::route('/'),
            'create' => Pages\CreateLokasi::route('/create'),
            'edit' => Pages\EditLokasi::route('/{record}/edit'),
        ];
    }
}
