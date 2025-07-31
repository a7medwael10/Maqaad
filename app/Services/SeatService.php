<?php

namespace App\Services;

use App\Models\InstallSeat;
use App\Models\Seat;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeatService
{
    public function getAllSeats($limit = null)
    {
        $query = Seat::where('is_active', true)->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }


    public function getSeatInstallation($limit = null)
    {
        $query = InstallSeat::query()->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }


    public function search(Request $request)
    {
        return Seat::filter($request)->get();
    }
}
