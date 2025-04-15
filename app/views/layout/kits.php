<?php include 'layout/header.php'; ?>
<h2>All Kits</h2>
<div class="kit-list">
    <?php foreach ($kits as $kit): ?>
        <div class="kit-card">
            <img src="/<?= $kit['image'] ?>" width="150" alt="Kit Image">
            <h3><?= $kit['team'] ?> (<?= $kit['season'] ?>)</h3>
            <p>£<?= $kit['price'] ?></p>
            <form method="POST" action="/cart/add">
                <input type="hidden" name="kit_id" value="<?= $kit['id'] ?>">
                <button class="btn">Add to Cart</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>
<?php include 'layout/footer.php'; ?>
