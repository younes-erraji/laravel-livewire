<div>
    <button class="btn btn-primary btn-sm m-2" wire:click='openAddCountryModal()'>Add new country</button>
    <table class="table table-hover table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>#</th>
                <th>Continent</th>
                <th>Countries</th>
                <th>Capital city</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($countries as $country)
            <tr>
                <td>{{ $country->id }}</td>
                <td>{{ $country->continent->continent_name }}</td>
                <td>{{ $country->country_name }}</td>
                <td>{{ $country->capital_city }}</td>
                <td>
                    <div class="btn-group">
                        <a data-id="{{ $country->id }}" class="update-button btn btn-sm btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                        <a data-id="{{ $country->id }}" class="delete-button btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            @empty
                <tr><th colspan="4"><code class="d-block text-center">No data to show</code></th></tr>
            @endforelse
        </tbody>
    </table>
    @include('modals.add-country')
</div>
