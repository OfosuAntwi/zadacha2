<?php
##

$first_sql='SELECT build,contact FROM buildings';

$query=$con->query($first_sql);


$count=1;
$builds=array();
$contacts=array();
while ($row=mysqli_fetch_assoc($query)) {
	$builds[$count]=$row['build'];
	$contacts[$count]=$row['contact'];

	if ($count>1) {
		if ($contacts[$count]==$contacts[$count-1]) {
			echo "Здание".[$count].", Здание".[$count-1]." связаны ".$contacts[$count]."";
		}
	}
	$count+=1;



	
}

?>