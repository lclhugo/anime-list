<main>
    <section class="container">
        <form method='POST' action='/admin/anime/<?= $params['anime']->id ?>/edit'>
            <h1>Edit an anime</h1>
            <input type='text' name='title' placeholder='Title' value='<?= $params['anime']->title ?>'>
            <input type='text' name='cover' placeholder='Cover URL' value='<?= $params['anime']->cover ?>'>
            <textarea name='synopsis' class='synopsis' placeholder='Synopsis' maxlength='1000'><?= $params['anime']->synopsis ?></textarea>
                <span id="count">0/1000</span>
            <select name='type' placeholder='<?php echo $params['anime']->type ?>'>
                    <option value="TV">TV</option>
                    <option value="Movie">Movie</option>
                    <option value="OVA">OVA</option>
                    <option value="ONA">ONA</option>
                    <option value="Special">Special</option>
                    <option value="Music">Music</option>
            </select>
            <input type='number' name='episodes' placeholder='Episodes' value='<?= $params['anime']->episodes ?>'>
            <input type='number' name='year' placeholder='Year' value='<?= $params['anime']->year ?>'>
            <input type='text' name='studio' placeholder='Studio' value='<?= $params['anime']->studio ?>'>
    <?php if (isset($_SESSION['errors'])): ?>
                    <div class="alert-danger">
                        <ul>
                    <?php foreach($_SESSION['errors'] as $errorsArray): ?>
                        <?php foreach($errorsArray as $errors): ?>
                                <?php foreach($errors as $error): ?>
                                    <li><?= $error ?></li>
                                <?php endforeach ?>
                        <?php endforeach ?>
                    <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif ?>
            <button type='submit' class="button">Update</button>
        </form>
    </section>
</main>