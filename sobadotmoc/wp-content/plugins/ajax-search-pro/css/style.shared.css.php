<?php echo ((isset($style['import-inputfont']))?$style['import-inputfont']:""); ?>
<?php echo ((isset($style['import-descfont']))?$style['import-descfont']:""); ?>
<?php echo ((isset($style['import-titlefont']))?$style['import-titlefont']:""); ?>
<?php echo ((isset($style['import-authorfont']))?$style['import-authorfont']:""); ?>
<?php echo ((isset($style['import-datefont']))?$style['import-datefont']:""); ?>
<?php echo ((isset($style['import-showmorefont']))?$style['import-showmorefont']:""); ?>
<?php echo ((isset($style['import-groupfont']))?$style['import-groupfont']:""); ?>
<?php echo ((isset($style['import-exsearchincategoriestextfont']))?$style['import-exsearchincategoriestextfont']:""); ?>
<?php echo ((isset($style['import-groupbytextfont']))?$style['import-groupbytextfont']:""); ?>
<?php echo ((isset($style['import-settingsdropfont']))?$style['import-settingsdropfont']:""); ?>
<?php echo ((isset($style['import-prestitlefont']))?$style['import-prestitlefont']:""); ?>
<?php echo ((isset($style['import-presdescfont']))?$style['import-presdescfont']:""); ?>
<?php echo ((isset($style['import-pressubtitlefont']))?$style['import-pressubtitlefont']:""); ?>


@font-face {
    font-family: 'asppsicons';
    src: url('<?php echo plugins_url(); ?>/ajax-search-pro/css/fonts/icons/icons.eot');
    src: url('<?php echo plugins_url(); ?>/ajax-search-pro/css/fonts/icons/icons.eot?#iefix') format('embedded-opentype'), url('<?php echo plugins_url(); ?>/ajax-search-pro/css/fonts/icons/icons.woff') format('woff'), url('<?php echo plugins_url(); ?>/ajax-search-pro/css/fonts/icons/icons.ttf') format('truetype'), url('<?php echo plugins_url(); ?>/ajax-search-pro/css/fonts/icons/icons.svg#icons') format('svg');
    font-weight: normal;
    font-style: normal;
}
<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?>,
    <?php echo $asp_set_ids1; ?>,
    <?php echo $asp_res_ids1; ?>,
    <?php echo $asp_div_ids2; ?>,
    <?php echo $asp_res_ids2; ?>,
    <?php echo $asp_set_ids2; ?>,
<?php endif; ?>
<?php echo $asp_res_ids; ?>,
<?php echo $asp_res_ids; ?> *,
<?php echo $asp_div_ids; ?>,
<?php echo $asp_div_ids; ?> *,
<?php echo $asp_set_ids; ?>,
<?php echo $asp_set_ids; ?> * {
    -webkit-box-sizing: content-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: content-box; /* Firefox, other Gecko */
    -ms-box-sizing: content-box;
    -o-box-sizing: content-box;
    box-sizing: content-box;
    padding: 0;
    margin: 0;
    border: 0;
    border-radius: 0;
    text-transform: none;
    text-shadow: none;
    box-shadow: none;
    text-decoration: none;
    text-align: left;
    letter-spacing: normal;
}

.wpdreams_clear {
    clear: both;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?>,
    <?php echo $asp_div_ids2; ?>,
<?php endif; ?>
<?php echo $asp_div_ids; ?> {
  width: <?php echo w_isset_def($style['box_width'], '100%'); ?>;
  height: auto;
  border-radius: 5px;
  background: #d1eaff;
  <?php wpdreams_gradient_css($style['boxbackground']); ?>;
  overflow: hidden;
  <?php echo $style['boxborder']; ?>
  <?php echo $style['boxshadow']; ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox,
    <?php echo $asp_div_ids2; ?> .probox,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox {
  margin: <?php echo $style['boxmargin']; ?>;
  height: <?php echo $style['boxheight']; ?>;
  <?php wpdreams_gradient_css($style['inputbackground']); ?>;
  <?php echo $style['inputborder']; ?>
  <?php echo $style['inputshadow']; ?>
}

<?php
    $_box_pos = w_isset_def($style['box_compact_position'], 'static');
?>

<?php if (w_isset_def($style['box_compact_layout'], 0) == 1): ?>

    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_div_ids1; ?> .probox,
        <?php echo $asp_div_ids2; ?> .probox,
    <?php endif; ?>
    <?php echo $asp_div_ids; ?> .probox {
        width: <?php echo wpdreams_width_from_px($style['boxheight']); ?>px;
    }

    <?php if ($use_compatibility == true): ?>
        <?php echo $asp_div_ids1; ?>,
        <?php echo $asp_div_ids2; ?>,
    <?php endif; ?>
    <?php echo $asp_div_ids; ?> {
        width: auto;
        display: inline-block;
        float: <?php echo w_isset_def($style['box_compact_float'], 'inherit'); ?>;
        position: <?php echo $_box_pos; ?>;
        <?php if ($_box_pos) {
            $screen_pos = wpdreams_four_to_array(w_isset_def($style['box_compact_screen_position'], '||20%||auto||0px||auto||'));
            echo "
            top: ".$screen_pos['top'].";
            bottom: ".$screen_pos['bottom'].";
            right: ".$screen_pos['right'].";
            left: ".$screen_pos['left'].";";
        }?>
        z-index: <?php echo w_isset_def($style['box_compact_position_z'], '1000'); ?>;
    }

    <?php if ($_box_pos != 'static') {
        echo "p[id*=asp-try-".$id."] {
            display: none;
            position: ".$_box_pos.";
            top: ".$screen_pos['top'].";
            bottom: ".$screen_pos['bottom'].";
            right: ".$screen_pos['right'].";
            left: ".$screen_pos['left'].";
            z-index: ".w_isset_def($style['box_compact_position_z'], 1000).";
        }";
    }?>
<?php endif; ?>

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .proinput,
    <?php echo $asp_div_ids2; ?> .probox .proinput,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .proinput {
  <?php echo str_replace("--g--", "", $style['inputfont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .proinput input.orig,
    <?php echo $asp_div_ids2; ?> .probox .proinput input.orig,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .proinput input.orig {
  <?php echo str_replace("--g--", "", $style['inputfont']); ?>
  border: 0;
  box-shadow: none;
}

<?php
/**
 * RTL STUFF
 */
?>
<?php if ($use_compatibility == true): ?>
    .rtl <?php echo $asp_div_ids1; ?> .probox .proinput input.orig,
    .rtl <?php echo $asp_div_ids2; ?> .probox .proinput input.orig,
<?php endif; ?>
.rtl <?php echo $asp_div_ids; ?> .probox .proinput input.orig {
<?php echo str_replace("--g--", "", $style['inputfont']); ?>
direction: rtl;
text-align: right;
}

<?php if ($use_compatibility == true): ?>
    .rtl <?php echo $asp_div_ids1; ?> .probox .proinput,
    .rtl <?php echo $asp_div_ids2; ?> .probox .proinput,
<?php endif; ?>
.rtl <?php echo $asp_div_ids; ?> .probox .proinput {
    float: right;
    margin-right: 2px;
}



<?php echo $asp_div_ids; ?> .probox .proinput input.orig::-webkit-input-placeholder {
    <?php echo str_replace("--g--", "", $style['inputfont']); ?>
    opacity: 0.85;
}
<?php echo $asp_div_ids; ?> .probox .proinput input.orig::-moz-placeholder {
    <?php echo str_replace('line-height', 'lhght', str_replace("--g--", "", $style['inputfont']) ); ?>
    opacity: 0.85;
    line-height: auto !important;
}
<?php echo $asp_div_ids; ?> .probox .proinput input.orig:-ms-input-placeholder {
    <?php echo str_replace("--g--", "", $style['inputfont']); ?>
    opacity: 0.85;
}
<?php echo $asp_div_ids; ?> .probox .proinput input.orig:-moz-placeholder {
    <?php echo str_replace('line-height', 'lhght', str_replace("--g--", "", $style['inputfont']) ); ?>
    opacity: 0.85;
    line-height: auto !important;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .proinput input.autocomplete,
    <?php echo $asp_div_ids2; ?> .probox .proinput input.autocomplete,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .proinput input.autocomplete {
  <?php echo str_replace("--g--", "", $style['inputfont']); ?>
    border: 0;
    box-shadow: none;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .proloading,
    <?php echo $asp_div_ids1; ?> .probox .proclose,
    <?php echo $asp_div_ids1; ?> .probox .promagnifier,
    <?php echo $asp_div_ids1; ?> .probox .prosettings,
    <?php echo $asp_div_ids2; ?> .probox .proloading,
    <?php echo $asp_div_ids2; ?> .probox .proclose,
    <?php echo $asp_div_ids2; ?> .probox .promagnifier,
    <?php echo $asp_div_ids2; ?> .probox .prosettings,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .proloading,
<?php echo $asp_div_ids; ?> .probox .proclose,
<?php echo $asp_div_ids; ?> .probox .promagnifier,
<?php echo $asp_div_ids; ?> .probox .prosettings {
  width: <?php echo wpdreams_width_from_px($style['boxheight']); ?>px;
  height: <?php echo wpdreams_width_from_px($style['boxheight']); ?>px;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .promagnifier .innericon svg,
    <?php echo $asp_div_ids2; ?> .probox .promagnifier .innericon svg,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .promagnifier .innericon svg {
  fill: <?php echo $style['magnifierimage_color']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .proloading svg,
    <?php echo $asp_div_ids2; ?> .probox .proloading svg,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .proloading svg {
  fill: <?php echo $style['loadingimage_color']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .prosettings .innericon svg,
    <?php echo $asp_div_ids2; ?> .probox .prosettings .innericon svg,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .prosettings .innericon svg {
  fill: <?php echo $style['settingsimage_color']; ?>;
}

<?php if (w_isset_def($style['loadingimage_custom'], "") != ""): ?>
    <?php echo $asp_div_ids; ?> .probox .proloading {
    background-image: url("<?php echo  $style['loadingimage_custom']; ?>");
    }
<?php elseif (pathinfo($style['loadingimage'], PATHINFO_EXTENSION)!='svg'): ?>
    <?php echo $asp_div_ids; ?> .probox .proloading {
    background-image: url("<?php echo  plugins_url().$style['loadingimage']; ?>");
    }
<?php endif; ?>


<?php echo $asp_div_ids; ?> .probox .proloading.asp_msie {
    background-image: url("<?php echo ASP_URL."/img/loading/newload1.gif"; ?>");
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .promagnifier,
    <?php echo $asp_div_ids2; ?> .probox .promagnifier,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .promagnifier {

  width: <?php echo (wpdreams_width_from_px($style['boxheight'])-2*wpdreams_border_width($style['magnifierbackgroundborder'])); ?>px;
  height: <?php echo (wpdreams_width_from_px($style['boxheight'])-2*wpdreams_border_width($style['magnifierbackgroundborder'])); ?>px;
  background-image: -o-<?php wpdreams_gradient_css_rgba($style['magnifierbackground']); ?>;
  background-image: -ms-<?php wpdreams_gradient_css_rgba($style['magnifierbackground']); ?>;
  background-image: -webkit-<?php wpdreams_gradient_css_rgba($style['magnifierbackground']); ?>;
  background-image: <?php wpdreams_gradient_css_rgba($style['magnifierbackground']); ?>;
  background-position:center center;
  background-repeat: no-repeat;

  float: <?php echo w_isset_def($style['magnifier_position'], 'right'); ?>;
  <?php echo $style['magnifierbackgroundborder']; ?>
  <?php echo $style['magnifierboxshadow']; ?>
  cursor: pointer;
  background-size: 100% 100%;

  background-position:center center;
  background-repeat: no-repeat;
  cursor: pointer;
}


<?php if (w_isset_def($style['magnifierimage_custom'], "") != ""): ?>
    <?php echo $asp_div_ids1; ?> .probox .promagnifier .innericon,
    <?php echo $asp_div_ids2; ?> .probox .promagnifier .innericon,
    <?php echo $asp_div_ids; ?> .probox .promagnifier .innericon {
    background-image: url("<?php echo  $style['magnifierimage_custom']; ?>");
    }
<?php elseif (pathinfo($style['magnifierimage'], PATHINFO_EXTENSION)!='svg'): ?>
    <?php echo $asp_div_ids1; ?> .probox .promagnifier .innericon,
    <?php echo $asp_div_ids2; ?> .probox .promagnifier .innericon,
    <?php echo $asp_div_ids; ?> .probox .promagnifier .innericon {
    background-image: url("<?php echo  plugins_url().$style['magnifierimage']; ?>");
    }
<?php endif; ?>

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_div_ids1; ?> .probox .prosettings,
    <?php echo $asp_div_ids2; ?> .probox .prosettings,
<?php endif; ?>
<?php echo $asp_div_ids; ?> .probox .prosettings {
  width: <?php echo (wpdreams_width_from_px($style['boxheight'])-2*wpdreams_border_width($style['settingsbackgroundborder'])); ?>px;
  height: <?php echo (wpdreams_width_from_px($style['boxheight'])-2*wpdreams_border_width($style['settingsbackgroundborder'])); ?>px;
  background-image: -o-<?php wpdreams_gradient_css_rgba($style['settingsbackground']); ?>;
  background-image: -ms-<?php wpdreams_gradient_css_rgba($style['settingsbackground']); ?>;
  background-image: -webkit-<?php wpdreams_gradient_css_rgba($style['settingsbackground']); ?>;
  background-image: <?php wpdreams_gradient_css_rgba($style['settingsbackground']); ?>;
  background-position:center center;
  background-repeat: no-repeat;
  float: <?php echo $style['settingsimagepos']; ?>;
  <?php echo $style['settingsbackgroundborder']; ?>
  <?php echo $style['settingsboxshadow']; ?>
  cursor: pointer;
  background-size: 100% 100%;
}

<?php if (w_isset_def($style['settingsimage_custom'], "") != ""): ?>
    <?php echo $asp_div_ids1; ?> .probox .prosettings .innericon,
    <?php echo $asp_div_ids2; ?> .probox .prosettings .innericon,
    <?php echo $asp_div_ids; ?> .probox .prosettings .innericon {
      background-image: url("<?php echo  $style['settingsimage_custom']; ?>");
    }
<?php elseif (pathinfo($style['settingsimage'], PATHINFO_EXTENSION)!='svg'): ?>
    <?php echo $asp_div_ids1; ?> .probox .prosettings .innericon,
    <?php echo $asp_div_ids2; ?> .probox .prosettings .innericon,
    <?php echo $asp_div_ids; ?> .probox .prosettings .innericon {
    background-image: url("<?php echo  plugins_url().$style['settingsimage']; ?>");
    }
<?php endif; ?>

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>,
    <?php echo $asp_res_ids2; ?>,
<?php endif; ?>
<?php echo $asp_res_ids; ?> {
    position: <?php echo (($style['resultsposition']=='hover')?'absolute':'static'); ?>;
    z-index:1100;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .asp_nores .asp_keyword,
    <?php echo $asp_res_ids2; ?> .results .asp_nores .asp_keyword,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .asp_nores .asp_keyword {
    padding: 0 6px;
    cursor: pointer;
    <?php echo str_replace("--g--", "", $style['descfont']); ?>
    font-weight: bold;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item,
    <?php echo $asp_res_ids2; ?> .results .item,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item {
    height: <?php echo $style['resultitemheight']; ?>;
    background: <?php echo $style['resultscontainerbackground']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item.hovered,
    <?php echo $asp_res_ids2; ?> .results .item.hovered,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item.hovered {
  <?php wpdreams_gradient_css($style['vresulthbg']); ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .image,
    <?php echo $asp_res_ids2; ?> .results .item .image,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .image {
  width: <?php echo $style['image_width']; ?>px;
  height: <?php echo $style['image_height']; ?>px;
}

<?php
  $_vimagew = wpdreams_width_from_px($style['hreswidth']);
  $_vimageratio =  $_vimagew / $style['image_width'];
  $_vimageh = $_vimageratio * $style['image_height'];
?>

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .content,
    <?php echo $asp_res_ids2; ?> .results .item .content,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .content {
overflow: hidden;
background: transparent;
margin: 0;
padding: 0 10px;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .content h3,
    <?php echo $asp_res_ids2; ?> .results .item .content h3,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .content h3 {
  margin: 0;
  padding: 0;
  line-height: inherit;
  <?php echo str_replace("--g--", "", $style['titlefont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .content h3 a,
    <?php echo $asp_res_ids2; ?> .results .item .content h3 a,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .content h3 a {
  margin: 0;
  padding: 0;
  line-height: inherit;
  <?php echo str_replace("--g--", "", $style['titlefont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .content h3 a:hover,
    <?php echo $asp_res_ids2; ?> .results .item .content h3 a:hover,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .content h3 a:hover {
  <?php echo str_replace("--g--", "", $style['titlefont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item div.etc,
    <?php echo $asp_res_ids2; ?> .results .item div.etc,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item div.etc {
  padding: 0;
  line-height: 10px;
  <?php echo str_replace("--g--", "", $style['authorfont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .etc .author,
    <?php echo $asp_res_ids2; ?> .results .item .etc .author,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .etc .author {
  padding: 0;
  <?php echo str_replace("--g--", "", $style['authorfont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item .etc .date,
    <?php echo $asp_res_ids2; ?> .results .item .etc .date,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item .etc .date {
  margin: 0 0 0 10px;
  padding: 0;
  <?php echo str_replace("--g--", "", $style['datefont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item p.desc,
    <?php echo $asp_res_ids2; ?> .results .item p.desc,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item p.desc {
  margin: 2px 0px;
  padding: 0;
  <?php echo str_replace("--g--", "", $style['descfont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .results .item div.content,
    <?php echo $asp_res_ids2; ?> .results .item div.content,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .results .item div.content {
    margin: 2px 0px;
    padding: 0;
    <?php echo str_replace("--g--", "", $style['descfont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> span.highlighted,
    <?php echo $asp_res_ids2; ?> span.highlighted,
<?php endif; ?>
<?php echo $asp_res_ids; ?> span.highlighted {
    font-weight: bold;
    color: #d9312b;
    background-color: #eee;
    color: <?php echo $style['highlightcolor'] ?>;
    background-color: <?php echo $style['highlightbgcolor'] ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> p.showmore,
    <?php echo $asp_res_ids2; ?> p.showmore,
<?php endif; ?>
<?php echo $asp_res_ids; ?> p.showmore {
  text-align: center;
  padding: 10px 5px;
  margin: 0;
  <?php echo str_replace("--g--", "", $style['showmorefont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> p.showmore a,
    <?php echo $asp_res_ids2; ?> p.showmore a,
<?php endif; ?>
<?php echo $asp_res_ids; ?> p.showmore a {
  <?php echo str_replace("--g--", "", $style['showmorefont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?> .asp_group_header,
    <?php echo $asp_res_ids2; ?> .asp_group_header,
<?php endif; ?>
<?php echo $asp_res_ids; ?> .asp_group_header {
  background: #DDDDDD;
  background: <?php echo $style['exsearchincategoriesboxcolor']; ?>;
  border-radius: 3px 3px 0 0;
  border-top: 1px solid <?php echo $style['groupingbordercolor']; ?>;
  border-left: 1px solid <?php echo $style['groupingbordercolor']; ?>;
  border-right: 1px solid <?php echo $style['groupingbordercolor']; ?>;
  margin: 10px 0 -3px;
  padding: 7px 0 7px 10px;
  position: relative;
  z-index: 1000;
  <?php echo str_replace("--g--", "", $style['groupbytextfont']); ?>
}

/* Search settings */

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_set_ids; ?>.searchsettings,
    <?php echo $asp_set_ids; ?>.searchsettings,
<?php endif; ?>
<?php echo $asp_set_ids; ?>.searchsettings  {
  direction: ltr;
  background: <?php echo wpdreams_gradient_css($style['settingsdropbackground']); ?>;
  <?php echo $style['settingsdropboxshadow']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_set_ids1; ?>.searchsettings .label,
    <?php echo $asp_set_ids2; ?>.searchsettings .label,
    <?php echo $asp_set_ids1; ?>.searchsettings .asp_label,
    <?php echo $asp_set_ids2; ?>.searchsettings .asp_label,
<?php endif; ?>
<?php echo $asp_set_ids; ?>.searchsettings .label,
<?php echo $asp_set_ids; ?>.searchsettings .asp_label {
  <?php echo str_replace("--g--", "", $style['settingsdropfont']); ?>
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_set_ids1; ?>.searchsettings .option label,
    <?php echo $asp_set_ids2; ?>.searchsettings .option label,
<?php endif; ?>
<?php echo $asp_set_ids; ?>.searchsettings .option label {
  <?php wpdreams_gradient_css($style['settingsdroptickbggradient']); ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_set_ids1; ?>.searchsettings .option label:after,
    <?php echo $asp_set_ids2; ?>.searchsettings .option label:after,
<?php endif; ?>
<?php echo $asp_set_ids; ?>.searchsettings .option label:after {
	border: 3px solid <?php echo $style['settingsdroptickcolor'] ?>;
    border-right: none;
    border-top: none;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_set_ids1; ?>.searchsettings fieldset .categoryfilter,
    <?php echo $asp_set_ids2; ?>.searchsettings fieldset .categoryfilter,
<?php endif; ?>
<?php echo $asp_set_ids; ?>.searchsettings fieldset .categoryfilter {
  max-height: <?php echo $style['exsearchincategoriesheight']; ?>px;
  overflow: auto;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_set_ids1; ?>.searchsettings  fieldset legend,
    <?php echo $asp_set_ids2; ?>.searchsettings  fieldset legend,
<?php endif; ?>
<?php echo $asp_set_ids; ?>.searchsettings  fieldset legend {
  padding: 5px 0 0 10px;
  margin: 0;
  <?php echo str_replace("--g--", "", $style['exsearchincategoriestextfont']); ?>
}