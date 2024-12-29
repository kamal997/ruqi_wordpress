<?php get_header(); ?>

<div class="container-fluid hero-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="hero-header-inner animated zoomIn">
                    <h2 class="Title">مدونة</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        <?php if (have_posts()): ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-lg-6 col-xl-4">
                    <div class="blog-item wow fadeIn" data-wow-delay="0.1s">
                        <div class="blog-img position-relative overflow-hidden">
                            <?php if (has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid w-100']); ?>
                                </a>
                            <?php endif; ?>
                            <div class="bg-primary d-inline px-3 py-2 text-center text-white position-absolute top-0 end-0">
                                <?php echo get_the_date('Y-m-d'); ?>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="blog-meta d-flex justify-content-between pb-2">
                                <small>
                                    <i class="fas fa-user me-2 text-muted"></i>
                                    <span class="text-muted">بواسطة: <?php the_author(); ?></span>
                                </small>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="d-inline-block h4 lh-sm mb-3">
                                <?php echo wp_trim_words(get_the_title(), 10, '...'); ?>
                            </a>
                            <p class="mb-4">
                                <?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary px-3">
                                المزيد من التفاصيل
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="col-12">
                <p>لا توجد منشورات متاحة حاليًا.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<nav class="pagination py-4">
    <div class="d-flex justify-content-between">
        <div class="previous">
            <?php previous_posts_link('&larr; Newer Posts'); ?>
        </div>
        <div class="next">
            <?php next_posts_link('Older Posts &rarr;'); ?>
        </div>
    </div>
</nav>
<?php get_footer(); ?>