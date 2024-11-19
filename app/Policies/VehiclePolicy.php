<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Vehicle;

class VehiclePolicy
{
    public function update(User $user, Vehicle $vehicle)
    {
        // Дозволяємо оновлення, якщо користувач є творцем або має роль Admin
        return $user->id === $vehicle->creator_user_id || $user->role === 'Admin';
    }

    public function delete(User $user, Vehicle $vehicle)
    {
        // Дозволяємо видалення, якщо користувач є творцем або має роль Admin
        return $user->id === $vehicle->creator_user_id || $user->role === 'Admin';
    }
}
