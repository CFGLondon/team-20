<?php 
//checking if data has been entered
    if( isset( $_POST['data'] ) && !empty( $_POST['data'] ) )
    {
        $data = $_POST['data'];
    } else {
        header( 'location: localform.html' );
        echo 'exiting..'
        exit();
    }
    
    echo 'hey'
    echo $_POST['data']
    

//setting up mysql details
	$sql_server = "ec2-54-170-43-20.eu-west-1.compute.amazonaws.com";
	$username = "root";
	$password = "code4good";
	$dbname = "add_db";

	// Create connection
	$sqlconn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($sqlconn->connect_error) {
		die("Connection failed: " . $sqlconn->connect_error);
	}

	//Inserting data into table
	$sql = "INSERT INTO Report(lat) values('" . $_POST["latitude"] . "')"
	$sql = "INSERT INTO Report(long) values('" . $_POST["longitude"] . "')"
	$sql = "INSERT INTO Report(problem_prose) values('" . $_POST["problem_prose"] . "')"
	$sql = "INSERT INTO Report(editor_comments) values('" . $_POST["localCoordinator_comments"] . "')"
	$sql = "INSERT INTO Report(problem_category) values('" . $_POST["problem_category"] . "')"
	

	if ($sqlconn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $sqlconn->error;
	}

	$sqlconn->close();
?>
