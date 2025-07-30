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
        $query = Seat::query();

        if ($request->filled('name')) {
            $query->where(function($q) use ($request) {
                $q->where('name_ar', 'like', '%' . $request->name . '%')
                    ->orWhere('name_en', 'like', '%' . $request->name . '%');
            });
        }

        if ($request->filled('seat_name')) {
            $query->where(function($q) use ($request) {
                $q->where('name_ar', 'like', '%' . $request->seat_name . '%')
                    ->orWhere('name_en', 'like', '%' . $request->seat_name . '%');
            });
        }

        if ($request->filled('height')) {
            $query->where('height', '=', $request->height);
        }

        if ($request->filled('weight')) {
            $query->where('weight', '=', $request->weight);
        }

        if ($request->filled('birth_date')) {
            $age = Carbon::parse($request->birth_date)->age;
            $query->where('age_from', '<=', $age)
                ->where(function ($q) use ($age) {
                    $q->whereNull('age_to')->orWhere('age_to', '>=', $age);
                });
        }

        return $query->get();
    }
}
