<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Services\ContactService;


class ContactUsController extends Controller
{
    public function index()
    {
        return view('site.contact');
    }

    public function store(ContactRequest $request, ContactService $contactService)
    {
         $request->validated();
        $contactService->store($request->only('name', 'email', 'message'));
        return response()->json(['message' => 'تم الإرسال بنجاح']);

    }

}
