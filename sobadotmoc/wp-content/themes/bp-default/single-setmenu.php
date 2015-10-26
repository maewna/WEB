<?php /*Template Name: Setmenu */ ?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/setmenu.css">
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/script.js"></script>
<script>

function getMenu(t,pid){ 
		$.ajax({
			 type:"POST",
			 url: "<?php bloginfo('stylesheet_directory'); ?>/getMenu.php",
			 data: "pid=" + pid + "&type=" + t,
			 success: function(data){
				 document.getElementById('cnt-cate').innerHTML = data;
				 //document.getElementById(t+'-'+pid).className += ' test';
			     $('#'+t+'-'+pid).closest("ul").css("display","block");
				 $('#'+t+'-'+pid).closest("li").siblings("li").removeClass("active");
				 $('#'+t+'-'+pid).closest("li").addClass("active");
				 }
		});
	}
</script>
<?php 	$th=mktime(gmdate("H")+7,gmdate("i"),gmdate("m"),gmdate("d"),gmdate("Y"));
		$format="H:i:s";
		$time=date($format,$th); ?>
<script type="text/javascript" charset="utf-8">
		$(function() {
				var url = window.location.href;
				$("#menu-main_nav_sub a").each(function() {
					if (url == (this.href)) {
						$(this).closest("li").addClass("active");
					}
				});
			});   
	</script>
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
  <div class="content-by-meal-page">
    <?php  if (get_post_type() == 'celebcook' ) { ?>
    <nav id="navigation-sub" role="navigation">
      <ul id="menu-main_nav_sub">
        <li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/quick-easy/" >ทำเองได้ง่ายและเร็ว</a></li>
        <li class="menu-quick-easy_page active"><a href="<?php echo home_url(); ?>/celebcook/">เข้าครัวกับคนดัง</a></li>
        <li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/setmenu/">อาหารเซท</a></li>
        <li class="menu-quick-easy_page "><a href="<?php echo home_url(); ?>/tip/">เคล็ดลับคู่หูทำอาหาร</a></li>
        <li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/create-recipe/"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/new-icon.png" style="position: absolute;margin-left: -30px;margin-top: 6px;">สร้างรายการอาหาร</a></li>
        <li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/all-recipes/">เมนูทั้งหมด</a></li>
        <!--<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/local-food/"><i class="icon5"> </i>อาหารรักประเทศไทย</a></li>-->
      </ul>
    </nav>
    <?php } ?>
    <?php include_once('wp-content/themes/bp-default/bg-time.php');?>
  </div>
  <!--END content-by-meal-page-->
  
  <section class="content-set">
    <h2 class="title"><i class="set-icon"></i>อาหารเซ็ททั้งหมด</h2>
    <div class="top-set"></div>
    <div class="wr-set">
      <div id="cssmenu" class="col-left">
        <?php $args = array('type'=> 'setmenu','parent'=> 0,'child_of'=>0,'orderby'=> 'id','order'=> 'ASC','hide_empty'=> 0,'taxonomy'=> 'setmenu-category',);
$categories = get_categories( $args );
echo '<ul>';
echo '<li class="hmenu">รายการอาหารเซ็ท</li>';
foreach ( $categories as $category ) {
			echo '<li class="active has-sub">' ?>
        <a href="#" id="c1-<?php echo $category->term_id; ?>" onClick="getMenu('c1','<?php echo $category->term_id;?>');return false;"><span><?php echo $category->name; ?></span></a>
        <?php 
				query_posts(array( 'post_type' => 'setmenu','parent'=> 0,'child_of'=>0,'showposts' => -1,'tax_query' => array(
				array('include_children'=>false,
					'taxonomy' => 'setmenu-category',
					'terms' => $category->term_id,
					'field' => 'term_id',
						)
					),
					'orderby' => 'title',
					'order' => 'ASC' )
				);
			if(have_posts()){
				echo '<ul>';
					while ( have_posts() ) : the_post();
						  echo '<li>'; ?>
        <?php $pid = get_the_ID(); ?>
        <a href="#" id="p-<?php echo $pid; ?>" onClick="getMenu('p','<?php echo $pid;?>');return false;"><span>
        <?php the_title(); ?>
        </span></a> <?php echo '</li>';
					endwhile;
			echo '</ul>';
			}// End if
			wp_reset_query();
			
			$subargs = array('type'=> 'setmenu','child_of'=> $category->term_id,'orderby'=> 'id','order'=> 'ASC','hide_empty'=> 0,'taxonomy'=> 'setmenu-category',);
			$subcategories = get_categories( $subargs );
			if($subcategories) {
					echo '<ul>';
					foreach ( $subcategories as $subcategory ) {
					echo '<li class="has-sub">'; ?> <a id="c2-<?php echo $subcategory->term_id; ?>" href="#" onClick="getMenu('c2','<?php echo $subcategory->term_id;?>');return false;"><span><?php echo $subcategory->name; ?></span><span class="holder"></span></a>
        <?php 
                        query_posts( array( 'post_type' => 'setmenu','showposts' => -1,'tax_query' => array(
                            array(
                                'taxonomy' => 'setmenu-category',
                                'terms' => $subcategory->term_id,
                                'field' => 'term_id',
                                )
                        ),
                        'orderby' => 'title',
                        'order' => 'ASC' )
                        ); 
                            if( have_posts() ){
                                echo '<ul>';
                                        while ( have_posts() ) : the_post();
                                        echo '<li>'; 
                                            ?>
        <?php $pid = get_the_ID(); ?>
        <a href="#" id="p-<?php echo $pid; ?>" onClick="getMenu('p','<?php echo $pid;?>');return false;" class=""><span>- 
        <?php the_title(); ?>
        </span></a>
        <?php 
                                        echo '</li>';
										 endwhile;
                                echo '</ul>';
                           
                            }//end if
						wp_reset_query();
					echo '</li>';
		}//end foreach
		echo '</ul>';	
	}//end if
}
echo '<li>';
echo '</ul>';
?>
      </div>
      <!--End cssmenu-->
      
      <?php


foreach (get_terms($your_taxonomy, array('hide_empty'=>0, 'parent'=>0)) as $each) {
    echo my_Categ_tree($each->taxonomy,$each->term_id);
}

?>
      <div class="col-right">
        <div id="cnt-cate"></div>
      </div>
      <br class="clear"/>
    </div>
    <!--END wr-set--> 
  </section>
  <!--END content-set--> 
  
</main>
<?php get_footer(); ?>
