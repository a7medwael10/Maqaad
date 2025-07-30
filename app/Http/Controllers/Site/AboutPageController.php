<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\Models\Partener;
use App\Services\PartnerService;

class AboutPageController extends Controller
{
    protected $partnerService;

    public function __construct(PartnerService $partnerService)
    {
        $this->partnerService = $partnerService;
    }

    public function about()
    {
        $partners = $this->partnerService->getAllPartners();
        return view('site.about',compact('partners'));
    }

}
