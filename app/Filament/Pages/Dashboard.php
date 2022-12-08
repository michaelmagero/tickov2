<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BasePage;

class Dashboard extends BasePage
{
    protected static function getNavigationBadgeColor(): ?string
    {
        return 'Success'; // TODO: Change the autogenerated stub
    }

    protected function getColumns(): int | array
    {
        return 4;
    }

}
