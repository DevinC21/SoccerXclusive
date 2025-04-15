<?php include '../app/views/layout/header.php'; ?>
<h2>Manage Users</h2>
<table class="table">
    <tr><th>Name</th><th>Email</th><th>Role</th><th>Status</th><th>Actions</th></tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
            <td><?= $user['role'] ?></td>
            <td><?= $user['is_blocked'] ? 'Blocked' : 'Active' ?></td>
            <td>
                <form method="POST" action="/admin/users/promote">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button type="submit">Promote</button>
                </form>
                <form method="POST" action="/admin/users/toggle-block">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button type="submit"><?= $user['is_blocked'] ? 'Unblock' : 'Block' ?></button>
                </form>
                <form method="POST" action="/admin/users/delete">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include '../app/views/layout/footer.php'; ?>
