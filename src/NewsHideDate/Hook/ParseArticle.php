<?php

namespace NewsHideDate\Hook;

/**
 * Handle the parseArticle-Hook.
 *
 * @package NewsTop
 */
class ParseArticle
{

    /**
     * Handle the parseArticle-Hook and set the counter to the database and the template.
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
