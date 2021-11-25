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
        #fail, #success {
            display: none
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <h2>World Countries</h2>
                @livewire('countries')
                {{-- <livewire:countries /> --}}
            </div>
        </div>
    </div>
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

        window.addEventListener('insertingRecordsSuccessed', function () {
            $('#add-country').find('small.text-danger').text('');
            $('#add-country').find('form')[0].reset();
            $('#success').show();
            $('#fail').hide();
        });

        window.addEventListener('insertingRecordsFailed', function () {
            $('#add-country').find('small.text-danger').text('');
            $('#add-country').find('form')[0].reset();
            $('#success').hide();
            $('#fail').show();
        });
    </script>
</body>
</html>
