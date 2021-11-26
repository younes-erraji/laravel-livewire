@extends('layouts.master')
@section('title', 'World Countries')
@section('styles')
    <link rel="stylesheet" href="{{ asset('sweetalert2/sweetalert2.min.css') }}" />
    <style>
        #fail-add, #success-add, #success-update, #fail-update {
            display: none
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row mt-4 mb-4">
            <div class="col-md-6 offset-md-3">
                <h2>World Countries</h2>
                @livewire('countries')
                {{-- <livewire:countries /> --}}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
        <script src='{{ asset('sweetalert2/sweetalert2.min.js') }}'></script>
    <script>
        // Insert
        window.addEventListener('add-country-modal' , function () {
            $('#add-country').find('small.text-danger').text('');
            $('#add-country').find('form')[0].reset();
            $('#add-country').modal('show');
        });

        window.addEventListener('insertingRecordsSucceed', function () {
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

        // Update
        window.addEventListener('update-country-modal' , function (e) {
            $('#update-country').find('small.text-danger').text('');
            $('#update-country').modal('show');
        });

        window.addEventListener('updateRecordSucceed', function () {
            $('#update-country').find('small.text-danger').text('');
            $('#success-update').show();
            $('#fail-update').hide();
        });

        window.addEventListener('updateRecordFailed', function () {
            $('#update-country').find('small.text-danger').text('');
            $('#success-update').hide();
            $('#fail-update').show();
        });

        $(document).on('click', '.delete-button', function () {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    $('.submit-delete').click();
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            });
        });

    </script>
@endsection
