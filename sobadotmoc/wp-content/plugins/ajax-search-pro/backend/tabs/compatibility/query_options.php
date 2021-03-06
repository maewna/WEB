<p class='infoMsg'>
    If you are experiencing issues with accent(diacritic) or case sensitiveness, you can force the search to try these tweaks.<br>
    <i>The search works according to your database collation settings</i>, so please be aware that <b>this is not an effective way</b> of fixing database collation issues.<br>
    If you have case/diacritic issues then please read the <a href="http://dev.mysql.com/doc/refman/5.0/en/charset-syntax.html" target="_blank">MySql manual on collations</a> or consult a <b>database expert</b> - those issues should be treated on database level!
</p>
<div class="item">
    <?php
    $o = new wpdreamsCustomSelect("db_force_case", "Force case", array(
            'selects'=>wpdreams_setval_or_getoption($com_options, 'db_force_case_selects', 'asp_compatibility_def'),
            'value'=>wpdreams_setval_or_getoption($com_options, 'db_force_case', 'asp_compatibility_def')
        )
    );
    $params[$o->getName()] = $o->getData();
    ?>
</div>
<div class="item">
    <?php $o = new wpdreamsYesNo("db_force_unicode", "Force unicode search",
        wpdreams_setval_or_getoption($com_options, 'db_force_unicode', 'asp_compatibility_def')
    ); ?>
    <p class='descMsg'>Will try to force unicode character conversion on the search phrase.</p>
</div>
<div class="item">
    <?php $o = new wpdreamsYesNo("db_force_utf8_like", "Force utf8 on LIKE operations",
        wpdreams_setval_or_getoption($com_options, 'db_force_utf8_like', 'asp_compatibility_def')
    ); ?>
    <p class='descMsg'>Will try to force utf8 conversion on all LIKE operations in the WHERE and HAVING clauses.</p>
</div>