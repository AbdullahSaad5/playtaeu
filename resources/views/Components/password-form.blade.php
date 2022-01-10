<div class="password-form form">

    <h1>Security</h1>
    <form action="/update-password" method="POST">
        @csrf
        <div class="user-current-password">
            <label for="">Enter Current Password</label>
            <input type="password" name="current-password">
        </div>
        <div class="user-updated-password">
            <label for="">Enter New Password</label>
            <input type="password" name="updated-password">
        </div>
        <div class="user-confirm-passoword">
            <label for="">Confirm New Password</label>
            <input type="password" name="confirm-password">
        </div>
        <div class="button-container">
            <button type="reset" class="cancel">Cancel</button>
            <button type="submit" class="save">Submit</button>
        </div>
    </form>
</div>
