<?php 

namespace kjbetz\directory\controller;

use phpbb\controller\helper;

class main
{
    protected $helper;
}

public function __construct(helper $helper)
{
    $this->helper = $helper;
}

/**
* route /directory/{order}
*/

public function main($order)
{
    if ($order == 'name')
    {
        return $this->helper->render('directory_body.html', $order);
    }
}