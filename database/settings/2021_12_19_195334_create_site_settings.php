<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateSiteSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('site.name', 'Filament');
        $this->migrator->add('site.slogan', 'The elegant TALLkit for Laravel artisans.');
        $this->migrator->add('site.logo', '');
        $this->migrator->add('footer.copyright', 'Copyright @ 2022');
        $this->migrator->add('footer.links', '[]');
    }
}
