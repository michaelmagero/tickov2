<?php

declare(strict_types=1);

namespace App\Services;


use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class HelperService
{

    public function formatPhoneNumber(string $phone_number): string
    {
        if (strncmp($phone_number, '+254254', strlen('+254254')) === 0) {
            return '0'.substr($phone_number, 7);
        }

        if (strncmp($phone_number, '+2540', strlen('+2540')) === 0 || strncmp($phone_number, '+2541', strlen('+2541')) === 0) {
            return '0'.substr($phone_number, 5);
        }

        if (strncmp($phone_number, '+254', strlen('+254')) === 0) {
            return '0'.substr($phone_number, 4);
        }

        if (strncmp($phone_number, '254', strlen('254')) === 0) {
            return '0'.substr($phone_number, 3);
        }

        return $phone_number;
    }

    public function paginatedResourceCollection(int $resultsPerPage, $paginationItems): LengthAwarePaginator
    {
        $curPage = Paginator::resolveCurrentPage();
        $total = $paginationItems->count();
        $items = $paginationItems->forPage($curPage, $resultsPerPage);
        return new LengthAwarePaginator($items, $total, $resultsPerPage, $curPage, ['path' => request()->url(), 'query' => request()->query()]);
    }
}
