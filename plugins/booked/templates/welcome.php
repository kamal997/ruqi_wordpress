<style>
    .booked-welcome-panel .button-primary{background: #2C2C54;border-color: #2C2C54;margin-bottom:15px; margin-top:0;}
</style>
<div id="booked-welcome-screen">
	<div class="wrap about-wrap">
		<div id="booked-welcome-panel" class="booked-welcome-panel">
			<img src="<?php echo BOOKED_PLUGIN_URL; ?>/templates/images/welcome-banner.png" class="booked-welcome-banner">

			<!-- <div class="booked-welcome-panel-intro">
				<h1><?php //echo sprintf(esc_html__('The %s plugin is no longer available.','booked'),'Booked'); ?></h1>
                <p><?php //echo sprintf(esc_html__('To continue to receive security updates, new features, and premium support, we recommend upgrading to QuickCal for a seamless transition from %s.','booked'),'Booked'); ?></p>
                <a class="button button-primary"  href="https://quickcal.co/booked-upgrade"><?php// esc_html_e('More Info','booked'); ?></a>
            </div> -->

			<div class="booked-welcome-panel-content">
				<div class="booked-welcome-panel-column-container">
					<div class="booked-welcome-panel-column">
						<h3><?php esc_html_e('Getting Started','booked'); ?></h3>
						<ul>
							<li><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;&nbsp;<a class="welcome-icon welcome-learn-more" href="https://boxystudio.ticksy.com/article/3239/" target="_blank"><?php esc_html_e('Installation & Setup Guide','booked'); ?></a></li>
							<li><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;&nbsp;<a class="welcome-icon welcome-learn-more" href="https://boxystudio.ticksy.com/article/6268/" target="_blank"><?php esc_html_e('Custom Calendars','booked'); ?></a></li>
							<li><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;&nbsp;<a class="welcome-icon welcome-learn-more" href="https://boxystudio.ticksy.com/article/3238/" target="_blank"><?php esc_html_e('Default Time Slots','booked'); ?></a></li>
							<li><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;&nbsp;<a class="welcome-icon welcome-learn-more" href="https://boxystudio.ticksy.com/article/3233/" target="_blank"><?php esc_html_e('Custom Time Slots','booked'); ?></a></li>
							<li><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;&nbsp;<a class="welcome-icon welcome-learn-more" href="https://boxystudio.ticksy.com/article/6267/" target="_blank"><?php esc_html_e('Custom Fields','booked'); ?></a></li>
							<li><i class="fa-solid fa-arrow-up-right-from-square"></i>&nbsp;&nbsp;<a class="welcome-icon welcome-learn-more" href="https://boxystudio.ticksy.com/article/3240/" target="_blank"><?php esc_html_e('Shortcodes','booked'); ?></a></li>
						</ul>
						<!--a class="button" style="margin-bottom:15px; margin-top:0;" href="https://boxystudio.ticksy.com/articles/7827/" target="_blank"><?php esc_html_e('View all Guides','booked'); ?>&nbsp;&nbsp;<i class="fa-solid fa-arrow-up-right-from-square"></i></a>&nbsp;
						<a class="button button-primary" style="margin-bottom:15px; margin-top:0;" href="<?php echo get_admin_url().'admin.php?page=booked-settings'; ?>"><?php esc_html_e('Get Started','booked'); ?></a-->
					</div>
					<div class="booked-welcome-panel-column booked-welcome-panel-last">
						<?php do_action( 'booked_welcome_before_changelog' ); ?>
						<?php echo booked_parse_readme_changelog(); ?>
						<?php do_action( 'booked_welcome_after_changelog' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
