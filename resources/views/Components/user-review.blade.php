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
            <button><i class="fas fa-thumbs-up"></i>Yes</button>
            <button><i class="fas fa-thumbs-down"></i>No</button>
            <p class="likes">{{ $likes }} people found this review helpful</p>
        </div>
    </div>

</div>
