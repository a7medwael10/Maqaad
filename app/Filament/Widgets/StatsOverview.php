<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Partener;
use App\Models\Question;
use App\Models\Seat;
use App\Models\Volunteer;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = null;

    protected function getCards(): array
    {
        return [
            Card::make(__('total_blogs'), Blog::count()),
            Card::make(__('total_news'), News::count()),
            Card::make(__('total_galleries'), Gallery::count()),
            Card::make(__('total_seats'), Seat::count()),
            Card::make(__('total_contact_messages'), Contact::count()),
            Card::make(__('total_volunteers'), Volunteer::count()),
            Card::make(__('total_partners'), Partener::count()),
            Card::make(__('total_questions'), Question::count()),

        ];
    }
}
