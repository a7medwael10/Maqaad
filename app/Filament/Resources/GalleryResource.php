<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function getNavigationGroup(): string
    {
        return __('content_management');
    }


    public static function getModelLabel(): string
    {
        return __('gallery');
    }

    public static function getPluralModelLabel(): string
    {
        return __('galleries');
    }

    public static function getNavigationLabel(): string
    {
        return __('galleries');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)->schema([
                    TextInput::make('title_ar')
                        ->label(__('title_ar'))
                        ->required()
                        ->maxLength(255),

                    TextInput::make('title_en')
                        ->label(__('title_en'))
                        ->required()
                        ->maxLength(255),
                ]),

                Repeater::make('images')
                    ->label(__('Images'))
                    ->relationship()
                    ->schema([
                        FileUpload::make('image')
                            ->image()
                            ->disk('public')
                            ->directory('site/images/galleries')
                            ->required()
                            ->preserveFilenames()
                            ->label(__('image')),
                    ])
                    ->columns(1)
                    ->createItemButtonLabel(__('Add Image')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')->label(__('title_ar'))->searchable(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
