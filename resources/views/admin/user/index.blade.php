@extends('layouts.app')


@section('page-style')
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/datatables/media/css/dataTables.bootstrap4.min.css')}}" />
@endsection


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="text-right">
                <a href="{{ route('users.create') }}" class="btn btn-gradient-success">Add User</a>
            </div>
            <div class="table-overflow">
                <table id="dt-opt" class="table table-hover table-xl datatable">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Roles</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>                        
                    </tbody>
                </table>
            </div> 
        </div>       
    </div> 
@endsection


@section('page-script')
    <script src="{{ url('assets/admin/vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{ url('assets/admin/vendor/datatables/media/js/dataTables.bootstrap4.min.js')}}"></script>
    {{-- <script src="{{ url('assets/admin/js/tables/data-table.js')}}"></script> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            // DataTable
            $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                bStateSave: true,
                fnStateSave: function (oSettings, oData) {
                    localStorage.setItem( 'dt', JSON.stringify(oData) );
                },
                fnStateLoad: function (oSettings) {
                    return JSON.parse( localStorage.getItem('dt') );
                },
                ajax: "{{ route('user.datatables') }}",
                columns: [
                     { data: 'id' },
                     { data: 'name' },
                     { data: 'email' },
                     { data: 'role' },
                     { data: 'action' },
                ]
             });
        });
        /*$(document).on("click", '.delete-btn', function(){
            var id = $(this).data('id');
            Swal.fire({
                title: "Are you sure?",
                text: "want to delete SubCategory, You won't be able to revert this!",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Yes, delete it!"
            }).then(function(res) {
                if(res.value){
                    $.ajax({
                       type: "POST", 
                       url: '',
                       dataType:'json',
                       data: {_token:"{{ csrf_token() }}", id:id}, 
                       beforeSend:function() { },
                       success:function(responce)
                       {
                         if(responce.status==0)
                         {
                            Swal.fire("Failed!", responce.message, "error")
                         }else if(responce.status==1)
                         {
                            Swal.fire("Deleted!", responce.message, "success").then(function(res) {
                                setTimeout(function(){
                                    window.location.reload();
                                }, 500);
                            });
                         }
                       },
                       error:function()
                       {
                            Swal.fire("Failed!", "Something went wrong", "error");
                       },
                       complete:function() { }
                    });
                }
            });
        });*/
    </script>
@endsection