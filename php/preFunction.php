<?php
include(dirname(__FILE__).'/postFunction.php');

$function = $_REQUEST['function'];

extract($_POST);

$result = '';

switch (strtoupper($function)) {

  case 'ADDPRODUCT':

    $result =  dbsave('products',"0,'".$name."','".$description."','".$price."',0,'".date('Y-m-d H:i:s')."','".date('Y-m-d H:i:s')."'
              ");

    echo $result;
    break;

  case 'VIEW':

  $products = dbquery(
    '	products',
    '	*',
    ''
    );

    echo $products;
    break;


  default:
    # code...
    break;
}

?>
