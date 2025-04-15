<?php include '../app/views/layout/header.php'; ?>
<h2>User Wishlists</h2>
<table class="table">
    <tr><th>User</th><th>Kit</th><th>Actions</th></tr>
    <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item['name'] ?></td>
            <td><?= $item['team'] ?></td>
            <td>
                <form method="POST" action="/admin/wishlist/remove">
                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                    <button type="submit">Remove</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include '../app/views/layout/footer.php'; ?>
