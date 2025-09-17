@extends('main');

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                                <p>{{ $message }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-body">

                            <form action="{{ route('pesanan-armada.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- Nama -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Nama<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12 ">
                                        <input type="date" name="nama" id="nama" class="form-control"
                                            placeholder="contoh: Eva PT Maju Jaya " value="{{ old('nama') }}" required>
                                        @error('nama')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Jenis kendaraan -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Jenis Kendaraan <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12">
                                        <select name="jenis_kendaraan" class="form-control" required>
                                            @foreach ($armada as $item)
                                                <option value="{{ $item->jenis_kendaraan }}"
                                                    {{ old('jenis_kendaraan') == {{ $item->jenis_kendaraan }} ? 'selected' : '' }}>{{ $item->jenis_kendaraan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jenis_kendaraan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Tanggal -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Tanggal Pemesanan <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12 ">
                                        <input type="date" name="tanggal_pemesanan" id="tanggal_pemesanan"
                                            class="form-control" value="{{ old('tanggal_pemesanan') }}" required>
                                        @error('tanggal_pemesanan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Detai Barang -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Detail Barang<span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12 ">
                                        <input type="date" name="detail_barang" id="detail_barang" class="form-control"
                                            placeholder="contoh: Lemari " value="{{ old('detail_barang') }}" required>
                                        @error('detail_barang')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="d-flex justify-content-end mt-5">
                                    <button type="submit" class="btn btn-success" style="width: 15%">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('customScript')
@endpush
