<?php include '../app/views/layout/header.php'; ?>
<h2>Manage Orders</h2>
<table class="table">
    <tr><th>Email</th><th>Summary</th><th>Total</th><th>Date</th></tr>
    <?php foreach ($orders as $order): ?>
        <tr>
            <td><?= $order['user_email'] ?></td>
            <td><?= $order['order_summary'] ?></td>
            <td>£<?= $order['total'] ?></td>
            <td><?= $order['created_at'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include '../app/views/layout/footer.php'; ?>
