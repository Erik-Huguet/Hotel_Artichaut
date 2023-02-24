<?php

namespace App\Policies;

use App\Models\Advantage;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdvantagePolicy
{
    use HandlesAuthorization;
    public function before(User $user, $ability)
    {
        if($user->me($user,$ability)){
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Advantage $advantage)
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Advantage $advantage)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Advantage $advantage)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Advantage $advantage)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Advantage  $advantage
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Advantage $advantage)
    {
        //
    }
}
