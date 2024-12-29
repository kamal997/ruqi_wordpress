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

<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <?php if (have_posts()):
                while (have_posts()):
                    the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header mb-4">
                            <p class="entry-meta">
                                <span>نُشر بتاريخ: <?php echo get_the_date(); ?></span>
                                | <span>بواسطة: <?php the_author(); ?></span>
                            </p>
                        </header>
                        <?php if (has_post_thumbnail()): ?>
                            <div class="post-thumbnail mb-4">
                                <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                            </div>
                        <?php endif; ?>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                        <footer class="entry-footer mt-4">
							<?php
							// Display categories
							$categories = get_the_category();
							if (!empty($categories)) {
								echo '<p class="entry-categories">التصنيفات: ';
								$category_links = array();
								foreach ($categories as $category) {
									$category_links[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
								}
								echo implode(', ', $category_links);
								echo '</p>';
							}

							// Display tags
							$post_tags = get_the_tags();
							if (!empty($post_tags)) {
								echo '<p class="entry-tags">الوسوم: ';
								$tag_links = array();
								foreach ($post_tags as $tag) {
									$tag_links[] = '<a href="' . esc_url(get_tag_link($tag->term_id)) . '">' . esc_html($tag->name) . '</a>';
								}
								echo implode(', ', $tag_links);
								echo '</p>';
							}
							?>
						</footer>
                    </article>

                    <?php if (comments_open() || get_comments_number()): ?>
                        <div class="comments-section mt-5">
                            <?php comments_template(); ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<nav class="post-navigation py-5">
    <div class="row">
        <div class="col-6 text-start">
            <?php previous_post_link('%link', '&rarr; المنشور السابق'); ?>
		</div>
        <div class="col-6 text-end">
            <?php next_post_link('%link', 'المنشور التالي &larr;'); ?>
        </div>
    </div>
</nav>



<?php get_footer(); ?>