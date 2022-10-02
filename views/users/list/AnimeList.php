<main>
    <section class='container'>
        <section id="anime-list-page">
                
        <h1>Viewing <a id='username' href="/list/<?= $params['user']->id ?>"><?= htmlspecialchars($params['user']->username) ?></a>'s animelist</h1>          
        <table>
                    <?php if ($params['userlist'] == null): ?>
                        <p>This user has no anime in their list.</p>
                    <?php else: ?>
                    
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
                            <td><img class="list-cover" src="<?= htmlspecialchars($anime->cover) ?>" alt="<?= $anime->title ?>"></td>
                            <td><a href="/anime/<?= $anime->id ?>"><?= htmlspecialchars($anime->title) ?></a></td>
                            <td><?= htmlspecialchars($anime->episodes) ?></td>
                            <td><?= htmlspecialchars($anime->year) ?></td>
                            <td><?= htmlspecialchars($anime->type) ?></td>
                            <td>
                                <?php if (isset($_SESSION['user_id']) && $_SESSION['user_id'] === $params['user']->id): ?>
                                <a href="/anime/<?= $anime->id ?>/delete"><i class="bi bi-trash3"></i>
</a>
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
