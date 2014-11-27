<?php

/**
 * NewsHideDate
 *
 * PHP Version 5.3
 *
 * @copyright  Christopher Bölter 2014
 * @author     Christopher Bölter <github@boelter.eu>
 * @package    contao-news-hide-date
 * @license    LGPL-3.0+
 */

// Palettes
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('time', 'time, hidedate',
    $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);

// Fields
$GLOBALS['TL_DCA']['tl_news']['fields']['hidedate'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_news']['hidedate'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'clr long'),
    'sql'       => "char(1) NOT NULL default ''",
);