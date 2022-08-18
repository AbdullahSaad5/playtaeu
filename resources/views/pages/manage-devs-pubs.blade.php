@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/manage-devs-pubs.css') }}">
@endsection


@section('content')
    <section class="section manage-section">
        <div class="container">
            <div class="settings-container">
                <div class="navigation">
                    <ul>
                        <li class="active">
                            View Publishers
                        </li>
                        <li>
                            View Developers
                        </li>
                        <li>
                            Add Publishers
                        </li>
                        <li>
                            Add Developers
                        </li>
                    </ul>
                </div>

                <div class="form-container">
                    @if (session('error'))
                        <p class="error">
                            {{ session()->get('error') }}
                        </p>
                    @endif

                    @if (session('success'))
                        <p class="success">
                            {{ session()->get('success') }}
                        </p>
                    @endif
                    <x-publisher-record />
                </div>
            </div>
        </div>
    </section>
@endsection




@section('scripts')
    <script>
        $(document).ready(function() {
            $('.navigation ul li').click(function() {
                $('.navigation ul li').removeClass('active');
                $(this).addClass('active');
                let index = $(this).index();
                $('.form-container').empty();
                if (index == 0) {
                    $('.form-container').append(`
                    <x-publisher-record />
                `);
                } else if (index == 1) {
                    $('.form-container').append(`
                    <x-developer-record />
                `);
                } else if (index == 2) {
                    $('.form-container').append(`
                    <x-add-publisher />
                `);
                } else if (index == 3) {
                    $('.form-container').append(`
                    <x-add-developer />
                `);
                }
            });

        });
    </script>
@endsection
