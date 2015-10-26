<?php /*Template Name: Tips Page */ ?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/specialReview.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/component.css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/modernizr.custom.js"></script>

<?php $th=mktime(gmdate("H")+7,gmdate("i"),gmdate("m"),gmdate("d"),gmdate("Y"));
$format="H:i:s";
$time=date($format,$th);
?>


<nav id="navigation" role="navigation">
    	<ul id="menu-main_nav">
        	<li class="menu-home_page active"><a href="<?php echo home_url(); ?>/recipes/"><i class="icon1"> </i>อร่อยในบ้าน</a></li>
            <li class="menu-home_page"><a href="<?php echo home_url(); ?>/bistro/"><i class="icon2"> </i>อร่อยนอกบ้าน</a></li>
            <li class="menu-home_page"><a href="<?php echo home_url(); ?>/hilight-trend-likesara/"><i class="icon3"> </i>Like สาระ</a></li>
            <li class="menu-home_page"><a href="<?php echo home_url(); ?>/event/"><i class="icon4"> </i>กิจกรรม</a></li>
            <li class="menu-home_page"><a href="<?php echo home_url(); ?>/promotion/"><i class="icon5"> </i>โปรโมชั่น</a></li>
			<li class="menu-home_page"><a href="<?php echo home_url(); ?>/catalogue/"><i class="icon6"> </i>ช้อปเลย</a>
					 <ul>
						<li class="menu-home_page"><a href="#" class="documents">Documents</a></li>
						<li class="menu-home_page"><a href="#" class="messages">Messages</a></li>
						<li class="menu-home_page"><a href="#" class="signout">Sign Out</a></li>
					</ul>
			
			</li>
        </ul>
    </nav>
<main id="content">
		<div class="social">
         	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/tw-icon.png"></li>
          	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/fb-icon.png"></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/yt-icon.png"></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/ig-icon.png"></li>
         </div>
		<?php do_action( 'bp_before_blog_home' ); ?>
		<?php do_action( 'template_notices' ); ?>
		
            <div class="content-by-meal" style="margin-bottom: 5px;">
          
           	<nav id="navigation-sub" role="navigation">
				<ul id="menu-main_nav_sub">
					<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/quick-easy/" >ทำเองได้ง่ายและเร็ว</a></li>
					<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/celebcook/">เข้าครัวกับคนดัง</a></li>
					<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/setmenu/">อาหารเซท</a></li>
					<li class="menu-quick-easy_page active"><a href="<?php echo home_url(); ?>/tip/">เคล็ดลับคู่หูทำอาหาร</a></li>
					<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/create-recipe/"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/new-icon.png" style="position: absolute;margin-left: -30px;margin-top: 6px;">สร้างรายการอาหาร</a></li>
					<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/all-recipes/">เมนูทั้งหมด</a></li>
					<!--<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/local-food/"><i class="icon5"> </i>อาหารรักประเทศไทย</a></li>-->
				</ul>
			</nav>
              
  
					<?php include_once('/bg-time.php');?> 
        	</div><!-- End content-by-meal -->
			
			
            <div class="content-tip">
				<div class="singlenavigation" style="margin-bottom:330px;">
					<?php while (have_posts()) : the_post(); ?>
								<a href=" <?php echo site_url(); ?> ">หน้าหลัก</a> > <a href="<?php echo home_url(); ?>/recipes/">อร่อยในบ้าน</a> > <a href="<?php echo home_url(); ?>/tip/">เคล็ดลับคู่หูทำอาหาร</a> > <a href="<?php the_permalink(); ?>"><b><?php the_title(); ?></b></a>
					<?php endwhile;?>
				</div>
			
					<?php
						$ran = array("#ee4036","#8bc53f","#00adee");
						$randomColor = $ran[array_rand($ran, 1)];
					?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="box-tip" style="border:2px solid <?php echo $randomColor;?>">
									<div class="tipTitle"  style="background-color:<?php echo $randomColor;?>;" ><?php the_title(); ?></div>
									
						<?php the_content(); ?>
						

						<?php endwhile; else: ?>
								<p><?php _e( 'Sorry, no posts matched your criteria.', 'buddypress' ); ?></p>
						<?php endif; ?>
						
						<?php wp_reset_query(); ?>
									
									
									
									
									
									
                </div><!--End box-image-->
                
            </div><!-- End content-tips-->  
		<?php do_action( 'bp_after_blog_home' ); ?>
		
</main>
<?php get_footer(); ?>