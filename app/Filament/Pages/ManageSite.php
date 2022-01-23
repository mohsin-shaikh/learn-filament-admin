<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;
use Filament\Pages\SettingsPage;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class ManageSite extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationGroup = 'Settings';

    protected static string $settings = SiteSettings::class;

    protected function getFormSchema(): array
    {

        return [
            Tabs::make('Heading')->tabs([
                Tabs\Tab::make('General')->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('slogan'),
                    FileUpload::make('logo')->avatar()
                ]),
                Tabs\Tab::make('Footer Links')->schema([
                    // ...
                ]),
                Tabs\Tab::make('Google Analytics')->schema([
                    // ...
                ]),
            ]),
        ];
    }
}
