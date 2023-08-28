<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Amenity;
use Illuminate\Auth\Access\HandlesAuthorization;

class AmenityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the amenity can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the amenity can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Amenity  $model
     * @return mixed
     */
    public function view(User $user, Amenity $model)
    {
        if ($user->hasPermissionTo('View Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the amenity can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the amenity can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Amenity  $model
     * @return mixed
     */
    public function update(User $user, Amenity $model)
    {
        if ($user->hasPermissionTo('Edit Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the amenity can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Amenity  $model
     * @return mixed
     */
    public function delete(User $user, Amenity $model)
    {
        if ($user->hasPermissionTo('Delete Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Amenity  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        if ($user->hasPermissionTo('Delete Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the amenity can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Amenity  $model
     * @return mixed
     */
    public function restore(User $user, Amenity $model)
    {
        if ($user->hasPermissionTo('Edit Amenities')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the amenity can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\Amenity  $model
     * @return mixed
     */
    public function forceDelete(User $user, Amenity $model)
    {
        if ($user->hasPermissionTo('Delete Amenities')) {
            return true;
        }
        return false;
    }
}
