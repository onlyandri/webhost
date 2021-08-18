<?php 
if(isset($_POST["artis"])){
	$conn = mysqli_connect("localhost","root","","webmp3");
	$output = ''; 
	$query = "SELECT penyayi FROM musik group by penyayi"; 

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)>0){

		$output .='<div class="col-md-12 text-center">
		<div class="row" style="text-align: center;">

		<div class="col-md-12 mt-3">
		<h3 class="font-weight-bold text-light">ARTIST LIST</h3>
		</div>
		</div>
		</div>';


		while($row = mysqli_fetch_array($result)){ 
			$penyanyi = $row["penyayi"];
			
			$output .='

			<div class="row ml-2 w-200 mt-3 bg-dark" onclick="detart(`'.$penyanyi.'`,`artisLengkap.php`)" style="cursor: pointer;">
			<div class="col-md-8">
			<div class="d-flex w-100 justify-content-between">
			<h5 class="font-weight-bold text-light">'.$penyanyi.'<h5>
			</div>
			<p class="mb-1 text-light d-flex w-100 justify-content-between">kategory : artis</p>
			</div>
			</div>
			';


		}
	}

	echo $output; 

}
?>
