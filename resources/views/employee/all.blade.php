<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Employees</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <h3>All Employees</h3>
        <table class="table table-striped" id="emp_table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Birth Date</th>
                <th>Department</th>
                <th>Status</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach($employees as $emp)
                <tr>
                    <td>{{ $emp->name }}</td>
                    <td>{{ $emp->email }}</td>
                    <td>{{ $emp->birth_date }}</td>
                    <td>{{ $emp->department }}</td>
                    <td>
                        @if($emp->status==1)
                        <span class="badge badge-success">Active</span>
                        @else
                        <span class="badge badge-danger">Inactive</span>
                        @endif
                        
                        
                    </td>
                    <td>{{ $emp->gender }}</td>
                    <td>{{ $emp->address }}</td>
                    <td>
                        <a href="{{ url ('/edit-employee/'.$emp->id) }}" class="btn btn-secondary">Edit</a>
                        <a data-toggle="modal" data-target="#emp{{$emp->id}}" class="btn btn-danger">Delete</a>
                        <div class="modal" id="emp{{$emp->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    Are you sure you want to delete?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                    <a href="{{ url('delete-employee/'.$emp->id) }}" class="btn btn-success">Yes</a>
                                </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#emp_table').DataTable();
        } );
    </script>
</body>
</html>