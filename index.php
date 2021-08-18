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
  <link rel="stylesheet" type="text/css" href="css/style_index.css">
  <script  src="js/jquery1.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jqueri_ui/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="js/jqueri_ui/jquery-ui.css">
  <title>SPOTIFY</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:rgba(000,000,000,0.5);">
    <div class="container">
      <h3><i class="fab fa-spotify text-light mr-2"></i> </h3>
      <a class="navbar-brand font-weight-bold text-light" style="color: white" href="#">Spotify</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse p-3" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="home.php">Premium<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="#">Download<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold m2-2" href="#">Help<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold mr-2" href="#">|<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold m2-2" onclick="buk();" style="cursor: pointer;">Daftar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light font-weight-bold m2-2" onclick="buka();" style="cursor: pointer;">Masuk<span class="sr-only">(current)</span></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container">
    <h1 class="display-4 font-weight-bold">Musik untuk semua orang.<br><img src="img/spotp.png" class="logo"></span></h1></h1>
    <hr class="my-4">
    <p class="lead">Jutaan lagu. Tak perlu kartu kredit.</p>
    <a class="btn btn-success btn-lg lead" href="https://www.spotify.com/id/download/other/" role="button">dapatkan spotify free</a>
  </div>
</div>


<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-image: url(img/warna.jpg); background-size: cover;">
      <div class="modal-header" style="text-align: center;">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_edit">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-borderless">
              <tr>
                <th>username</th>
                <td><input type="text" autofocus="on" name="username" id="username" class="form-control text-center" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                border-top-left-radius: 20px !important;
                border-bottom-left-radius: 20px !important;" placeholder="masukan username"></td>
              </tr>

              <tr>
                <th>password</th>
                <td><input type="password" name="password" id="password" class="form-control text-center" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                border-top-left-radius: 20px !important;
                border-bottom-left-radius: 20px !important;" placeholder="masukan password"></td>
              </tr>

            </table>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px">Cancel</button>
        <button type="submit" class="btn btn-success" style="width: 100px" id="login" name="login">LOGIN</button>
      </div>
    </div>
  </div>
</div>

  <div class="modal fade" id="modal_reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"  style="background-image: url(img/warna.jpg);">
        <div class="modal-header">
          <h5 class="modal-title font-weight-bold" id="exampleModalLabel">REGISTRASI</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="modal_edit">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-borderless">
                <tr>
                  <th>username</th>
                  <td><input type="text" name="user" id="user" class="form-control text-center" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                  border-top-left-radius: 20px !important;
                  border-bottom-left-radius: 20px !important;" placeholder="masukan username"></td>
                </tr>

                <tr>
                  <th>password</th>
                  <td><input type="password" name="pass" id="pass" class="form-control text-center" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                  border-top-left-radius: 20px !important;
                  border-bottom-left-radius: 20px !important;" placeholder="password"></td>
                </tr>

                  <tr>
                  <th>email</th>
                  <td><input type="email" name="email" id="email" class="form-control text-center" style="margin: 2px; border-top-right-radius: 20px !important;border-bottom-right-radius: 20px !important; border: 1px solid green !important;
                  border-top-left-radius: 20px !important;
                  border-bottom-left-radius: 20px !important;" placeholder="masukan email"></td>
                </tr>

              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="width: 100px">Cancel</button>
          <button type="submit" class="btn btn-success" style="width: 100px" id="regis" name="regis" data-target="#modal_login" data-toggle="modal">sign up</button>
        </div>
      </div>
    </div>
  </div>



<footer class="text-white p-3 mt-5" style="background-color: #000">
  <div class="row pt-5">
    <div class="col-md-3">
      <h5>LAYANAN PELANGGAN</h5>
      <ul pt-5>
        <li>pusat bantuan</li>
        <li>about us</li>
        <li>join us</li>
        <li>ktitik & saran</li>
      </ul>
    </div>
    <div class="col-md-3">
      <h5>LAYANAN PELANGGAN</h5>
      <p>Kami dari PT travelxism mengucapkan banyak terima kasih kepada para pelanggan yang sudah menggunakan aplikasi ini untuk melakukan pemesanan tiket kereta api di Indonesia, semoga anda terbantu dan menikmati layanan kami</p>
    </div>
    <div class="col-md-3">
      <h5>Mitra Kerja Sama</h5>
      <ul>
        <li>GRAMEDIA</li>
        <li>AMAZON</li>
        <li>traveloka</li>
        <li>KOMPAS.COM</li>
      </ul>
    </div>
    <div class="col-md-3">
      <h5>Hubungi Kami</h5>
      <ul>
        <li>Onlyandri</li>
        <li>web developer</li>
        <li>mobile app developer</li>
        <li>terima pesanan</li>
        <li>082220209043</li>
        <li>onlyandri97@gmail.com</li>
        <li>OA.Corp</li>
      </ul>
    </div>
  </div>

  <div class="row">
    <div class="col-md-3" style="margin-top: 250px">
      <a href="">privasi</a>
    </div>
    <div class="col-md-3" style="margin-top: 250px">
      <a href="">term</a>
    </div>
    <div class="col-md-3" style="margin-top: 250px">
      <a href="">bantuan</a>
    </div>
    <div class="col-md-3" style="margin-top: 250px">
      <a href="">hak cipta @onlyandri</a>
    </div>

  </div>

</footer>



<script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
 function buka(){

  $('#modal_login').modal('show');
}

function buk(){

  $('#modal_reg').modal('show');
}

$(document).ready(function(){

      $('#login').click(function(){

        var username = $('#username').val();
        var password = $('#password').val();

        if (username !='' && password !='') {

          $.ajax({
            url :"login.php",
            method : "POST",
            data :{username:username, password:password},

            success:function(data){

              if (data == "no") {
                alert("password/username salah");

              }
              else{
            $('#modal_login').modal('hide');
             //$('#lili').html(data);
            window.location.replace('home.php');
                }
            }
          });

        }
        else{
          alert("field harus diisi semua");
        }


      });

      $('#regis').click(function(){

        var username = $('#user').val();
        var password = $('#pass').val();
        var email    = $('#email').val();

        if (username !='' && password !='' && email !='') {

          $.ajax({
            url :"registrasi.php",
            method : "POST",
            data :{username:username, password:password, email:email},

            success:function(data){

              if (data == "no") {
                alert("password/username salah");

              }
              else{
            $('#modal_reg').modal('hide');
             $('#lili').html(data);
             // window.location.replace('utama.php');
                }
            }
          });

        }
        else{
          alert("field harus diisi semua");
        }

 
      });
    });

</script>

</body>
</html>