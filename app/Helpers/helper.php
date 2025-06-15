<?php

use Illuminate\Support\Carbon;

if (!function_exists('formattedDate')) {
    function formattedDate(string $date): string
    {
        return Carbon::parse($date)->toIso8601ZuluString();
    }
}
