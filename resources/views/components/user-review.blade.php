<div class="user-review">
    <div class="user-segment">
        <img src="{{ $userAvatar }}" alt="" class="avatar">
        <p class="username">{{ $username }}</p>
    </div>
    <div class="review-segment">
        <div class="opinion">
            <img src="https://store.cloudflare.steamstatic.com/public/shared/images/userreviews/icon_thumbsUp_v6.png"
                alt="">

            <p>{{ $opinion }}</p>
        </div>
        <p class="date">Posted: {{ $date }}</p>
        <p class="review">{{ $message }}</p>
        <div class="reactions">
            <p>Was the review helpful?</p>
            @php
                $user = DB::select('SELECT * FROM likes WHERE review_id = ? AND username = ?', [$id, Auth::user()->username]);
            @endphp
            @if (count($user) > 0)
                @if ($user[0]->type == 'helpful')
                    <a class="reaction-button clicked" src="like-review/id={{ $id }}"><i
                            class="fas fa-thumbs-up"></i>Yes</a>
                @else
                    <a class="reaction-button" src="like-review/id={{ $id }}"><i
                            class="fas fa-thumbs-up"></i>Yes</a>
                @endif
                @if ($user[0]->type == 'unhelpful')
                    <a class="reaction-button clicked" src="dislike-review/id={{ $id }}"><i
                            class="fas fa-thumbs-down"></i>No</a>
                @else
                    <a class="reaction-button" src="dislike-review/id={{ $id }}"><i
                            class="fas fa-thumbs-down"></i>No</a>
                @endif
            @else
                <a class="reaction-button" src="like-review/id={{ $id }}"><i
                        class="fas fa-thumbs-up"></i>Yes</a>
                <a class="reaction-button" src="dislike-review/id={{ $id }}"><i
                        class="fas fa-thumbs-down"></i>No</a>
            @endif
            <p class="likes"><span class="like-count">{{ $likes }}</span> people found this review
                helpful</p>
            <p class="dislikes"><span class="dislike-count">{{ $dislikes }}</span> people found this review
                unhelpful</p>
        </div>
    </div>

</div>
