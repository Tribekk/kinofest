<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JuryResource\Pages;
use App\Filament\Resources\JuryResource\RelationManagers;
use App\Models\Jury;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JuryResource extends Resource
{
    protected static ?string $model = Jury::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('img'),
                Forms\Components\TextInput::make('FIO'),
                Forms\Components\RichEditor::make('films')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('img'),
                Tables\Columns\TextColumn::make('FIO'),
                Tables\Columns\TextColumn::make('films')
                ->limit(50)
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
            'index' => Pages\ListJuries::route('/'),
            'create' => Pages\CreateJury::route('/create'),
            'edit' => Pages\EditJury::route('/{record}/edit'),
        ];
    }
}
