<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?int $navigationSort = 2;

    public static function getNavigationGroup(): string
    {
        return __('content_management');
    }

    public static function getModelLabel(): string
    {
        return __('blog');
    }

    public static function getPluralModelLabel(): string
    {
        return __('blogs');
    }

    public static function getNavigationLabel(): string
    {
        return __('blogs');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                TextInput::make('title_ar')
                    ->label(__('Title Ar'))
                    ->required(),

                TextInput::make('title_en')
                    ->label(__('Title En'))
                    ->required(),

                Textarea::make('content_ar')
                    ->label(__('Content Ar'))
                    ->required()
                    ->rows(6),

                Textarea::make('content_en')
                    ->label(__('Content En'))
                    ->required()
                    ->rows(6),

                Toggle::make('is_published')
                    ->label(__('Published')),

                DatePicker::make('published_at')
                    ->label(__('Published At'))
                    ->default(now())
                    ->requiredIf('is_published', true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title_ar')->label(__('Title Ar'))->searchable(),
                TextColumn::make('title_en')->label(__('Title En'))->searchable(),
                ToggleColumn::make('is_published')->label(__('Published')),
                TextColumn::make('published_at')->label(__('Published At')),
            ])
            ->defaultSort('created_at', 'desc')
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
