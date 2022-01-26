<?php

if(isset($_GET['user'])){

$data = json_decode($_GET['user'], TRUE);


echo '<pre>';
print_r($data);

// echo count($data);
    
  
//  echo $data[0]['name'];

foreach($data as $key => $value){
    foreach($value as $subkey => $subvalue){
        echo $subkey." = ".$subvalue;
    }
    
}

}

?>