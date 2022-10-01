<main>
    <section class="container">
            <section id="cover-add-to-list">
                <h1><?= htmlspecialchars($params['anime']->title) ?></h1>
                <figure>
                    <img src="<?= $params['anime']->cover ?>" alt="anime cover">
                </figure>
                <div class=anime-list-add-edit>
                        <a href="/anime/<?= $params['anime']->id ?>/add" class="button">Add to list</a>

                        <?php if (isset($_SESSION['auth']) && $_SESSION['auth'] === 1): ?>
                        <a href="/admin/anime/<?= $params['anime']->id ?>/edit" class="button">Edit</a>
                        <?php endif; ?>
                </div>
            </section>

            <article id="synopsis">
                <h2>Synopsis:</h2>
                <p><?= htmlspecialchars($params['anime']->synopsis) ?></p>
            </article>

        <section id="anime-infos">
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Episodes</th>
                        <th>Year</th>
                        <th>Studio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= htmlspecialchars($params['anime']->type) ?></td>
                        <td><?= htmlspecialchars($params['anime']->episodes) ?></td>
                        <td><?= htmlspecialchars($params['anime']->year) ?></td>
                        <td><?= htmlspecialchars($params['anime']->studio) ?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </section>
</main>