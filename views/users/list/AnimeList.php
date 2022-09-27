<main>
    <section id="anime-list-page">
        <h1>Viewing <a href="/list/<?= $params['user']->id ?>"><?= $params['user']->username ?></a>'s list</h1>
        <img src="<?= $params['user']->avatar ?>" alt="avatar" class="avatar">
        
    
        <section  id="anime-list">
            <table class>
                <?php if ($params['userlist'] == null): ?>
                    <p>This user has no anime in their list.</p>
                <?php else: ?>
                <caption>Watchlist</caption>
                <thead>
                    <tr>
                        <th>Cover</th>
                        <th>Title</th>
                        <th>Episodes</th>
                        <th>Year</th>
                        <th>Type</th>
                        <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === $params['user']->id): ?>
                        <th>Actions</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($params['userlist'] as $list): ?>
                    <?php foreach ($params['anime'] as $anime): ?>
                    <?php if ($anime->id === $list->anime_id): ?>
                    <tr>
                        <td><img class="list-cover" src="<?= $anime->cover ?>" alt="<?= $anime->title ?>"></td>
                        <td><a href="/anime/<?= $anime->id ?>"><?= $anime->title ?></a></td>
                        <td><?= $anime->ep_count ?></td>
                        <td><?= $anime->year ?></td>
                        <td><?= $anime->type ?></td>
                        <td>
                            <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === $params['user']->id): ?>
                            <a href="/anime/<?= $anime->id ?>/delete" class="button">Remove from List</a>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
                    <?php endforeach; ?>
                </tbody>
                <?php endif; ?>
            </table>
        </section>
    </section>
</main>
