<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionsResource\Pages;
use App\Filament\Resources\QuestionsResource\RelationManagers;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionsResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function getModelLabel(): string
    {
        return __('question');
    }

    public static function getPluralModelLabel(): string
    {
        return __('questions');
    }

    public static function getNavigationLabel(): string
    {
        return __('questions');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Grid::make(2)->schema([
                        TextInput::make('question_ar')
                            ->label(__('question_ar'))
                            ->required(),

                        TextInput::make('question_en')
                            ->label(__('question_en'))
                            ->required(),
                    ]),

                    Grid::make(2)->schema([
                        Textarea::make('answer_ar')
                            ->label(__('answer_ar'))
                            ->required()
                            ->rows(4),

                        Textarea::make('answer_en')
                            ->label(__('answer_en'))
                            ->required()
                            ->rows(4),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question_ar')->label(__('question_ar'))->limit(50)->searchable(),
                TextColumn::make('question_en')->label(__('question_en'))->limit(50)->searchable(),
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestions::route('/create'),
            'edit' => Pages\EditQuestions::route('/{record}/edit'),
        ];
    }
}
