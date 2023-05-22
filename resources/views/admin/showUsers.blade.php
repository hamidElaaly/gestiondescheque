<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  @include('admin.css')
  <style>
    /* Custom table styles */
    table {
      width: 100px;
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

      .btn i {
        margin-right: 5px;
      }
    .card {
      height: 400px;
      width: 80%;
      background-color: #f2f2f2;
      color: black;
      border-radius: 20px;
      margin: 0 auto;
    }

    .card-body {
      padding: 0;
    }
  </style>

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <!-- partial -->
    <div class="container" style="margin-top: 60px">
      <div class="card mt-5">
        <div class="card-body">
          <table class="table">
            <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Usertype</th>
              <th>Phone</th>
              <th>Address</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $item)
            <tr style="background-color: skyblue">
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
              <td>
                @if ($item->usertype==1)
                {{"admin"}}     
                </td>
                <td>{{$item->phone}}</td>
              <td>{{$item->address}}</td>
              <td><a style="background-color: #00C0EF" class="btn btn-success" href="{{url('updateUser',$item->id)}}"><i class="fas fa-edit"></i></a></td>
              <td></td>
             
                  
              @else
                  <td>{{$item->phone}}</td>
              <td>{{$item->address}}</td>
              <td><a style="background-color: #00C0EF" class="btn btn-success" href="{{url('updateUser',$item->id)}}"><i class="fas fa-edit"></i></a></td>
              <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deleteUser',$item->id)}}"><i class="fas fa-trash-alt"></i></a></td>
              @endif
              
            </tr>
            @endforeach
          </tbody>
          </table>
          {{$data->links()}}
        </div>
      </div>
    </div>
  </div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @include('admin.script')
  <!-- End custom js for this page -->

</body>
</html>
