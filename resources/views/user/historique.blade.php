<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data table</title>

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.semanticui.min.css">


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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- DataTables CSS Files -->
    <style>
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
        .imprimer {
        text-align: center;
        background: linear-gradient(90deg, #a8292b, #ff7a7a);
        padding: 10px;
        border-radius: 20px;
        color: white;
        font-size: 16px;
        font-weight:600;
        margin: 0 auto;

        width: 20%;
        box-sizing: border-box;
        cursor: pointer;
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
        th,
    td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      font-size: 16px;
    }
        .card {
        width: 100%;
        background-color: #f2f2f2;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 30px;
      }
    </style>
    
</head>
<body style="margin-top: 200px;">
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
    <div class="container" style="margin-bottom: 40px">
        <div class="card" style="border-radius: 20px">
            <div class="card-body">
                <h1 style="text-align: center;font-size: 20px">Tableau des derniers chèques imprimés:</h1>
        <table id="example" class="ui celled table" style="width:100%">
            <thead>
                <tr>
                    <th>pay</th>
                    <th>banque</th>
                    <th>la date</th>
                    <th>l'order</th>
                    <th>Montant</th>
                    <th>Fait a</th>
                    <th style="text-align: center">Delete</th>
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
                    <td style="text-align: center"><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deleteHistorique',$item->id)}}"><i class="fas fa-trash-alt"></i> </a></td>
                </tr>
                @endforeach
                
            </tbody>
          
        </table>
        <h4 class="imprimer" ><a id="printBtn" href="{{ route('print.check') }}" > Effacer le tableau</a></h4>
    </div>
</div>
</div>

    

   

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.semanticui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>
    




    <script>
    $(document).ready(function () {
    $('#example').DataTable();
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
              &copy; Copyright <strong><span>Ourcheck</span></strong>. All Rights Reserved
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

    
</body>
</html>