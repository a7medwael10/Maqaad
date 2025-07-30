<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $galleryService;

    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function gallery()
    {
        $galleries = $this->galleryService->getAllGalleries();
        return view('site.gallery',compact('galleries'));
    }

}
