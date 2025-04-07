<?php

if (!function_exists('getUserRoleName')) {
    function getUserRoleName($role)
    {
        return match ($role) {
            "1" => 'Admin',
            "2" => 'Wholesaler',
            default => 'Customer',
        };
    }
}