<?php include '../app/views/layout/header.php'; ?>
<h2>Manage Kits</h2>
<button id="openAddKitModal" class="btn">Add Kit</button>
<table class="table">
    <tr><th>Team</th><th>Season</th><th>Price</th><th>Image</th><th>Actions</th></tr>
    <?php foreach ($kits as $kit): ?>
        <tr>
            <td><?= $kit['team'] ?></td>
            <td><?= $kit['season'] ?></td>
            <td>£<?= $kit['price'] ?></td>
            <td><img src="/<?= $kit['image'] ?>" width="50"></td>
            <td>
                <button class="edit-btn" data-id="<?= $kit['id'] ?>">Edit</button>
                <form method="POST" action="/admin/kits/delete" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $kit['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<!-- Modal -->
<div class="modal" style="display:none;">
    <form method="POST" action="/admin/kits/save" enctype="multipart/form-data">
        <input type="hidden" name="id" id="kit-id">
        <input type="text" name="team" placeholder="Team" required>
        <input type="text" name="season" placeholder="Season" required>
        <input type="number" name="price" placeholder="Price" required>
        <input type="file" name="image">
        <button class="btn">Save Kit</button>
        <button type="button" class="close-btn">Cancel</button>
    </form>
</div>
<script src="/js/admin.js"></script>
<?php include '../app/views/layout/footer.php'; ?>
