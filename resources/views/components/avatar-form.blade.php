<div class="avatar-form form">

    <h1>Avatar</h1>
    <p>Note: Image should be square, at least 184px x 184px for best results.</p>
    <div class="avatars">
        <div class="avatar">
            <img src="{{ Auth()->user()->user_avatar }}" alt="">
            <p>184x184</p>
        </div>
        <div class="avatar">
            <img src="{{ Auth()->user()->user_avatar }}" alt="">
            <p>64x64</p>
        </div>
        <div class="avatar">
            <img src="{{ Auth()->user()->user_avatar }}" alt="">
            <p>32x32</p>
        </div>
    </div>
    <form action="/update-avatar" method="POST">
        @csrf
        <div class="user-avatar">
            <label for="">New Avatar</label>
            <input type="text" name="avatar" value="">
        </div>
        <div class="button-container">
            <button type="reset" class="cancel">Cancel</button>
            <button type="submit" class="save">Submit</button>
        </div>
    </form>
</div>
