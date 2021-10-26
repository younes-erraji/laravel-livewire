<div>
    <button class="btn btn-primary btn-sm m-2" wire:click='addCountryModal()'>Add new country</button>
    <table class="table table-hover table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Continent</th>
                <th>Countries</th>
                <th>Capital city</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($countries as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->continent_id }}</td>
                <td>{{ $country->country_name }}</td>
                <td>{{ $country->capital_city }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('modals.add-country')
</div>
