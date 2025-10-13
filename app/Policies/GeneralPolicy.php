<?php

namespace App\Policies;

use App\Models\Admin;

class GeneralPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(Admin $admin): bool
    {
        return $admin->role === 'superadmin' || $admin->role === 'admin' || $admin->role === 'editor';
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(Admin $admin,  $item): bool
    {
        return $admin->role === 'superadmin' || $admin->role === 'admin' || $admin->role === 'editor';
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(Admin $admin): bool
    {
        return $admin->role === 'superadmin' || $admin->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Admin $admin,  $item): bool
    {
        return $admin->role === 'superadmin';
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Admin $admin,  $item): bool
    {
        return $admin->role === 'superadmin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(Admin $admin,  $item): bool
    {
        return $admin->role === 'superadmin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(Admin $admin,  $item): bool
    {
        return $admin->role === 'superadmin';
    }
}
