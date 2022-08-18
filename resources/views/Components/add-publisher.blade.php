<div class="publisher-form form">
    <h1>Publisher Info</h1>
    <form action="/add-publisher" method="POST">
        @csrf
        <div class="publisher-name">
            <label for="">Publisher Name</label>
            <input type="text" name="publisher-name">
        </div>
        <div class="publisher-website">
            <label for="">Publisher Website</label>
            <input type="text" name="publisher-website">
        </div>
        <h1>Publisher Logo</h1>
        <div class="publisher-logo">
            <label for="">Publisher Logo</label>
            <input type="text" name="publisher-logo">
        </div>
        <div class="button-container">
            <button type="reset" class="cancel">Cancel</button>
            <button type="submit" class="save">Submit</button>
        </div>
    </form>
</div>
