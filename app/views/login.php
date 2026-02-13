<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Electro | Login</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/login.css">
</head>

<body class="login-page">
    <header>
        <?php include __DIR__ . '/../includes/header.php'; ?>
        <div id="header" class="login-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="/login" class="logo">
                                <img src="/img/logo.png" alt="Electro logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-search muted">
                            <form>
                                <select class="input-select" disabled>
                                    <option>All Categories</option>
                                </select>
                                <input class="input" placeholder="Search here" disabled>
                                <button class="search-btn" disabled>Search</button>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <div><a href="#"><i class="fa fa-heart-o"></i><span>Your Wishlist</span></a></div>
                            <div><a href="#"><i class="fa fa-shopping-cart"></i><span>Your Cart</span></a></div>
                            <div class="menu-toggle"><a href="#"><i class="fa fa-bars"></i><span>Menu</span></a></div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </header>

    <section class="login-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="eyebrow">Secure access</p>
                    <h1>Welcome back to Electro</h1>
                    <p class="lead">Sign in to continue shopping and manage your cart, wishlist, and orders.</p>
                    <ul class="login-highlights">
                        <li><i class="fa fa-check"></i> Save carts across devices</li>
                        <li><i class="fa fa-check"></i> Track orders in real time</li>
                        <li><i class="fa fa-check"></i> Faster checkout experience</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="login-panel">
                        <div class="login-panel__header">
                            <span class="badge badge-new">New</span>
                            <div>
                                <p class="title">Login</p>
                                <p class="subtitle">Access your account</p>
                            </div>
                        </div>

                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
                            </div>
                        <?php endif; ?>

                        <form action="/login" method="post" class="login-form">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="email@example.com"
                                        value="<?php echo htmlspecialchars($old['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Enter your password" required>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="remember">
                                    <input type="checkbox" id="remember" checked disabled>
                                    <label for="remember">Remember me</label>
                                </div>
                                <a href="#" class="link-muted">Forgot password?</a>
                            </div>
                            <button type="submit" class="primary-btn btn-block">Login</button>
                        </form>

                        <div class="register-callout">
                            <p>New to Electro? <a href="#">Create an account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="login-footer">
        <?php include __DIR__ . '/../includes/footer.php'; ?>
    </footer>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>