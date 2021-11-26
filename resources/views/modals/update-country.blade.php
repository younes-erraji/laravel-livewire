<div class="modal fade" wire:ignore.self id="update-country" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Update country</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div id="success-update" class="alert alert-success">
                The update operation completed successfully
            </div>
            <div id="fail-update" class="alert alert-danger">
                Something went wrong
            </div>
          <form id="update-form" wire:submit.prevent='updateCountry'>
            <input type="hidden" wire:model="up_country_id" />
            <div class="form-group">
                <label for="up_continent">Continent</label>
                <select class="form-control" wire:model="up_continent" id="up_continent">
                    <option disabled selected>choose...</option>
                    @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
                    @endforeach
                </select>
                @error('up_continent')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="up_country_name">Country name</label>
                <input type="text" class="form-control" wire:model="up_country_name" id="up_country_name" />
                @error('up_country_name')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="up_capital_city">Capital city</label>
                <input type="text" class="form-control" wire:model="up_capital_city" id="up_capital_city" />
                @error('up_capital_city')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button form='update-form' class="btn btn-primary">Update</button>
            </div>
        </div>
      </div>
    </div>
  </div>
