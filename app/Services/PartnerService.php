<?php

namespace App\Services;

use App\Models\Partener;

class PartnerService
{
    public function getAllPartners($limit = null)
    {
        $query = Partener::query()->orderBy('created_at', 'desc');

        if ($limit) {
            $query->take($limit);
        }

        return $query->get();
    }

}
