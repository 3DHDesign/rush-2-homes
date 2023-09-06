<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Label;
use Illuminate\Auth\Access\HandlesAuthorization;

class LabelPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the label can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the label can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Label  $model
     * @return mixed
     */
    public function view(User $user, Label $model)
    {
        if ($user->hasPermissionTo('View Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the label can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the label can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Label  $model
     * @return mixed
     */
    public function update(User $user, Label $model)
    {
        if ($user->hasPermissionTo('Edit Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the label can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Label  $model
     * @return mixed
     */
    public function delete(User $user, Label $model)
    {
        if ($user->hasPermissionTo('Delete Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Label  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        if ($user->hasPermissionTo('Delete Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the label can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Label  $model
     * @return mixed
     */
    public function restore(User $user, Label $model)
    {
        if ($user->hasPermissionTo('Edit Label')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the label can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Label  $model
     * @return mixed
     */
    public function forceDelete(User $user, Label $model)
    {
        if ($user->hasPermissionTo('Delete Label')) {
            return true;
        }
        return false;
    }
}
