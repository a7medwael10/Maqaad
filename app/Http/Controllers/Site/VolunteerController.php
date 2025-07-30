<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\VolunteerRequest;
use App\Services\VolunteerService;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{

    protected $volunteerService;
    public function __construct(VolunteerService $volunteerService)
    {
        $this->volunteerService = $volunteerService;
    }

    public function create()
    {
        return view('site.volunteer');
    }

    public function store(VolunteerRequest $request)
    {
        $validated = $request->validated();

        $this->volunteerService->store($validated);

        return response()->json(['message' => 'تم إرسال الطلب بنجاح']);
    }
}
