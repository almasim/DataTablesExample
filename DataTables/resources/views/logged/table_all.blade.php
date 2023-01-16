@extends('logged.admin_master')
@section('admin')
 
<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Users</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th width="20%">Id</th>
                                <th>Name</th>
                                <th width="20%">Email</th>
                                <th width="20%">Age</th>
                                <th width="20%">Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $key => $item) 
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->age}}</td>
                                    <td>{{$item->role}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                            
                            <tfoot>
                                <tr>
                                    <th width="20%">Id</th>
                                    <th>Name</th>
                                    <th width="20%">Email</th>
                                    <th width="20%">Age</th>
                                    <th width="20%">Role</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
    </div>
</div>

{{-- why is this stupidly easy --}}
<script>
    $(document).ready(function () {
    $('#datatable').DataTable({
        pagingType: 'full_numbers', //pagination
        order: [[3, 'desc']],  //ordering by age
        stateSave: true, //save progress default save time 2h
    
    });
});
</script>



@endsection