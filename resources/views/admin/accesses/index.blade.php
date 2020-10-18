@extends('layouts.admin')

@section('content')
<style>
    a {
        cursor: pointer;
    }
</style>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary float-left">Access</h6>
        <!-- <a href="/admin/role/create" class="btn btn-primary btn-sm float-right">New</a> -->
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @can('view_access')
                    @foreach($roles as $role)
                    <tr class="{{ $role->id }}">
                        <td>{{ $role->name }}</td>
                        <td>
                            @can('edit_access')
                            <a href="/admin/accesses/{{ $role->id }}/edit"><i class="fas fa-fw fa-edit"></i></a>
                            @endcan
                        </td>
                    </tr>
                    @endforeach
                    @endcan
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select><option value="">All</option></select>')
                        // .appendTo($(column.footer()).empty())
                        .appendTo($(column.header()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });
    });
</script>
@endsection