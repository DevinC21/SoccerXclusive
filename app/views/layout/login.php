<?php include 'layout/header.php'; ?>
<h2><?= basename(__FILE__, '.php') === 'login' ? 'Login' : 'Register' ?></h2>
<form method="POST" action="/<?= basename(__FILE__, '.php') ?>/submit">
    <input type="text" name="name" placeholder="Name" required <?= basename(__FILE__, '.php') === 'login' ? 'hidden' : '' ?>>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button class="btn" type="submit"><?= ucfirst(basename(__FILE__, '.php')) ?></button>
</form>
<?php include 'layout/footer.php'; ?>
