<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Pages\Actions\ButtonAction;
use App\Filament\Widgets\CustomersChart;
use App\Filament\Widgets\StatsOverviewWidget;


class SamplePage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document';

    protected static ?string $navigationGroup = 'Pages';

    protected static string $view = 'filament.pages.settings';

    protected function getActions(): array
    {
        return [
            // ButtonAction::make('settings')
            // ->color('danger')
            // ->label('Delete Account')
            // ->icon('heroicon-o-trash')
            // ->action('openSettingsModal'),
            ButtonAction::make('delete')
            ->color('primary')
            ->label('Button Action')
            ->icon('heroicon-o-plus')
            ->action(fn () => $this->notify('warning', 'Account Deleted!'))
            ->requiresConfirmation()
            ->modalHeading('Delete Account')
            ->modalSubheading('Are you sure you\'d like to delete your account? This cannot be undone.')
            ->modalButton('Yes, delete it')
        ];
    }

    public function openSettingsModal(): void
    {
        $this->notify('warning', 'Account Deleted!');
        $this->dispatchBrowserEvent('open-settings-modal');
    }

    protected function getHeaderWidgets(): array
    {
        return [
            // StatsOverviewWidget::class,
        ];
    }

    protected function getFooterWidgets(): array
    {
        return [
            // CustomersChart::class,
        ];
    }
}
