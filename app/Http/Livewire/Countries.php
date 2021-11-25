<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Countries extends Component
{
    public $continent, $country_name, $capital_city;
    public function render() {
        $continents = Continent::orderBy('continent_name', 'asc')->get();
        $countries = Country::orderBy('country_name', 'asc')->get();
        return view('livewire.countries', [
            'continents' => $continents,
            'countries' => $countries,
        ]);
    }

    public function openAddCountryModal() {
        $this->continent = '';
        $this->country_name = '';
        $this->capital_city = '';
        $this->dispatchBrowserEvent('add-country-modal');
    }

    public function openUpdateCountryModal() {
        $this->continent = '';
        $this->country_name = '';
        $this->capital_city = '';
        $this->dispatchBrowserEvent('update-country-modal');
    }

    public function saveNewCountry() {
        $this->validate([
            'continent' => 'required',
            'country_name' => 'required|unique:countries,country_name',
            'capital_city' => 'required',
        ]);

        $save = Country::create([
            'continent_id' => $this->continent,
            'country_name' => $this->country_name,
            'capital_city' => $this->capital_city,
        ]);

        if ($save) {
            $this->dispatchBrowserEvent('insertingRecordsSuccessed');
        } else {
            $this->dispatchBrowserEvent('insertingRecordsFailed');
        }
    }

    public function updateCountry() {
        $this->validate([
            'continent' => 'required',
            'country_name' => 'required',
            'capital_city' => 'required',
        ]);

        $save = Country::update([
            'continent_id' => $this->continent,
            'country_name' => $this->country_name,
            'capital_city' => $this->capital_city,
        ]);

        if ($save) {
            $this->dispatchBrowserEvent('updateRecordSuccessed');
        } else {
            $this->dispatchBrowserEvent('updateRecordFailed');
        }
    }
}
