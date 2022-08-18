<div class="record publisher-record">
    <p class="warning">Warning: Deleting any developer will result in deleting all the games related to it.</p>

    @foreach ($pubs as $pub)

        {{-- Record Item --}}
        <div class="pub-item">
            <div class="info">
                <img src="{{ $pub->publisher_logo }}" alt="">
                <div class="text">
                    <p>{{ $pub->publisher_name }}</p>
                    <a href="{{ $pub->publisher_website }}" target="_blank">Website Link</a>
                </div>
            </div>
            <div class="button-container">
                <a class="delete get-button" href="/delete/publisher={{ $pub->publisher_id }}">Delete</a>
                <a class="save get-button">Edit</a>
            </div>
        </div>
        {{--  --}}

    @endforeach
</div>
