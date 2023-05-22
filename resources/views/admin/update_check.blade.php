
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label{
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
            width: 200px
        }
        .card {
        height: 1220px;
        width: 100%;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 0;
      }
      .b{
        background-color:#00C0EF;
        height:30px ;
         width:30%;
         margin-right:19px;
         
         border-radius: 10px;
         font-size: 18px;
      }
    </style>
    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="card" style=" background-color: #f2f2f2;border-radius: 20px">
                <div class="card-body">
            <div class="container" align="center" style="padding-top: 100px">
                @if (session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                        x
                    </button>
                    {{session()->get('message')}}
    
                </div>
                
            @endif
                    <form action="{{url('editcheck',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="padding: 15px">
                            <div class="row">
                                <div class="col">
                                 <label for="countries" style="color: black">Countries</label>
                                 <input  value="{{$data->pay}}" placeholder="pay" style="background-color: #ffffff;color: black; border:none;" name="pay" class="form-control">
                                </div>
                            <div class="col">
                                <label for="banktype" style="color: black"  >Bank Type</label>
                                <input  value="{{$data->banktype}}" placeholder="banque" style="background-color: #ffffff;color: black; border:none;" name="banktype" class="form-control" >
                            </div>
                            </div>
                        </div>
                        <div class="form-group" style="padding: 15px">
                            <div class="row">
                                <div class="col">
                                <label for="width" style="color: black">Width</label>
                                <input type="number" value="{{$data->width}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="width" class="form-control" >
                              </div>
                              <div class="col">
                          <label for="height" style="color: black">Height</label>
                          <input type="number" value="{{$data->height}}" name="height" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding: 15px">
                    <label style="color: black">Date</label>
                    <div class="row">
                      <div class="col">
                        <input type="number" value="{{$data->Dx_date}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="Dx_date" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" value="{{$data->Dy_date}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" name="Dy_date" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="padding: 15px">
                    <label style="color: black">Order</label>
                    <div class="row">
                      <div class="col">
                       <input type="number" value="{{$data->Dx_order}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="Dx_order" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" value="{{$data->Dy_order}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" name="Dy_order" class="form-control" required>
                      </div>
                    </div>
                  </div>       
                  <div class="form-group" style="padding: 15px">
                    <label style="color: black">Montant</label>
                    <div class="row">
                      <div class="col">
                        <input type="number" value="{{$data->Dx_Montant}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="Dx_Montant" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" value="{{$data->Dy_Montant}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" name="Dy_Montant" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="padding: 15px">
                    <label style="color: black">Convert Montant</label>
                    <div class="row">
                      <div class="col">
                        <input type="number" value="{{$data->Dxcv_Montant}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="Dxcv_Montant" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" value="{{$data->Dycv_Montant}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" name="Dycv_Montant" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="padding: 15px">
                    <label style="color: black">Payer pour</label>
                    <div class="row">
                      <div class="col">
                        <input type="number" value="{{$data->Dx_for}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="Dx_for" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" value="{{$data->Dy_for}}" style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" name="Dy_for" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group" style="padding: 15px">
                    <label style="color: black">Bares</label>
                    <div class="row">
                      <div class="col">
                        <input type="number" value="{{$data->Dx_bares}}"  style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion X (px)" name="Dx_bares" class="form-control" required>
                      </div>
                      <div class="col">
                        <input type="number" value="{{$data->Dy_bares}}"  style="background-color: #ffffff;color: black; border:none;" placeholder="la dimansion Y (px)" name="Dy_bares" class="form-control" required>
                      </div>
                    </div>
                  </div>
                    <div style="padding: 15px">
                            <label for="">Old Image</label>
                            <img height="100" width="100" src="images/{{$data->image}}" alt="">
                        </div>
                        <div style="padding: 15px">
                            <label for=""> Change Image</label>
                            <input type="file" style="color: black" name="file">
                        </div>

                        <div class="form-group" >
                            <button class="b" type="submit"
                            name="add_product">Valider</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
        @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>