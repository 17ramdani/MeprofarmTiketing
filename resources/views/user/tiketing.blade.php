@extends('layout.template')

@section('content')
    <!--wrapper-->
    <div class="wrapper">
        @include('sweetalert::alert')
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--end row-->
                <div class="row">
                    <div class="col-xl-10 align-items-center">
                        <div class="card border-top border-0 border-4 border-info">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                                        </div>
                                        <h5 class="mb-0 text-info">User Ticketing</h5>
                                    </div>
                                    <hr />

                                    <form method="POST" action="{{ route('tiketing.store') }}">
                                        @csrf

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">NIK</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nik"
                                                    value="{{ session()->get('nik') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Nama</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="nama"
                                                    value="{{ session()->get('namaLengkap') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Departemen</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="dep"
                                                    value="{{ session()->get('namaDepartemen') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Sub Departemen</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="subDep"
                                                    value="{{ session()->get('subdepName') }}" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">EXT</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="ext"
                                                    value="{{ old('ext') }}" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label ">Kendala</label>
                                            <div class="col-sm-9 ">
                                                <select class="form-control" name="category_id"
                                                    value="{{ old('category_id') }}" required>
                                                    <option value="1">Software</option>
                                                    <option value="2">Hardware</option>
                                                    <option value="3">Network</option>
                                                    <option value="4">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputAddress4" class="col-sm-3 col-form-label">Catatan</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" name="catatan" rows="3" value="{{ old('catatan') }}"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-info px-5">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

            </div>
        </div>
        <!--end page wrapper -->
        @include('layout.footer')
    </div>
@endsection
