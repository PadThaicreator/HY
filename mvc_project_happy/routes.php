<?php

$controllers = array('pages'=>['home','error'],'person'=>['index','wish']);


function call($controller,$action)
{   
    require("controllers/".$controller."_controller.php");
    
    switch($controller)
    {
        case "pages":           $controller_obj = new PagesController();
                                break ;
        case "person":          require_once("models/personModel.php");
                                $controller_obj = new PersonController();
                                break ;
    }

   
    $controller_obj->{$action}();
}

if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {   call($controller,$action); }
    else
    {   call('pages','error');  }
}
else
{   call('pages','error');  }

?>