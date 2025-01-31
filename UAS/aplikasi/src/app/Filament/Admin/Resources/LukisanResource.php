<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LukisanResource\Pages;
use App\Filament\Admin\Resources\LukisanResource\RelationManagers;
use App\Models\Lukisan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LukisanResource extends Resource
{
    protected static ?string $model = Lukisan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lukisan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tahun_pembuatan')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_lukisan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_pembuatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListLukisans::route('/'),
            'create' => Pages\CreateLukisan::route('/create'),
            'edit' => Pages\EditLukisan::route('/{record}/edit'),
        ];
    }
}
