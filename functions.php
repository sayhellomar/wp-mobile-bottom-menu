<?php

function gnetllc_mobile_bottom_menu() { ?>
	<div id="mobile-bottom-menu" class="mobile-bottom-menu">
		<div class="mobile-bottom-menu-inner">
			<div class="single-item">
				<a href="mailto:info@jochebedhc.com">
					<i class="fas fa-envelope"></i>
					<h4><?php _e( 'Email', 'themename' ); ?></h4>
				</a>
			</div>
			<div class="single-item">
				<a href="tel:+1 6826221267">
					<i class="fas fa-phone-alt"></i>
					<h4><?php _e( 'Call', 'themename' ); ?></h4>
				</a>
			</div>
			<div class="single-item">
				<a href="#">
					<i class="fas fa-credit-card"></i>
					<h4><?php _e( 'Pay', 'themename' ); ?></h4>
				</a>
			</div>
			<div class="single-item">
				<a href="#">
					<i class="fas fa-person-booth"></i>
					<h4><?php _e( 'Patient', 'themename' ); ?></h4>
				</a>
			</div>
		</div>
	</div>
<?php }

add_action( 'wp_footer', 'gnetllc_mobile_bottom_menu' );