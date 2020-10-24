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
        <h6 class="m-0 font-weight-bold text-primary">Players</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date Of Birth</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date Of Birth</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @can('view_players')
                    @foreach($players as $player)
                    @if($player->user->is_admin != 1)
                    <tr class="{{ $player->user->id }}">
                        <td>{{ $player->user->first_name }} {{ $player->user->last_name }}</td>
                        <td>{{ $player->email }}</td>
                        <td>{{ $player->phone }}</td>
                        <td>{{ $player->date_of_birth }}</td>
                        <td>
                            @can('edit_player')
                            <a href="/admin/player/{{ $player->user->id }}/edit"><i class="fas fa-fw fa-edit"></i></a>
                            @endcan
                            @can('print_pdf')
                            <a href="/admin/player/{{ $player->user->id }}/show" target="_blank"><i class="fas fa-fw fa-print"></i></a>
                            @endcan
                            @can('print_identity_card')
                            <a href="/admin/player/{{ $player->user->id }}/identity-card" target="_blank"><i class="fas fa-fw fa-id-badge"></i></a>
                            @endcan
                            @can('give_ratings')
                            @if(empty($player->user->evaluation[0]->user_id))
                            <a href="/admin/player/{{ $player->user->id }}/evaluations/create"><i class="fas fa-fw fa-chart-line"></i></a>
                            @elseif(!empty($player->user->evaluation[0]->user_id))
                            <a href="/admin/player/{{ $player->user->id }}/evaluations/edit"><i class="fas fa-fw fa-chart-line"></i></a>
                            @endif
                            @endcan
                        </td>
                    </tr>
                    @endif
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