<?php
function dd($array){
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
$data = $_POST;


// dd($data);

// $num1 = $data['num1'];
// $num2 = $data['num2'];
// $result = $num1+$num2;

//只能返回一個 return ，下面兩行不能+
// dd($_POST);
// dd($data);
// $myArr = [
//     'num1'=>$num1,
//     'num2'=>$num2,
//     'result'=>$result,
// ];


echo json_encode($data);
// dd($data);
?>