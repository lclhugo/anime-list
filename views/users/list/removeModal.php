//remove from list modal

<?php if (isset($_SESSION['auth'])): ?>
<section class="modal hidden">
    <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Remove <?= $params['anime']->title ?> from your list?</h2>
            <button class="button">Yes</button>
            <button class="button">No</button>
    </div>
</section>
<?php endif; ?>