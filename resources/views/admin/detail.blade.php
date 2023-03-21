@extends('layout.template')

@section('content')
    <!--wrapper-->
    <div class="wrapper">
        @include('layout.sidebar')
        @include('layout.navbar')
        @include('sweetalert::alert')
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--end row-->

                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Tiketing</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Detail Tiketing</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Settings</button>
                            <button type="button"
                                class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                    href="javascript:;">Action</a>
                                <a class="dropdown-item" href="javascript:;">Another action</a>
                                <a class="dropdown-item" href="javascript:;">Something else here</a>
                                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                                    link</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->

                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">View Detail</h5>
                            <hr />
                        </div>
                        <form class="row g-3" action="{{ route('tiketing.update', $data->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6">
                                <label class="form-label">NIK</label>
                                <input type="text" class="form-control" name="nik"
                                    value="{{ old('nik', $data->nik) }} " readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama"
                                    value="{{ old('nama', $data->nama) }} " readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Departemen</label>
                                <input type="text" class="form-control" name="dep"
                                    value="{{ old('dep', $data->dep) }} " readonly>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Sub Departemen</label>
                                <input type="text" class="form-control" name="subDep"
                                    value="{{ old('subDep', $data->subDep) }} " readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Kendala</label>
                                <select class="form-select" name="category_id" class="form-control" required>
                                    <option value="1" {{ $data->category_id == 1 ? 'selected' : '' }}>Software</option>
                                    <option value="2" {{ $data->category_id == 2 ? 'selected' : '' }}>Hardware</option>
                                    <option value="3" {{ $data->category_id == 3 ? 'selected' : '' }}>Network</option>
                                    <option value="4" {{ $data->category_id == 4 ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">EXT</label>
                                <input type="text" class="form-control" name="ext"
                                    value="{{ old('ext', $data->ext) }}" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Status</label>
                                <select class="form-select" name="status" readonly>
                                    <option value="pending" {{ $data->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                    <option value="selesai" {{ $data->status == 'selesai' ? 'selected' : '' }}>Selesai
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Tanggal Pengajuan</label>
                                <input type="text" name="tgl_pengajuan" class="form-control"
                                    value="{{ old('tgl_pengajuan', $data->tgl_pengajuan) }}" readonly>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Keterangan Keluhan </label>
                                <textarea class="form-control" name="catatan" rows="3" required>{{ old('catatan', $data->catatan) }}</textarea>
                            </div>
                            <div class="col-6">
                                <button type="submit" class="btn btn-primary">Simpan </button>
                            </div>
                        </form>
                        <form action="{{ route('tiketing.destroy', $id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Anda yakin mau menghapus item ini ?')">Hapus </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @include('layout.theme')
        @include('layout.footer')
    </div>
@endsection
