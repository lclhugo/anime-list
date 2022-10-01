<main>
    <section class="container login">
    <form method='POST' action='/login'>
        <h1>Login</h1>
        <input type='text' name='username' placeholder='Username'>
        <input type='password' name='password' placeholder='Password'>
            <?php if (isset($_SESSION['errors'])): ?>
                <div class="alert-danger">
                    <ul>
                <?php foreach($_SESSION['errors'] as $errorsArray): ?>
                    <?php foreach($errorsArray as $errors): ?>
                            <?php foreach($errors as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach ?>
                    <?php endforeach ?>
                <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
        <button type='submit' class="button">Login</button>
    </form>
    <a href='/register' >Not a member yet? Register here!</a>
    </section>
</main>