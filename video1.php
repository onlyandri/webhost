<?php 

session_start();

if (!isset($_SESSION["username"])) {

  header("location: index.php"); 
  exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fontaws/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script  src="js/jquery1.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jqueri_ui/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="js/jqueri_ui/jquery-ui.css">
  <title>SPOTIFY</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #000">
    <div class="container">
      <h3><i class="fab fa-spotify text-light mr-2"></i> </h3>
      <a class="navbar-brand font-weight-bold text-light" href="#">Spotify</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">

       <ul class="navbar-nav ml-auto">
         <li class="nav-item active"><form class="form-inline my-2 my-lg-0" method="post" action="">
          <input class="form-control mr-sm-2" type="search" placeholder="search" aria-label="Search" autofocus autocomplete="off" id="cari" name="keyword"  style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important;">
        </form></li> 
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="home.php">Beranda<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="video1.php">video<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold m2-2" href="#">bantuan<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="#">|<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light font-weight-bold" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['username'] ?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">profile</a>
            <a class="dropdown-item" href="logout.php">logout</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="container" style="margin-left: 0px; margin-right: 0px; padding-right: 0px;">

  <div class="row" style="margin-top: 100px;">

    <div class="col-md-3" id="lolo" style="background-color: #000">

      <ul class="list-group list-group-flush borderless position-fixed">
        <li class="list-group-item text-light" style="background-color: #000"><i class="fas fa-home text-light mr-3"></i>home</li>
        <li class="list-group-item text-light" style="background-color: #000" onclick="mur('semua.php');"><i class="fas fa-compact-disc mr-3"></i>albums</li>
        <li class="list-group-item text-light" style="background-color: #000" onclick="mur('filter.php');"><i class="fas fa-microphone-alt mr-3"></i>artist</li>
        <li class="list-group-item text-light" style="background-color: #000" onclick="mur('mahal.php');"><i class="fas fa-fire mr-3"></i>popular</li>
        <li class="list-group-item text-light" style="background-color: #000" id="murah" name="murah">your library</li>
        <li class="list-group-item text-light font-weight-bold" style="background-color: #000">made for you</li>
        <li class="list-group-item text-light font-weight-bold" style="background-color: #000">liked song</li>
        <li class="list-group-item text-light font-weight-bold" style="background-color: #000">podcast</li>
        <li class="list-group-item text-light font-weight-bold" style="background-color: #000">history</li>
        <li></li>
        <li></li>
        <li class="list-group-item text-light" style="background-color: #000; border-color: #fff" onclick="mur('semua.php');"><i class="fas fa-plus-circle mr-3"></i>new playlist</li>
      </ul>

    </div>

    <div class="col-md-9 text-center" style="background-color: #0a0a0a">
      <div class="row" style="text-align: center;">

        <div class="col-md-12 mt-3 mb-3">
          <h3 class="font-weight-bold text-light">video SONG</h3>
        </div>
      </div>



      <div class="row" id="lili">

      </div>
    </div>



  </div>

</section>




<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">

 window.onload = function()
 {
  var yt = `https://www.googleapis.com/youtube/v3/search?key=AIzaSyCJpsKDjGgfgAhv9QpxiQqEvgAffOCgWjc&channelId=UC2pmfLm7iq6Ov1UwYrWYkZA&maxResults=35&order=title&part=snippet`

  $.ajax({

    url: yt,
    method: 'GET', 
    dataType: 'JSONP',
    success: function (res) {
      var print = "";
      var movie = res.items;
      for (var i = 0; i < movie.length; i++) {

        $('#lili').append(`
          <div class="card ml-5 mb-4" style="width: 200px; background-color: #000">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/${movie[i]['id']['videoId']}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          <div class="card-body">
          <h5 class="card-title  text-center text-light">${movie[i]['snippet']['title']}</h5>
          <p class="card-tex text-light">${movie[i]['snippet']['channelTitle']}<p>
          <p class="card-text text-light">deskripsi<p>
          <a href="#" class="btn btn-primary" style="width: 100%"><i class="fas fa-download mr-2 text-light"></i>download</a>
          </div>
          </div>
          `);
      }
    },
    error: function (err) {
      $('#lili').append(` 
        <card style="width: 100%; height: 100%; margin-top: 200px; text-align: center; margin-bottom: 300px;">
        <h3>check you internet connection</h3>
        <button modifier="large" onclick="panggil()" style="">reload</button>
        </card>
        `);
    } 
  });


}


// $(document).ready(function(){

// //   $('#lolo').theiaStickySidebar();
// // })

//  $('#cari').on('keyup',function(){

//       var cari = $('#cari').val();

//         $.ajax({
//           url:"cari.php",
//           method :"POST",
//           data:{cari:cari},

//           success:function(data){
//             $('#lili').html(data);
//           }
//         });

//     });
//   });


</script>
</body>
</html> 