<?php
	
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	function get_data() {
			 
      $file_name='Get'. '.json';

	if(file_exists("$file_name")) {
		$current_data=file_get_contents("$file_name");
		$array_data=json_decode($current_data, true);
	$extra=array(
	
			'View Story' => $_POST['View Story'],
		
			
);
		$array_data[]=$extra;
		echo "true";
		return json_encode($array_data);
}
else {
	$datae=array();
	$datae[]=array(
	
			'View Story' => $_POST['View Story'],
			
);
echo "no file";
	return json_encode($datae);
}
}

	$file_name='Get'. '.json';
	
	if(file_put_contents("$file_name", get_data())) {
		echo 'true';
	}				
	else {
		echo 'error';				
	}
}
	
?>
	