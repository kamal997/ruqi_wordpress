<?php
/* Template Name: Signup */
if (is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userdata = array(
        'user_login' => $_POST['username'],
        'user_email' => $_POST['email'],
        'user_pass' => $_POST['password'],
    );

    $user_id = wp_insert_user($userdata);

    if (is_wp_error($user_id)) {
        $error = $user_id->get_error_message();
    } else {
        wp_redirect(home_url('/login'));
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
            <label for="username">اسم المستخدم</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="password">كلمة المرور</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">التسجيل</button>
    </form>
    <div class="text-center mt-3">
        <p>هل لديك حساب بالفعل؟ <a href="/login" class="text-primary">قم بتسجيل الدخول الآن</a>
        </p>
    </div>

</div>

<?php get_footer(); ?>