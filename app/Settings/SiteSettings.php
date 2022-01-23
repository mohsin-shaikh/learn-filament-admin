<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    public string $name;
    public string $slogan;
    public string $logo;

    public static function group(): string
    {
        return 'site';
    }
}
