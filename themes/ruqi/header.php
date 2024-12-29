<!-- header.php -->
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Topbar start -->
    <div class="container-fluid fixed-top shadow header-kswat" style="top: 0;">
        <div class="container topbar d-none d-lg-block">
            <div class="topbar-inner">
                <div class="row gx-0">
                    <div class="col-lg-7 text-end">
                        <div class="h-100 d-inline-flex align-items-center ms-4">
                            <i class="fa fa-phone-alt ms-2 text-dark"></i>
                            <a href="tel:+0123456789" class="text-secondary">
                                <span>+012 345 6789</span>
                            </a>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center">
                            <i class="far fa-envelope ms-2 text-dark"></i>
                            <a href="mailto:info@example.com" class="text-secondary">
                                <span>info@example.com</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center">
                            <span class="text-body">تابعنا:</span>
                            <a class="text-dark px-2" href="https://www.facebook.com/ruqi"
                                aria-label="Follow us on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="https://x.com/ruqi" aria-label="Follow us on X">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="https://www.linkedin.com/ruqi"
                                aria-label="Connect with us on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="https://www.instagram.com/ruqi"
                                aria-label="Follow us on Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
							<span class="text-body">
								المملكة العربية االسعودية
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-3">
                <a href="<?php echo home_url(); ?>" class="navbar-brand">
                    <h1 class="mb-0"><?php bloginfo('name'); ?></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ms-lg-auto mx-xl-auto',
                        'container' => false,
                        'add_li_class' => 'nav-item nav-link'
                    ));
                    ?>
					<?php if (is_user_logged_in()): ?>
						<a class="btn btn-primary py-2 px-4 d-none d-xl-inline-block" href="<?php echo wp_logout_url(home_url()); ?>">
							تسجيل الخروج
						</a>
					<?php else: ?>
						<a class="btn btn-primary py-2 px-4 d-none d-xl-inline-block" href="/login">
							تسجيل الدخول
						</a>
					<?php endif; ?>
                </div>
            </nav>
        </div>
    </div>