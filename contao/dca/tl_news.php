<?php

$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('time', 'time, hidedate',
    $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_news']['fields']['hidedate'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_news']['hidedate'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'sql'       => "char(1) NOT NULL default ''",
);