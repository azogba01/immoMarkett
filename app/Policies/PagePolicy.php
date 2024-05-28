<?php

namespace App\Policies;

use App\Models\User;

class PagePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAdminPage(User $user)
    {
        return $user->role === 'admin';
    }

    public function viewUserPage(User $user)
    {
        return $user->role === 'user';
    }
    
    public function viewBailleurPage(User $user)
    {
        return $user->role === 'bailleur';
    }

}
