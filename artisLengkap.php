<?php 
if(isset($_POST["art"])){
	$conn = mysqli_connect("localhost","root","","webmp3");
	$output = ''; 
	$artis = $_POST["art"];
	$query = "SELECT * FROM musik where penyayi ='$artis'"; 

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)>0){

		$output .='<div class="col-md-12 text-center">
		<div class="row" style="text-align: center;">

		<div class="col-md-12 mt-3">
		<h3 class="font-weight-bold text-light">ARTIST SONG</h3>
		</div>
		</div>
		</div>';


		while($row = mysqli_fetch_array($result)){ 
			$judul = $row["judul"];
			$gambar = $row["gambar"];
			$penyanyi = $row["penyayi"];
			$audio = $row["audio"];
			$album = $row["album"];
			
			$output .='

			<div class="row ml-2 w-200 mt-3 bg-dark">
			<div class="col-md-2">
			<img src="img/'.$gambar.'.jpg" class="card-img-top" alt="..." style="height: 80px; width: 110px">
			</div>
			<div class="col-md-4">
			<div class="d-flex w-100 justify-content-between">
			<h5 class="font-weight-bold text-light">'.$judul.'<h5>
			</div>
			<p class="mb-1 text-light d-flex w-100 justify-content-between">'.$penyanyi.'</p>
			</div>
			<div class="col-md-2 mt-3">
			<button class="btn btn-success" style="width: 100%"  onclick="play(`'.$gambar.'`,`'.$judul.'`,`'.$penyanyi.'`,`'.$audio.'`);"><i class="fas fa-play mr-2 text-light"></i>play</button>
			</div>
			<div class="col-md-4 mt-3">
			 <a href="https://download-lagu-mp3.com/id/download-'.$judul.'-'.$penyanyi.'" class="btn btn-primary" style="width: 100%"><i class="fas fa-download mr-2 text-light"></i>download</a>
			</div>
			</div>
			';


		}
	}

	echo $output; //mencetak output 

}
?>
