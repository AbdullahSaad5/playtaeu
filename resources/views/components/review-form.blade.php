<div class="form-container review-form">
    <h1>Review</h1>
    <h2>{{ $gameTitle }}</h3>
        <form action="">
            <div class="opinion-segment">
                <p>Would you recommend this game to others players?</p>
                <div class="options">
                    <div class="option">
                        <input type="radio" name="recommend" id="yes" value="yes">
                        <label for="yes"><span class="icon"><i class="fas fa-thumbs-up"></i></span> <span
                                class="text">Yes</span></label>
                    </div>
                    <div class="option">
                        <input type="radio" name="recommend" id="no" value="no">
                        <label for="no"><span class="icon"><i class="fas fa-thumbs-down"></i></span> <span
                                class="text">No</span></label>
                    </div>
                </div>
            </div>
            <div class="review-segment">
                <p>Please describe what you liked or disliked about this product and whether you recommend it to
                    others. Please remember to be polite. A description is required to post your recommedation.</p>
                <textarea name="" id="" rows="5" class="review"></textarea>

                <div class="button-container">
                    <button type="submit" class="save">Post Review</button>
                    <button type="reset" class="cancel">Close</button>
                </div>
            </div>
        </form>
</div>
