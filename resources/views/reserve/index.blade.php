@extends('layouts.backend')

@section('title', 'reservations')
@section('contend')
    <div class="card">
        <div class="card-header">
            <h4>{{ $page_title }}</h4>
        </div>

        <div class="card-body text-center">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>sl no.</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>time</th>
                    <th>people</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($reservations as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->time }}</td>
                        <td>{{ $item->people }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>
                            <span
                                class="badge {{ $item->status == 0 ? 'badge-warning':($item->status == 1 ? 'badge-success':'badge-danger') }}">
                            {{ $item->status == 0 ? 'pending':($item->status == 1 ? 'reservation':'canceled') }}
                            </span>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('admin.reserve.confirmation', ['accept', $item->id]) }}">accept</a>
                            <a class="btn btn-warning" href="{{ route('admin.reserve.confirmation', ['decline', $item->id]) }}">Decline</a>
                            <button id="{{ $item->id }}" class="btn btn-danger delete" data-toggle="modal"
                                    data-target="#exampleModal">delete
                            </button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="deleteModal" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure want to delete this item?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('.delete').on('click', function () {
            const id = this.id;
            $('#deleteModal').attr('action', "{{ route('admin.reserve.delete', '') }}" + '/' + id);
        })
    </script>
@endsection
