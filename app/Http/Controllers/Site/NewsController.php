<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        $news = $this->newsService->getAllNews();
        return view('site.news.index', compact('news'));
    }

    public function show($slug)
    {
        $new = $this->newsService->getNewsBySlug($slug);
        $latestNews = $this->newsService->getLatestNews();
        return view('site.news.show', compact('new', 'latestNews'));
    }
}
