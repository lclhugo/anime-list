<!-- add to list & edit modal -->

<?php if (isset($_SESSION['auth'])): ?>
<section class="modal hidden">
    <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Add to my list</h2>
            <form action="/list/<?= $_SESSION['user_id'] ?>/add" method="post">
                <input type="hidden" name="anime_id" value="<?= $params['anime']->id ?>">
                <label for="episodes">Episodes watched:</label>
                <input type="number" name="episodes" id="episodes" min="0" max="<?= $params['anime']->ep_count ?>" value="0">
                <label for="rating">Rating:</label>
                <input type="number" name="rating" id="rating" min="0" max="10" value="0">
                <input type="submit" value="Add">
            </form>
    </div>
</section>
<?php endif; ?>

