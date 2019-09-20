<?php
/**
 * Created by PhpStorm.
 * User: amin11
 * Date: 9/7/2019
 * Time: 5:10 PM
 */
require_once('db/models/Invoice.class.php');
$res = Invoice::select('invoice_date',"0","invoice_id=?",$_POST['invoice_id']);
echo json_encode($res->fetchAll());