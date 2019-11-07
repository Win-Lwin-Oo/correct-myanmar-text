<?php
include_once('connection.php');
if(!$conn){
	echo "လိုင်းမကောင်းပါ";
}else{
	$name = $_POST['name'];

	$insert_sql = "insert into mm(name) values (?)";
	$stmt=$conn->prepare($insert_sql);
	$stmt->bind_param("s",$name);
	$stmt->execute();
	
	if($stmt){
		echo "မင်္ဂလာပါ $name အမည်ထည့်သွင်းမှု့အောင်မြင်ပါသည်။";
	}
	
}

?>