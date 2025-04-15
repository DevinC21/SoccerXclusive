<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove query string
$uri = rtrim($uri, '/');

// Route handling
switch ($uri) {

    // Public Pages
    case '':
    case '/':
        require '../app/controllers/HomeController.php';
        (new HomeController)->index();
        break;

    case '/login':
        require '../app/controllers/AuthController.php';
        (new AuthController)->login();
        break;

    case '/login/submit':
        require '../app/controllers/AuthController.php';
        (new AuthController)->loginSubmit();
        break;

    case '/register':
        require '../app/controllers/AuthController.php';
        (new AuthController)->register();
        break;

    case '/register/submit':
        require '../app/controllers/AuthController.php';
        (new AuthController)->registerSubmit();
        break;

    case '/logout':
        require '../app/controllers/AuthController.php';
        (new AuthController)->logout();
        break;

    case '/kits':
        require '../app/controllers/KitsController.php';
        (new KitsController)->index();
        break;

    case '/cart':
        require '../app/controllers/CartController.php';
        (new CartController)->index();
        break;

    case '/cart/add':
        require '../app/controllers/CartController.php';
        (new CartController)->add();
        break;

    case '/cart/remove':
        require '../app/controllers/CartController.php';
        (new CartController)->remove();
        break;

    case '/checkout':
        require '../app/controllers/OrderController.php';
        (new OrderController)->checkout();
        break;

    case '/checkout/complete':
        require '../app/controllers/OrderController.php';
        (new OrderController)->complete();
        break;

    case '/orders':
        require '../app/controllers/OrderController.php';
        // You could list user's past orders here
        break;

    case '/customer-service':
        require '../app/controllers/ContactController.php';
        (new ContactController)->index();
        break;

    // -------------------------------
    // Admin Panel Routes
    // -------------------------------

    case '/admin/dashboard':
        require '../app/controllers/admin/AdminController.php';
        (new AdminController)->dashboard();
        break;

    case '/admin/kits':
        require '../app/controllers/admin/KitManagerController.php';
        (new KitManagerController)->index();
        break;

    case '/admin/kits/save':
        require '../app/controllers/admin/KitManagerController.php';
        (new KitManagerController)->save();
        break;

    case '/admin/kits/delete':
        require '../app/controllers/admin/KitManagerController.php';
        (new KitManagerController)->delete();
        break;

    case '/admin/users':
        require '../app/controllers/admin/UserManagerController.php';
        (new UserManagerController)->index();
        break;

    case '/admin/users/save':
        require '../app/controllers/admin/UserManagerController.php';
        (new UserManagerController)->save();
        break;

    case '/admin/users/delete':
        require '../app/controllers/admin/UserManagerController.php';
        (new UserManagerController)->delete();
        break;

    case '/admin/users/promote':
        require '../app/controllers/admin/UserManagerController.php';
        (new UserManagerController)->promote();
        break;

    case '/admin/users/toggle-block':
        require '../app/controllers/admin/UserManagerController.php';
        (new UserManagerController)->toggleBlock();
        break;

    case '/admin/orders':
        require '../app/controllers/admin/OrderManagerController.php';
        (new OrderManagerController)->index();
        break;

    case '/admin/orders/update':
        require '../app/controllers/admin/OrderManagerController.php';
        (new OrderManagerController)->updateStatus();
        break;

    case '/admin/reviews':
        require '../app/controllers/admin/ReviewManagerController.php';
        (new ReviewManagerController)->index();
        break;

    case '/admin/reviews/approve':
        require '../app/controllers/admin/ReviewManagerController.php';
        (new ReviewManagerController)->approve();
        break;

    case '/admin/reviews/delete':
        require '../app/controllers/admin/ReviewManagerController.php';
        (new ReviewManagerController)->delete();
        break;

    case '/admin/wishlist':
        require '../app/controllers/admin/WishlistController.php';
        (new WishlistController)->index();
        break;

    case '/admin/wishlist/remove':
        require '../app/controllers/admin/WishlistController.php';
        (new WishlistController)->remove();
        break;

    case '/admin/analytics':
        require '../app/controllers/admin/AnalyticsController.php';
        (new AnalyticsController)->index();
        break;

    // 404 fallback
    default:
        http_response_code(404);
        echo "404 - Page Not Found";
        break;
}
