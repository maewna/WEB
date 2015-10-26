<?php /* Template Name: All Bistro Page*/?>
<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/outsideHome.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/component.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/allBistro.css" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/_inc/css/search.css">
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->

<script>
$(function() {
	
	var meal = new Array();
	var national = new Array();
	var foodtype = new Array();
	var bistrotype = new Array();
	var service = new Array();
	var price = new Array();
	$(".css-checkbox").click(function() {
		var rel = $(this).attr('rel');
		var name = $(this).attr('name');
		if(name=='meal'){
			if (inArray(rel,meal)) {
				removeA(meal,rel);
			}else{
				meal.push(rel);
			}
		}
		if(name=='national'){
			if (inArray(rel,national)) {
				removeA(national,rel);
			}else{
				national.push(rel);
			}
		}
		if(name=='foodtype'){
			if (inArray(rel,foodtype)) {
				removeA(foodtype,rel);
			}else{
				foodtype.push(rel);
			}
		}
		if(name=='bistrotype'){
			if (inArray(rel,bistrotype)) {
				removeA(bistrotype,rel);
			}else{
				bistrotype.push(rel);
			}
		}
		if(name=='service'){
			if (inArray(rel,service)) {
				removeA(service,rel);
			}else{
				service.push(rel);
			}
		}
		if(name=='price'){
			if (inArray(rel,price)) {
				removeA(price,rel);
			}else{
				price.push(rel);
			}
		}
		
		//alert(myCheckboxes);
	    $.ajax({
			type: "GET",
			dataType : "json",
			data:{ meal: meal,national: national,foodtype: foodtype,bistrotype: bistrotype,service: service,price: price},
			url: '<?php echo get_template_directory_uri(); ?>/filterBistro.php',
			beforeSend: function() {
				$('#grid').html("<div align='center' style='margin-top:100px'><img src='<?php bloginfo('stylesheet_directory'); ?>/_inc/images/ajax-loader2.gif'/></div>");
			  },
			success: function(data){
				document.getElementById("grid").innerHTML = '';
				for (var i = 0; i < data.length; i++) {
					document.getElementById("grid").innerHTML += data[i];
				}
				new AnimOnScroll( document.getElementById( 'grid' ), {
					minDuration : 0.4,
					maxDuration : 0.7,
					viewportFactor : 0.2
				} );
			}
			
		});
	});
});
function inArray(needle, haystack) {
    var length = haystack.length;
    for(var i = 0; i < length; i++) {
        if(haystack[i] == needle) return true;
    }
    return false;
}
function removeA(arr) {
    var what, a = arguments, L = a.length, ax;
    while (L > 1 && arr.length) {
        what = a[--L];
        while ((ax= arr.indexOf(what)) !== -1) {
            arr.splice(ax, 1);
        }
    }
    return arr;
}
</script>
<?php $th=mktime(gmdate("H")+7,gmdate("i"),gmdate("m"),gmdate("d"),gmdate("Y"));
$format="H:i:s";
$time=date($format,$th);
?>
<nav id="navigation" role="navigation">
    	<ul id="menu-main_nav">
        	<li class="menu-home_page"><a href="<?php echo home_url(); ?>/recipes/"><i class="icon1"> </i>อร่อยในบ้าน</a></li>
            <li class="menu-home_page active"><a href="<?php echo home_url(); ?>/bistro/"><i class="icon2"> </i>อร่อยนอกบ้าน</a></li>
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
							<li class="menu-quick-easy_page "><a href="<?php echo home_url(); ?>/special_review/" style="width:220px">สเปเชียลรีวิว</a></li>
							<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/variety/" style="width:220px">วาไรตี้ร้านอร่อย</a></li>
							<li class="menu-quick-easy_page"><a href="<?php echo home_url(); ?>/create-bistro/" style="width:220px"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/new-icon.png" style="position: absolute;margin-left: -30px;margin-top: 6px;">สร้างร้านอาหาร</a></li>
							<li class="menu-quick-easy_page active"><a href="<?php echo home_url(); ?>/allbistro/" style="width:220px">ร้านอาหารทั้งหมด</a></li>
						</ul>
					</nav>
        
					<?php include_once('wp-content/themes/bp-default/bg-time.php');?>
      
        	</div><!-- End content-by-meal -->

            		  
 <?php  $sql_total =   "SELECT DISTINCT post_title,guid, post_id FROM wp_posts 
						LEFT JOIN wp_postmeta ON wp_posts.ID = wp_postmeta.post_id 
						WHERE post_type ='bistro' AND  post_status='publish'";
		$query_total = $wpdb->get_results($sql_total);
		$num_total = $wpdb->num_rows;
		if ($num_total == 0) {
	?>
	 <div class="box_search_not_fond">
     		<div class="img_not_fond">
            <a href="../create-recipe/"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/add-recipe-search.png" class="add-recipes"/>  </a>
            <a href="../create-bistro/"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/add-bistro-search.png" class="add-bistro"/></a>
            </div>
 
     </div>
                     
		 <?php }else{ ?>
		 <div style='margin-top:20px;background-color:white;width:280px;height:400px;position:absolute'>
		<side style="margin-top:20px;">
        <div class="side_title_bg side_title">ตัวกรอง</div>
        <ul class="menu">
		<li class="item1"><a href="#">ช่วงเวลา<span></span></a>
			<ul style="margin-bottom:10px;">
            	 <div class="tags">
                 <li class="checkbox_search"><input type="checkbox" name="meal" id="checkbox1" class="css-checkbox" rel="breakfast" />
                 <label for="checkbox1" class="css-label">05.00-10.59</label></li>
                 <li class="checkbox_search"><input type="checkbox" name="meal" id="checkbox2" class="css-checkbox" rel="lunch" />
                 <label for="checkbox2" class="css-label">11.00-14.59</label></li>
                 <li class="checkbox_search"><input type="checkbox" name="meal" id="checkbox3" class="css-checkbox" rel="dinner" />
                 <label for="checkbox3" class="css-label">15.00-18.59</label></li>
                 <li class="checkbox_search"><input type="checkbox" name="meal" id="checkbox4" class="css-checkbox" rel="supper" />
                 <label for="checkbox4" class="css-label">19.00-21.59</label></li>
                <li class="checkbox_search"><input type="checkbox" name="meal" id="checkbox5" class="css-checkbox" rel="night" />
                 <label for="checkbox5" class="css-label">22.00-04.59</label></li>
                <!-- <li class="checkbox_search"><input type="checkbox" name="meal" id="checkbox5" class="css-checkbox" rel="all" />
                 <label for="checkbox5" class="css-label">24 ชม.</label></li> -->
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item2"><a href="#">สัญชาติอาหาร<span></span></a>
			<ul style="margin-bottom:10px;">
            <div class="tags">
            	<li class="checkbox_search"><input type="checkbox" name="national" id="checkbox6" class="css-checkbox" rel="inter" />
                <label for="checkbox6" class="css-label">นานาชาติ</label></li>
            	<li class="checkbox_search"><input type="checkbox" name="national" id="checkbox7" class="css-checkbox" rel="thai" />
                <label for="checkbox7" class="css-label">ไทย</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox8" class="css-checkbox" rel="china" />
                <label for="checkbox8" class="css-label">จีน</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox9" class="css-checkbox" rel="japan" />
                <label for="checkbox9" class="css-label">ญี่ปุ่น</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox10" class="css-checkbox" rel="korea" />
                <label for="checkbox10" class="css-label">เกาหลี</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox11" class="css-checkbox" rel="vietnam" />
                <label for="checkbox11" class="css-label">เวียดนาม</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox12" class="css-checkbox" rel="italy" />
                <label for="checkbox12" class="css-label">อิตาเลียน</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox13" class="css-checkbox" rel="franch" />
                <label for="checkbox13" class="css-label">ฝรั่งเศษ</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox14" class="css-checkbox" rel="america" />
                <label for="checkbox14" class="css-label">อเมริกัน</label></li>
                <li class="checkbox_search"><input type="checkbox" name="national" id="checkbox15" class="css-checkbox" rel="india
                " />
                <label for="checkbox15" class="css-label">อินเดีย</label></li>
              </div>  
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item3"><a href="#">ประเภทอาหาร<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox16" class="css-checkbox" rel="alacarte" />
                <label for="checkbox16" class="css-label">อาหารจานเดียว</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox17" class="css-checkbox" rel="maincourse" />
                <label for="checkbox17" class="css-label">อาหารจานหลัก</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox18" class="css-checkbox" rel="toorder" />
                <label for="checkbox18" class="css-label">อาหารตามสั่ง</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox19" class="css-checkbox" rel="snacks" />
                <label for="checkbox19" class="css-label">อาหารว่าง</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox20" class="css-checkbox" rel="fusion" />
                <label for="checkbox20" class="css-label">อาหารฟิวชั่น</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox21" class="css-checkbox" rel="vegetarian" />
                <label for="checkbox21" class="css-label">อาหารมังสวิรัติ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox22" class="css-checkbox" rel="jfood" />
                <label for="checkbox22" class="css-label">อาหารเจ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="arabfood" class="css-checkbox" rel="arabfood" />
                <label for="arabfood" class="css-label">อาหารอาหรับ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="halalfood" class="css-checkbox" rel="halalfood" />
                <label for="halalfood" class="css-label">อาหารฮาลาล</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox23" class="css-checkbox" rel="southfood" />
                <label for="checkbox23" class="css-label">อาหารปักษ์ใต้</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox24" class="css-checkbox" rel="northfood" />
                <label for="checkbox24" class="css-label">อาหารเหนือ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox25" class="css-checkbox" rel="northeastfood" />
                <label for="checkbox25" class="css-label">อาหารอีสาน</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox26" class="css-checkbox" rel="seafood" />
                <label for="checkbox26" class="css-label">อาหารซีฟู๊ด</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox27" class="css-checkbox" rel="somtum" />
                <label for="checkbox27" class="css-label">ส้มตำ น้ำตก</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox28" class="css-checkbox" rel="dishes" />
                <label for="checkbox28" class="css-label">กับข้าว</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox29" class="css-checkbox" rel="dessert" />
                <label for="checkbox29" class="css-label">ขนม/ของหวาน</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox30" class="css-checkbox" rel="babyfood" />
                <label for="checkbox30" class="css-label">สำหรับเด็ก</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox31" class="css-checkbox" rel="shabusuki" />
                <label for="checkbox31" class="css-label">ชาบู/สุกี้</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox32" class="css-checkbox" rel="grillbarbecue" />
                <label for="checkbox32" class="css-label">ปิ้งย่าง/บาร์บีคิว</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="foodtype" id="checkbox33" class="css-checkbox" rel="drinking" />
                <label for="checkbox33" class="css-label">เครื่องดื่ม</label></li>
                
                
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item4"><a href="#">ประเภทร้าน<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox34" class="css-checkbox" rel="hotelBistro" />
                <label for="checkbox34" class="css-label">ร้านในโรงแรม</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox35" class="css-checkbox" rel="buffet" />
                <label for="checkbox35" class="css-label">ร้านบุฟเฟต์</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox36" class="css-checkbox" rel="barbecue" />
                <label for="checkbox36" class="css-label">ร้านปิ้งย่าง</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox37" class="css-checkbox" rel="sukiyaki" />
                <label for="checkbox37" class="css-label">ร้านสุกี้/ชาบู</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox38" class="css-checkbox" rel="fastfood" />
                <label for="checkbox38" class="css-label">ร้านฟาสท์ฟู้ดส์</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox39" class="css-checkbox" rel="stall" />
                <label for="checkbox39" class="css-label">ร้านรถเข็นแผงลอย</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox40" class="css-checkbox" rel="pubbar" />
                <label for="checkbox40" class="css-label">กึ่งผับ/บาร์</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox41" class="css-checkbox" rel="branch" />
                <label for="checkbox41" class="css-label">ร้านสาขา</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox42" class="css-checkbox" rel="bakery" />
                <label for="checkbox42" class="css-label">เบเกอรี่</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox43" class="css-checkbox" rel="delivery" />
                <label for="checkbox43" class="css-label">Delivery</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox44" class="css-checkbox" rel="onlineBistro" />
                <label for="checkbox44" class="css-label">ไม่มีหน้าร้าน จัดส่งเท่านั้น</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox45" class="css-checkbox" rel="healthfood" />
                <label for="checkbox45" class="css-label">อาหารเพื่อสุขภาพ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox46" class="css-checkbox" rel="rooftop" />
                <label for="checkbox46" class="css-label">ร้าน Rooftop</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox47" class="css-checkbox" rel="ramen" />
                <label for="checkbox47" class="css-label">ร้านราเมง</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox48" class="css-checkbox" rel="coffee" />
                <label for="checkbox48" class="css-label">ร้านกาแฟ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox49" class="css-checkbox" rel="livemusic" />
                <label for="checkbox49" class="css-label">ร้านดนตรีสด</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox50" class="css-checkbox" rel="karaoke" />
                <label for="checkbox50" class="css-label">ร้านคาราโอเกะ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox51" class="css-checkbox" rel="agreable" />
                <label for="checkbox51" class="css-label">บรรยากาศดี</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox52" class="css-checkbox" rel="meeting" />
                <label for="checkbox52" class="css-label">เหมาะแก่การสังสรรค์</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox53" class="css-checkbox" rel="alcohol" />
                <label for="checkbox53" class="css-label">เครื่องดื่มแอลกฮอล์</label></li>
                
             	<li class="checkbox_search"><input type="checkbox" name="bistrotype" id="checkbox54" class="css-checkbox" rel="untildawn" />
                <label for="checkbox54" class="css-label">ร้านเปิดดึก</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="deluxe" class="css-checkbox" rel="deluxe" />
                <label for="deluxe" class="css-label">ห้องอาหาร/ระดับหรู</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="cafe" class="css-checkbox" rel="cafe" />
                <label for="cafe" class="css-label">คาเฟ่</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="sushiBistro" class="css-checkbox" rel="sushiBistro" />
                <label for="sushiBistro" class="css-label">ร้านซูชิ</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="mallBistro" class="css-checkbox" rel="mallBistro" />
                <label for="mallBistro" class="css-label">ร้านในห้าง</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="buildingBistro" class="css-checkbox" rel="buildingBistro" />
                <label for="buildingBistro" class="css-label">ร้านอาคารพาณิชย์</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="familyBistro" class="css-checkbox" rel="familyBistro" />
                <label for="familyBistro" class="css-label">เหมาะสำหรับครอบครัว</label></li>
                
                <li class="checkbox_search"><input type="checkbox" name="bistrotype" id="foodtruck" class="css-checkbox" rel="foodtruck" />
                <label for="foodtruck" class="css-label">Food Truck</label></li>
				
               
                </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
		<li class="item2"><a href="#">บริการพิเศษ<span></span></a>
			<ul style="margin-bottom:10px;">
            <div class="tags">
            	<li class="checkbox_search"><input type="checkbox" name="service" id="checkbox55" class="css-checkbox" rel="have_internet" />
                <label for="checkbox55" class="css-label">อินเตอร์เนต</label></li>
                <li class="checkbox_search"><input type="checkbox" name="service" id="checkbox56" class="css-checkbox" rel="have_parking" />
                <label for="checkbox56" class="css-label">ที่จอดรถ</label></li>
                <li class="checkbox_search"><input type="checkbox" name="service" id="checkbox57" class="css-checkbox" rel="have_credit" />
                <label for="checkbox57" class="css-label">รับบัตรเครดิต</label></li>
                <li class="checkbox_search"><input type="checkbox" name="service" id="checkbox58" class="css-checkbox" rel="have_alcohol" />
                <label for="checkbox58" class="css-label">เครื่องดื่มแอลกฮอลล์</label></li>
            </div>
			</ul>
		</li>
        <div class="cleaner_h3"></div>
        <li class="item4"><a href="#">ราคาอาหาร<span></span></a>
			<ul style="margin-bottom:10px;">
             <div class="tags">
             	<li class="checkbox_search"><input type="checkbox" name="price" id="checkbox59" class="css-checkbox" rel="rate1" />
                <label for="checkbox59" class="css-label">< น้อยกว่า100 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" name="price" id="checkbox60" class="css-checkbox" rel="rate2" />
                <label for="checkbox60" class="css-label">101 > 300 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" name="price" id="checkbox61" class="css-checkbox" rel="rate3" />
                <label for="checkbox61" class="css-label">301 > 500 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" name="price" id="checkbox62" class="css-checkbox" rel="rate4" />
                <label for="checkbox62" class="css-label">501 > 1000 บาท</label></li>
                <li class="checkbox_search"><input type="checkbox" name="price" id="checkbox63" class="css-checkbox" rel="rate5" />
                <label for="checkbox63" class="css-label">มากกว่า 1000 บาท</label></li>
                </div>
			</ul>
		</li>
        
	</ul>
	</side>
   </div>
        <box_search style="margin-top:20px;">
			<div class="content-box" style="margin-top:40px;">
                    <div class="cleaner_h10"></div>
                   	<ul class="grid effect-3" id="grid">
					
                    <?php
						if ( have_posts() ) :
							query_posts(array( 
								'post_type' => 'bistro'
							) );  
							while ( have_posts() ) : the_post();
					?>
                        <li class="box_red_one" style="margin-right:3px;float:left">
                       	<a href="<?php echo get_permalink(); ?>" style="cursor:pointer;z-index:3">
                        <div class="box_title" style="cursor:pointer;z-index:3">
                            <span class="box_red_one_text"><?php echo substr_utf8( get_the_title(), 0 , 28); ?></span>
                            <?php $sqlRating = "SELECT v3.meta_value AS rating
															FROM wp_postmeta v1
															INNER JOIN wp_posts v2
															ON v1.post_id =v2.ID
															LEFT  JOIN wp_postmeta v3
															ON v1.post_id=v3.post_id AND v3.meta_key='review_rating'
															WHERE v1.meta_value='".get_the_id()."'  
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
                                </a>
                              <div style="width:291px; height:180px; overflow:hidden;margin-left:-8px">
								<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), array(300,180) ); ?>
                                <?php if($image!=""){echo imagesize($image[0],290,185);}
									  else{?><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/290x180.jpg"><?php }		
								?>
                                
                              </div>
							  <div class="icon_red_search_content" style="width:90%">
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/gps_icon_search.png" style="float:left;">

                                   <div class="detail-data" style='font-size:13px;width: 90%;margin-left: 5px;text-indent:0px;line-height: 20px;height: 20px !important;overflow:hidden'>
                                    <?php  the_field('bistro_soi'); ?> 
									<?php  the_field('bistro_street');?>
                                    
                                    </div>               
                                    <div class="cleaner_h5"></div>
                                    <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/typefood_icon_search.png" style="float:left;">
                                   <div class="detail-data" style='font-size:13px;width: 90%;margin-left: 5px;text-indent:0px;    line-height: 20px;'>
								   <?php // the_field('bistroFoodType');?> 
                                   
                                   <?php 
								   //echo get_the_id();
								   $values = get_post_meta( get_the_ID(), 'recipe_type', true );
								  //echo $values;
								   $types = array('alacarte', 'maincourse', 'toorder', 'snacks', 'fusion', 'vegetarian', 'jfood', 'southfood', 'northfood', 'northeastfood', 'seafood', 'somtum', 'dishes', 'dessert', 'babyfood', 'shabu/suki', 'grill/barbecue', 'drinking');
								   $typesTH = array('อาหารจานเดียว', 'อาหารจานหลัก', 'อาหารตามสั่ง', 'อาหารว่าง', 'อาหารฟิวชั่น', 'อาหารมังสวิรัติ', 'อาหารเจ', 'อาหารปักษ์ใต้', 'อาหารเหนือ', 'อาหารอีสาน',
								 'อาหารซีฟู้ด', 'ส้มตำ น้ำตก', 'กับข้าว', 'ขนม/ของหวาน', 'สำหรับเด็ก', 'ชาบู/สุกี้', 'ปิ้งย่าง/บาร์บีคิว', 'เครื่องดื่ม');            
									if($values){
									 $c = 0;
									 foreach($types as $type){ 
									  if (in_array($type, $values)) { echo $typesTH[$c].' ';}
									  $c++;
									 } 
									}
								   ?>
                                   
                                   
                                   
                                   </div>
                                   
                                </div>
                                
								<div class="cleaner"></div>
                                <div class="bg_readmore_search">
                                    <span class="text_readmore">
                                    <a href="<?php echo get_permalink(); ?>">อ่านต่อ
                                   <img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/readmore_search_icon.png" class="bt_readmore" /></a>
                                  </span>
                            	</div>
                                
                     </li>
					<?php
							endwhile;
						else :
							echo wpautop( 'Sorry, no posts were found' );
						endif;
                    ?>   
							
					</ul>
				<div class="cleaner_h30"></div>
                
                </div>
			<div class="cleaner_h30"></div>
			<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/_inc/images/bg_footer_search.png" /></a>
                
		</box_search>
      <?php } ?>
	</div><!-- .padder -->
</div><!-- #content -->
<div class="cleaner_h30"></div>
<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/_inc/js/jqClock.min.js"></script>
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