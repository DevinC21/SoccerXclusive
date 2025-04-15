<?php
// Start session
session_start();
header("Location: public/");
exit;
// Load your database connection and common config
require_once '../config/database.php';

// Load the router
require_once '../routes/web.php';
