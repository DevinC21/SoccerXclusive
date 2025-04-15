<?php include 'layout/header.php'; ?>
<h2>Your Wishlist</h2>

<?php if (empty($wishlist)): ?>
    <p>You haven't added any kits to your wishlist.</p>
<?php else: ?>
    <ul class="wishlist-items">
        <?php foreach ($wishlist as $item): ?>
            <li>
                <?= $item['team'] ?> (<?= $item['season'] ?>)
