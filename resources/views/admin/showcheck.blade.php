<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    @include('admin.css')
    
    <style>
      /* Custom table styles */
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
        height: 500px;
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
              
                <form class="d-lg-flex search-form" style="width: 200px">
                  <input type="text" style="background-color: white" class="form-control search-input" placeholder="Search..">
                </form>
             
              <table class="table" style="margin-top: 40px; margin-bottom: 40px">
                <thead>
                  <tr>
                    <th>Check Type</th>
                    <th>Check Image</th>
                    <th>Country</th>
                    <th>Width</th>
                    <th>Height</th>
                    <th>Dx Date</th>
                    <th>Dy Date</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <td>{{$item->banktype}}</td>
                    <td><img class="rounded-0" style="height: 40px; width: 80px;" src="images/{{$item->image}}" alt=""></td>
                    <td>{{$item->pay}} px</td>
                    <td>{{$item->width}} px</td>
                    <td>{{$item->height}} px</td>
                    <td>{{$item->Dx_date}} px</td>
                    <td>{{$item->Dy_date}} px</td>
                    <td><a style="background-color: #00C0EF" class="btn btn-success" href="{{url('updatecheck',$item->id)}}"><i class="fas fa-edit" style="color: white;"></i> </a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletecheck',$item->id)}}"><i class="fas fa-trash-alt"></i> </a></td>
                  </tr>
                  @endforeach
                  </tbody>
                  </table>
                  {{$data->links()}}
                  </div>
                  </div>
                  </div>
                
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
                  <!-- container-scroller -->
                  <!-- Add Bootstrap JS -->
                  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                  @include('admin.script')
                  <!-- End custom js for this page -->
                </div>
</body>
</html>                
