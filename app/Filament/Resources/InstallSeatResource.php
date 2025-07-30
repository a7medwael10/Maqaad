<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InstallSeatResource\Pages;
use App\Filament\Resources\InstallSeatResource\RelationManagers;
use App\Models\InstallSeat;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InstallSeatResource extends Resource
{
    protected static ?string $model = InstallSeat::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function getNavigationGroup(): string
    {
        return __('seats_management');
    }


    public static function getNavigationLabel(): string
    {
        return __('seat_installation');
    }

    public static function getModelLabel(): string
    {
        return __('seat_installation');
    }

    public static function getPluralModelLabel(): string
    {
        return __('seat_installations');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_ar')->label(__('name_ar'))->required(),
                TextInput::make('name_en')->label(__('name_en'))->required(),
                TextInput::make('duration')->label(__('duration'))->required(),
                TextInput::make('link')->label(__('link'))->required()->url(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('site/images/install_seats')
                    ->required()
                    ->label(__('image')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_ar')->label(__('name_ar'))->searchable(),
                TextColumn::make('name_en')->label(__('name_en'))->searchable(),
                TextColumn::make('duration')->label(__('duration')),
                TextColumn::make('link')->label(__('link'))->limit(30),
                TextColumn::make('created_at')->label(__('created_at'))->date(),
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
            'index' => Pages\ListInstallSeats::route('/'),
            'create' => Pages\CreateInstallSeat::route('/create'),
            'edit' => Pages\EditInstallSeat::route('/{record}/edit'),
        ];
    }
}
