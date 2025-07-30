<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\BlogService;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index()
    {
        $blogs = $this->blogService->getAllBlogs();
        return view('site.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = $this->blogService->getBlogBySlug($slug);
        $latestBlogs = $this->blogService->getLatestBlogs(5);
        return view('site.blogs.show', compact('blog', 'latestBlogs'));
    }

}
