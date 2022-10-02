<main>
    <section class="container">
        <section class="index">
            <h1>Admin users index </h1>
            <table>
                <thead>
                    <tr>
                        <th>Users ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Register date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($params['users'] as $user) : ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><a href="../list/<?= $user->id ?>"><?= $user->username ?></a></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->created_at ?></td>
                        </tr>
                    <?php endforeach; ?>
            </table>
            <a href="/admin/dashboard" class='button'>Back to dashboard</a>
        </section>
    </section> 
</main>