<main class="container">
        <section id="anime-page-main-infos">
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
        </section>

        <section id="anime-infos">
            <table>
                <tbody>
                    <tr>
                        <td>Type</td>
                        <td><?= $params['anime']->type ?></td>
                    </tr>
                    <tr>
                        <td>Number of episodes</td>
                        <td><?= $params['anime']->episodes ?></td>
                    </tr>
                    <tr>
                        <td>Year</td>
                        <td><?= $params['anime']->year ?></td>
                    </tr>
                    <tr>
                        <td>Studio</td>
                        <td><?= $params['anime']->studio ?></td>
                    </tr>

                    </tbody>
            </table>
        </section>
</main>