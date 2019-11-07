
<?php
include_once('connection.php');
if(!$conn){
	echo "လိုင်းမကောင်းပါ";
}else{
	//use utf8 format to correct mm text
	$conn->set_charset('utf8');
	$select_sql = "select name from mm";
	$stmt1=$conn->prepare($select_sql);
	$stmt1->execute();
	$stmt1->bind_result($name);
	while($stmt1->fetch()){
		echo "$name <br>";
	}
}
?>