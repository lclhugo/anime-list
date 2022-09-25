<main id="anime-page-main">
        <section id="anime-page-main-infos">
            <section id="cover-add-to-list">
                <h1><?= $params['anime']->title ?></h1>
                <figure>
                    <img src="<?= $params['anime']->cover ?>" alt="anime cover">
                </figure>
                <div class=anime-list-add-edit>
                    <button class="button">Add to my list</button>
                    <a href="/admin/anime/<?= $params['anime']->id ?>/edit">Edit</a>
                </div>
            </section>

            <article id="synopsis">
                <h2>Synopsis:</h2>
                <p><?= $params['anime']->synopsis ?></p>
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
                        <td><?= $params['anime']->ep_count ?></td>
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