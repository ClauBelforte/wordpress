<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package consultup
 */
?>
<!--==================== consultup-FOOTER AREA ====================-->
  <?php 
  $consultup_footer_widget_background = get_theme_mod('consultup_footer_widget_background');
  $consultup_overlay_footer_widget_control = get_theme_mod('consultup_overlay_footer_widget_control'); 
   if($consultup_footer_widget_background != '') { ?>
  
<footer style="background-image:url('<?php echo esc_url($consultup_footer_widget_background);?>');">
  <?php } else { ?>
	<div class="row">
          <iframe id="mapa" width="520" height="400" frameborder="0"
			src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Juncal%204450%20Capital%20Federal+()&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> 
		</div>
<footer> 
  <?php } ?>
  <div class="overlay" style="background-color: <?php echo esc_html($consultup_overlay_footer_widget_control);?>;">
  <!--Start consultup-footer-widget-area-->
  <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
  <div class="consultup-footer-widget-area">
    <div class="container">
      <div class="row">
        <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
		<div data-customize-partial-id="widget[nav_menu-3]" data-customize-partial-type="widget" data-customize-partial-placement-context="{&quot;sidebar_id&quot;:&quot;footer_widget_area&quot;,&quot;sidebar_instance_number&quot;:1}" data-customize-widget-id="nav_menu-3" id="nav_menu-3" class="col-md-4 col-sm-6 rotateInDownLeft animated consultup-widget widget_nav_menu" title="Mayúsculas + clic para editar este widget."><h6>Contacto</h6><div data-customize-partial-id="nav_menu_instance[eb75ab85ac7de5b366753691cd607269]" data-customize-partial-type="nav_menu_instance" data-customize-partial-placement-context="{&quot;after&quot;:&quot;&quot;,&quot;before&quot;:&quot;&quot;,&quot;can_partial_refresh&quot;:true,&quot;container&quot;:&quot;div&quot;,&quot;container_aria_label&quot;:&quot;&quot;,&quot;container_class&quot;:&quot;&quot;,&quot;container_id&quot;:&quot;&quot;,&quot;depth&quot;:0,&quot;echo&quot;:true,&quot;fallback_cb&quot;:&quot;&quot;,&quot;item_spacing&quot;:&quot;preserve&quot;,&quot;items_wrap&quot;:&quot;<ul id=\&quot;%1$s\&quot; class=\&quot;%2$s\&quot;>%3$s<\/ul>&quot;,&quot;link_after&quot;:&quot;&quot;,&quot;link_before&quot;:&quot;&quot;,&quot;menu&quot;:3,&quot;menu_class&quot;:&quot;menu&quot;,&quot;menu_id&quot;:&quot;&quot;,&quot;theme_location&quot;:&quot;&quot;,&quot;walker&quot;:&quot;&quot;,&quot;args_hmac&quot;:&quot;eb75ab85ac7de5b366753691cd607269&quot;}" class="menu-primary-menu-container" title="Mayúsculas-Clic para editar este elemento."><ul id="menu-primary-menu-1" class="menu">
<li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-25"><a class="contacto" href="">Oficina Juncal 4450 PISO 12 - CP1430</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-27"><a class="contacto" href=""">Mail:info@XXXXXXX.com.ar</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-28"><a class="contacto" href="">Teléfono: 4555-4555</a></li>
</ul></div></div>
<div><span class="navbar-brand"><img  width="300" height="auto" src="http://localhost/siseles-new/wp-content/uploads/2021/07/siseles-logo-vectorizado.png" class="custom-logo" alt="" srcset="http://localhost/siseles-new/wp-content/uploads/2021/07/siseles-logo-vectorizado.png 1920w, http://localhost/siseles-new/wp-content/uploads/2021/07/siseles-logo-vectorizado-300x169.png 300w, http://localhost/siseles-new/wp-content/uploads/2021/07/siseles-logo-vectorizado-1024x576.png 1024w, http://localhost/siseles-new/wp-content/uploads/2021/07/siseles-logo-vectorizado-768x432.png 768w, http://localhost/siseles-new/wp-content/uploads/2021/07/siseles-logo-vectorizado-1536x864.png 1536w" sizes="(max-width: 200px) 100vw, 200px"></div>
  </div>
  <?php } ?>
  <!--End consultup-footer-widget-area-->
  <div class="consultup-footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://it-techgroup.com/', 'busiway' ) ); ?>">
					<?php
					/* translators: placeholder replaced with string */
					printf( esc_html__( 'Designed by %s', 'by' ), 'It-techgroup' );
					?>
				</a>
				
				
			</div>
		</div>
        <div class="col-md-6 text-right">
           <?php 
		  $footer_social_icon_enable = get_theme_mod('footer_social_icon_enable','on');
		  if($footer_social_icon_enable !='off')
		  {
		  $consultup_footer_fb_link = get_theme_mod('consultup_footer_fb_link');
		  $consultup_footer_fb_target = get_theme_mod('consultup_footer_fb_target',1);
		  $consultup_footer_twt_link = get_theme_mod('consultup_footer_twt_link');
		  $consultup_footer_twt_target = get_theme_mod('consultup_footer_twt_target',1);
		  $consultup_footer_lnkd_link = get_theme_mod('consultup_footer_lnkd_link');
		  $consultup_footer_lnkd_target = get_theme_mod('consultup_footer_lnkd_target',1);
		  $consultup_footer_insta_link = get_theme_mod('consultup_footer_insta_link');
		  $consultup_footer_insta_target = get_theme_mod('consultup_footer_insta_target',1);
		  ?>
		  <ul class="ti-social">
			<?php if($consultup_footer_fb_link !=''){?>
			<li><span class="icon-soci"><a <?php if($consultup_footer_fb_target) { ?> target="_blank" <?php } ?>href="<?php echo esc_url($consultup_footer_fb_link); ?>"><i class="fa fa-facebook"></i></a></span> </li>
			<?php } if($consultup_footer_twt_link !=''){ ?>
			<li><span class="icon-soci"><a <?php if($consultup_footer_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url($consultup_footer_twt_link);?>"><i class="fa fa-twitter"></i></a></span></li>
			<?php } if($consultup_footer_lnkd_link !=''){ ?>
			<li><span class="icon-soci"><a <?php if($consultup_footer_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($consultup_footer_lnkd_link); ?>"><i class="fa fa-linkedin"></i></a></span></li>
			<?php } 
			if($consultup_footer_insta_link !=''){ ?>
			<li><span class="icon-soci"><a <?php if($consultup_footer_insta_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($consultup_footer_insta_link); ?>"><i class="fa fa-instagram"></i></a></span></li>
			<?php } ?>
		  </ul>
		  <?php } ?>
		
		
      </div>
      </div>
    </div>
  </div>
  </div>
  
</footer>
</div>
<!-- Scroll To Top -->

<!-- /Scroll To Top -->
<?php wp_footer(); ?>
</body>
</html>