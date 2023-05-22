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

        input:focus, select:focus {
        border: 1px solid #ff6801; }

        body {
        position: relative;
        }

        

        body::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
        z-index: -2;
        }
        table {
      width: 90%;
      border-collapse: collapse;
      font-family: 'Montserrat', sans-serif;
    }

    th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      font-size: 16px;
    }

    th {
      background-color: #f2f2f2;
      border-bottom: 1px solid #ddd;
      color:black;
      font-weight: bold;
      width: 100px;
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
        width: 30%;
        box-sizing: border-box;
        cursor: pointer;
        }
    .imprimer:hover{
        background:linear-gradient(90deg, #e23e40, #ff7a7a) ;
        }

    td {
      background-color: #fff;
      color:black;
    }

    tr:hover td {
      background-color: #f5f5f5;
    }

      .table tbody tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      .table td img {
        max-height: 60px;
        max-width: 100px;
      }

        .imprimer:hover{
        background:linear-gradient(90deg, #e23e40, #ff7a7a) ;
        }
        h2{
            text-align: center;
        }

        @media (max-width: 768px) {
            .form-container{
            width: 100%;
            }
            .imprimer{
      margin-top: 10px;
      font-size: 16px;
      width: 80%;
      margin-bottom: 10px;
    }
    .image-container {
      width: 80%;
      margin-top: 10px;
    }
    table {
      width: 90px;
    
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
          <li><a class="nav-link scrollto" href="#contact">Historique</a></li>
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
  
  <div class="container-fluid page-body-wrapper" style="margin-bottom: 200px;margin-top: 200px">
            <h2>Tableau des derniers chèques imprimés.</h2>

         <form class="d-lg-flex search-form" style="width: 200px">
            <input type="text" style="background-color: white" class="form-control search-input" placeholder="Search..">
          </form>
       
        <table class="table" style="">
          <thead>
            <tr>
              <th>pay</th>
              <th>banque</th>
              <th>la date</th>
              <th>l'order</th>
              <th>Montant</th>
              <th>Fait a</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr>
              <td>{{$item->pay}}</td>
              <td>{{$item->bank}}</td>
              <td> {{$item->datecheque}}</td>
              <td>{{$item->order}} </td>
              <td> {{$item->montant}} DH</td>
              <td>{{$item->payerpour}}</td>
              <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deleteHistorique',$item->id)}}"><i class="fas fa-trash-alt"></i> </a></td>
            </tr>
            @endforeach
            </tbody>
            </table>
            <h4 class="imprimer" ><a id="printBtn" href="" >Effacer le tableau</a></h4>
        </div>
       
    
            <script>
              document.querySelector('.search-input').addEventListener('input', function() {
                var searchValue = this.value.toLowerCase();
                var tableRows = document.querySelectorAll('.table tbody tr');
          
                tableRows.forEach(function(row) {
                  var bankType = row.querySelector('td:nth-child(1)').textContent.toLowerCase();
                  if (bankType.includes(searchValue)) {
                    row.style.display = '';
                  } else {
                    row.style.display = 'none';
                  }
                });
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