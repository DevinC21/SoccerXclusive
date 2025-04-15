<?php include 'layout/header.php'; ?>
<h2>Checkout</h2>
<form method="POST" action="/checkout/complete">
    <input type="text" name="name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="card_number" placeholder="Card Number" required>
    <input type="text" name="exp_date" placeholder="MM/YY" required>
    <input type="text" name="cvc" placeholder="CVC" required>
    <button class="btn" type="submit">Place Order</button>
</form>
<?php include 'layout/footer.php'; ?>
