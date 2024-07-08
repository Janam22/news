@extends('admin.layouts.master')
@section('content')

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">    
      <title>Users List</title>
</head>

<body>

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-2 font-weight-bold text-primary">Users List&nbsp;&nbsp;<a  href="{{ route('add.user') }}" type="button" class="btn btn-primary bg-gradient-primary" style="border-radius: 0px;"><i class="fas fa-fw fa-plus"></i></a></h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"> 
               <thead>
                   <tr>
      			        <th>Name</th>
      			        <th>Email</th> 
      			        <th>Profile Photo</th>
      			        <th>User Type</th>
      			        <th>Registered Date</th>
      			        <th>Action</th>
                   </tr>
               </thead>
          <tbody>


            @foreach ($manageusers as $users)
                <tr>
                      
                    <td>{{ $users -> name }}</td>
                    <td>{{ $users -> email }}</td>
                    <td>
                      <img class="img-profile rounded-circle" src="{{ asset('storage/users_profile_photo/' . $users -> profile_photo_path) }}" alt="Profile" width="100">
                    </td>
                    <td>{{ $users -> type_name }}</td>
                    <td>{{ $users -> created_at }}</td>
                    <td>
                      @if ($users-> type == 3)
                      <a href = "#" onclick="return confirm(\'Are you sure you want to make this user Category Admin?\');">Make Category Admin</a><br>
                      @endif
                      <a href = "#">Edit User</a><br>
                      <a href = "#" onclick="return confirm(\'Are you sure you want to delete this customer?\');">Remove User</a>
                    </td>
                    
                </tr>
            @endforeach


                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

</body>

</html>


@endsection