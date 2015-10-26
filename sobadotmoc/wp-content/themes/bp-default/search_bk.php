<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/search.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/jquery.paginate.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/jqClock.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			 $("#clock4").clock({"format":"24","seconds":"false", "calendar":"false"});                                   
			});    
		  </script>
<?php $th=mktime(gmdate("H")+7,gmdate("i"),gmdate("m"),gmdate("d"),gmdate("Y"));
$format="H:i:s";
$time=date($format,$th);
?>

<div id="content" style="width:1200px; margin:0 auto; margin-bottom: 60px;">
<div class="social">
         	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/tw-icon.png"></li>
          	<li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/fb-icon.png"></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/yt-icon.png"></li>
            <li><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/ig-icon.png"></li>
         </div>
	
	<div class="padder">
	
	<?php do_action( 'bp_before_blog_search' ); ?>

           <div class="content-by-meal" style="height: 195px; margin-bottom: 5px; background: url('<?php bloginfo('stylesheet_directory'); ?>/_inc/images/bg.jpg') top center no-repeat;">
          
					<?php include_once('bg-time.php');?> 
      
        	</div><!-- End content-by-meal -->
		  
 <?php  $sql_total = "SELECT DISTINCT post_title,guid, post_id FROM wp_posts INNER JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id 
							WHERE (post_type ='bistro' OR post_type ='recipes' OR post_type ='article') AND (post_title LIKE '%".get_search_query()."%' OR 
							meta_value LIKE '%".get_search_query()."%')";
							$query_total = $wpdb->get_results($sql_total);
							$num_total = $wpdb->num_rows;
		  if ($num_total == 0) {
	?>
	 <div class="box_search_not_fond">
     		<div class="img_not_fond">
            <a href="http://foodsawasdee.cpf.co.th/add-recipe/"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/add-recipe-search.png" class="add-recipes"/>  </a>
            <a href="http://foodsawasdee.cpf.co.th/create-bistro/"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/add-bistro-search.png" class="add-bistro"/></a>
            </div>
 
     </div>   
		 <?php }else{ ?>
	<side>
        <div class="side_title_bg side_title">ลบทั้งหมด</div>
        <ul class="menu">
		<li class="item1"><a href="#">ช่วงเวลา<span></span></a>
			<ul style="margin-bottom:10px;">
            	 <div class="tags">
                 <li class="checkbox_search"><input type="checkbox" id="checkbox1" class="css-checkbox" rel="breakfast" />
                 <label for="checkbox1" class="css-label">06.00 น. - 11.00</label></li>
                 <li class="checkbox_search"><input type="checkbox" id="checkbox2" class="css-checkbox" rel="lunch" />
                 <label for="checkbox2" class="css-label">11.00 น. - 22.00</label></li>
                 <li class="checkbox_search"><input type="checkbox" id="checkbox3" class="css-checkbox" rel="dinner" />
                 <label for="checkbox3" class="css-label">18.00 น. - 24.00</label></li>
                 <li class="checkbox_search"><input type="checkbox" id="checkbox4" class="css-checkbox" rel="supper" />
                 <label for="checkbox4" class="css-label">20.00 น. - 04.00</label></li>
                 <li class="checkbox_search"><input type="checkbox" id="checkbox5" class="css-checkbox" rel="all" />
                 <label for="checkbox5" class="css-label">24 ชม.</label></li>
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item2"><a href="#">สัญชาติอาหาร<span></span></a>
			<ul style="margin-bottom:10px;">
            <div class="tags">
            	<li class="checkbox_search"><input type="checkbox" id="checkbox6" class="css-checkbox" rel="ไทย" />
                <label for="checkbox6" class="css-label">ไทย</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox7" class="css-checkbox" rel="chinese" />
                <label for="checkbox7" class="css-label">จีน</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox8" class="css-checkbox" rel="พม่า" />
                <label for="checkbox8" class="css-label">เวียดนาม</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox9" class="css-checkbox" rel="Japanese" />
                <label for="checkbox9" class="css-label">ญี่ปุ่น</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox10" class="css-checkbox" rel="Korean" />
                <label for="checkbox10" class="css-label">เกาหลี</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox11" class="css-checkbox" rel="Indian" />
                <label for="checkbox11" class="css-label">อินเดีย</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox12" class="css-checkbox" rel="อิตาเลียน" />
                <label for="checkbox12" class="css-label">อิตาเลียน</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox13" class="css-checkbox" rel="French" />
                <label for="checkbox13" class="css-label">ฝรั่งเศส</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox14" class="css-checkbox" rel="American" />
                <label for="checkbox14" class="css-label">อเมริกา</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox15" class="css-checkbox" rel="Inter" />
                <label for="checkbox15" class="css-label">นานาชาติ</label></li>
              </div>  
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item3"><a href="#">ประเภทอาหาร<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" id="checkbox16" class="css-checkbox" rel="Inter" />
                <label for="checkbox16" class="css-label">อาหารจานเดียว</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox17" class="css-checkbox" rel="Inter" />
                <label for="checkbox17" class="css-label">อาหารจานหลัก</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox18" class="css-checkbox" rel="Inter" />
                <label for="checkbox18" class="css-label">อาหารตามสั่ง</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox19" class="css-checkbox" rel="Inter" />
                <label for="checkbox19" class="css-label">อาหารว่าง</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox20" class="css-checkbox" rel="Inter" />
                <label for="checkbox20" class="css-label">อาหารฟิวชั่น</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox21" class="css-checkbox" rel="Inter" />
                <label for="checkbox21" class="css-label">อาหารมังสวิรัติ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox22" class="css-checkbox" rel="Inter" />
                <label for="checkbox22" class="css-label">อาหารเจ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox23" class="css-checkbox" rel="Inter" />
                <label for="checkbox23" class="css-label">อาหารปักษ์ใต้</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox24" class="css-checkbox" rel="Inter" />
                <label for="checkbox24" class="css-label">อาหารเหนือ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox25" class="css-checkbox" rel="Inter" />
                <label for="checkbox25" class="css-label">อาหารอีสาน</label></li>
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item4"><a href="#">ประเภทร้าน<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" id="checkbox26" class="css-checkbox" rel="Inter" />
                <label for="checkbox26" class="css-label">ร้านสาขา</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox27" class="css-checkbox" rel="Inter" />
                <label for="checkbox27" class="css-label">ร้านบนดาดฟ้า</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox28" class="css-checkbox" rel="Inter" />
                <label for="checkbox28" class="css-label">ร้านอาหารริมน้ำ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox29" class="css-checkbox" rel="Inter" />
                <label for="checkbox29" class="css-label">ร้านอาหารทะเล</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox30" class="css-checkbox" rel="Inter" />
                <label for="checkbox30" class="css-label">ร้านไวน์</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox31" class="css-checkbox" rel="Inter" />
                <label for="checkbox31" class="css-label">ร้านอาหารบุฟเฟ่ต์</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox32" class="css-checkbox" rel="Inter" />
                <label for="checkbox32" class="css-label">เดลิเวอรี่</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox33" class="css-checkbox" rel="Inter" />
                <label for="checkbox33" class="css-label">เที่ยวกลางคืน ผับ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox34" class="css-checkbox" rel="Inter" />
                <label for="checkbox34" class="css-label">กึ่งผับ/บาร์</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox35" class="css-checkbox" rel="Inter" />
                <label for="checkbox35" class="css-label">คาราโอเกะ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox36" class="css-checkbox" rel="Inter" />
                <label for="checkbox36" class="css-label">ร้านในโรงแรม</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox37" class="css-checkbox" rel="Inter" />
                <label for="checkbox37" class="css-label">ดนตรีสด</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox38" class="css-checkbox" rel="Inter" />
                <label for="checkbox38" class="css-label">ร้านกาแฟ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox39" class="css-checkbox" rel="Inter" />
                <label for="checkbox39" class="css-label">รถเข็น แผงลอย</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox40" class="css-checkbox" rel="Inter" />
                <label for="checkbox40" class="css-label">จัดส่งเท่านั้น</label></li>
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item2"><a href="#">บริการพิเศษ<span></span></a>
			<ul style="margin-bottom:10px;">
            <div class="tags">
            	<li class="checkbox_search"><input type="checkbox" id="checkbox41" class="css-checkbox" rel="have_internet" />
                <label for="checkbox41" class="css-label">อินเตอร์เนต</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox42" class="css-checkbox" rel="have_parking" />
                <label for="checkbox42" class="css-label">ที่จอดรถ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox43" class="css-checkbox" rel="have_credit" />
                <label for="checkbox43" class="css-label">รับบัตรเครดิต</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox44" class="css-checkbox" rel="have_alcohol" />
                <label for="checkbox44" class="css-label">เครื่องดื่มแอลกฮอลล์</label></li>
            </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
        <li class="item4"><a href="#">ราคารอาหาร<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" id="checkbox45" class="css-checkbox" rel="rate1" />
                <label for="checkbox45" class="css-label">< น้อยกว่า100 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox46" class="css-checkbox" rel="rate2" />
                <label for="checkbox46" class="css-label">101 > 300 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox47" class="css-checkbox" rel="rate3" />
                <label for="checkbox47" class="css-label">301 > 500 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox48" class="css-checkbox" rel="rate4" />
                <label for="checkbox48" class="css-label">501 > 1000 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox49" class="css-checkbox" rel="rate5" />
                <label for="checkbox49" class="css-label">มากกว่า 1000 บาท</label></li>
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
        	<li class="item4"><a href="#">อาหาร 5 ภาค<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" id="checkbox50" class="css-checkbox" rel="rate5" />
                <label for="checkbox50" class="css-label">อาหารภาคเหนือ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox51" class="css-checkbox" rel="rate5" />
                <label for="checkbox51" class="css-label">อาหารภาคกลาง</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox52" class="css-checkbox" rel="rate5" />
                <label for="checkbox52" class="css-label">อาหารภาคตะวันออก</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox53" class="css-checkbox" rel="rate5" />
                <label for="checkbox53" class="css-label">อาหารภาคตะวันออกเฉียงเหนือ</label></li>
                <li class="checkbox_search"><input type="checkbox" id="checkbox54" class="css-checkbox" rel="rate5" />
                <label for="checkbox54" class="css-label">อาหารภาคใต้</label></li>
                </div>
			</ul>
		</li>
	</ul>
	</side>
   
        <box_search>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/search_cat.png"/>
        <div class="cleaner_h30"></div> 
        
 <!--------------------------------box_search 1 Restarant--------------------------------------------------> 
 
 
            	<div class="tab_tite_red"><div class="tab_text_search">แนะนำร้านอาหาร ยอดนิยม <span style="color:#fff100;"><?php printf( __( '%s', 'weblizar' ), '<span>' . get_search_query() . '</span>' ); ?></span> ในกรุงเทพและปริมณฑล</div></div>


             <div id="content_search" class="defaults">
                 
                   <?php 
				  	 $sql = "SELECT DISTINCT post_title,guid, post_id FROM wp_posts INNER JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id 
							WHERE post_type ='bistro' AND post_status= 'publish' AND  (post_title LIKE '%".get_search_query()."%' OR 
							meta_value LIKE '%".get_search_query()."%')";
							$query = $wpdb->get_results($sql);
							$num = $wpdb->num_rows;
				  ?>
                 
                  <?php if ($num == 0) {
                       	echo "<center>ไม่พบข้อมูลที่ต้องการ</center><br>"; 
                    ?>
                    
				   <?php } else { ?>
                   <ul id="itemContainer">
                	
                    	
                   <?php  foreach ( $query as $result  ) { 
				    	$t =  ( get_post_meta( $result->post_id, 'bistro_national', true ) );
  					?>
 					<li>
					<ul class="results">
					 <li class="box_red_one<?php echo get_post_meta( $result->post_id, 'bistro_time', true ); ?> <?php foreach ( (array) $t as $ka => $va ) { echo $va." "; } ?> <?php echo get_post_meta( $result->post_id, 'bistro_food_type', true ); ?> <?php echo get_post_meta( $result->post_id, 'bistro_type', true ); ?> <?php echo get_post_meta( $result->post_id, 'bistro_parking', true ); ?> <?php echo get_post_meta( $result->post_id, 'bistro_credit', true ); ?> <?php echo get_post_meta( $result->post_id, 'bistro_internet', true ); ?> <?php echo get_post_meta( $result->post_id, 'bistro_alcohol', true ); ?>  <?php echo get_post_meta( $result->post_id, 'bistro_price', true ); ?> <?php echo get_post_meta( $result->post_id, 'recipe_national', true ); ?> <?php echo get_post_meta( $result->post_id, 'recipe_food_type', true ); ?> <?php echo get_post_meta( $result->post_id, 'recipe_zone', true ); ?>" style="margin-left:3px; margin-right:3px;">
              	 
                        	<div class="box_red_one_title">
                            <span class="box_red_one_text"><?php echo substr_utf8( $result->post_title, 0 , 28); ?></span>
                            <?php $sqlRating = "SELECT v3.meta_value AS rating
															FROM wp_postmeta v1
															INNER JOIN wp_posts v2
															ON v1.post_id =v2.ID
															LEFT  JOIN wp_postmeta v3
															ON v1.post_id=v3.post_id AND v3.meta_key='review_rating'
															WHERE v1.meta_value='".$result->post_id."'  
															AND v1.meta_key='review_bistroid' AND v2.post_status='publish'";
															//echo $sqlRating;
												$resultRating = $wpdb->get_results($sqlRating);
												$Img_num_rows = $wpdb->num_rows;
												$point=0;
												foreach ($resultRating as $keyRating){
													$point += $keyRating->rating;
												} 
												if($Img_num_rows!=0){
													$percentRating = $point*(100/(5*$Img_num_rows));
												}else{
													$percentRating = 0;
												}
												?>
													<div class="stars" >
														<div class="rate" style="width:<?php echo $percentRating;?>%"></div>
														<input type="radio" name="rating2" id="star5" value="5">
														<input type="radio" name="rating2" id="star4" value="4">
														<input type="radio" name="rating2" id="star3" value="3">
														<input type="radio" name="rating2" id="star2" value="2">
														<input type="radio" name="rating2" id="star1" value="1">
													</div>    
                            </div>
                            <div style="width:298px; height:180px; overflow:hidden;">

					 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $result->post_id ), 'recipe2' ); ?>
								<!--<a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>" width="335" /></a>-->
                                <img src="<?php echo $image[0]; ?>" width="297" />
      
                              </div>             

						
                                <div class="icon_red_search_content">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/gps_icon_search.png" style="float:left;">

                                   <div class="detail-data">
                                    <?php  echo substr_utf8 (get_post_meta( $result->post_id, 'bistro_soi', true ),0,15); ?> 
									<?php  echo substr_utf8 (get_post_meta( $result->post_id, 'bistro_street', true ),0,15); ?>
                                    
                                    </div>               
                                    <div class="cleaner_h5"></div>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/typefood_icon_search.png" style="float:left;">
                                    <div class="detail-data">
								   <?php echo get_post_meta( $result->post_id, 'bistro_type', true ); ?> 
                                   </div>
                                </div>
                                    <div class="cleaner"></div>
                                        <div class="bg_readmore_search">
                                        <span class="text_readmore">
                                        <a href="<?php echo $result->guid; ?>">อ่านต่อ
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/readmore_search_icon.png" class="bt_readmore" /></a>
                                        </span>
                            			</div>
                              
                     </li></ul>
                	 </li>
					 <?php }  ?>
             
                    </ul>
                    <div class="cleaner"></div>
                     <!-- navigation holder -->
 					 <div class="holder" style="margin-left: 140px; margin-top: 0px;"></div>
                 <?php  } ?>  
                </div> <!--! end of #content -->


            <div class="cleaner_h50"></div>
            
<!--------------------------------box_search 1 Menu-------------------------------------------------->            
             <div class="tab_tite_blue"><div class="tab_text_search">แนะนำสูตรอาหาร ยอดนิยม <span style="color:#fff100;"><?php printf( __( '%s', 'weblizar' ), '<span>' . get_search_query() . '</span>' ); ?></span> ใน Food Sawasdee</div></div>
             
                <div id="content_search" class="defaults">
                    <?php 				
					  $sql_me = "SELECT DISTINCT post_title,guid, post_id FROM wp_posts INNER JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id 
							WHERE post_type ='recipes' AND post_status= 'publish' AND (post_title LIKE '%".get_search_query()."%' OR 
							meta_value LIKE '%".get_search_query()."%')";	
							$query_me = $wpdb->get_results($sql_me);
							$num_me = $wpdb->num_rows;
				    ?>
                    
                     <?php if ($num_me == 0) {
                       	echo "<center>ไม่พบข้อมูลที่ต้องการ</center><br>"; 
                    ?>
				   <?php } else { ?>
                	<ul id="itemContainer_menu">
                    	
                    <?php  foreach ($query_me as $result){  ?>
                    <li>
                		<ul class="results">
               
					 <li class="box_blue_one <?php echo get_post_meta( $result->post_id, 'recipe_national', true ); ?> <?php echo get_post_meta( $result->post_id, 'recipe_food_type', true ); ?> <?php echo get_post_meta( $result->post_id, 'recipe_zone', true ); ?>" style="margin-left:3px; margin-right:3px;">
                        	<div class="box_blue_one_title"><span class="box_blue_one_text"><?php echo substr_utf8( $result->post_title, 0 , 28); ?></span>
                             
                            </div>
                             <div style="width:298px; height:180px; overflow:hidden;">

							 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $result->post_id ), 'recipe2' ); ?>
								<!--<a href="<?php the_permalink();?>"><img src="<?php echo $image[0]; ?>" width="335" /></a>-->
                                <img src="<?php echo $image[0]; ?>" width="297" />
                             </div>   
                               
                            <div class="icon_red_search_content">
                            	<img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/material_icon_search.png" style="float:left;">
                            <div class="detail-data">วัตถุดิบ :  <?php  echo substr_utf8 (get_post_meta( $result->post_id, 'main-ingredient', true ),0,15); ?></div>
                                <div class="cleaner_h5"></div>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/typefood_icon_search.png" style="float:left;">
                              <div class="detail-data"> <?php  echo substr_utf8 (get_post_meta( $result->post_id, 'recipe-type', true ),0,15); ?></div>
                            </div>
                            <div class="cleaner"></div>
                            <div class="bg_readmore_search">
                            <span class="text_readmore">
                         	<a href="<?php echo $result->guid; ?>">อ่านทั้งหมด
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/readmore_search_icon.png" class="bt_readmore" /></a>
                            </span></div>
                     </li></ul>
                	 </li>
					 <?php }  ?>
             
                    </ul>
                    <div class="cleaner"></div>
                     <!-- navigation holder -->
 					 <div class="holder_menu" style="margin-left: 140px; margin-top: 0px;"></div>
                 <?php  } ?>  
                </div> <!--! end of #content -->
               <div class="cleaner_h50"></div>
               
               
               
               
      		<!--------------------------------box_search 1 Article--------------------------------------------------> 

             <div class="tab_tite_green"><div class="tab_text_search">บทความ <span style="color:#fff100;"><?php printf( __( '%s', 'weblizar' ), '<span>' . get_search_query() . '</span>' ); ?></span> ใน Food Sawasdee</div></div>
               	 <div id="content_search" class="defaults">
                	<?php 

							$sql_a = "SELECT * FROM wp_posts WHERE post_type ='likesara' AND post_status= 'publish' AND (post_title LIKE '%".get_search_query()."%' 
					  		OR post_content LIKE '%".get_search_query()."%')";
							$query_a = $wpdb->get_results($sql_a);
							$num_a = $wpdb->num_rows;

				  ?>
                    
                     <?php if ($num_a == 0) {
                       	echo "<center>ไม่พบข้อมูลที่ต้องการ</center><br>"; 
                    ?>
				   <?php } else { ?>
                	<ul id="itemContainer_article">
                    <?php  foreach ($query_a as $result){  ?>
                     <li>
              			<div class="box_green_one" style="margin-left:3px; margin-right:3px;">
                        	<div class="box_green_one_title">
                            	<span class="box_green_one_text"><?php echo substr_utf8( $result->post_title, 0 , 28); ?></span>
                            </div>
                            <div style="width:298px; height:180px; overflow:hidden;">
							 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $result->ID ), 'likesara' ); ?>
                                <img src="<?php echo $image[0]; ?>" width="297" />
                             </div> 
                               
                            <div class="icon_red_search_content">
                            	<img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/review_icon_search.png" style="float:left;">
                                <div class="detail-data">3260 ชื่นชอบ</div>
                                <div class="cleaner_h2"></div>
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/time_icon_search.png" style="float:left;">
                                <div class="detail-data"><?php the_time(); ?></div>
                            </div>
                            <div class="cleaner"></div>
                            <div class="bg_readmore_search">
                            <span class="text_readmore">
                            <a href="<?php echo $result->guid; ?>">อ่านทั้งหมด
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/readmore_search_icon.png" class="bt_readmore" /></a>
                            </span>
                            </div>
                  		</div>
                    
                	 </li>
					 <?php }  ?>
             
                    </ul>
                    <div class="cleaner"></div>
                     <!-- navigation holder -->
 					 <div class="holder_article" style="margin-left: 140px; margin-top: 0px;"></div>
                 <?php  } ?>  
                </div> <!--! end of #content -->
               <div class="cleaner_h50"></div>
                
			<div class="cleaner_h30"></div>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/bg_footer_search.png" /></a>
                
		</box_search>
      <?php } ?>
	</div><!-- .padder -->
</div><!-- #content -->
<div class="cleaner_h30"></div>
<?php get_footer(); ?>

<script>
$(document).ready(function () {
    
    
    $('div.tags').find('input:checkbox').live('click', function () {  
        var chk = [];
        if($('.tags input[type="checkbox"]:checked').size()!=0){
            $('.tags input[type="checkbox"]:checked').each(function(index){
                chk[index] = $(this).attr('rel');
            });
            $('.results li').hide();
            for(e=0;e<chk.length;e++){ 
                $('.results li.'+chk[e]).show();
            }
            
        }else{
            $('.results li').show();
        }
    });
});
</script>

<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>

  <script>
  $(function() {
    $("div.holder").jPages({
      containerID : "itemContainer",
      <!--first       : "หน้าแรก",-->
      previous    : "หน้าก่อนหน้า",
      next        : "หน้าถัดไป",
      <!--last        : "หน้าสุดท้าย"-->
    });
	
	 $("div.holder_menu").jPages({
      containerID : "itemContainer_menu",
      <!--first       : "หน้าแรก",-->
      previous    : "หน้าก่อนหน้า",
      next        : "หน้าถัดไป",
      <!--last        : "หน้าสุดท้าย"-->
    });
	
	 $("div.holder_article").jPages({
      containerID : "itemContainer_article",
      <!--first       : "หน้าแรก",-->
      previous    : "หน้าก่อนหน้า",
      next        : "หน้าถัดไป",
      <!--last        : "หน้าสุดท้าย"-->
    });

  });
  </script>



