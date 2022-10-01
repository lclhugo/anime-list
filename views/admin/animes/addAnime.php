<main>
    <section class="container">
        <form method='POST' action='/admin/anime/add'>
            <h1>Add an anime to the database</h1>
            <input type='text' name='title' placeholder='Title'>
            <input type='text' name='cover' placeholder='Cover URL'>
            <textarea name='synopsis' placeholder='Synopsis'></textarea>
            <select name='type' placeholder='Type'>
                <option value="TV">TV</option>
                <option value="Movie">Movie</option>
                <option value="OVA">OVA</option>
                <option value="ONA">ONA</option>
                <option value="Special">Special</option>
                <option value="Music">Music</option>
            </select>
            <input type='number' name='episodes' placeholder='Episodes'>
            <input type='number' name='year' placeholder='Year'>
            <input type='text' name='studio' placeholder='Studio'>
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
            <button type='submit' class="button">Add Anime</button>
        </form>
    </section>
</main>