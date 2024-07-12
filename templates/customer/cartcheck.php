<?php 
session_start();
$ordernumber= mt_rand(10000000000,99999999999);
$connop = mysqli_connect('localhost', 'root','rootpw', $_SESSION['numberl'].'b');
$lopu =  "CREATE table  b".$ordernumber."(id varchar(255),products  varchar(255),category varchar(255) ,qnty int)";
mysqli_query($connop,$lopu);
$okp = "INSERT INTO b".$ordernumber." SELECT id,products,category,qnty FROM cart";
mysqli_query($connop,$okp);
$ohk = "SELECT hotel,priceXqnty FROM cart";
$oikl = mysqli_query($connop,$ohk);
$kkoi = mysqli_fetch_all($oikl,MYSQLI_ASSOC);
$subcost = 0;
foreach ($kkoi as $value) {
	$subcost += $value['priceXqnty'];
}
$dpf = $subcost*0.1;
$tax = $subcost*0.18;
$totalcost = $subcost + $dpf + $tax;
$jio = "INSERT INTO checkout(ordernumber,hotel,cadd,status,deliverypartnerfee,tax,subcost,totalamt) values(".$ordernumber.",'".$kkoi[0]['hotel']."','null','Waiting for Restaurant to Confirm Your Order',".$dpf.",".$tax.",".$subcost.",".$totalcost.")";
mysqli_query($connop,$jio);
$hoku = "INSERT INTO rliveorders(ordernumber,status,contact,subtotal,total) values(".$ordernumber.",'pending','".$_SESSION['numberl']."b',".$subcost.",".$totalcost.")";
echo $hoku;
$connop1 = mysqli_connect('localhost', 'root','rootpw',$kkoi[0]['hotel']);
mysqli_query($connop1,$hoku);
$optyko = "CREATE table "."o".$ordernumber."(id varchar(255),products varchar(255),category varchar(255) ,qnty int)";
mysqli_query($connop1,$optyko);
//inserting into ordernum table is left
//create separate table instead of billings in customer database instead  use order number for multiple order prob
$polp = "SELECT id,products,category,qnty from cart";
$htpk = mysqli_query($connop,$polp);
$ktok = mysqli_fetch_all($htpk,MYSQLI_ASSOC);
foreach ($ktok as $yuot) {
	mysqli_query($connop1,"INSERT INTO o".$ordernumber." values('".$yuot['id']."','".$yuot['products']."','".$yuot['category']."',".$yuot['qnty'].")");
}
mysqli_query($connop,"DELETE FROM cart");
$_SESSION['ordernum'] = $ordernumber;
$conn98 = mysqli_connect('localhost','root','rootpw','dmanager');
$loki = "SELECT * from dsignup where status = 'notassigned'";
$kalaki = mysqli_query($conn98,$loki);
$runk = mysqli_fetch_all($kalaki,MYSQLI_ASSOC);
$grp= mt_rand(0,count($runk)-1);
$ranku ="UPDATE dsignup set status= 'assignedto".$_SESSION['numberl']."b".$ordernumber."' where id = ".$runk[$grp]['id'];

if(mysqli_query($conn98,$ranku)){
header("location: trackorders.php");
}

?>