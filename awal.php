<?php 
if(isset($_POST["artis"])){
	$conn = mysqli_connect("localhost","root","","webmp3");
	$output = '';
	$query = "SELECT * FROM musik";

	$result = mysqli_query($conn, $query);

	if(mysqli_num_rows($result)>0){

		$output .='<div class="col-md-12 text-center">
		<div class="row" style="text-align: center;">

		<div class="col-md-12 mt-3">
		<h3 class="font-weight-bold text-light">ALL SONG</h3>
		</div>
		</div>
		</div>
		<div class="row">';



		while($row = mysqli_fetch_array($result)){

			$judul = $row["judul"];
			$gambar = $row["gambar"];
			$penyanyi = $row["penyayi"];
			$audio = $row["audio"];
			$album = $row["album"];
			
			$output .='
			
			<div class="card ml-5 mb-4" style="width: 200px; background-color: #000">
			<img src="img/'.$gambar.'.jpg" class="card-img-top" alt="..." style="height: 150px;">
			<div class="card-body">
			<h5 class="card-title  text-center text-light font-weight-bold m-3">'.$judul.'</h5>
			<p class="card-tex text-light mt-2">'.$penyanyi.'<p>
			<p class="card-text text-light mt-2">album : '.$album.'<p>
			<button class="btn btn-success" style="width: 100%"  onclick="play(`'.$gambar.'`,`'.$judul.'`,`'.$penyanyi.'`,`'.$audio.'`);"><i class="fas fa-play mr-2 text-light"></i>play</button>
			<a href="https://download-lagu-mp3.com/id/download-'.$judul.'-'.$penyanyi.'" class="btn btn-primary" style="width: 100%"><i class="fas fa-download mr-2 text-light"></i>download</a>
			</div>
			</div>

			';	
		}
		$output .='</div>';
	}
	else
	{
		$output .='
		<h4 style="text-align:center; margin-top:100px; color:white">mohon maaf lagu tidak tersedia untuk kategori tersebut !!</h4>

		';
	}


	echo $output;

}
?>
