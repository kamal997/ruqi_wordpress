<?php get_header(); ?>

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

<div class="container py-5">
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <div class="content"> 
                <div class="page-content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <div class="text-center">
            <p>لا يوجد محتوى لعرضه.</p>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>