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
          
           		  <?php  if (get_post_type() == 'tip' ) { ?>
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
               <?php } ?>  
                     
					<?php include_once('wp-content/themes/bp-default/bg-time.php');?> 
					 
					 
      
        	</div><!-- End content-by-meal -->

            <div class="content-tips">
				<div class="content-box">
                	
                    <div class="box-left">
                   	<ul class="grid effect-3" id="grid">
                    <?php
						if ( have_posts() ) :
							query_posts(array( 
								'post_type' => 'tip'
							) );  
							$count = 0;
							while ( have_posts() ) : the_post();
							$count++;
						?>
                        <li>
                            <a href="#">
								<?php
									$ran = array("#ee4036","#8bc53f","#00adee");
											if($count %9==1){ $randomColor = $ran[0]; }
											else if($count%9==2){$randomColor = $ran[1];}
											else if($count%9==3){$randomColor = $ran[2];}
											else if($count%9==4){$randomColor = $ran[2];}
											else if($count%9==5){$randomColor = $ran[0];}
											else if($count%9==6){$randomColor = $ran[1];}
											else if($count%9==7){$randomColor = $ran[1];}
											else if($count%9==8){$randomColor = $ran[2];}
											else if($count%9==0){$randomColor = $ran[0];}
											
									//$randomColor = $ran[array_rand($ran, 1)];
									?>
                                 <div class="box-image" style="border:1px solid <?php echo $randomColor;?>">
									<div class="specialTitle"  style="background-color:<?php echo $randomColor;?>;" ><?php echo substr_utf8(get_the_title(),0,50);?></div>
									<?php $post_id = get_the_id();?>
									<?php if (has_post_thumbnail( $post_id) ): ?>
									<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); ?>
									 <a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>" width="368"/></a>
									<?php endif; ?>
									<div class="specialExcerp"><a href="<?php the_permalink();?>"><?php echo the_excerpt();?></a></div>
									<div class="readmore"><a href="<?php the_permalink();?>">อ่านต่อ </a></div>
                                </div>
                            </a>
                          
                        </li>
					<?php
							endwhile;
						else :
							echo wpautop( 'Sorry, no posts were found' );
						endif;
                    ?>   

					</ul>
                  </div>
				<div class="cleaner_h30"></div>
                
                </div>    
            </div><!-- End content-tips-->  
		<?php do_action( 'bp_after_blog_home' ); ?>
		
</main>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/masonry.pkgd.min.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/imagesloaded.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/classie.js"></script>
		<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById( 'grid' ), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			} );
		</script>

<?php get_footer(); ?>