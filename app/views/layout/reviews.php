<?php include 'layout/header.php'; ?>
<h2>Leave a Review</h2>
<p>Select a kit and leave your rating + comment.</p>

<form method="POST" action="/reviews/submit">
    <select name="kit_id" required>
        <option value="">Select Kit</option>
        <?php foreach ($kits as $kit): ?>
            <option value="<?= $kit['id'] ?>"><?= $kit['team'] ?> (<?= $kit['season'] ?>)</option>
        <?php endforeach; ?>
    </select>
    <select name="rating" required>
        <option value="">Rating</option>
        <option value="1">★☆☆☆☆</option>
        <option value="2">★★☆☆☆</option>
        <option value="3">★★★☆☆</option>
        <option value="4">★★★★☆</option>
        <option value="5">★★★★★</option>
    </select>
    <textarea name="comment" placeholder="Your review..." rows="4" required></textarea>
    <button class="btn" type="submit">Submit Review</button>
</form>
<?php include 'layout
