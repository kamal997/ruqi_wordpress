<?php
/* Template Name: Login  */
if (is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $credentials = array(
        'user_login' => $_POST['username'],
        'user_password' => $_POST['password'],
        'remember' => isset($_POST['remember']) ? true : false,
    );

    $user = wp_signon($credentials, false);

    if (is_wp_error($user)) {
        $error = $user->get_error_message();
    } else {
        wp_redirect(home_url());
        exit;
    }
}

get_header();
?>
<div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <h2 class="Title"><?php echo get_the_title(); ?></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-5">
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post" class="w-50 mx-auto">
        <div class="form-group mb-3">
            <label for="username">اسم المستخدم أو البريد الإلكتروني</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label>
                <input type="checkbox" name="remember"> تذكرنى
            </label>
        </div>
        <button type="submit" class="btn btn-primary w-100">تسجيل الدخول</button>
    </form>
    <div class="text-center mt-3">
        <p>ليس لديك حساب؟ <a href="<?php echo site_url('/signup'); ?>" class="text-primary">قم بالتسجيل الآن</a></p>
    </div>
</div>

<?php get_footer(); ?>