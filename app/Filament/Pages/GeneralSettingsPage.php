<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Pages\SettingsPage;
use App\Settings\GeneralSettings;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;

class GeneralSettingsPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static string $settings = GeneralSettings::class;

    public static function getNavigationGroup(): string
    {
        return __('site_management');
    }

    public static function getNavigationLabel(): string
    {
        return __('site_settings');
    }

    public static function getModelLabel(): string
    {
        return __('general_settings');
    }

    public static function getPluralModelLabel(): string
    {
        return __('general_settings');
    }


protected function getFormSchema(): array
{
    return [
        Tabs::make(__('settings'))
            ->columnSpanFull()
            ->contained(false)
            ->tabs([
                Tabs\Tab::make(__('basic_info'))
                    ->schema([
                        TextInput::make('site_name_ar')
                            ->label(__('site_name_ar'))
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('site_name_en')
                            ->label(__('site_name_en'))
                            ->required()
                            ->columnSpan(1),

                        FileUpload::make('logo')
                            ->label(__('logo'))
                            ->image()
                            ->disk('public')
                            ->directory('site/images')
                            ->columnSpan(1),

                        FileUpload::make('favicon')
                            ->label(__('favicon'))
                            ->image()
                            ->disk('public')
                            ->directory('site/images')
                            ->columnSpan(1),

                        FileUpload::make('installation_doc')
                            ->label(__('installation_guide_title'))
                            ->image()
                            ->disk('public')
                            ->directory('site/images')
                            ->columnSpan(1),

                        FileUpload::make('initiative_presentation')
                            ->label(__('initiative_presentation'))
                            ->image()
                            ->disk('public')
                            ->directory('site/images')
                            ->columnSpan(1),
                    ])
                    ->columns(2),

                Tabs\Tab::make(__('home_page'))
                    ->schema([
                        TextInput::make('hero_title_ar')->label(__('hero_title_ar')),
                        TextInput::make('hero_title_en')->label(__('hero_title_en')),
                        Textarea::make('hero_description_ar')->label(__('hero_description_ar'))->columnSpanFull(),
                        Textarea::make('hero_description_en')->label(__('hero_description_en'))->columnSpanFull(),
                        FileUpload::make('home_banner')
                            ->label(__('home_banner'))
                            ->image()
                            ->disk('public')
                            ->directory('site/images'),

                    ])
                    ->columns(2),

                Tabs\Tab::make(__('progress'))
                    ->schema([

                        Section::make(__('progress_group_1'))
                            ->schema([
                                TextInput::make('progress_death_ar')
                                    ->label(__('progress_death_ar'))
                                    ->required(),

                                TextInput::make('progress_death_en')
                                    ->label(__('progress_death_en'))
                                    ->required(),

                                TextInput::make('progress_death_percent')
                                    ->label(__('progress_death_percent'))
                                    ->numeric()
                                    ->required(),
                            ]),

                        Section::make(__('progress_group_2'))
                            ->schema([
                                TextInput::make('progress_injury_ar')
                                    ->label(__('progress_injury_ar'))
                                    ->required(),

                                TextInput::make('progress_injury_en')
                                    ->label(__('progress_injury_en'))
                                    ->required(),

                                TextInput::make('progress_injury_percent')
                                    ->label(__('progress_injury_percent'))
                                    ->numeric()
                                    ->required(),
                            ]),

                        Section::make(__('progress_group_3'))
                            ->schema([
                                TextInput::make('progress_use_ar')
                                    ->label(__('progress_use_ar'))
                                    ->required(),

                                TextInput::make('progress_use_en')
                                    ->label(__('progress_use_en'))
                                    ->required(),

                                TextInput::make('progress_use_percent')
                                    ->label(__('progress_use_percent'))
                                    ->numeric()
                                    ->required(),
                            ]),
                    ]),


                Tabs\Tab::make(__('about'))
                    ->schema([
                        Textarea::make('about_short_ar')->label(__('about_short_ar')),
                        Textarea::make('about_short_en')->label(__('about_short_en')),
                        Textarea::make('about_long_ar')->label(__('about_long_ar'))->columnSpanFull(),
                        Textarea::make('about_long_en')->label(__('about_long_en'))->columnSpanFull(),
                        FileUpload::make('about_banner')
                            ->label(__('about_banner'))
                            ->image()
                            ->disk('public')
                            ->directory('site/images'),
                    ])
                    ->columns(2),

                Tabs\Tab::make(__('vision_mission'))
                    ->schema([
                        Textarea::make('vision_ar')->label(__('vision_ar')),
                        Textarea::make('vision_en')->label(__('vision_en')),
                        Textarea::make('mission_ar')->label(__('mission_ar')),
                        Textarea::make('mission_en')->label(__('mission_en')),
                        Textarea::make('goal_ar')->label(__('goal_ar')),
                        Textarea::make('goal_en')->label(__('goal_en')),
                    ])
                    ->columns(2),

                Tabs\Tab::make(__('contact_info'))
                    ->schema([
                        TextInput::make('contact_email')->label(__('contact_email')),
                        TextInput::make('contact_phone')->label(__('contact_phone')),
                        Textarea::make('contact_address_ar')->label(__('contact_address_ar'))->columnSpanFull(),
                        Textarea::make('contact_address_en')->label(__('contact_address_en'))->columnSpanFull(),
                    ])
                    ->columns(2),

                Tabs\Tab::make(__('social_media'))
                    ->schema([
                        TextInput::make('social_twitter')->label(__('social_twitter')),
                        TextInput::make('social_facebook')->label(__('social_facebook')),
                        TextInput::make('social_instagram')->label(__('social_instagram')),
                        TextInput::make('social_youtube')->label(__('social_youtube')),
                        Textarea::make('social_text')->label(__('social_text'))->columnSpanFull(),
                    ])
                    ->columns(2),

                Tabs\Tab::make(__('terms'))
                    ->schema([
                        Textarea::make('terms_desc_ar')->label(__('terms_desc_ar'))->columnSpanFull(),
                        Textarea::make('terms_desc_en')->label(__('terms_desc_en'))->columnSpanFull(),
                    ])
                    ->columns(1),
            ])
    ];
}
}
