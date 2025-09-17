@extends('main');

@section('content')
    <div class="card-header">
        <h4>Daftar Armada</h4>
        <div class="card-header-action">
            <a class="btn btn-primary d-flex align-items-center gap-2 w-25" href="{{ route('armada.create') }}">
                <i class="fas fa-plus"></i> Tambah Armada
            </a>
        </div>
    </div>

    <div class="card-body">
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p class="mb-0">{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

        @endif

        <div class="table-responsive">
            <table id="data-armada" class="table table-bordered table-striped w-100">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nomor Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Ketersediaan</th>
                        <th>Kapasitas Muatan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($armada as $item)
                        <tr>
                            <td></td>
                            <td>{{$item->nomor_kendaraan}}</td>
                            <td>{{$item->jenis_kendaraan}}</td>
                            <td>{{$item->status_ketersediaan === 0 ? 'Tidak Tersedia' : 'Tersedia'}}</td>
                            <td>{{$item->kapasitas_muatan}}</td>
                            <td>@include('armada.action')</td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('customScript')
    <script>
        // $(document).ready(function() {
        //     $('#data-armada').DataTable({
        //         processing: true,
        //         serverSide: true,
        //         ajax: "/armada",
        //         columns: [{
        //                 data: 'id',
        //                 orderable: true,
        //                 render: function(data, type, row, meta) {
        //                     return meta.row + 1;
        //                 }
        //             },
        //             {
        //                 data: 'nomor_kendaraan',
        //                 width: '15%'
        //             },
        //             {
        //                 data: 'jenis_kendaraan',
        //                 width: '15%'
        //             },
        //             {
        //                 data: 'status_ketersediaan',
        //                 render: function(data) {
        //                     if (data == '0') {
        //                         return `<span class="badge bg-danger">Tidak Tersedia</span>`;
        //                     }
        //                     if (data == '1') {
        //                         return `<span class="badge bg-success">Tersedia</span>`;
        //                     }
        //                     return '-';
        //                 },
        //                 width: '15%'
        //             },
        //             {
        //                 data: 'kapasitas_muatan',
        //                 width: '15%'
        //             },
        //             {
        //                 data: 'action',
        //                 orderable: false,
        //                 searchable: false,
        //                 width: '10%'
        //             },
        //         ]
        //     });
        // });
    </script>
@endpush
