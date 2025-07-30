<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Filament\Resources\PartnerResource\RelationManagers;
use App\Models\Partener;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PartnerResource extends Resource
{
    protected static ?string $model = Partener::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function getModelLabel(): string
    {
        return __('partner');
    }

    public static function getPluralModelLabel(): string
    {
        return __('partners');
    }

    public static function getNavigationLabel(): string
    {
        return __('partners');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name_ar')
                    ->label(__('name_ar'))
                    ->required(),
                TextInput::make('name_en')
                    ->label(__('name_en'))
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->label(__('image'))
                    ->disk('public')
                    ->directory('site/images/partners')
                    ->required(),
                TextInput::make('link')
                    ->url()
                    ->label(__('link')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image_url')
                    ->label(__('image')),
                TextColumn::make('name_ar')->label(__('name_ar'))->searchable(),
                TextColumn::make('name_en')->label(__('name_en'))->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}
