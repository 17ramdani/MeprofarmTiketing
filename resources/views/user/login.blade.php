@extends('layout.template')

@section('content')
<div class="wrapper">
    @include('sweetalert::alert')
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">

                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4 text-center">
                                <img src="{{ asset('style/assets/images/mepro.jpg') }}" class="rounded" width="140" alt="" />
                            </div>
                            <div class="border p-4 rounded">
                                <div class="login-separater text-center mb-4"> <span>Masuk dengan menggunakan NIK</span>
                                    <hr />
                                </div>

                                <div class="form-body">
                                    @if ($errors->has('nik'))
                                    <span class="text-danger">{{ $errors->first('nik') }}</span>
                                    @endif
                                    <form class="row g-3" action="{{ route('loginApi') }}" method="post">
                                        @csrf
                                        <div class="col-12">
                                            <label for="nik" class="form-label">NIK</label>
                                            <input type="nik" class="form-control" id="nik" name="nik" required>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" value="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
</div>
<@endsection
