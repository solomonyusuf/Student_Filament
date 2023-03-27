<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StudentResource\Pages;
use App\Filament\Resources\StudentResource\RelationManagers;
use App\Models\Student;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;

class StudentResource extends Resource
{
    protected static ?string $model = Student::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
               // SpatieMediaLibraryFileUpload::make('avatar')->collection('avatars'),
                TextInput::make('first_name')->reactive(),
                TextInput::make('last_name')->reactive(),
                TextInput::make('class')->reactive(),
                TextInput::make('age')->reactive()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
              // SpatieMediaLibraryImageColumn::make('avatar')->collection('avatars'),
                TextColumn::make('first_name')->limit(50)->sortable(),
                TextColumn::make('last_name')->limit(50)->sortable(),
                TextColumn::make('class')->limit(50)->sortable(),
                TextColumn::make('age')->limit(50)->sortable()
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
            'index' => Pages\ListStudents::route('/'),
            'create' => Pages\CreateStudent::route('/create'),
            'edit' => Pages\EditStudent::route('/{record}/edit'),
        ];
    }
}
