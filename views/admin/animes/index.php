<main>
    <h1>Admin anime index </h1>

    <a href="/admin/anime/add">Add anime</a>

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
                    <td><?= $anime->id ?></td>
                    <td><a href="/anime/<?= $anime->id ?>"><?= $anime->title ?></a></td>
                    <td><?= $anime->type ?></td>
                    <td><?= $anime->ep_count ?></td>
                    <td><?= $anime->year ?></td>
                    <td><?= $anime->studio ?></td>
                    <td><?= $anime->created_at ?></td>
                    <td>
                        <a href="/admin/anime/<?= $anime->id ?>/edit">Edit</a>
                        <a href="/admin/anime/<?= $anime->id ?>/delete">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
    </table>
</main>