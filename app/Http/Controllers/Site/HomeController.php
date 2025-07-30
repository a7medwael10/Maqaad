<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\HomeService;

class HomeController extends Controller
{
    protected $homeService;

    public function __construct(HomeService $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        $data = $this->homeService->getHomeData();
        return view('site.home', $data);
    }
}
