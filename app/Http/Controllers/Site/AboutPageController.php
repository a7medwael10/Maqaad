<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;

class AboutPageController extends Controller
{
    public function about()
    {
        return view('site.about');
    }

}
