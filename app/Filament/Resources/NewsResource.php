<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Filament\Resources\NewsResource\RelationManagers;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    public static function getNavigationGroup(): string
    {
        return __('content_management');
    }

    public static function getModelLabel(): string
    {
        return __('new');
    }

    public static function getPluralModelLabel(): string
    {
        return __('news');
    }

    public static function getNavigationLabel(): string
    {
        return __('news');
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
                Grid::make(2)->schema([
                    Textarea::make('content_ar')
                        ->label(__('content_ar'))
                        ->required()
                        ->rows(5),
                    Textarea::make('content_en')
                        ->label(__('content_en'))
                        ->required()
                        ->rows(5),
                ]),
                FileUpload::make('image')
                    ->label(__('image'))
                    ->image()
                    ->disk('public')
                    ->directory('site/images/news')
                    ->required()
                    ->preserveFilenames(),
                Grid::make(2)->schema([
                    Toggle::make('is_published')
                        ->label(__('is_published'))
                        ->inline(false),
                    DatePicker::make('published_at')
                        ->label(__('published_at')),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')->label(__('title_ar'))->searchable(),
                TextColumn::make('title_en')->label(__('title_en'))->searchable(),
                ImageColumn::make('image')->label(__('image'))->disk('public'),
                ToggleColumn::make('is_published')->label(__('is_published')),
                TextColumn::make('published_at')->label(__('published_at'))->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
