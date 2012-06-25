<?php
$viewdefs ['Notes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
        'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>
function deleteAttachmentCallBack(text)
	{literal} { {/literal}
	if(text == \'true\') {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\';
	{literal} } {/literal} else {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000);
	{literal} } {/literal}
{literal} } {/literal}
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    ),
    'panels' => 
    array (
      'lbl_note_information' => 
      array (
        0 => 
        array (
          0 => 'contact_name',
          1 => 'parent_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
            ),
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 'filename',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => '',
          1 => '',
        ),
        5 => 
        array (
          0 => '',
          1 => '',
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => '',
          1 => '',
        ),
        9 => 
        array (
          0 => '',
          1 => '',
        ),
        10 => 
        array (
          0 => '',
          1 => '',
        ),
        11 => 
        array (
          0 => '',
          1 => '',
        ),
        12 => 
        array (
          0 => '',
          1 => '',
        ),
        13 => 
        array (
          0 => '',
          1 => '',
        ),
        14 => 
        array (
          0 => '',
          1 => '',
        ),
        15 => 
        array (
          0 => '',
          1 => '',
        ),
        16 => 
        array (
          0 => '',
          1 => '',
        ),
        17 => 
        array (
          0 => '',
          1 => '',
        ),
        18 => 
        array (
          0 => '',
          1 => '',
        ),
        19 => 
        array (
          0 => '',
          1 => '',
        ),
        20 => 
        array (
          0 => '',
          1 => '',
        ),
        21 => 
        array (
          0 => '',
          1 => '',
        ),
        22 => 
        array (
          0 => '',
          1 => '',
        ),
        23 => 
        array (
          0 => '',
          1 => '',
        ),
        24 => 
        array (
          0 => '',
          1 => '',
        ),
        25 => 
        array (
          0 => '',
          1 => '',
        ),
        26 => 
        array (
          0 => '',
          1 => '',
        ),
        27 => 
        array (
          0 => '',
          1 => '',
        ),
        28 => 
        array (
          0 => '',
          1 => '',
        ),
        29 => 
        array (
          0 => '',
          1 => '',
        ),
        30 => 
        array (
          0 => '',
          1 => '',
        ),
        31 => 
        array (
          0 => '',
          1 => '',
        ),
        32 => 
        array (
          0 => '',
          1 => '',
        ),
        33 => 
        array (
          0 => '',
          1 => '',
        ),
        34 => 
        array (
          0 => '',
          1 => '',
        ),
        35 => 
        array (
          0 => '',
          1 => '',
        ),
        36 => 
        array (
          0 => '',
          1 => '',
        ),
        37 => 
        array (
          0 => '',
          1 => '',
        ),
        38 => 
        array (
          0 => '',
          1 => '',
        ),
        39 => 
        array (
          0 => '',
          1 => '',
        ),
        40 => 
        array (
          0 => '',
          1 => '',
        ),
        41 => 
        array (
          0 => '',
          1 => '',
        ),
        42 => 
        array (
          0 => '',
          1 => '',
        ),
        43 => 
        array (
          0 => '',
          1 => '',
        ),
        44 => 
        array (
          0 => '',
          1 => '',
        ),
        45 => 
        array (
          0 => '',
          1 => '',
        ),
        46 => 
        array (
          0 => '',
          1 => '',
        ),
        47 => 
        array (
          0 => '',
          1 => '',
        ),
        48 => 
        array (
          0 => '',
          1 => '',
        ),
        49 => 
        array (
          0 => '',
          1 => '',
        ),
        50 => 
        array (
          0 => '',
          1 => '',
        ),
        51 => 
        array (
          0 => '',
          1 => '',
        ),
        52 => 
        array (
          0 => '',
          1 => '',
        ),
        53 => 
        array (
          0 => '',
          1 => '',
        ),
        54 => 
        array (
          0 => '',
          1 => '',
        ),
        55 => 
        array (
          0 => '',
          1 => '',
        ),
        56 => 
        array (
          0 => '',
          1 => '',
        ),
        57 => 
        array (
          0 => '',
          1 => '',
        ),
        58 => 
        array (
          0 => '',
          1 => '',
        ),
        59 => 
        array (
          0 => '',
          1 => '',
        ),
        60 => 
        array (
          0 => '',
          1 => '',
        ),
        61 => 
        array (
          0 => '',
          1 => '',
        ),
        62 => 
        array (
          0 => '',
          1 => '',
        ),
        63 => 
        array (
          0 => '',
          1 => '',
        ),
        64 => 
        array (
          0 => '',
          1 => '',
        ),
        65 => 
        array (
          0 => '',
          1 => '',
        ),
        66 => 
        array (
          0 => '',
          1 => '',
        ),
        67 => 
        array (
          0 => '',
          1 => '',
        ),
        68 => 
        array (
          0 => '',
          1 => '',
        ),
        69 => 
        array (
          0 => '',
          1 => '',
        ),
        70 => 
        array (
          0 => '',
          1 => '',
        ),
        71 => 
        array (
          0 => '',
          1 => '',
        ),
        72 => 
        array (
          0 => '',
          1 => '',
        ),
        73 => 
        array (
          0 => '',
          1 => '',
        ),
        74 => 
        array (
          0 => '',
          1 => '',
        ),
        75 => 
        array (
          0 => '',
          1 => '',
        ),
        76 => 
        array (
          0 => '',
          1 => '',
        ),
        77 => 
        array (
          0 => '',
          1 => '',
        ),
        78 => 
        array (
          0 => '',
          1 => '',
        ),
        79 => 
        array (
          0 => '',
          1 => '',
        ),
        80 => 
        array (
          0 => '',
          1 => '',
        ),
        81 => 
        array (
          0 => '',
          1 => '',
        ),
        82 => 
        array (
          0 => '',
          1 => '',
        ),
        83 => 
        array (
          0 => '',
          1 => '',
        ),
        84 => 
        array (
          0 => '',
          1 => '',
        ),
        85 => 
        array (
          0 => '',
          1 => '',
        ),
        86 => 
        array (
          0 => '',
          1 => '',
        ),
        87 => 
        array (
          0 => '',
          1 => '',
        ),
        88 => 
        array (
          0 => '',
          1 => '',
        ),
        89 => 
        array (
          0 => '',
          1 => '',
        ),
        90 => 
        array (
          0 => '',
          1 => '',
        ),
        91 => 
        array (
          0 => '',
          1 => '',
        ),
        92 => 
        array (
          0 => '',
          1 => '',
        ),
        93 => 
        array (
          0 => '',
          1 => '',
        ),
        94 => 
        array (
          0 => '',
          1 => '',
        ),
        95 => 
        array (
          0 => '',
          1 => '',
        ),
        96 => 
        array (
          0 => '',
          1 => '',
        ),
        97 => 
        array (
          0 => '',
          1 => '',
        ),
        98 => 
        array (
          0 => '',
          1 => '',
        ),
        99 => 
        array (
          0 => '',
          1 => '',
        ),
        100 => 
        array (
          0 => 
          array (
            'name' => 's1_events_notes_name',
            'label' => 'LBL_S1_EVENTS_NOTES_FROM_S1_EVENTS_TITLE',
          ),
          1 => 
          array (
            'name' => 's1_sites_notes_name',
            'label' => 'LBL_S1_SITES_NOTES_FROM_S1_SITES_TITLE',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
