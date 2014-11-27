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

namespace NewsHideDate\Hook;

/**
 * Parse the news article.
 *
 * @package contao-news-hide-date
 */
class ParseArticle
{

    /**
     * Handle the parseArticle-Hook and add the hidedate vor to the template.
     *
     * @param object $objTemplate The current news template.
     * @param array  $arrArticle  The current article row.
     * @param object $objModule   The current news module.
     *
     * @return void
     */
    public function addHideDateToTemplate($objTemplate, $arrArticle, $objModule)
    {
       $objTemplate->hidedate = $arrArticle['hidedate'];
    }
}
