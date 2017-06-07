<?php


/* saving data to database */

function dbsave( $table = '', $values = '' ){

  try{

    $cmd		=	new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    $query		=	$cmd->prepare('INSERT INTO '.$table.' VALUES('.$values.')');

    $cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    print_r($query);

    $query->execute();

    return 'Added!';

  }catch( PDOException $e ){

    echo $e->getMessage();

  }

}

/* Updating data to database */

function dbupdate( $table = '', $new_values = '', $conditions ){

  try{

    $cmd		=	new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    $query		=	$cmd->prepare('UPDATE '.$table.' SET '.$new_values.' '.$conditions);

    $cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query->execute();

    return "Updated!";

  }catch( PDOException $e ){

    echo $e->getMessage();

  }

}

/* Query data from database and return data into json format */

function dbquery( $table, $filter, $conditions ){

  try{

    $return		=	'';

    $cmd		=	new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    $query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);

    $cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query->execute();

    $return		=	$query->fetchAll(PDO::FETCH_ASSOC);

    return json_encode($return);

  }catch( PDOException $e ){

    echo $e->getMessage();

  }

}

function dblogin( $table, $filter, $conditions ){

  try{

    $return		=	'';

    $cmd		=	new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    $query		=	$cmd->prepare('SELECT '.$filter.' FROM '.$table.' '.$conditions);

    $cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query->execute();


    $return		=	$query->fetchAll(PDO::FETCH_ASSOC);

    return json_encode($return);

  }catch( PDOException $e ){

    echo $e->getMessage();

  }

}

function dbregister( $table = '', $values = '', $email ){

  try{

    $return		=	'';

    $cmd		=	new PDO('mysql:host=localhost;dbname=crud', 'root', '');

    $stmt = $cmd->prepare("SELECT * FROM tbl_users WHERE user_email=:email");
    $stmt->execute(array(":email"=>$email));
    $count = $stmt->rowCount();

    if($count==0){
      $query		=	$cmd->prepare('INSERT INTO '.$table.' VALUES('.$values.')');

      $cmd->setATTRIBUTE(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      if($query->execute())
      {
       echo "registered";
      }
      else
      {
       echo "Query could not execute !";
      }

    }
    else{

    echo "1"; //  not available
    }
    
  }catch( PDOException $e ){

    echo $e->getMessage();

  }

}

?>
