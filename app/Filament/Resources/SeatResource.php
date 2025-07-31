<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeatResource\Pages;
use App\Filament\Resources\SeatResource\RelationManagers;
use App\Models\Seat;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SeatResource extends Resource
{
    protected static ?string $model = Seat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): string
    {
        return __('seats_management');
    }


    public static function getNavigationLabel(): string
    {
        return __('seats');
    }

    public static function getPluralModelLabel(): string
    {
        return __('seats');
    }

    public static function getModelLabel(): string
    {
        return __('seat');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_ar')->label(__('name_ar'))->required(),
                TextInput::make('name_en')->label(__('name_en'))->required(),

                TextInput::make('age_from')->label(__('age_from'))->numeric()->required()->integer()->minValue(1),
                TextInput::make('age_to')->label(__('age_to'))->numeric()->required()->gt('age_from')->minValue(1),

                TextInput::make('weight')->label(__('weight'))->numeric()->required()->minValue(1),
                Select::make('weight_type')
                    ->label(__('weight_type'))
                    ->options([
                        'min' => __('min'),
                        'max' => __('max'),
                    ])
                    ->required(),

                TextInput::make('height')->label(__('height'))->numeric()->required(),

                FileUpload::make('image')
                    ->label(__('image'))
                    ->image()
                    ->disk('public')
                    ->directory('site/images/seats')
                    ->required(),
                Toggle::make('is_active')->label(__('is_active'))->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name_ar')->label(__('name_ar'))->searchable(),
                TextColumn::make('name_en')->label(__('name_en'))->searchable(),
                TextColumn::make('age_from')->label(__('age_from')),
                TextColumn::make('age_to')->label(__('age_to')),
                TextColumn::make('weight')->label(__('weight')),
                TextColumn::make('weight_type')->label(__('weight_type')),
                TextColumn::make('height')->label(__('height')),
                ToggleColumn::make('is_active')->label(__('is_active')),
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
            'index' => Pages\ListSeats::route('/'),
            'create' => Pages\CreateSeat::route('/create'),
            'edit' => Pages\EditSeat::route('/{record}/edit'),
        ];
    }
}
