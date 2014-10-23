<?php
$csv = array();

// Open the CSV file
if(($file = fopen("301.csv", "r")) !== FALSE) {
	$key = 0;
	
	// Loop through the file
	while(($data = fgetcsv($file, 0, ",")) !== FALSE) {
		// Count the total amount of values in each row
		$c = count($data);
		
		// Populate the array
		for($x = 0; $x < $c; $x++) {
			$csv[$key][$x] = $data[$x];
		}

		$key++;
	}

	// Close the CSV file
	fclose($file);
}

foreach($csv as $threeohone) {
	echo "RewriteRule ^" . $threeohone[0] . "$ " . $threeohone[1] . " [R=301,L]<br />";
}
?>
