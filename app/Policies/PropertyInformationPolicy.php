<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PropertyInformation;
use Illuminate\Auth\Access\HandlesAuthorization;

class PropertyInformationPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the propertyInformation can view any models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        if ($user->hasPermissionTo('View Property')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyInformation can view the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyInformation  $model
     * @return mixed
     */
    public function view(User $user, PropertyInformation $model)
    {
        if ($user->hasPermissionTo('View Property')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyInformation can create models.
     *
     * @param  App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        if ($user->hasPermissionTo('Create Property')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyInformation can update the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyInformation  $model
     * @return mixed
     */
    public function update(User $user, PropertyInformation $model)
    {
        if ($user->hasPermissionTo('Edit Property') && ($model->status == 'Reviewing') || ($model->status == 'Draft')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyInformation can delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyInformation  $model
     * @return mixed
     */
    public function delete(User $user, PropertyInformation $model)
    {
        if ($user->hasPermissionTo('Delete Property')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete multiple instances of the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyInformation  $model
     * @return mixed
     */
    public function deleteAny(User $user)
    {
        if ($user->hasPermissionTo('Delete Property') || $user->hasPermissionTo('Trusted Agent')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyInformation can restore the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyInformation  $model
     * @return mixed
     */
    public function restore(User $user, PropertyInformation $model)
    {
        if ($user->hasPermissionTo('Edit Property') && ($model->status == 'Reviewing') || ($model->status == 'Draft')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the propertyInformation can permanently delete the model.
     *
     * @param  App\Models\User  $user
     * @param  App\Models\PropertyInformation  $model
     * @return mixed
     */
    public function forceDelete(User $user, PropertyInformation $model)
    {
        if ($user->hasPermissionTo('Delete Property') || $user->hasPermissionTo('Trusted Agent')) {
            return true;
        }
        return false;
    }
}
