<main>



    <section class="home-page container border-radius">
        <?php if (isset($_SESSION['username'])): ?>
        <h1> Hello, <?= $_SESSION['username'] ?> </h1>
        <?php endif; ?>
            <p>Welcome to Anime List, a website where you can keep track of all the anime you've watched</p>
            <?php if (isset($_SESSION['username'])): ?>
                <p>Click <a href="/list/<?= $_SESSION['user_id'] ?>">here</a> to view your list</p>
            <?php elseif (!isset($_SESSION['username'])): ?>
                <p>Click <a href="/login">here</a> to login or <a href="/register">here</a> to register</p>
            <?php endif; ?>

            <p>Click <a href="/anime">here</a> to view all the animes currently in the database!</p>
        </section>
</main>
