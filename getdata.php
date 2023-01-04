<?php
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
$data = $_POST;

//只能返回一個 return ，下面兩行不能+
// dd($_POST);
// dd($data);



echo json_encode($data);
?>