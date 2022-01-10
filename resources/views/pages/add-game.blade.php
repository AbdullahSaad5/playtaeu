@extends('layouts.base')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">
@endsection


@section('content')
    <section class="section add-game">
        <div class="form-container">
            <h2>Add Game</h2>
            <form action="/add-game" method="POST">
                @csrf
                <h1>General</h1>
                <div class="game-title">
                    <label for="">Game Title</label><input type="text" name="game-title">
                </div>
                <div class="real-name">
                    <label for="">Game Description</label>
                    <div class="summary"><textarea name="game-description" id="" rows="5"
                            placeholder="Game Description Here"></textarea></div>
                </div>
                <div class="custom-url">
                    <label for="">Game Price</label><input type="text" name="game-price">
                </div>
                <div class="custom-url">
                    <label for="">Game Release Date</label><input type="date" name='game-release-date'>
                </div>
                <h1>OS Support</h1>
                <div class="os-support">
                    <div class="windows-support">
                        <label for="">Windows Support</label><input type="checkbox" checked>
                    </div>
                    <div class="mac-support">
                        <label for="">Mac Support</label><input type="checkbox">
                    </div>
                    <div class="linux-support">
                        <label for="">Linux Support</label><input type="checkbox">
                    </div>
                </div>
                <h1>Developers</h1>
                <div class="custom-url">
                    <label for="">Developer Names</label>
                    <input type="text" id="developers" list="developers-list" name="developer-name">
                    <datalist id="developers-list">

                    </datalist>
                </div>
                <h1>Publishers </h1>
                <div class="custom-url">
                    <label for="">Publisher Names</label>
                    <input type="text" id="publishers" list="publishers-list" name="publisher-name">
                    <datalist id="publishers-list"></datalist>
                </div>
                <h1>Images (URLs Only) </h1>
                <div class="custom-url">
                    <label for="">Game Thumbnail Image</label>
                    <input type="text" name="game-thumbnail-image">
                </div>
                <div class="custom-url">
                    <label for="">Game Thumbnail Video</label>
                    <input type="text" name="game-thumbnail-video">
                </div>
                <div class="custom-url">
                    <label for="">Game Cover Image</label>
                    <input type="text" name="game-cover-image">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 1</label>
                    <input type="text" name="game-detail-image1">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 2</label>
                    <input type="text" name="game-detail-image2">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 3</label>
                    <input type="text" name="game-detail-image3">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Image 4</label>
                    <input type="text" name="game-detail-image4">
                </div>
                <div class="custom-url">
                    <label for="">Game Detail Video</label>
                    <input type="text" name="game-detail-video">
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

            // Getting developers ascynchronously
            $('#developers').keyup(function() {
                if ($(this).val().length > 0) {
                    $.ajax({
                        url: '/get-developers/' + $('#developers').val(),
                        complete: function(response) {
                            response = response.responseText;
                            response = JSON.parse(response);
                            $('#developers-list').empty();
                            response.forEach(element => {
                                $('#developers-list').append('<option value="' +
                                    element.developer_name + '">');
                            });
                        },
                        error: function() {
                            $('#developers-list').empty();
                            $('#developers-list').append('<option value="' +
                                element.developer_name + '">');
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
                            response = response.responseText;
                            response = JSON.parse(response);
                            $('#publishers-list').empty();
                            response.forEach(element => {
                                $('#publishers-list').append('<option value="' +
                                    element.publisher_name + '">');
                            });
                        },
                        error: function() {
                            $('#publishers-list').empty();
                            $('#publisher-list').append('<option value="' +
                                element.publisher_name + '">');
                        }
                    });
                    return false;
                }
            });
        });
    </script>
@endsection
