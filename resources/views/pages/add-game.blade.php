@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">
@endsection


@section('content')
    <section class="section add-game">
        <div class="form-container">
            <h2>{{ $mode == 'add' ? 'Add' : 'Edit' }} Game</h2>
            @php
                if ($mode = 'add') {
                    $route = '/add-game';
                } else {
                    $route = '/update-game/id=' . $data->game_id;
                }
            @endphp

            <form action="{{ $route }}" method="POST">
                @csrf
                <h1>General</h1>
                <div class="game-title">
                    <label for="">Game Title</label>
                    <input type="text" name="game-title" value="{{ $data ? $data->game_title : '' }}">
                </div>
                <div class="real-name">
                    <label for="">Game Description</label>
                    <div class="summary">
                        <textarea name="game-description" id="" rows="5" placeholder="Game Description Here"
                            value="{{ $data ? $data->game_description : '' }}"></textarea>
                    </div>
                </div>
                <div class="custom-url">
                    <label for="">Game Price</label>
                    <input type="text" name="game-price" value="{{ $data ? $data->game_price : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Release Date</label><input type="date" name='game-release-date'
                        value="{{ $data ? $data->game_release_date : '' }}">
                </div>
                <h1>OS Support</h1>
                <div class="os-support">
                    <div class="windows-support">
                        <label for="">Windows Support</label>
                        @if ($data)
                            @if ($data->game_windows_support == 1)
                                <input type="checkbox" name="game-windows-support" checked>
                            @else
                                <input type="checkbox" name="game-windows-support">
                            @endif
                        @else
                            <input type="checkbox" name="game-windows-support" checked>

                        @endif
                    </div>
                    <div class="mac-support">
                        <label for="">Mac Support</label>
                        @if ($data)
                            @if ($data->game_mac_support == 1)
                                <input type="checkbox" name="game-mac-support" checked>
                            @else
                                <input type="checkbox" name="game-mac-support">
                            @endif
                        @else
                            <input type="checkbox" name="game-mac-support">
                        @endif
                    </div>
                    <div class="linux-support">
                        <label for="">Linux Support</label>
                        @if ($data)
                            @if ($data->game_linux_support == 1)
                                <input type="checkbox" name="game-linux-support" checked>
                            @else
                                <input type="checkbox" name="game-linux-support">
                            @endif
                        @else
                            <input type="checkbox" name="game-mac-support">
                        @endif
                    </div>
                </div>
                <h1>Developers</h1>
                <div class="custom-url">
                    <label for="">Developer Names</label>
                    <div class="developer-input-container">
                        <input type="text" id="developers" list="developers-list" name="developer-name"
                            value="{{ $data ? $data->developer_name : '' }}">
                    </div>
                    <datalist id="developers-list">
                    </datalist>
                </div>
                <h1>Publishers </h1>
                <div class="custom-url">
                    <label for="">Publisher Names</label>
                    <div class="publisher-input-container">
                        <input type="text" id="publishers" list="publishers-list" name="publisher-name"
                            value="{{ $data ? $data->publisher_name : '' }}">
                    </div>
                    <datalist id="publishers-list"></datalist>
                </div>
                <h1>Images (URLs Only) </h1>
                <div class="custom-url">
                    <label for="">Game Thumbnail Image</label>
                    <input type="text" name="game-thumbnail-image" value="{{ $data ? $data->game_thumbnail_image : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Thumbnail Video</label>
                    <input type="text" name="game-thumbnail-video"
                        value="{{ $data ? $data->game_thumbnail_video : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Cover Image</label>
                    <input type="text" name="game-cover-image" value="{{ $data ? $data->game_cover_image : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 1</label>
                    <input type="text" name="game-detail-image1" value="{{ $data ? $data->game_detail_image1 : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 2</label>
                    <input type="text" name="game-detail-image2" value="{{ $data ? $data->game_detail_image2 : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 3</label>
                    <input type="text" name="game-detail-image3" value="{{ $data ? $data->game_detail_image3 : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 4</label>
                    <input type="text" name="game-detail-image4" value="{{ $data ? $data->game_detail_image4 : '' }}">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Video</label>
                    <input type="text" name="game-detail-video" value="{{ $data ? $data->game_detail_video : '' }}">
                </div>


                <div class="button-container">
                    <button type="reset" class="cancel">Cancel</button>
                    <button type="submit" class="save">Submit</button>
                </div>
            </form>
            </p>
        </div>
    </section>
@endsection




@section('scripts')

    <script>
        $(document).ready(function() {
            $('.submit').click(function(e) {
                e.preventDefault();
                // $('form').submit();
                console.log('clicked');
            });

            // Getting developers ascynchronously
            $('#developers').keyup(function() {
                if ($(this).val().length > 0) {
                    $.ajax({
                        url: '/get-developers/' + $('#developers').val(),
                        complete: function(response) {
                            $('#developers-list').empty();
                            response = response.responseText;
                            response = JSON.parse(response);
                            let texts = $('.developer-input-container .tag p.text');
                            response.map((element, index) => {
                                // Check if the developer is in texts
                                let isIn = false;
                                texts.each(function() {
                                    if ($(this).text().toUpperCase() == element
                                        .developer_name.toUpperCase()) {
                                        isIn = true;
                                    }
                                });
                                if (!isIn) {
                                    $('#developers-list').append('<option value="' +
                                        element.developer_name + '">');
                                }
                            });

                        },
                        error: function() {
                            $('#developers-list').empty();
                            $('#developers-list').append('<option value="Error!">');
                        }
                    });
                    return false;
                }
            });
            // Getting publishers ascynchronously
            $('#publishers').keyup(function() {
                if ($(this).val().length > 0) {
                    $.ajax({
                        url: '/get-publishers/' + $('#publishers').val(),
                        complete: function(response) {
                            $('#publishers-list').empty();
                            response = response.responseText;
                            response = JSON.parse(response);
                            let texts = $('.publisher-input-container .tag p.text');
                            response.map((element, index) => {
                                // Check if the publisher is in texts
                                let isIn = false;
                                texts.each(function() {
                                    if ($(this).text().toUpperCase() == element
                                        .publisher_name.toUpperCase()) {
                                        isIn = true;
                                    }
                                });
                                if (!isIn) {
                                    $('#publishers-list').append('<option value="' +
                                        element.publisher_name + '">');
                                }
                            });
                        },
                        error: function() {
                            $('#publishers-list').empty();
                            $('#publishers-list').append('<option value="Error!">');

                        }
                    });
                    return false;
                }
            });

            // $("#developers").on('input', function() {
            //     let val = this.value;
            //     if ($('#developers-list option').filter(function() {
            //             return this.value.toUpperCase() === val.toUpperCase();
            //         }).length) {
            //         //send ajax request
            //         let tag = '<div class="tag"><p class="text">' + val +
            //             '</p><p class="cross"><i class="fas fa-times-circle"></i></p></div>';
            //         $('.developer-input-container input').before(tag);
            //         $(this).val('');
            //         $('developers-list').empty();

            //         // If more than 3 tags, disable the input
            //         if ($('.developer-input-container .tag').length == 3) {
            //             $('.developer-input-container input').attr('disabled', true);
            //         }
            //         // Remove tag
            //         $('.cross').bind('click', function() {
            //             $(this).parent().remove();
            //             // If less than 3 tags, enable the input
            //             if ($('.developer-input-container .tag').length < 3) {
            //                 $('.developer-input-container input').attr('disabled', false);
            //             }
            //         });
            //     }
            // });
            $("#publishers").on('input', function() {
                let val = this.value;
                if ($('#publishers-list option').filter(function() {
                        return this.value.toUpperCase() === val.toUpperCase();
                    }).length) {
                    //send ajax request
                    let tag = '<div class="tag"><p class="text">' + val +
                        '</p><p class="cross"><i class="fas fa-times-circle"></i></p></div>';
                    $('.publisher-input-container input').before(tag);
                    $(this).val('');
                    $('#publishers-list').empty();

                    // If more than 3 tags, disable the input
                    if ($('.publisher-input-container .tag').length == 3) {
                        $('.publisher-input-container input').attr('disabled', true);
                    }
                    // Remove tag
                    $('.cross').bind('click', function() {
                        $(this).parent().remove();
                        // If less than 3 tags, enable the input
                        if ($('.publisher-input-container .tag').length < 3) {
                            $('.publisher-input-container input').attr('disabled', false);
                        }
                    });
                }
            });
        });
    </script>
@endsection
