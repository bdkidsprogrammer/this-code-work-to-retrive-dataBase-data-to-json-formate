<?php

header('Content-Type: application/json');

$serverName="localhost";
$userName="root";
$password="";
$dbName="user";

$connect=mysqli_connect($serverName,$userName,$password,$dbName);


$sql="SELECT * FROM productdata";

$result=mysqli_query($connect,$sql);


$productData=array();


foreach($result as $data){

    $name=$data['name'];
    $category=$data['category'];
    $price=$data['price'];
    $stock=$data['stock'];


     $userInfo['name']=$name;
     $userInfo['category']=$category;
     $userInfo['price']=$price;
     $userInfo['stock']=$stock;

    array_push($productData,$userInfo);
    


}

echo json_encode($productData);


?>