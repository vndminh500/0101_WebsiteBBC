<?php
$link= mysqli_connect("localhost","root", "", "fullcontract");

if ($link == false){
    die("Loi: Ket noi that bai. ".mysqli_connect_error());
}

$nameContract= mysqli_real_escape_string($link,$_POST["nameContract"]);
$dateCreateContract= mysqli_real_escape_string($link,$_POST["dateCreateContract"]);
$property= mysqli_real_escape_string($link,$_POST["property"]);
$valueContract= mysqli_real_escape_string($link,$_POST["valueContract"]);
$amountDeposit= mysqli_real_escape_string($link,$_POST["amountDeposit"]);
$remainAmount= mysqli_real_escape_string($link,$_POST["remainAmount"]);
$_status= mysqli_real_escape_string($link,$_POST["_status"]);
$nameBuyer= mysqli_real_escape_string($link,$_POST["nameBuyer"]);
$dateBorn= mysqli_real_escape_string($link,$_POST["dateBorn"]);
$idCard= mysqli_real_escape_string($link,$_POST["idCard"]);
$address= mysqli_real_escape_string($link,$_POST["address"]);
$phoneNumber= mysqli_real_escape_string($link,$_POST["phoneNumber"]);


$sql = "INSERT INTO fullcontract(NameContract, DateCreateContract, Property, ValueContract
,AmountDeposit,RemainAmount,_Status,NameBuyer,DateBorn,IDCard,_Address,PhoneNumber) 
VALUES ('$nameContract','$dateCreateContract','$property','$valueContract','$amountDeposit','$remainAmount',
'$_status','$nameBuyer','$dateBorn','$idCard','$address','$phoneNumber')";

if (mysqli_query($link, $sql)){
    header("Location: ./ViewContract.php");
}else{
    echo"Lỗi: yêu cầu nhập lại".mysqli_error($link);
}

mysqli_close($link);


?>