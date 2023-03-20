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
                                <li class="breadcrumb-item active" aria-current="page">Data Tiketing</li>
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
                <h6 class="mb-0 text-uppercase">DataTable Example</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Kendala</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $tiketing)
                                        <tr>
                                            <td>{{ $tiketing->nik }}</td>
                                            <td>{{ $tiketing->nama }}</td>
                                            <td>{{ $tiketing->dep }}</td>
                                            <td>{{ $tiketing->category->name }}</td>
                                            <td>
                                                @if ($tiketing->status == 'pending')
                                                    <span
                                                        class="badge rounded-pill text-danger bg-light-danger p-2 text-uppercase px-3"><i
                                                            class='bx bxs-circle align-middle me-1'></i>{{ $tiketing->status }}</span>
                                                @else
                                                    <span
                                                        class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i
                                                            class='bx bxs-circle align-middle me-1'></i>{{ $tiketing->status }}</span>
                                                @endif
                                            </td>
                                            <td>{{ $tiketing->tgl_pengajuan }}</td>
                                            <td>
                                                <a href="{{ route('tiketing.detail', $tiketing['id']) }}"
                                                    class="btn btn-primary btn-sm radius-30 px-4">Detail</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>Departemen</th>
                                        <th>Kendala</th>
                                        <th>Status</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
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
