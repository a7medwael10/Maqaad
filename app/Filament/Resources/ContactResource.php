<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
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

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    public static function getNavigationLabel(): string
    {
        return __('contact_messages');
    }

    public static function getModelLabel(): string
    {
        return __('contact_message');
    }

    public static function getPluralModelLabel(): string
    {
        return __('contact_messages');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->label(__('name'))->required()->disabled(),
                TextInput::make('email')->label(__('email'))->required()->email()->disabled(),
                Textarea::make('message')->label(__('message'))->required()->disabled(),
                Toggle::make('isReply')->label(__('is_replied')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('name'))->searchable(),
                TextColumn::make('email')->label(__('email'))->searchable(),
                TextColumn::make('message')->label(__('message'))->limit(50),
                ToggleColumn::make('isReply')->label(__('is_replied')),
                TextColumn::make('created_at')->label(__('created_at'))->dateTime('Y-m-d H:i'),
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
            'index' => Pages\ListContacts::route('/'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
