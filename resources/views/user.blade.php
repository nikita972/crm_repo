<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('user_assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user_assets/css/jquery.dataTables.min.css')}}">
    <title>User List</title>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-between pb-2">
            <div class="h4">User list</div> 
                <div><a href="" class="btn btn-primary" id="add_user" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a></div>
                </div>
                <table id="user_table" class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>email</th>
                            <th>Mobile</th>
                            <th>Role id</th>
                            <th>password</th>
                                 <!-- <th>status</th>
                                  <th>created by</th>
                                  <th>modified by</th>
                                  <th>created at</th>
                                  <th>modified at</th>
                                  <th>actions</th>-->
                        
                            </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--user table end-->
    <!-- Modal -->
    <form  id="registration_model" name="registration_model" class="form-horizontal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="modal_heading"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="first_name" class="form-label">Enter First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{old('first_name')}}">
                        @error('first_name')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="last_name" class="form-label">Enter Last name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{old('last_name')}}">
                        @error('last_name')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">email</label>
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
                        @error('email')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="mobile" class="form-label">mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}">
                        @error('mobile')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="roll_id" class="form-label">roll id</label>
                        <input type="text" name="roll_id" id="roll_id" class="form-control @error('roll_id') is-invalid @enderror" value="{{old('roll_id')}}">
                        @error('roll_id')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" id="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
                        @error('password')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="status" class="form-label">status</label>
                        <input type="text" name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{old('status')}}">
                        @error('status')
                            <p class="invalid-feedback">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit" id="saveButton"></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--model end-->
    <script src="{{asset('user_assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('user_assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user_assets/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript">
        $(function(){
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
            });
            var table=$('#user_table').DataTable({
                processing:true,
                serverSide:true,
                datatype:'json',
                ajax: "{{ route('user.index') }}",
                columns: [
                    { "data": "First Name" },
                    { "data": "Last Name" },
                    { "data": "email" },
                    { "data": "Mobile" },
                    { "data": "Role id" },
                    { "data": "password" },
                ]
            });
        });
        $('#add_user').click(function(){
            $('#modal_heading').html('Add User');
            $('#saveButton').html('Save');
        });
        $('#saveButton').click(function(e){
            $.ajax({
                data:$('#registration_model').serialize(),
                url:"{{route('user.store')}}",
                type:"POST",
                datatype:'json',
                success:function(data){
                    table.draw();
                }
            })
        });
    </script>
</body>
</html>