<?php 
$page= $_GET['page'] ?? 'home';

$pages=['home','contact','about','services'];

if(!in_array($page,$pages)){
    $page='home';
}

 include __DIR__ .'/templates/layout.php';

?>