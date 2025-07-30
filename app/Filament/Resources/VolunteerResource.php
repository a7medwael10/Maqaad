<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VolunteerResource\Pages;
use App\Filament\Resources\VolunteerResource\RelationManagers;
use App\Models\Volunteer;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VolunteerResource extends Resource
{
    protected static ?string $model = Volunteer::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function getNavigationLabel(): string
    {
        return __('volunteers');
    }

    public static function getPluralModelLabel(): string
    {
        return __('volunteers');
    }

    public static function getModelLabel(): string
    {
        return __('volunteer');
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('name'))
                    ->required(),

                TextInput::make('email')
                    ->label(__('email'))
                    ->email()
                    ->required(),

                TextInput::make('phone')
                    ->label(__('phone'))
                    ->required(),

                TextInput::make('address')
                    ->label(__('address'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('name')),
                TextColumn::make('email')->label(__('email')),
                TextColumn::make('phone')->label(__('phone')),
                TextColumn::make('address')->label(__('address')),
                TextColumn::make('created_at')
                    ->label(__('created_at'))
                    ->dateTime('d M Y'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListVolunteers::route('/'),
            'edit' => Pages\EditVolunteer::route('/{record}/edit'),
        ];
    }
}
