<?php include '../app/views/layout/header.php'; ?>
<h2>Analytics Overview</h2>
<ul>
    <li>Total Users: <?= $stats['total_users'] ?></li>
    <li>Total Kits: <?= $stats['total_kits'] ?></li>
    <li>Total Orders: <?= $stats['total_orders'] ?></li>
    <li>Total Reviews: <?= $stats['total_reviews'] ?></li>
</ul>
<?php include '../app/views/layout/footer.php'; ?>
