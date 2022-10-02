<main> 
    <section class='container dashboard'>
        <h2>Welcome to the dashboard <?= $_SESSION['username'] ?>!</h2>
        <h3>What do you want to manage</h3>
        <a href="/admin/animes" class='button'>Animes</a>
        <a href="/admin/users" class='button'>Users</a>
    </section>
</main>