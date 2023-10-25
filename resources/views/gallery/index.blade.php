@extends('layouts.backend')

@section('title', 'Gallery List')
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
                    <th>thumbnail</th>
                    <th>caption</th>
                    <th>type</th>
                    <th>action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($galleries as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td><img src="{{ asset($item->thumbnail) }}" alt="{{ $item->name }}" width="65"></td>
                        <td>{{ $item->caption }}</td>
                        <td> <span class="badge {{ $item->type == 1 ? 'badge-primary':'badge-warning' }}">
                                {{ $item->type == 1 ? 'video':'photo'  }}
                            </span>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('gallery.edit', $item->id) }}">edite</a>
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
            $('#deleteModal').attr('action', "{{ route('gallery.destroy', '') }}" + '/' + id);
        })
    </script>
@endsection
