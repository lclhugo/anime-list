<main class="pad-top">
    <section id="home-page" class="container">
        <?php if (isset($_SESSION['username'])): ?>
        <h1> Welcome back <?= htmlspecialchars($_SESSION['username']) ?> !</h1>
        <?php endif; ?>
            <h2>Welcome to Anime List, a website where you can keep track of all the anime you've watched or just get some informations about your favorite anime!</h2>
            <?php if (isset($_SESSION['username'])): ?>
                <h3>Click <a href="/list/<?= $_SESSION['user_id'] ?>">here</a> to view your list</h3>
            <?php elseif (!isset($_SESSION['username'])): ?>
                <h3>Click <a href="/login">here</a> to login or <a href="/register">here</a> to register</h3>
            <?php endif; ?>

            <h3>Click <a href="/animes">here</a> to view all the animes currently in the database!</h3>
        </section>

</main>