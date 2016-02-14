<?php
$json = array(
'success' => false,
'result' => 0
);
if(isset($_POST['firstnumber'], $_POST['secondnumber'])) {
	$firstnumber = (int)$_POST['firstnumber'];
	$secondnumber = (int)$_POST['secondnumber'];
	$json['success'] = true;
	$json['result'] = $firstnumber * $secondnumber;
}

echo json_encode($json);
