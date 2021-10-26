<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use Livewire\Component;

class Countries extends Component
{
    public function render()
    {
        return view('livewire.countries', [
            'countries' => Country::orderBy('country_name', 'asc')->get(),
            'continents' => Continent::orderBy('continent_name', 'asc')->get(),
        ]);
    }

    public function addCountryModal() {
        $this->dispatchBrowserEvent('addCountryModal');
    }
}
