   <?php 

   session_start();

   if (!isset($_SESSION["username"])) {

    header("location: home.php"); 
    exit;
  }

  $conn = mysqli_connect("localhost","root","","webmp3");

//PAGINATION
  $perhal = 6;
  $result = mysqli_query($conn,"SELECT * from musik");
  $jumlahdata = mysqli_num_rows($result);

  $jumlahhal = ceil($jumlahdata/$perhal);

  if(isset($_GET['halaman'])){

    $halaktif = $_GET["halaman"];
  }
  else{

    $halaktif = 1;
  };

  $awaldata = ($perhal) * ($halaktif) - ($perhal);



  $id_user = $_SESSION["id_user"];
  $nama = $_SESSION["username"];

  $result = mysqli_query($conn,"SELECT * from musik LIMIT $awaldata,$perhal");

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
    <style type="text/css">

  </style>
  <title>SPOTIFY</title>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #000">
    <div class="container">
      <h3><i class="fab fa-spotify text-success mr-2"></i> </h3>
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
          <a class="nav-link text-light font-weight-bold mr-2" href="home.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="video1.php">video<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold m2-2" onclick="buk();" style="cursor: pointer;">Help<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2">|<span class="sr-only">(current)</span></a>
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
        <li class="list-group-item text-light" style="background-color: #000; cursor: pointer;" onclick="home();">
          <i class=" text-light mr-3"></i>all song</li>
          <li class="list-group-item text-light" style="background-color: #000; cursor: pointer;" onclick="art('art.php');">
           <i class="fas fa-microphone-alt mr-3"></i>artist</li>
           <li class="list-group-item text-light" style="background-color: #000; cursor: pointer;" onclick="art('artis.php');">
            <i class="fas fa-fire mr-3"></i>popular</li>
            <li class="list-group-item text-light" style="background-color: #000; cursor: pointer;" onclick="art('album.php');">
              <i class="fas fa-compact-disc mr-3"></i>albums</li>
              <li class="list-group-item text-light" style="background-color: #000; cursor: pointer;" id="murah" name="murah">your library</li>
              <li class="list-group-item text-light font-weight-bold" style="background-color: #000; cursor: pointer;"><a href="home.php" class="text-light">made for you</a></li>
              <li class="list-group-item text-light font-weight-bold" style="background-color: #000; cursor: pointer;"> <a href="home.php" class="text-light">history</a></li>
              <li class="list-group-item text-light" style="background-color: #000; border-color: #fff; cursor: pointer;"><i class="fas fa-plus-circle mr-3"></i>new playlist</li>
            </ul>

          </div>
          <div class="col-md-9 text-center" style="background-color: #0a0a0a" id="kore">
            <div class="row" style="text-align: center;" id="kere">

              <div class="col-md-12 mt-3 mb-3">
                <h3 class="font-weight-bold text-light">POPULAR SONG</h3>
              </div>
            </div>



            <div class="row" id="lili">



              <?php while($row = mysqli_fetch_assoc($result)) : ?>

                <div class="card ml-5 mb-4" style="width: 200px; background-color: #000">
                  <img src="img/<?= $row['gambar']?>.jpg" class="card-img-top" alt="..." style="height: 150px;">
                  <div class="card-body">
                   <h5 class="card-title  text-center text-light font-weight-bold m-3"><?= $row["judul"]?></h5>
                   <p class="card-tex text-light mt-2"><?= $row["penyayi"]?><p>
                    <p class="card-text text-light mt-2">album : <?= $row["album"]?><p>
                     <button class="btn btn-success" style="width: 100%"  onclick="play('<?= $row['gambar']?>','<?= $row["judul"]?>','<?= $row["penyayi"]?>','<?= $row["audio"]?>');"><i class="fas fa-play mr-2 text-light"></i>play</button>
                     <a href="https://download-lagu-mp3.com/id/download-<?= $row["judul"]?>-<?= $row["penyayi"]?>" class="btn btn-primary" style="width: 100%"><i class="fas fa-download mr-2 text-light pt-1"></i>download</a>
                   </div>
                 </div>
               <?php endwhile; ?>
             </div>

             <div class="row mr-2 bg-dark" style="margin-bottom: 150px;">

              <p class="text-light ml-5 mr-4 mt-2">page |</p>

              <?php for($i = 1; $i <= $jumlahhal; $i++ ): ?>

                <?php if($i == $halaktif) : ?>

                  <a class="btn btn-primary m-1" href="?halaman=<?= $i; ?>"><?= $i;  ?></a>

                  <?php else : ?>
                    <a class="btn btn-light m-1" href="?halaman=<?= $i; ?>"><?= $i;  ?></a>

                  <?php endif; ?>

                <?php endfor; ?>
              </div>

            </div>



          </div>

        </section>
        <div id="baka">

        </div>


        <div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" style="background-image: url(img/warna.jpg); background-size: cover;">
              <div class="modal-header" style="text-align: center;">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">HELP ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body" id="modal_edit">
                <div class="row">
                  <div class="col-md-12">
                    <table class="table table-borderless">
                      <tr>
                        <th>suggestion</th>
                        <td><textarea type="text" autofocus="on" name="username" id="username" autocomplete="off" class="form-control text-center" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                        border-top-left-radius: 20px !important;
                        border-bottom-left-radius: 20px !important;" placeholder="suggestion"></textarea></td>
                      </tr>

                      <tr>
                        <th>complain</th>
                        <td><textarea type="text" name="password" id="password" class="form-control text-center" autocomplete="off" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                        border-top-left-radius: 20px !important;
                        border-bottom-left-radius: 20px !important;" placeholder="complain"></textarea></td>
                      </tr>

                      <tr>
                        <th>terms and condition</th>
                        <td> <a href="facebook.com/onlyandri">read our terms & condition</a></td>
                      </tr>

                      <tr>
                        <th>contact us</th>
                        <td> <a href="facebook.com/onlyandri">click here</a></td>
                      </tr>

                    </table>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px">Cancel</button>
                <button type="submit" class="btn btn-success" style="width: 100px" id="login" name="login"><i class="fas fa-paper-plane mr-2 text-light"></i>send</button>
              </div>
            </div>
          </div>
        </div>



        <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript">

          function buk(){

            $('#modal_login').modal('show');
          }

          function play(gmbr,jdl,peny,aud){

            var pti = `

            <nav class="navbar navbar-expand-lg navbar-light fixed-bottom bg-dark" style="height: 80px;">
            <div class="container">
            <div class="row ml-5">
            <div class="col-md-2">
            <img src="img/`+gmbr+`.jpg" id="muter" class="card-img-top ml-5" alt="..." style="height: 80px; width: 80px; border-radius:50%;">
            </div>
            <div class="col-md-5">
            <div class="list-group">
            <div class="list-group-item bg-dark ml-3">
            <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1 font-weight-bold text-light">`+jdl+`</h5>
            </div>
            <p class="mb-1 text-light">`+peny+`</p>
            </div>
            </div>
            </div>
            <div class="col-md-5 mt-3">
            <audio controls autoplay style="width: 500px; height:50px;" >
            <source src="audio/`+aud+`.mp3" type="audio/mp3" >
            </audio>
            </div>
            </div>
            </div>
            </nav>

            `;

            document.getElementById('baka').innerHTML = pti;
          }


          function art(ar){ 

            var artis = "artis";

            $.ajax({ 
              url: ar,
              method :"POST",
              data:{artis:artis}, 

              success:function(data){ 
                $('#kore').html(data); 
              }
            });
          };

          function home(){ 

            var artis = "artis";

            $.ajax({ 
              url: "awal.php",
              method :"POST",
              data:{artis:artis}, 

              success:function(data){
                $('#kore').html(data); 
              }
            });
          };


          function detart(dt,alb){

            var art = dt;

            $.ajax({ 
              url: alb,
              method :"POST",
              data:{art:art}, 

              success:function(data){
                $('#kore').html(data); 
              }
            });

          }




          $(document).ready(function(){

           $('#cari').on('keyup',function(){

            var cari = $('#cari').val();

            $.ajax({
              url:"cari.php",
              method :"POST",
              data:{cari:cari},

              success:function(data){
                $('#kore').html(data);
              }
            });

          });

         });


       </script>
     </body>
     </html> 