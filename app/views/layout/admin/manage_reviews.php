<?php include '../app/views/layout/header.php'; ?>
<h2>Moderate Reviews</h2>
<table class="table">
    <tr><th>Kit ID</th><th>User ID</th><th>Rating</th><th>Comment</th><th>Actions</th></tr>
    <?php foreach ($reviews as $review): ?>
        <tr>
            <td><?= $review['kit_id'] ?></td>
            <td><?= $review['user_id'] ?></td>
            <td><?= $review['rating'] ?>/5</td>
            <td><?= $review['comment'] ?></td>
            <td>
                <form method="POST" action="/admin/reviews/approve">
                    <input type="hidden" name="id" value="<?= $review['id'] ?>">
                    <button type="submit">Approve</button>
                </form>
                <form method="POST" action="/admin/reviews/delete">
                    <input type="hidden" name="id" value="<?= $review['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php include '../app/views/layout/footer.php'; ?>
