<?php

namespace App\Policies;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the ad can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the ad can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Ad  $model
     * @return mixed
     */
    public function view(User $user, Ad $model)
    {
        return true;
    }

    /**
     * Determine whether the ad can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the ad can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Ad  $model
     * @return mixed
     */
    public function update(User $user, Ad $model)
    {
        return true;
    }

    /**
     * Determine whether the ad can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Ad  $model
     * @return mixed
     */
    public function delete(User $user, Ad $model)
    {
        return true;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Ad  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the ad can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Ad  $model
     * @return mixed
     */
    public function restore(User $user, Ad $model)
    {
        return false;
    }

    /**
     * Determine whether the ad can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Ad  $model
     * @return mixed
     */
    public function forceDelete(User $user, Ad $model)
    {
        return false;
    }
}
