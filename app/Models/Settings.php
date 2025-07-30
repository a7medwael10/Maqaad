<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected $fillable = ['group', 'key', 'value'];

    public static function get($group, $key, $default = null)
    {
        $setting = static::where('group', $group)->where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }

    public static function set($group, $key, $value)
    {
        return static::updateOrCreate(
            ['group' => $group, 'key' => $key],
            ['value' => $value]
        );
    }
}
