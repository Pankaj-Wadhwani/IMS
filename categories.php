<?php
if(isset($_GET['src']))
{
    $src = $_GET['src'];
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    $include_page = "pages/categories/".$src.".php";
}else{
    $include_page = "pages/categories/view-all-categories.php";
}
$title = "Categories";
require_once ('helpers/static-components.php');