<?php get_header(); ?>

<div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <h2 class="Title">الصفحة غير موجودة</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center py-5">
    <h1 class="display-3 text-danger">404</h1>
    <h2 class="mb-4">الصفحة غير موجودة</h2>
    <p class="mb-4">
        عذرًا، لا يمكننا العثور على الصفحة التي تبحث عنها.
        ربما تم نقلها أو تمت إزالتها.
    </p>
    <a href="<?php echo home_url(); ?>" class="btn btn-primary">العودة إلى الصفحة الرئيسية</a>
</div>


<?php get_footer(); ?>