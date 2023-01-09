<div class="developer-form form">
    <h1>Developer Info</h1>
    <form action="/add-developer" method="POST">
        @csrf
        <div class="developer-name">
            <label for="">Developer Name</label>
            <input type="text" name="developer-name">
        </div>
        <div class="developer-website">
            <label for="">Developer Website</label>
            <input type="text" name="developer-website">
        </div>
        <h1>Developer Logo</h1>
        <div class="developer-logo">
            <label for="">Developer Logo</label>
            <input type="text" name="developer-logo">
        </div>
        <div class="button-container">
            <button type="reset" class="cancel">Cancel</button>
            <button type="submit" class="save">Submit</button>
        </div>
    </form>
</div>
