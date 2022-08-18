<div class="record developer-record">

    <p class="warning">Warning: Deleting any developer will result in deleting all the games related to it.</p>
    @foreach ($devs as $dev)

        {{-- Record Item --}}
        <div class="dev-item">
            <div class="info">
                <img src="{{ $dev->developer_logo }}" alt="">
                <div class="text">
                    <p>{{ $dev->developer_name }}</p>
                    <a href="{{ $dev->developer_website }}" target="_blank">Website Link</a>
                </div>
            </div>
            <div class="button-container">
                <a class="delete get-button" href="/delete/developer={{ $dev->developer_id }}">Delete</a>
                <a class="save get-button">Edit</a>
            </div>
        </div>
        {{--  --}}

    @endforeach
</div>
