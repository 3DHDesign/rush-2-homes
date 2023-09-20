<?php

namespace App\Livewire\Dashboard;

use App\Models\Client;
use App\Models\PropertyInformation;
use Livewire\Component;

class Favorites extends Component
{
    public $current_locale;

    public $fav;
    public $user;
    public $property_id;
    public $fav_properties = [];

    public function __construct()
    {
        $this->user = auth()->guard('client')->user();
        $this->current_locale = app()->getLocale();
    }

    public function mount()
    {
        $this->fav_properties = PropertyInformation::whereIn('id', json_decode($this->user->favorite, true))
            ->select([
                'id',
                $this->current_locale . '_title as title',
                $this->current_locale . '_address as address',
                'slug',
                'gallery'
            ])
            ->get();
    }

    public function removeFav($id)
    {
        $this->property_id = $id;
        $userModel = Client::findOrFail($this->user->id);

        if (in_array($this->property_id, json_decode($this->user->favorite, true))) {
            // Remove the value from the array
            $existingFavorites = array_filter(json_decode($this->user->favorite, true), function ($item) {
                return $item !== $this->property_id;
            });

            $userModel->update([
                'favorite' => json_encode($existingFavorites),
            ]);

            return redirect()->route('user.dashboard.favorites');
        }
    }

    public function render()
    {
        return view('livewire.dashboard.favorites', [
            'fav_properties' => $this->fav_properties,
        ]);
    }
}
