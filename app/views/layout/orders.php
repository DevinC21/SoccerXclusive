<?php include 'layout/header.php'; ?>
<h2>Your Orders</h2>

<?php if (empty($orders)): ?>
    <p>You have no past orders.</p>
<?php else: ?>
    <ul class="order-list">
        <?php foreach ($orders as $order): ?>
            <li>
                <strong>Date:</strong> <?= $order['created_at'] ?><br>
                <strong>Total:</strong> £<?= $order['total'] ?><br>
                <strong>Summary:</strong><br>
                <div><?= $order['order_summary'] ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php include 'layout/footer.php'; ?>
