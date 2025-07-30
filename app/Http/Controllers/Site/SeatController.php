<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Services\SeatService;
use Illuminate\Http\Request;

class SeatController extends Controller
{
    protected $seatService;

    public function __construct(SeatService $seatService)
    {
        $this->seatService = $seatService;
    }

    public function index()
    {
        $seats = $this->seatService->getAllSeats();
        $seatInstallations = $this->seatService->getSeatInstallation();

        return view('site.seats.index',compact('seats', 'seatInstallations'));
    }

    public function search(Request $request)
    {
        $seats = $this->seatService->search($request);
        $html = view('site.seats.list', compact('seats'))->render();

        return response()->json(['html' => $html]);
    }
}
