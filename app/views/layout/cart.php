<?php include 'layout/header.php'; ?>
<h2>Your Cart</h2>
<?php if (empty($kits)): ?>
    <p>Cart is empty.</p>
<?php else: ?>
    <ul class="cart-list">
        <?php $total = 0; foreach ($kits as $kit): $total += $kit['price']; ?>
            <li>
                <?= $kit['team'] ?> (<?= $kit['season'] ?>) - £<?= $kit['price'] ?>
                <form method="POST" action="/cart/remove">
                    <input type="hidden" name="kit_id" value="<?= $kit['id'] ?>">
                    <button type="submit">Remove</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><strong>Total: £<?= number_format($total, 2) ?></strong></p>
    <a class="btn" href="/checkout">Checkout</a>
<?php endif; ?>
<?php include 'layout/footer.php'; ?>
