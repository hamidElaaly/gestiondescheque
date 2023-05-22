<!DOCTYPE html>
<html lang="en">
<head>
  <style>

    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
  

    
    body {
      background-color: #f2f2f2;
    }

    label {
        font-family: 'Montserrat', sans-serif;
      display: inline-block;
      width: 200px;
    }
    .card {
        height: 1170px;
        width: 100%;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 0;
      }
   
  </style>
  
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  @include('admin.css')
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="background-color: #FFFFFF;border-radius: 10px">
        <div class="card" style=" background-color: #f2f2f2;border-radius: 20px">
            <div class="card-body">
      <div class="container" align="center">
        <div class="container"  style="padding-top: 100px">
          @if (session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            {{ session()->get('message') }}
          </div>
          @endif
          
          <form action="{{ url('upload_checks') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group" style="padding: 15px">
                <div class="row">
                    <div class="col">
                     <label for="countries" style="color: black;">Countries</label>
                     <input list="countries" placeholder="pay" style="background-color: #ffffff; border:none;" name="pay" class="form-control" style="color: black">
                    </div>
                <div class="col">
                    <label for="banktype" style="color: black"  >Bank Type</label>
                    <input list="banktype" placeholder="banque" style="background-color: #ffffff; border:none;"  name="banktype" class="form-control" style="color: black">
                </div>
                </div>
            </div>
            <div class="form-group" style="padding: 15px">
                <div class="row">
                    <div class="col">
                    <label for="width" style="color: black">Width</label>
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="width" class="form-control" style="color: black">
                  </div>
                  <div class="col">
              <label for="height" style="color: black">Height</label>
              <input type="number" name="height" style="background-color: #ffffff; border:none;" placeholder="la dimansion Y (px)" class="form-control" style="color: black">
            </div>
        </div>
    </div>
            <div class="form-group" style="padding: 15px">
              <label style="color: black">Date</label>
              <div class="row">
                <div class="col">
                  <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="Dx_date" class="form-control" required>
                </div>
                <div class="col">
                  <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion Y (px)" name="Dy_date" class="form-control" required>
                </div>
              </div>
            </div>
            <div class="form-group" style="padding: 15px">
                <label style="color: black">Order</label>
                <div class="row">
                  <div class="col">
                   <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="Dx_order" class="form-control" required>
                  </div>
                  <div class="col">
                    <input type="number" style="background-color: #ffffff;; border:none;" placeholder="la dimansion Y (px)" name="Dy_order" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group" style="padding: 15px">
                <label style="color: black">Montant</label>
                <div class="row">
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="Dx_Montant" class="form-control" required>
                  </div>
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion Y (px)" name="Dy_Montant" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group" style="padding: 15px">
                <label style="color: black">Convert Montant</label>
                <div class="row">
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="Dxcv_Montant" class="form-control" required>
                  </div>
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion Y (px)" name="Dycv_Montant" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group" style="padding: 15px">
                <label style="color: black">Payer pour</label>
                <div class="row">
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="Dx_for" class="form-control" required>
                  </div>
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion Y (px)" name="Dy_for" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group" style="padding: 15px">
                <label style="color: black">Bares</label>
                <div class="row">
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion X (px)" name="Dx_bares" class="form-control" required>
                  </div>
                  <div class="col">
                    <input type="number" style="background-color: #ffffff; border:none;" placeholder="la dimansion Y (px)" name="Dy_bares" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="form-group" style="padding: 15px">
              
                <input type="file" name="image" class="form-control-file" required>
            </div>
            <div class="form-group" style="padding: 15px">
              <button style="background-color:#00C0EF;width:50%;margin-right:22px;color: black" type="submit"  name="add_product">Valider</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
</div>
  </div>
  
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  <!-- Your other scripts -->
  @include('admin.script')
</body>
</html>

  
