<div class="account-deletion">
    <form action="/delete-profile" method="POST">
        @csrf
        <h1>Account Deletion</h1>
        <div class="user-password">
            <label for="">Enter Your Password</label>
            <input type="password" name="password">
        </div>
        <div class="button-container">
            <button type="submit" class="save">Delete</button>
        </div>
    </form>
</div>
