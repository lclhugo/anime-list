<main>
    <section id="anime-list">
        <h1>Viewing User's list</h1>
        <section class="list-sections">
            <table class="list-table">
                <caption>Watching</caption>
                <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Type</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($animes->getAnimeList() as $anime): ?>
                    <tr>
                        <td><img src="<?= $anime->cover ?>" alt="Cover"></td>
                        <td><?= $anime->goToAnime() ?></td>
                        <td><?= $anime->year ?></td>
                        <td><?= $anime->type ?></td>
                        <td><?= $anime->rating ?></td>
                        <td>
                            <form action="/deleteAnime" method="post">
                                <input type="hidden" name="anime_id" value="<?= $anime->id ?>">
                                <input type="hidden" name="user_id" value="<?= $anime->user_id ?>">
                                <button type="submit">Remove</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
        </section>
    </section>
</main>