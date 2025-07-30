<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    // Site basics
    public string $site_name_ar;
    public string $site_name_en;
    public bool $site_active;
    public string $favicon;
    public string $logo;

    // Social
    public string $social_twitter;
    public string $social_facebook;
    public string $social_instagram;
    public string $social_youtube;
    public string $social_text;

    // Hero section
    public string $hero_title_ar;
    public string $hero_title_en;
    public string $hero_description_ar;
    public string $hero_description_en;

    // Home

    public string $home_banner;

    // About section
    public string $about_banner;
    public string $about_short_ar;
    public string $about_short_en;
    public string $about_long_ar;
    public string $about_long_en;

    // Vision / Mission / Goal
    public string $vision_ar;
    public string $vision_en;
    public string $mission_ar;
    public string $mission_en;
    public string $goal_ar;
    public string $goal_en;

    // Contact
    public string $contact_email;
    public string $contact_phone;
    public string $contact_address_ar;
    public string $contact_address_en;

    // Terms
    public string $terms_desc_ar;
    public string $terms_desc_en;


    // 🟢 الإحصائيات - Progress Section
    public ?string $progress_death_ar;
    public ?string $progress_death_en;
    public ?int $progress_death_percent;

    public ?string $progress_injury_ar;
    public ?string $progress_injury_en;
    public ?int $progress_injury_percent;

    public ?string $progress_use_ar;
    public ?string $progress_use_en;
    public ?int $progress_use_percent;

    public ?string $installation_doc;
    public ?string $initiative_presentation;



    public static function group(): string
    {
        return 'general';
    }

    public function trans(string $key): mixed
    {
        $locale = app()->getLocale();
        $field = "{$key}_{$locale}";

        return $this->{$field} ?? null;
    }

}
