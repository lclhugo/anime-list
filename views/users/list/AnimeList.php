<!-- <main>
    <section id="anime-list">
        <h1><?$params['user']->username?>'s Anime List</h1>

        <section class="list-sections">
            <table class="list-table">
                <caption>Watching</caption>
                <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Rating</th>
                        <th>Type</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($params['animes'] as $anime) : ?>
                        <?php if ($anime->status == 'Watching') : ?>
                            <tr>
                                <td><img src="<?= $anime->cover ?>" alt="Cover"></td>
                                <td><?= $anime->title ?></td>
                                <td><?= $list->rating ?></td>
                                <td><?= $anime->type ?></td>
                                <td><button type="edit-entry">Edit</button></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </section>
</main> -->
