<?php
include(dirname(__FILE__).'/postFunction.php');

$function = $_REQUEST['function'];

extract($_POST);

$result = '';

switch (strtoupper($function)) {

  case 'LOGIN_PROCESS':
        session_start();
        if(isset($_POST['btn-login']))
        {
          $user_email = trim($_POST['user_email']);
          $user_password = trim($_POST['password']);

          $password = md5($user_password);


          $result = dblogin(
          '	tbl_users',
          '	*',
          'WHERE user_email = "'.$user_email.'"'
          );

          $row = json_decode($result);

          if($row[0]->user_password ==$password){

           echo "ok"; // log in
           $_SESSION['user_session'] = $row[0]->user_id;
          }
          else{

           echo "email or password does not exist."; // wrong details
          }

        }
    break;
  case 'REGISTER':
        if($_POST)
        {
          $user_name = $_POST['name'];
          $user_email = $_POST['user_email'];
          $user_password = $_POST['password2'];
          $joining_date =date('Y-m-d H:i:s');

          $return = dbregister('tbl_users',"0,'".$user_name."','".$user_email."','".md5($user_password)."','".$joining_date."'",$user_email);

        }
        echo $return;
    break;
  default:
    # code...
    break;
}

?>
