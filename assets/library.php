<?php
function page_manipul($default='home',$pages=['home','about','contact','services'],$pagespath=__DIR__.'/views'){

    $page = $_GET['page'] ?? $default;

    if(!in_array($page,$pages)||!file_exists($pagespath.'/'.$page.'.php')){
        return 404;
    }
    return $page;
}
?>