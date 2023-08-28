<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PropertyCategory;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropertyCategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the propertyCategory can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyCategory can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyCategory  $model
     * @return mixed
     */
    public function view(User $user, PropertyCategory $model)
    {
        if ($user->hasPermissionTo('View Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyCategory can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyCategory can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyCategory  $model
     * @return mixed
     */
    public function update(User $user, PropertyCategory $model)
    {
        if ($user->hasPermissionTo('Edit Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyCategory can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyCategory  $model
     * @return mixed
     */
    public function delete(User $user, PropertyCategory $model)
    {
        if ($user->hasPermissionTo('Delete Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyCategory  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        if ($user->hasPermissionTo('Delete Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyCategory can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyCategory  $model
     * @return mixed
     */
    public function restore(User $user, PropertyCategory $model)
    {
        if ($user->hasPermissionTo('Edit Property Category')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyCategory can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyCategory  $model
     * @return mixed
     */
    public function forceDelete(User $user, PropertyCategory $model)
    {
        if ($user->hasPermissionTo('Delete Property Category')) {
            return true;
        }
        return false;
    }
}
