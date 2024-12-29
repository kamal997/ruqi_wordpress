<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
				$comment_count = get_comments_number();
				if ($comment_count == 1) {
					echo __('تعليق واحد', 'textdomain');
				} elseif ($comment_count > 1 && $comment_count < 10) {
					echo sprintf(__('%d تعليقات', 'textdomain'), $comment_count);
				} else {
					echo sprintf(__('%d تعليق', 'textdomain'), $comment_count);
				}
            ?>
        </h2>

        <ol class="comment-list styled-comment-list">
			<?php
			wp_list_comments(array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 50,
				'callback'    => 'custom_comment_format', // Eigene Formatierungsfunktion
			));
			?>
		</ol>


        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation">
                <div class="nav-previous"><?php previous_comments_link(__('&larr; تعليقات أقدم', 'textdomain')); ?></div>
                <div class="nav-next"><?php next_comments_link(__('تعليقات أحدث &rarr;', 'textdomain')); ?></div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <?php
    if (!comments_open()) :
        echo '<p class="no-comments">' . __('التعليقات مغلقة.', 'textdomain') . '</p>';
    endif;

    comment_form(array(
        'title_reply'       => __('اترك تعليق', 'textdomain'),
        'title_reply_to'    => __('اترك تعليقك على %s', 'textdomain'),
        'label_submit'      => __('إرسال التعليق', 'textdomain'),
		'class_submit'      => 'btn btn-primary w-100',
        'comment_notes_before' => '<p class="comment-notes">' . __('لن يتم نشر بريدك الإلكتروني.', 'textdomain') . '</p>',
        'comment_notes_after' => '',
        'fields' => array(
            'author' => '<p class="comment-form-author"><label for="author">' . __('الاسم', 'textdomain') . '<span class="required">*</span></label>' .
                        '<input id="author" name="author" type="text" value="" size="30" required /></p>',
            'email'  => '<p class="comment-form-email"><label for="email">' . __('البريد الإلكتروني', 'textdomain') . '<span class="required">*</span></label>' .
                        '<input id="email" name="email" type="email" value="" size="30" required /></p>',
            'url'    => '<p class="comment-form-url"><label for="url">' . __('الموقع الإلكتروني', 'textdomain') . '</label>' .
                        '<input id="url" name="url" type="url" value="" size="30" /></p>',
            'cookies' => '<p class="comment-form-cookies-consent">' .
                        '<label for="wp-comment-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" style="width:2%"/> ' .
                        __('تذكر اسمي وبريدي الإلكتروني وموقعي الإلكتروني في هذا المتصفح لاستخدامهم في التعليق القادم.', 'textdomain') . '</label></p>',
        ),
        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __('التعليق', 'textdomain') . '<span class="required">*</span></label>' .
                           '<textarea id="comment" name="comment" rows="5" required></textarea></p>',
    ));
	
	function custom_comment_format($comment, $args, $depth) {
    $tag = ('div' === $args['style']) ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('custom-comment'); ?>>
        <div class="comment-avatar">
            <?php echo get_avatar($comment, $args['avatar_size']); ?>
        </div>
        <div class="comment-content">
            <div class="comment-author d-flex justify-content-between">
                <?php echo get_comment_author_link(); ?>
				<div class="comment-meta">
                	<span class="comment-date"><?php echo get_comment_date(); ?></span>
            	</div>
            </div>
            <div class="comment-text">
                <?php comment_text(); ?>
            </div>
            <div class="comment-reply">
                <?php
                comment_reply_link(array_merge($args, array(
                    'reply_text' => __('رد', 'textdomain'),
                    'depth'      => $depth,
                    'max_depth'  => $args['max_depth'],
                )));
                ?>
            </div>
        </div>
    </<?php echo $tag; ?>>
    <?php
}
    ?>
</div>
