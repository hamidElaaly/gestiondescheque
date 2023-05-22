
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label{
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
            width: 200px }
           
        .card {
        height: 520px;
        width: 100%;
        background-color: #f2f2f2;
        color: black;
        margin-top: 30px;
        border-radius: 20px;
      }

      .card-body {
        padding: 0;
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
            <div class="card" style="border-radius: 20px">
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
                    <form action="{{url('editUser',$data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" style="padding: 15px">
                            <div class="row">
                                <div class="col">
                                 <label for="countries" style="color: black">Name</label>
                                 <input  value="{{$data->name}}" placeholder="pay" style="background-color: #ffffff;color: black; border:none;" name="name" class="form-control">
                                </div>
                            <div class="col">
                                <label for="banktype" style="color: black"  > Email</label>
                                <input  value="{{$data->email}}" placeholder="banque" style="background-color: #ffffff;color: black;border:none;" name="email" class="form-control" >
                            </div>
                            </div>
                        </div>
                        <div class="form-group" style="padding: 15px">
                            <div class="row">
                                <div class="col">
                                <label for="width" style="color: black">Phone</label>
                                <input type="number" value="{{$data->phone}}" style="background-color: #ffffff;color: black;border:none;" placeholder="la dimansion X (px)" name="phone" class="form-control" >
                              </div>
                              <div class="col">
                          <label for="height" style="color: black">Address</label>
                          <input type="text" value="{{$data->address}}" name="address" style="background-color: #ffffff;color: black;border:none;" placeholder="la dimansion Y (px)" class="form-control" >
                        </div>
                    </div>
                </div>
                <div class="form-group" style="padding: 15px" >
             
                      
                  <label for="height" style="color: black">Usertype</label>
                  <select name="usertype" class="form-control" style="background-color: #ffffff;color: black;border:none;" >
                    <option class="form-control"  value="{{$data->usertype}}">{{$data->usertype}}</option>
                   @if ($data->usertype==1)
                   <option class="form-control">0</option>
                   @else
                   <option class="form-control">1</option>
                   @endif
                  </select>
        </div>
           <div class="form-group" style="padding: 15px">
                            <button style="width:40%;margin-right:19px;color: black" type="submit" class="btn btn-primary"
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