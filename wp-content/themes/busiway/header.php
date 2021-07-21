<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Busiway
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"></a>
<div class="wrapper">
 <header class="ti-trhead"> 
   
  <!--==================== TOP BAR ====================-->
  <div class="container">
    <div class="ti-head-detail d-none d-md-block">
      <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-6">
         <?php $consultup_head_info_icon_one = get_theme_mod('consultup_head_info_icon_one','fa-clock-o');
          $consultup_head_info_icon_one_text = get_theme_mod('consultup_head_info_icon_one_text','Open-Hours:10 am to 7pm');
          $consultup_head_info_icon_two = get_theme_mod('consultup_head_info_icon_two','fa-envelope-o');
          $consultup_head_info_icon_two_text = get_theme_mod('consultup_head_info_icon_two_text','info@themeansar.com');
          if(($consultup_head_info_icon_one) || ($consultup_head_info_icon_two) !=''){
          ?>
         <ul class="info-left">
        <li><a><i class="fa <?php echo esc_attr( $consultup_head_info_icon_one ); ?> "></i> <?php echo esc_html( $consultup_head_info_icon_one_text );?></a></li>
        <li><a><i class="fa <?php echo esc_attr( $consultup_head_info_icon_two ); ?>"></i><?php echo esc_html( $consultup_head_info_icon_two_text ); ?></a></li>
        </ul>
        <?php } ?>
        </div>
        <div class="col-md-6 col-xs-12">
      <?php 
      $header_social_icon_enable = get_theme_mod('header_social_icon_enable','on');
      if($header_social_icon_enable !='off')
      {
      $consultup_header_fb_link = get_theme_mod('consultup_header_fb_link','#');
      $consultup_header_fb_target = get_theme_mod('consultup_header_fb_target',1);
      $consultup_header_twt_link = get_theme_mod('consultup_header_twt_link','#');
      $consultup_header_twt_target = get_theme_mod('consultup_header_twt_target',1);
      $consultup_header_lnkd_link = get_theme_mod('consultup_header_lnkd_link','#');
      $consultup_twitter_lnkd_target = get_theme_mod('consultup_twitter_lnkd_target',1);
      $consultup_header_insta_link = get_theme_mod('consultup_header_insta_link','#');
      $consultup_insta_lnkd_target = get_theme_mod('consultup_insta_lnkd_target',1);
      ?>
      <ul class="ti-social info-right">
      <?php if($consultup_header_fb_link !=''){?>
      <li><span class="icon-soci"><a <?php if($consultup_header_fb_target) { ?> target="_blank" <?php } ?>href="<?php echo $consultup_header_fb_link; ?>"><i class="fa fa-facebook"></i></a></span> </li>
      <?php } if($consultup_header_twt_link !=''){ ?>
      <li><span class="icon-soci"><a <?php if($consultup_header_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo $consultup_header_twt_link;?>"><i class="fa fa-twitter"></i></a></span></li>
      <?php } if($consultup_header_lnkd_link !=''){ ?>
      <li><span class="icon-soci"><a <?php if($consultup_twitter_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo $consultup_header_lnkd_link; ?>"><i class="fa fa-linkedin"></i></a></span></li>
      <?php } 
      if($consultup_header_insta_link !=''){ ?>
      <li><span class="icon-soci"><a <?php if($consultup_insta_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo $consultup_header_insta_link; ?>"><i class="fa fa-instagram"></i></a></span></li>
      <?php } ?>
      </ul>
      <?php } ?>
    </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="ti-main-nav">
  <div class="container"> 
    <nav class="navbar navbar-expand-lg navbar-wp">
      <div class="container mobi-menu"> 
         <div class="navbar-header"> 
                <!-- Logo image --> 
                <?php the_custom_logo(); ?>
                <?php  if ( display_header_text() ) : ?>
                <div class="site-branding-text navbar-brand">
                  <h1 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(bloginfo('name')); ?></a></h1>
                  <p class="site-description"><?php echo esc_html(bloginfo('description')); ?></p>
                </div>
                  <?php endif; ?>
                <!-- /Logo image -->
                <!-- navbar-toggle -->  
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-wp">
                  <span class="fa fa-bars"></i></span>
                </button>
                <!-- /navbar-toggle --> 
            </div>
          </div>
        <!-- Start Navbar Header -->
        <div class="navbar-header  col-md-3 desk-menu">
          <?php if(has_custom_logo()) {
        // Display the Custom Logo
        the_custom_logo();
        } else { ?>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"> 
            <span> <?php bloginfo('name'); ?> </span> <br>
            <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
              <span class="site-description"><?php echo $description; ?></span> 
            <?php endif;?></a><?php }?>
        </div>
        <!-- /End Navbar Header --> 
        
        <!-- Navigation -->
        <div class="collapse navbar-collapse" id="navbar-wp">
          <?php wp_nav_menu( array(
								'theme_location' => 'primary',
								'container'  => 'nav-collapse collapse navbar-inverse-collapse',
								'menu_class' => 'nav navbar-nav ml-auto',
								'fallback_cb' => 'consultup_fallback_page_menu',
								'walker' => new consultup_nav_walker()
							) ); 
			?>
        </div>
        <!-- /Navigation --> 
      </div>
    </nav>
    
  </div>
<!--   <div id="block-fbdbcc5e-e2c0-4b9b-894c-05adbf9a3dc9" tabindex="0" role="group" aria-label="Bloque: Smart Slider 3" data-block="fbdbcc5e-e2c0-4b9b-894c-05adbf9a3dc9" data-type="nextend/smartslider3" data-title="Smart Slider 3" class="block-editor-block-list__block wp-block"><div class="wp-block-nextend-smartslider3"><div><div class="n2_ss_slider_frame_container"><iframe class="n2-ss-slider-frame intrinsic-ignore" style="width: 1503.75px; max-width: none; display: block; border: 0px; opacity: 1; transform: translateX(-331.875px); height: 600px;" frameborder="0" src="http://localhost/siseles-new/?n2prerender=1&amp;n2app=smartslider&amp;n2controller=slider&amp;n2action=iframe&amp;sliderid=2&amp;iseditor=1&amp;hash=265bd0c0554699efcf4358631b37d14c" onload="window.n2SSIframeLoader||function(){var i=[];function t(i,t){this.i=t,this.frame=i,this.window=i.ownerDocument.defaultView,this.document=this.window.document,this.L=&quot;rtl&quot;===this.document.documentElement.getAttribute(&quot;dir&quot;),this._width=0,this.verticalOffsetTop=[],this.verticalOffsetBottom=[]}window.addEventListener(&quot;message&quot;,(function(e){for(var t=0;t<i.length;t++)i[t]&amp;&amp;i[t].match(e.source)&amp;&amp;i[t].message(e.data)})),t.prototype.match=function(i){return i===(this.frame.contentWindow||this.frame.contentDocument)&amp;&amp;(this.frameContent=this.frame.contentWindow||this.frame.contentDocument,!0)},t.prototype.message=function(i){switch(i.key){case&quot;setLocation&quot;:&quot;function&quot;==typeof this.window.zajax_goto?this.window.zajax_goto(i.location):this.window.location=i.location;break;case&quot;ready&quot;:this.frameContent.postMessage({key:&quot;ackReady&quot;,windowInnerHeight:window.innerHeight},&quot;*&quot;);break;case&quot;option&quot;:switch(i.name){case&quot;forceFullWidth&quot;:this.document.body.style.overflowX=&quot;hidden&quot;,this.resizeForceFullWidth(),this.resizeForceFullWidthCallback=this.resizeForceFullWidth.bind(this),window.addEventListener(&quot;resize&quot;,this.resizeForceFullWidthCallback),this.fullWidthTo=this.document.querySelector(&quot;.edit-post-visual-editor,.fl-responsive-preview .fl-builder-content&quot;),this.watchWidth();break;case&quot;fullPage&quot;:this.resizeFullPage(),this.resizeFullPageCallback=this.resizeFullPage.bind(this),window.addEventListener(&quot;resize&quot;,this.resizeFullPageCallback);break;case&quot;focusOffsetTop&quot;:this.verticalOffsetTop=this.document.querySelectorAll(i.value);break;case&quot;focusOffsetBottom&quot;:this.verticalOffsetBottom=this.document.querySelectorAll(i.value);break;case&quot;margin&quot;:this.frame.parentNode.style.margin=i.value;break;case&quot;height&quot;:this.frame.style.height=i.value+&quot;px&quot;,requestAnimationFrame(function(){this.opacity=1}.bind(this.frame.style))}}},t.prototype.exists=function(){return!!this.frame.isConnected||(i[this.i]=!1,this.observer&amp;&amp;(this.observer.unobserve(this.fullWidthTo),delete this.observer),this.resizeForceFullWidthCallback&amp;&amp;window.removeEventListener(&quot;resize&quot;,this.resizeForceFullWidthCallback),this.resizeFullPageCallback&amp;&amp;window.removeEventListener(&quot;resize&quot;,this.resizeFullPageCallback),!1)},t.prototype.watchWidth=function(){if(this.fullWidthTo){var i=0;this.observer=new ResizeObserver(function(t){var s=t[0];i!==s.contentRect.width&amp;&amp;(i=s.contentRect.width,this.resizeForceFullWidth())}.bind(this)),this.observer.observe(this.fullWidthTo)}},t.prototype.resizeForceFullWidth=function(){if(this.exists()){var i=0,t=0;if(this.fullWidthTo){var s=this.fullWidthTo.getBoundingClientRect();t=s.width,i=this.L?-t+s.right:s.left}var h,n=t>0?t:this.document.body.clientWidth,o=window.getComputedStyle(this.frame.parentNode);(this._width-n<=0||this._width-n>1)&amp;&amp;(h=this.L?n-this.frame.parentNode.getBoundingClientRect().right-parseInt(o.getPropertyValue(&quot;padding-right&quot;))-parseInt(o.getPropertyValue(&quot;border-right-width&quot;))+i:-this.frame.parentNode.getBoundingClientRect().left-parseInt(o.getPropertyValue(&quot;padding-left&quot;))-parseInt(o.getPropertyValue(&quot;border-left-width&quot;))+i,this._offset!==h&amp;&amp;(this.frame.style.transform=&quot;translateX(&quot;+h+&quot;px)&quot;,this._offset=h),this._width!==n&amp;&amp;(this.frame.style.width=n+&quot;px&quot;,this._width=n))}},t.prototype.resizeFullPage=function(e){if(this.exists()){var i,t=window.innerHeight,s=0,h=0;for(window.parent!==window&amp;&amp;(t=Math.min(t,window.screen.height)),i=0;i<this.verticalOffsetTop.length;i++)s-=this.verticalOffsetTop[i].offsetHeight;for(i=0;i<this.verticalOffsetBottom.length;i++)h-=this.verticalOffsetBottom[i].offsetHeight;this.frameContent.postMessage({key:&quot;fullpage&quot;,height:t,offsetTop:s,offsetBottom:h},&quot;*&quot;)}},t.prototype.reset=function(){this.resizeForceFullWidthCallback&amp;&amp;(window.removeEventListener(&quot;resize&quot;,this.resizeForceFullWidthCallback),delete this.resizeForceFullWidthCallback),this.resizeFullPageCallback&amp;&amp;(window.removeEventListener(&quot;resize&quot;,this.resizeFullPageCallback),delete this.resizeFullPageCallback),this.observer&amp;&amp;(this.observer.disconnect(),delete this.observer),this.frame.parentNode.style.margin=&quot;0px&quot;,this.frame.style.height=&quot;auto&quot;,this.opacity=1,this.frame.style.transform=&quot;none&quot;,this.frame.style.width=&quot;100%&quot;},window.n2SSIframeLoader=function(s){var h=new t(s,i.length);return i.push(h),h}}();n2SSIframeLoader(this);"></iframe></div></div><div class="wp-block-nextend-smartslider3-overlay"></div></div>  </div> -->
</header>

<script type="text/javascript">
window.addEventListener("scroll", function(){var navbar = document.querySelector("header");
navbar.classlist.toggle("sticky", window.scrollY > 0)}
</script>
<section class="consultup-service-section" id="service-section">
	<div style="width: 100%;" class="container" >		
				<div class="row">
			<div class="col-md-12 wow fadeInDown animated padding-bottom-20">
            <div class="consultup-heading">
            
				
 <script src="https://kit.fontawesome.com/bf91ce9ef4.js" crossorigin="anonymous"></script>
<!-- #masthead --> 
