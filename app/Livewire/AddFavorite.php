<?php

namespace App\Livewire;

use App\Models\Client;
use Livewire\Component;

class AddFavorite extends Component
{
    public $property;
    public $status = '';

    public $favoriteArray = [];


    public function mount()
    {
        if (auth()->guard('client')->user()) {
            $user = auth()->guard('client')->user();
            $userModel = Client::findOrFail($user->id);

            if ($userModel->favorite) {
                if (in_array($this->property, json_decode($userModel->favorite, true))) {
                    $this->status = 'selected';
                }
            }
        }
    }

    public function addFavorite()
    {
        if (auth()->guard('client')->user()) {
            try {
                $user = auth()->guard('client')->user();
                $userModel = Client::findOrFail($user->id);

                if ($userModel->favorite) {
                    $existingFavorites = json_decode($userModel->favorite, true);

                    $existingFavorites = is_array($existingFavorites) ? $existingFavorites : [];

                    if (in_array($this->property, $existingFavorites)) {
                        // Remove the value from the array
                        $existingFavorites = array_filter($existingFavorites, function ($item) {
                            return $item !== $this->property;
                        });

                        $userModel->update([
                            'favorite' => json_encode($existingFavorites),
                        ]);
                        $this->status = '';
                    } else {
                        $existingFavorites[] = $this->property;
                        $userModel->update([
                            'favorite' => json_encode($existingFavorites),
                        ]);
                        $this->status = 'selected';
                    }
                } else {
                    $this->favoriteArray[] = $this->property;

                    $userModel->update([
                        'favorite' => json_encode($this->favoriteArray),
                    ]);
                    $this->status = 'selected';
                }
            } catch (\Exception $e) {
                $this->dispatch(
                    'Swal:modal',
                    icon: 'error',
                    title: 'Error! try again',
                    text: 'Please check your connection and try again!'
                );
            }
        } else {
            return redirect()->route('user.account.login');
        }
    }

    public function render()
    {
        return view('livewire.add-favorite');
    }
}
