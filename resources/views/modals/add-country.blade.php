  <div class="modal fade" wire:ignore.self id="add-country" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add new country</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div id="success" class="alert alert-success">
                The insertion created successfully
            </div>

            <div id="fail" class="alert alert-danger">
                Something went wrong
            </div>

          <form id="add-form" wire:submit.prevent='saveNewCountry' action="">
            <div class="form-group">
                <label for="continent">Country name</label>
                <select class="form-control" wire:model="continent" id="continent">
                    <option disabled selected>choose...</option>
                    @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
                    @endforeach
                </select>
                @error('continent')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>
            <div class="form-group">
                <label for="country_name">Country name</label>
                <input type="text" class="form-control" wire:model="country_name" id="country_name" placeholder="Country name ..." />
                @error('country_name')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

              <div class="form-group">
                <label for="capital_city">Capital city</label>
                <input type="text" class="form-control" wire:model="capital_city" id="capital_city" placeholder="Capital city ..." />
                @error('capital_city')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
              </div>

          </form>
        </div>
        <div class="modal-footer">
            <div class="form-group">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button form='add-form' class="btn btn-primary">Save</button>
            </div>
        </div>
      </div>
    </div>
  </div>
