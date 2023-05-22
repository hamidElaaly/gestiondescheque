<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Presento Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="user/assets/img/favicon.png" rel="icon">
  <link href="user/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="user/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="user/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="user/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="user/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="user/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="user/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="user/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="user/assets/css/style.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  
  <style>
    
    .form-image-container {
      display: flex;
      flex-wrap: wrap;
    }
    
        .form-container {
        border-radius: 10px;
        padding-left: 10px;
        background: linear-gradient(90deg, #a8292b, #ff7a7a);
        position: relative;
        margin: 60px 10px;
        width: 25%;

        }





        label{
        font-size: 15px;
        font-weight: 900;
        font-family: 'Montserrat';
        margin-bottom: 2px;
        display: block;
        color: white;
        }

        input{
        display: block;
        width: 100%;
        height: 30px;
        border: 2px solid #ebebeb;
        padding: 11px 20px;
        box-sizing: border-box;
        font-family: 'Montserrat';
        font-weight: 500;
        font-size: 13px;
        }

        input {
        outline: none;
        appearance: unset !important;
        -moz-appearance: unset !important;
        -webkit-appearance: unset !important;
        -o-appearance: unset !important;
        -ms-appearance: unset !important; }

        select{
        display: block;
        width: 100%;
        border: 2px solid #ebebeb;
        box-sizing: border-box;
        font-family: 'Montserrat';
        font-weight: 500;
        font-size: 13px;
        padding-left: 10px;
        }
        input:focus, select:focus {
        border: 1px solid #ff6801; }

        body {
        position: relative;
        }

        body::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity value (0.5) as needed */
        z-index: -1;
        }

        body::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url("user/assets/img/tabs-1.jpg");
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -2;
        }




        .image-container {
        position: relative;
     
        margin: 0 auto;
        margin-top: 200px;
        }

        .imprimer {
        text-align: center;
        background: linear-gradient(90deg, #a8292b, #ff7a7a);
        padding: 20px;
        border-radius: 20px;
        color: white;
        font-size: 20px;
        font-weight:600;
        margin: 0 auto;
        margin-top: 40px;
        width: 50%;
        box-sizing: border-box;
        cursor: pointer;
        }
        .imprimer:hover{
        background:linear-gradient(90deg, #e23e40, #ff7a7a) ;
        }

        @media (max-width: 768px) {
    .form-container{
      width: 100%;
    }
    .image-container {
      width: 80%;
      margin-top: 10px;
    }
    .imprimer{
      margin-top: 10px;
      font-size: 16px;
      width: 80%;
      margin-bottom: 10px;
    }
  

  }
</style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html"><span>Our</span>Check<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('return_hero')}}">Accueil</a></li>

          @auth
          <li><a href="{{url('check_page')}}">Cheque</a></li>
          <li><a class="nav-link scrollto" href="{{url('historique_page')}}">Historique</a></li>
          <x-app-layout>
          </x-app-layout>
          @endauth
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
     
   @guest
       <a href="{{route('login')}}" class="get-started-btn scrollto">Login</a>
      <a href="{{route('register')}}" class="get-started-btn scrollto">Register</a>
   @endguest
      
    </div>
  </header>
  <!-- End Header -->

  <!-- Add your image here -->
  


<div class="form-image-container mt-5">
  <div class="form-container">
    <!-- Add this code inside the form-container -->

    <label for="attempts" class="form-label">Remaining Attempts:</label>
    @foreach ($remainingAttempts as $item)
     @if ($item->usertype==0)
     <input type="text" id="attempts" value="{{ $item->remaining_attempts }}" disabled>
     @endif
    @endforeach
    
    <section id="tabs" class="tabs " >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2 mt-3 mt-lg-0" style="width: 100%;">
          <aside>
            <form id="printSection" action="{{ url('upload_check') }}" method="POST" >
                @csrf
              <div class="mb-3">
                <label for="state" class="form-label">State :</label>
                <select id="pay" name="pay" class="form-control input-lg dynamic" data-dependent="bank">
                    <option value="">--SELECT-PAYS--</option>
                    @foreach ($country_list as $item)
                    <option value="{{$item->pay}}" >{{$item->pay}}</option>
                    @endforeach
                  </select>
              </div>
              <div class="mb-3">
                <label for="banks" class="form-label">Banks:</label>
                <select id="bank" class="form-control input-lg dynamic" name="bank" style="color: black;">
                    <option value="">--SELECT-BANKS--</option>
                  </select>
              </div>
              <div>
                <input type="hidden"  id="Dx_order" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_order" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_date" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_date" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dxcv_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dycv_Montant" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_for" style="color: black; width: 200px;">
                <input type="hidden"  id="Dy_for" style="color: black; width: 200px;">
                <input type="hidden"  id="Dx_bares" style="color: black; width: 200px;">
                <input type="hidden" id="Dy_bares" style="color: black; width: 200px;">
                <input type="hidden"  id="width" style="color: black; width: 200px;">
                <input type="hidden"  id="height" style="color: black; width: 200px;">
              </div>

              <div class="mb-3">
                <label for="date" class="form-label">Date de Chèque:</label>
                <input type="date" id="datecheque" onInput="draw()" name="datecheque" >
                  <div class="datecheque-pos"></div>
              </div>

              <div class="mb-3">
                <label for="order" class="form-label">A l'ordre:</label>
                <input type="text" id="order" onInput="draw()" name="order" style="color: black" >
                  <div class="order-pos"></div>
              </div>
              <div class="mb-3">
                <label for="montant" class="form-label">Montant:</label>
                <input type="number" id="montant" onInput="draw()" name="montant" style="color: black" >
                <div class="montant-pos"></div>
              </div>
              <div class="mb-3">
                <label for="payer" class="form-label">Fait a:</label>
                <input type="text" id="payerpour" onInput="draw()" name="payerpour" style="color: black" >
                <div class="payerpour-pos"></div>
              </div>
              <div class="mb-3">
                <label for="cheque" class="form-label">Chèque barré:</label>
                <input list="b" id="chequebarre" onInput="draw()" name="chequebarre" style="color: black" >
                    <datalist id="b">
                        <option value="/ /">
                        <option value="A/c Payee">
                         <option value="يصرف للمستفيد الأول">
                        <option value="Non Endossable">
                    
                    </datalist>
            <div class="chequebarre-pos"></div>
              </div>
              <button class="imprimer" type="submit" style="background-color: rgb(4, 4, 53)">Submit</button>
            </form>
          </aside>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="image-container" >
   <div style="position: relative; ">
            <img id="bank-image" src="images/1683812141.jpg" alt="Bank Image">
            <canvas id="bank-canvas" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none;"></canvas>
        </div>
        <h4 class="imprimer" ><a id="printBtn" href="{{ route('print.check') }}" >Imprimer Cheque</a></h4>
</div>
</div>
<!-- ======= change contries  ======= -->

<script>
    $(document).ready(function(){
      $('#pay').on('change', function(){
        var pay_id = $(this).val();
        if(pay_id){
          $.ajax({
            url: '/get-banks/'+pay_id,
            type: 'GET',
            dataType: 'json',
            success: function(data){
              $('#bank').empty();
              $('#bank').append('<option value="">--SELECT-PAYS--</option>');
              $.each(data, function(key, value){
              $('#bank').append('<option value="'+ key +'" data-image="'+value['image']+'" data-width="'+value['width']+'" data-height="'+value['height']+'" >'+ value['name'] +'</option>');
              });
        
            }
          });
        }
      });
      $('#bank').on('change', function() {
        var bank_image = $(this).find(':selected').data('image');
        var width = $(this).find(':selected').data('width');
        var height = $(this).find(':selected').data('height');
        if (bank_image) {
          $('#bank-image').attr('src', '/images/' + bank_image);
          $('#bank-image').css('width', width + 'px');
          $('#bank-image').css('height', height + 'px');
          $('#width').val(width);
          $('#height').val(height);
          $('#bank-canvas').attr('width', width + 'px');
          $('#bank-canvas').attr('height', height + 'px');
          drawCanvas();
        }
    
      });
      function drawCanvas() {
        var canvas = document.getElementById('bank-canvas');
        var context = canvas.getContext('2d');
    
        // Clear previous content
        context.clearRect(0, 0, canvas.width, canvas.height);
    
        // Draw image on canvas
        var image = document.getElementById('bank-image');
        context.drawImage(image, 0, 0, canvas.width, canvas.height);
      }
    });
    </script>

    
<script>
    $(document).ready(function(){
     $('#bank').on('change', function(){
         var bank = $(this).find('option:selected').text();
         if(bank){
           $.ajax({
             url: '/get-pos/'+bank,
             type: 'GET',
             dataType: 'json',
             success: function(data){
             $.each(data, function(key, value){
               $('#Dx_order').replaceWith('<input type="hidden" id="Dx_order" name="Dx_order" value="'+value['orderX']+'" style="color: black; width: 200px;">');
               $('#Dy_order').replaceWith('<input type="hidden" id="Dy_order" name="Dx_order" value="'+value['orderY']+'" style="color: black; width: 200px;">');
               $('#Dx_date').replaceWith('<input type="hidden" id="Dx_date"  value="'+value['dateX']+'" style="color: black; width: 200px;">');
               $('#Dy_date').replaceWith('<input type="hidden" id="Dy_date"  value="'+value['dateY']+'" style="color: black; width: 200px;">');
               $('#Dx_Montant').replaceWith('<input type="hidden" id="Dx_Montant" value="'+value['MontantX']+'" style="color: black; width: 200px;">');
               $('#Dy_Montant').replaceWith('<input type="hidden" id="Dy_Montant" value="'+value['MontantY']+'" style="color: black; width: 200px;">');
               $('#Dxcv_Montant').replaceWith('<input type="hidden" id="Dxcv_Montant" value="'+value['MontantXv']+'" style="color: black; width: 200px;">');
               $('#Dycv_Montant').replaceWith('<input type="hidden" id="Dycv_Montant" value="'+value['MontantYv']+'" style="color: black; width: 200px;">');
               $('#Dx_for').replaceWith('<input type="hidden" id="Dx_for" value="'+value['forX']+'" style="color: black; width: 200px;">');
               $('#Dy_for').replaceWith('<input type="hidden" id="Dy_for" value="'+value['forY']+'" style="color: black; width: 200px;">');
               $('#Dx_bares').replaceWith('<input type="hidden" id="Dx_bares" value="'+value['baresX']+'" style="color: black; width: 200px;">');
               $('#Dy_bares').replaceWith('<input type="hidden" id="Dy_bares" value="'+value['baresY']+'" style="color: black; width: 200px;">');
               $('#width').replaceWith('<input type="hidden" id="width" value="'+value['width']+'" style="color: black; width: 200px;">');
               $('#height').replaceWith('<input type="hidden" id="height" value="'+value['height']+'" style="color: black; width: 200px;">');
             });
             },
           });
         } 
       });
   
   });
    
   
   </script>

   
<script>
    function draw() {
        const canvas = document.getElementById('bank-canvas');
        const ctx = canvas.getContext('2d');
        let img =document.getElementById("bank-image");
        img.src = document.getElementById("bank-image").src;
        img.addEventListener("load", ()=>{
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.clearRect(0, 0, canvas.width, canvas.height); // clear the canvas
            ctx.drawImage(img,1000,1000);
            ctx.font = '20px Arial bold';
    
            var x = document.getElementById("Dx_for").value;
            var y = document.getElementById("Dy_for").value;
            var payerpour = document.getElementById("payerpour").value;
            ctx.fillText(payerpour, x, y);
    
            var z = document.getElementById("Dx_order").value;
            var w = document.getElementById("Dy_order").value;
            var order = document.getElementById("order").value;
            ctx.fillText(order, z, w);
    
            var h = document.getElementById("Dx_Montant").value;
            var m = document.getElementById("Dy_Montant").value;
            var montant = document.getElementById("montant").value;
            ctx.fillText(montant, h, m);
    
            var hh = document.getElementById("Dxcv_Montant").value;
            var mm = document.getElementById("Dycv_Montant").value;
            var number = document.getElementById("montant").value;
            Convertmontant=convertNumberToFrenchText(number) + ' dirhams';
            ctx.fillText(Convertmontant, hh, mm);
    
              var n = document.getElementById("Dx_bares").value;
              var i = document.getElementById("Dy_bares").value;
              var bares = document.getElementById("chequebarre").value;
              ctx.fillText(bares, n,i);
    
            var l = document.getElementById("Dx_date").value;
            var k = document.getElementById("Dy_date").value;
            var date = document.getElementById("datecheque").value;
            ctx.fillText(date, l,k);
      
        });
    }
    </script>

    
<script>
    function convertNumberToFrenchText(number) {
      var units = ['', 'un', 'deux', 'trois', 'quatre', 'cinq', 'six', 'sept', 'huit', 'neuf', 'dix', 'onze', 'douze', 'treize', 'quatorze', 'quinze', 'seize', 'dix-sept', 'dix-huit', 'dix-neuf'];
      var tens = ['', 'dix', 'vingt', 'trente', 'quarante', 'cinquante', 'soixante', 'soixante-dix', 'quatre-vingt', 'quatre-vingt-dix'];
    
      if (number === 0) {
        return 'zéro';
      }
    
      var text = '';
    
      if (number >= 1000000000) {
        var billions = Math.floor(number / 1000000000);
        text += convertNumberToFrenchText(billions) + ' milliard ';
        number %= 1000000000;
      }
    
      if (number >= 1000000) {
        var millions = Math.floor(number / 1000000);
        text += convertNumberToFrenchText(millions) + ' million ';
        number %= 1000000;
      }
    
      if (number >= 1000) {
        var thousands = Math.floor(number / 1000);
        if (thousands === 1) {
          text += 'mille ';
        } else {
          text += convertNumberToFrenchText(thousands) + ' mille ';
        }
        number %= 1000;
      }
    
      if (number >= 100) {
        var hundreds = Math.floor(number / 100);
        if (hundreds === 1 && number % 100 !== 0) {
          text += 'cent ';
        } else if (hundreds === 1 && number % 100 === 0) {
          text += 'cent';
        } else {
          text += units[hundreds] + '-cent ';
        }
        number %= 100;
      }
    
      if (number >= 20) {
        var tensValue = Math.floor(number / 10);
        if (tensValue === 8 && number % 10 === 0) {
          text += 'quatre-vingts ';
        } else if (tensValue === 1 && number % 10 === 1) {
          text += 'onze ';
        } else {
          text += tens[tensValue] + '-';
          if (tensValue === 7 || tensValue === 9) {
            number -= 10;
          }
        }
        number %= 10;
      }
    
      if (number > 0) {
        text += units[number] + ' ';
      }
    
        return text.trim();
    
      
    }
    
    </script>
 
<script>
   
      $('#printBtn').on('click', function() {
  var canvas = document.getElementById('bank-canvas'); // Get the canvas element

  // Apply print-specific style using CSS media query
  var printStyle = '<style>@media print { body * { visibility: hidden; } #bank-canvas { visibility: visible; } }</style>';
  $('head').append(printStyle);

  // Print the page
  window.print();

  // Remove the print-specific style
     
       
  });
    </script>
<script>
$(document).ready(function() {

    var remainingAttempts = parseInt($('#attempts').val());

    $('#attempts').val(remainingAttempts);
    if (remainingAttempts === 0) {
      $('form#printSection input, form#printSection select, form#printSection button').attr('disabled', true);
      alert('limeted')
    }
  });
</script>
    





    <!-- ======= Footer ======= -->
<footer id="footer">


    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->





  <!-- Vendor JS Files -->
  <script src="user/assets/vendor/aos/aos.js"></script>
  <script src="user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="user/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="user/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="user/assets/vendor/php-email-form/validate.js"></script>
  <script src="user/assets/vendor/purecounter/purecounter.js"></script>
  <script src="user/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="user/assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="user/assets/js/main.js"></script>

</body>

</html>