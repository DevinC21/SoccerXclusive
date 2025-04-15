<?php include 'layout/header.php'; ?>
<h2>Customer Service</h2>
<p>Need help with your order or account? Reach out to us below.</p>

<form method="POST" action="mailto:support@soccerxclusive.com">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your message..." rows="5" required></textarea>
    <button class="btn" type="submit">Send Message</button>
</form>
<?php include 'layout/footer.php'; ?>
