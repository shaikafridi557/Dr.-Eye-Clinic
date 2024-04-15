<?php
//about theme info
add_action( 'admin_menu', 'doctor_clinic_gettingstarted' );
function doctor_clinic_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'doctor-clinic'), esc_html__('About Theme', 'doctor-clinic'), 'edit_theme_options', 'doctor_clinic_guide', 'doctor_clinic_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function doctor_clinic_admin_theme_style() {
   wp_enqueue_style('doctor-clinic-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'doctor_clinic_admin_theme_style');

//guidline for about theme
function doctor_clinic_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'doctor-clinic' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Doctor Clinic WordPress Theme', 'doctor-clinic' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'doctor-clinic' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'doctor-clinic' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'doctor-clinic' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'doctor-clinic' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'doctor-clinic' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'doctor-clinic' ); ?> <a href="<?php echo esc_url( DOCTOR_CLINIC_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'doctor-clinic' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Doctor Clinic is a clean, sophisticated, robust, performance focused and reliable doctor and health WordPress theme for multiple types of medical websites. It is the perfect fit for clinic, multi-speciality hospital, nursing home, medical practitioner, veterinary clinic, medical college, Maternity, Healer, General physician, Therapist, Orthopaedic, eye clinic, Pathology, Dermatologist, Gynecologist, Health consultant and health care centre. It gives best look to websites made for ambulance service, medical store, pharmaceutical, spa and massage centre, physiotherapy centre, health coach and anything and everything related to medical field. This doctor WordPress theme is fully responsive, all-browser compatible and translation ready to satisfy diverse audience. Its pages are optimized for great speed and its SEO ensures good search engine rank of your website; it offers unlimited colours, various styles of header and footer, different blog and portfolio layouts. It is compatible with most of the WordPress plugins; WooCommerce plugin allows selling medicines, medical equipment and other related products with utmost ease. It is built on the latest WordPress version making your website updated. With so many pre-made inner pages and unlimited slides in the slider area, website is easy to set up in just a few clicks.', 'doctor-clinic')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Doctor Clinic Theme', 'doctor-clinic' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'doctor-clinic'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( DOCTOR_CLINIC_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'doctor-clinic'); ?></a>
			<a href="<?php echo esc_url( DOCTOR_CLINIC_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'doctor-clinic'); ?></a>
			<a href="<?php echo esc_url( DOCTOR_CLINIC_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'doctor-clinic'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/doctor-clinic.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'doctor-clinic'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'doctor-clinic'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'doctor-clinic'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>