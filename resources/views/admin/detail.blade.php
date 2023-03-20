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
                        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item" href="javascript:;">Action</a>
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
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" value="{{ old('nik', $data->nik) }} " readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ old('nama', $data->nama) }} " readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Departemen</label>
                            <input type="text" class="form-control" name="dep" value="{{ old('dep', $data->dep) }} " readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Sub Departemen</label>
                            <input type="text" class="form-control" name="subDep" value="{{ old('subDep', $data->subDep) }} " readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Kendala</label>
                            <select class="form-select" name="category_id" value="{{ old('category_id') }}" required>
                                <option value="1">Software</option>
                                <option value="2">Hardware</option>
                                <option value="3">Network</option>
                                <option value="4">Lainnya</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Status</label>
                            <select class="form-select" name="status" value="{{ old('status', $data->status) }} " readonly>
                                <option selected>Status</option>
                                <option>Pending</option>
                                <option>Selesai</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Tanggal Pengajuan</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Catatan </label>
                            <textarea class="form-control" id="inputAddress" placeholder="Address..." rows="3"></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@include('layout.theme')
@include('layout.footer')
</div>
@endsection
