<?php
	$database_username = 'root';
	$database_password = '';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=sgi', $database_username, $database_password);

	// ADD
	if(!empty($_POST["save_crente"])) {
		// require_once("db.php");
		$sql = "INSERT INTO CRENTES ( post_title, description, post_at ) VALUES ( :post_title, :description, :post_at )";
		$pdo_statement = $pdo_conn->prepare( $sql );
			
		$result = $pdo_statement->execute( array( ':post_title'=>$_POST['post_title'], ':description'=>$_POST['description'], ':post_at'=>$_POST['post_at'] ) );
		if (!empty($result) ){
		  header('location:index.php');
	}
	}

	// EDIT
	// require_once("db.php");
	if(!empty($_POST["save_record"])) {
		$pdo_statement=$pdo_conn->prepare("update posts set post_title='" . $_POST[ 'post_title' ] . "', description='" . $_POST[ 'description' ]. "', post_at='" . $_POST[ 'post_at' ]. "' where id=" . $_GET["id"]);
		$result = $pdo_statement->execute();
		if($result) {
			header('location:index.php');
		}
	}
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM CRENTES where id=" . $_GET["id"]);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();

	// DELETE
	require_once("db.php");
	$pdo_statement=$pdo_conn->prepare("delete from posts where id=" . $_GET['id']);
	$pdo_statement->execute();
	header('location:index.php');

	
?>