<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class FooterSettings extends Settings
{
    public string $copyright;

    public array $links;

    // public function __construct()
    // {
    //     $this->copyright = $this->get('copyright', 'Copyright © 2020');
    //     $this->links = $this->get('links', []);
    // }

    public static function group(): string
    {
        return 'footer';
    }

}
