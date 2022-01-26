<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'search');

// create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(isset($_GET['Usearch'])){
    $s = $_GET['Usearch'];

}

$sql = "SELECT * FROM live WHERE name like '%$s%'";
$run_query= mysqli_query($conn,$sql);

$data_count=mysqli_num_rows($run_query);

echo "$data_count";

if($run_query==true){
    while($data = mysqli_fetch_array($run_query)){


       echo $data["name"]."<br>";
      



    }
}



?>