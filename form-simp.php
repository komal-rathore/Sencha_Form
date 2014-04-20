

<?php
    $con=mysqli_connect("localhost","root","","sencha");
    header('Access-Control-Allow-Origin: *');

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
        header('Access-Control-Allow-Headers: origin, X-Requested-With, Authorization, Content-Type');
        header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
        exit;
    }
    
    header('Content-type: application/json');
	$name=$_POST['firstName'];
	mysqli_query($con,"INSERT INTO bathak (name) 
VALUES ('$name')");

mysqli_close($con);
    $response = array(
        'success' => true,
        'message' => 'Success: ' . $_POST["firstName"] . " " . $_POST["lastName"]
    );
    echo json_encode($response);
?>
