<?php

if(!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang)) || !is_array($lang))
{
    $lang = array();
}

$lang = array_merge($lang, array(
    'DIRECTORY_PAGE'    =>  'Directory',
));
