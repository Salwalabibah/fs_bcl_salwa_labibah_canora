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

                            <form action="{{ route('armada.store') }}" method="post" enctype="multipart/form-data">
                                @csrf <!-- Nomor Kendaraan -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Nomor Kendaraan <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12 ">
                                        <input type="text" name="nomor_kendaraan" id="nomor_kendaraan"
                                            class="form-control"
                                            placeholder="Masukkan 7 karakter nomor_kendaraan sesuai STNK"
                                            value="{{ old('nomor_kendaraan') }}" required>
                                        @error('nomor_kendaraan')
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
                                            <option value="" disabled selected>-- Pilih Jenis kendaraan --</option>
                                            <option value="Truck Box"
                                                {{ old('jenis_kendaraan') == 'Truck Box' ? 'selected' : '' }}>Truck Box
                                            </option>
                                            <option value="Pick Up"
                                                {{ old('jenis_kendaraan') == 'Pick Up' ? 'selected' : '' }}>
                                                Pick Up
                                            </option>
                                        </select>
                                        @error('jenis_kendaraan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Status Ketersediaan -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Status Ketersediaan <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12">
                                        <select name="status_ketersediaan" class="form-control" required>
                                            <option value="1"
                                                {{ old('status_ketersediaan') == '1' ? 'selected' : '' }}>Tersedia
                                            </option>
                                            <option value="0"
                                                {{ old('status_ketersediaan') == '0' ? 'selected' : '' }}>
                                                Tidak Tersedia
                                            </option>
                                        </select>
                                        @error('status_ketersediaan')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Kapasitas Muatan (kg) -->
                                <div class="row mb-3">
                                    <label class="col-md-2 col-12 col-form-label">Kapasitas Muatan (kg) <span
                                            class="text-danger">*</span></label>
                                    <div class="col-md-10 col-12 ">
                                        <input type="number" name="kapasitas_muatan" id="kapasitas_muatan"
                                            class="form-control" placeholder="Masukkan Kapasitas Muatan sesuai STNK"
                                            value="{{ old('kapasitas_muatan') }}" required>
                                        @error('kapasitas_muatan')
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
