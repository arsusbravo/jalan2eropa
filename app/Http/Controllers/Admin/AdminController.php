<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Support\PlannerData;
use Inertia\Inertia;

abstract class AdminController extends Controller
{
    /**
     * Replace nulls (empty form inputs) with empty strings for legacy NOT NULL text columns.
     *
     * @param  array<string, mixed>  $data
     * @param  list<string>  $keys
     * @return array<string, mixed>
     */
    protected function blankToEmpty(array $data, array $keys): array
    {
        foreach ($keys as $key) {
            $data[$key] = (string) ($data[$key] ?? '');
        }

        return $data;
    }

    /**
     * Flash a toast message and drop cached public data that depends on admin content.
     */
    protected function done(string $message, string $type = 'success'): void
    {
        PlannerData::flush();

        Inertia::flash('toast', ['type' => $type, 'message' => $message]);
    }
}
