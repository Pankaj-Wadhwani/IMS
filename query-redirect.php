<?php
if(isset($_GET['query']))
{
    switch ($_GET['query'])
    {
        case "product":
            require_once('query-redirects/product.php');
            break;
        case "invoice":
            require_once('query-redirects/invoice.php');
            break;
        case "category":
            require_once ('query-redirects/category.php');
            break;
    }
}