<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SoccerXclusive</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <h1><a href="/">SoccerXclusive</a></h1>
    <nav>
        <a href="/">Home</a>
        <a href="/kits">Kits</a>
        <a href="/cart">Cart</a>
        <a href="/customer-service">Support</a>
        <?php if (!isset($_SESSION['user'])): ?>
            <a href="/login">Login</a>
        <?php else: ?>
            <a href="/logout">Logout</a>
        <?php endif; ?>
    </nav>
</header>
<main class="container">
