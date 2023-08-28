<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PropertyType;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropertyTypePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the propertyType can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyType can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyType  $model
     * @return mixed
     */
    public function view(User $user, PropertyType $model)
    {
        if ($user->hasPermissionTo('View Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyType can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyType can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyType  $model
     * @return mixed
     */
    public function update(User $user, PropertyType $model)
    {
        if ($user->hasPermissionTo('Edit Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyType can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyType  $model
     * @return mixed
     */
    public function delete(User $user, PropertyType $model)
    {
        if ($user->hasPermissionTo('Delete Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyType  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        if ($user->hasPermissionTo('Delete Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyType can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyType  $model
     * @return mixed
     */
    public function restore(User $user, PropertyType $model)
    {
        if ($user->hasPermissionTo('Edit Property Type')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyType can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyType  $model
     * @return mixed
     */
    public function forceDelete(User $user, PropertyType $model)
    {
        if ($user->hasPermissionTo('Delete Property Type')) {
            return true;
        }
        return false;
    }
}
