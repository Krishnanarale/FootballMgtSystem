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
        <h6 class="m-0 font-weight-bold text-primary">Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @can('view_users')
                    @foreach($users as $user)
                    <tr class="{{ $user->id }}">
                        <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td><span class="badge badge-{{ ($user->is_admin) ? 'success' : 'secondary' }}">{{ ($user->is_admin) ? 'Admin' : 'User' }}</span></td>
                        <td>
                            @can('edit_user')
                            <a href="/admin/users/{{ $user->id }}/edit"><i class="fas fa-fw fa-edit"></i></a>
                            @endcan
                            @can('delete_user')
                            <a href="#" onclick="confirmDelete('{{ $user->id }}')"><i class="fas fa-fw fa-trash"></i></a>
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

    function confirmDelete(id) {
        event.preventDefault();
        if (confirm("Are you sure to Delete?")) {
            $.ajax({
                url: `/admin/users/${id}`,
                type: 'DELETE',
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                success: function(res) {
                    window.location.reload();
                }
            });
        }
        return false;
    }
</script>
@endsection
