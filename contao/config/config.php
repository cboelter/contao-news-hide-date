<?php

// Hooks
$GLOBALS['TL_HOOKS']['parseArticles'][] = array('NewsHideDate\Hook\ParseArticle', 'addHideDateToTemplate');
