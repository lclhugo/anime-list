<main class="pad-top">
    <section class=" container">
        <form method='POST' action='/register'>
            <h1>Register</h1>
            <input type='text' name='username' placeholder='Username'>
            <input type='email' name='email' placeholder='Email'>
            <input type='password' name='password' placeholder='Password'>
            <input type='password' name='password_confirm' placeholder='Confirm Password'>
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
            <button type='submit' class="button">Register</button>
        </form>
    </section>
</main>