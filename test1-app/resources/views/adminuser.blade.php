@include('adminnav')

<div class="container-fluid py-4">
    <div class="row">
      <div class="table-responsive">
        <table class="table-hover">
            <h1>Users</h1>
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Full name</th>
                    <th>Username</th>
                    <th>email</th>
                    <th>Password</th>
                    <th>Mobile no</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody> 
                @foreach ($data as $item)                           
                  <tr>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$loop->index+1}}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->fullname}}</p>
                    </td>

                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->username}}</p>
                    </td>

                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->email}}</p>
                    </td>
                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->password}}</p>
                    </td>

                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->mobileno}}</p>
                    </td>

                    <td>
                        <p class="text-xs font-weight-bold mb-0">{{$item->address}}</p>
                    </td>
                                        
                  </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>  
  </div>
  
  @if(Session::has('success'))
            <script>
            Swal.fire({
                icon: "success",
                title: "{{Session::get('success')}}",
                showConfirmButton: false,
                timer: 3000
              });
              </script>
        @endif
<script>


@include('adminfooter')