<?php

namespace App\Services;

use App\Models\Volunteer;

class VolunteerService
{
    public function store(array $data): Volunteer
    {
        return Volunteer::create($data);
    }
}
