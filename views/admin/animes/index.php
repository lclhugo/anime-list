<main>
    <section class='container'>
        <section class='index anime-index'> 
        <h1>Admin anime index </h1>
        <a href="/admin/anime/add" class='button'>Add a new anime</a>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Episodes</th>
                        <th>Year</th>
                        <th>Studio</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($params['animes'] as $anime) : ?>
                        <tr>
                            <td><?= ($anime->id) ?></td>
                            <td><a href="/anime/<?= $anime->id ?>"><?= htmlspecialchars($anime->title) ?></a></td>
                            <td><?= htmlspecialchars($anime->type) ?></td>
                            <td><?= htmlspecialchars($anime->episodes) ?></td>
                            <td><?= htmlspecialchars($anime->year) ?></td>
                            <td><?= htmlspecialchars($anime->studio) ?></td>
                            <td><?= htmlspecialchars($anime->created_at) ?></td>
                            <td>
                                <a href="/admin/anime/<?= $anime->id ?>/edit">Edit</a>
                                <a href="/admin/anime/<?= $anime->id ?>/delete">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/admin/dashboard" class='button'>Back to dashboard</a>
            </section>
    </section>
</main>