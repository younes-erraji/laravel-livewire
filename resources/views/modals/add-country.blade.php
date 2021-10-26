  <div class="modal fade" wire:ignore.self id="addCountry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add new country</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group">
                <label for="continent">Country name</label>
                <select type="email" class="form-control" name="continent" id="continent">
                    <option disabled selected>choose...</option>
                    @foreach ($continents as $continent)
                    <option value="{{ $continent->id }}">{{ $continent->continent_name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-danger">We'll never share your email with anyone else.</small>
              </div>
            <div class="form-group">
                <label for="country-name">Country name</label>
                <input type="email" class="form-control" name="country-name" id="country-name" placeholder="Country name" />
                <small class="form-text text-danger">We'll never share your email with anyone else.</small>
              </div>

              <div class="form-group">
                <label for="country-name">Capital city</label>
                <input type="email" class="form-control" name="capital-city" id="capital-name" placeholder="capital name" />
                <small class="form-text text-danger">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                  <button class="btn btn-primary btn-sm">Save</button>
              </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
