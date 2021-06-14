<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Subs
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // public function subs_only($user) {
    //     if ($user->subs == 1) {
    //         return true;
    //     }

    //     return false;
    // }
}
