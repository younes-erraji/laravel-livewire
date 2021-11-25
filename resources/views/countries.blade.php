<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Countries</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
    @livewireStyles
    <style>
        #fail-add, #success-add, #success-update, #fail-update {
            display: none
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Yajra DataTables</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06"
                aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample06">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('buttons') }}">Buttons</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown06" data-toggle="dropdown"
                            aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown06">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                    <input class="form-control" type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <h2>World Countries</h2>
                @livewire('countries')
                {{-- <livewire:countries /> --}}
            </div>
        </div>
    </div>
    <footer class="page-footer font-small pt-4 bg-dark text-white">
        <div class="container text-center text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Footer Content</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nemo incidunt, sit corrupti deserunt neque in debitis impedit consectetur? Itaque, voluptates facilis.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a>Link 1</a>
                        </li>
                        <li>
                            <a>Link 2</a>
                        </li>
                        <li>
                            <a>Link 3</a>
                        </li>
                        <li>
                            <a>Link 4</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a>Link 1</a>
                        </li>
                        <li>
                            <a>Link 2</a>
                        </li>
                        <li>
                            <a>Link 3</a>
                        </li>
                        <li>
                            <a>Link 4</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="#"> Younes ERRAJI</a>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    @livewireScripts
    <script>
        window.addEventListener('add-country-modal' , function () {
            $('#add-country').find('small.text-danger').text('');
            $('#add-country').find('form')[0].reset();
            $('#add-country').modal('show');
        });

        window.addEventListener('update-country-modal' , function () {
            $('#update-country').find('small.text-danger').text('');
            $('#update-country').find('form')[0].reset();
            $('#update-country').modal('show');
        });

        window.addEventListener('insertingRecordsSuccessed', function () {
            $('#add-country').find('small.text-danger').text('');
            $('#add-country').find('form')[0].reset();
            $('#success-add').show();
            $('#fail-add').hide();
        });

        window.addEventListener('insertingRecordsFailed', function () {
            $('#add-country').find('small.text-danger').text('');
            $('#add-country').find('form')[0].reset();
            $('#success-add').hide();
            $('#fail-add').show();
        });

        window.addEventListener('updateRecordSuccessed', function () {
            $('#update-country').find('small.text-danger').text('');
            $('#update-country').find('form')[0].reset();
            $('#success-update').show();
            $('#fail-update').hide();
        });

        window.addEventListener('updateRecordFailed', function () {
            $('#update-country').find('small.text-danger').text('');
            $('#update-country').find('form')[0].reset();
            $('#success-update').hide();
            $('#fail-update').show();
        });
    </script>
</body>
</html>
