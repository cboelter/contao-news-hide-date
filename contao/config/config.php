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

// Hooks
$GLOBALS['TL_HOOKS']['parseArticles'][] = array('NewsHideDate\Hook\ParseArticle', 'addHideDateToTemplate');
