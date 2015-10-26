<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic .results .item .content,
    <?php echo $asp_res_ids2; ?>.isotopic .results .item .content,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic .results .item .content {
    width: 100%;
    height: auto;
    z-index: 3;
    padding: 4px 6px;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic,
    <?php echo $asp_res_ids2; ?>.isotopic,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic {
    margin: <?php echo wpdreams_four_to_string($style['i_res_container_margin']); ?>;
    padding: <?php echo wpdreams_four_to_string($style['i_res_container_padding']); ?>;
    background: <?php echo $style['i_res_container_bg']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic .results .item,
    <?php echo $asp_res_ids2; ?>.isotopic .results .item,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic .results .item {
    width: <?php echo $style['i_item_width']; ?>px;
    height: <?php echo $style['i_item_height']; ?>px;
    box-sizing: border-box;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic .results .item .content,
    <?php echo $asp_res_ids2; ?>.isotopic .results .item .content,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic .results .item .content {
    background: <?php echo $style['i_res_item_content_background']; ?>;
}

/* Isotopic navigation */
<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic>nav,
    <?php echo $asp_res_ids2; ?>.isotopic>nav,
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic>nav,
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation {
    background: <?php echo $style['i_pagination_background']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation a.asp_prev,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation a.asp_prev,
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation a.asp_next,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation a.asp_next,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation a.asp_prev,
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation a.asp_next {
    background: <?php echo $style['i_pagination_arrow_background']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation a.asp_prev svg,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation a.asp_prev svg,
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation a.asp_next svg,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation a.asp_next svg,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation a.asp_prev svg,
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation a.asp_next svg {
    fill: <?php echo $style['i_pagination_arrow_color']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation ul li.asp_active,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation ul li.asp_active,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation ul li.asp_active {
    background: <?php echo $style['i_pagination_arrow_background']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation ul li:hover,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation ul li:hover,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation ul li:hover {
    background: <?php echo $style['i_pagination_arrow_background']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation ul li.asp_active,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation ul li.asp_active,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation ul li.asp_active {
    background: <?php echo $style['i_pagination_page_background']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation ul li:hover,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation ul li:hover,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation ul li:hover {
    background: <?php echo $style['i_pagination_page_background']; ?>;
}

<?php if ($use_compatibility == true): ?>
    <?php echo $asp_res_ids1; ?>.isotopic nav.asp_navigation ul li span,
    <?php echo $asp_res_ids2; ?>.isotopic nav.asp_navigation ul li span,
<?php endif; ?>
<?php echo $asp_res_ids; ?>.isotopic nav.asp_navigation ul li span {
    color:  <?php echo $style['i_pagination_font_color']; ?>;
}