<?php

namespace kjbetz\directory\event;

use Symphony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
    static public function getSubscriberEvents()
    {
        return array(
            'core.user_setup' => 'load_language_on_setup',
        );
    }
    
    public function load_language_on_setup($event)
    {
        $lang_set_ext = $event['lang_set_ext'];
        $lang_set_ext[] = array(
            'ext_name' => 'kjbetz/directory',
            'lang_set' => 'directory',
        );
        $event['lang_set_ext'] = $lang_set_ext;
    }
}