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
        <h6 class="m-0 font-weight-bold text-primary float-left">Pages</h6>
        <a href="/admin/pages/create" class="btn btn-primary btn-sm float-right">New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>url</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>url</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr class="{{ $page->id }}">
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->description }}</td>
                        <td>{{ $page->url }}</td>
                        <td>
                            <a href="/admin/pages/{{ $page->id }}/edit"><i class="fas fa-fw fa-edit"></i></a>
                            <a href="#" onclick="confirmDelete('{{ $page->id }}')"><i class="fas fa-fw fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
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
                url: `/admin/pages/${id}`,
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