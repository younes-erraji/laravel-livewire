<?php

namespace App\Http\Livewire;

use App\Models\Continent;
use App\Models\Country;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;

class Countries extends Component
{
    public $continent, $country_name, $capital_city;
    public $up_country_id, $up_continent, $up_country_name, $up_capital_city;
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

    public function openUpdateCountryModal($id) {
        $country = Country::find($id);
        $this->up_country_id = $country->id;
        $this->up_continent = $country->continent_id;
        $this->up_country_name = $country->country_name;
        $this->up_capital_city = $country->capital_city;
        $this->dispatchBrowserEvent('update-country-modal');
        // $this->dispatchBrowserEvent('update-country-modal', [
            // 'country_id' => $id,
            // 'continent' => $country->continent_id,
            // 'country_name' => $country->country_name,
            // 'capital_city' => $country->capital_city,
        // ]);
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
            $this->dispatchBrowserEvent('insertingRecordsSucceed');
        } else {
            $this->dispatchBrowserEvent('insertingRecordsFailed');
        }
    }

    public function updateCountry() {
        $this->validate([
            'up_country_id' => 'required',
            'up_continent' => 'required',
            'up_country_name' => 'required|unique:countries,country_name,' . $this->up_country_id,
            'up_capital_city' => 'required',
        ]);

        $country = Country::find($this->up_country_id);

        $updated = $country->update([
            'continent_id' => $this->up_continent,
            'country_name' => $this->up_country_name,
            'capital_city' => $this->up_capital_city,
        ]);

        if ($updated) {
            $this->dispatchBrowserEvent('updateRecordSucceed');
        } else {
            $this->dispatchBrowserEvent('updateRecordFailed');
        }
    }

    function deleteCountry($id) {
        $country = Country::find($id)->delete();
    }
}
