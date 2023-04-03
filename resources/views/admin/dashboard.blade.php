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
                        </div>
                    </div>
                </div>
                <!--end breadcrumb-->
                <h6 class="mb-0 text-uppercase">Data Statistik Tiketing</h6>
                <hr />
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                    <div class="col">
                        <div class="card radius-10 bg-info">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-dark">Total Data Masuk</p>
                                        <h4 class="my-1 text-dark">{{ $total }}</h4>
                                        <p class="mb-0 font-13 text-dark"><i class="bx bxs-up-arrow align-middle"></i>$34
                                            from last week</p>
                                    </div>
                                    <div class="widgets-icons bg-white text-info ms-auto"><i class="bx bxs-data"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-danger">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white">Status Pending</p>
                                        <h4 class="my-1 text-white">{{ $pending }}</h4>
                                        <p class="mb-0 font-13 text-white"><i class="bx bxs-up-arrow align-middle"></i>$24
                                            from last week</p>
                                    </div>
                                    <div class="widgets-icons bg-white text-danger ms-auto"><i class="bx bxs-time"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-success">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-white"> Status Selesai</p>
                                        <h4 class="my-1 text-white">{{ $selesai }}</h4>
                                        <p class="mb-0 font-13 text-white"><i class="bx bxs-down-arrow align-middle"></i>$34
                                            from last week</p>
                                    </div>
                                    <div class="widgets-icons bg-white text-success ms-auto"><i class="bx bx-check"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card radius-10 bg-warning">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0 text-dark">Total Pengguna</p>
                                        <h4 class="my-1 text-dark">{{ $totalUser }}</h4>
                                        <p class="mb-0 font-13 text-dark"><i
                                                class="bx bxs-down-arrow align-middle"></i>12.2% from last week</p>
                                    </div>
                                    <div class="widgets-icons bg-white text-warning ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->

                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h6 class="mb-0">Sales Overview</h6>
                                    </div>
                                    <div class="dropdown ms-auto">
                                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#"
                                            data-bs-toggle="dropdown"><i
                                                class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
                                    <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1"
                                            style="color: #14abef"></i>Sales</span>
                                    <span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1"
                                            style="color: #ffc107"></i>Visits</span>
                                </div>
                                <div class="chart-container-1">
                                    <canvas id="chart1"></canvas>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">24.15M</h5>
                                        <small class="mb-0">Overall Visitor <span> <i
                                                    class="bx bx-up-arrow-alt align-middle"></i> 2.43%</span></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">12:38</h5>
                                        <small class="mb-0">Visitor Duration <span> <i
                                                    class="bx bx-up-arrow-alt align-middle"></i> 12.65%</span></small>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="p-3">
                                        <h5 class="mb-0">639.82</h5>
                                        <small class="mb-0">Pages/Visit <span> <i
                                                    class="bx bx-up-arrow-alt align-middle"></i> 5.62%</span></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <div class="card radius-10">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary"> Kategori Kendala</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle btn btn-primary btn-sm" href="#" role="button"
                                        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Month <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                        aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Select Periode</div>
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Week</a>
                                        <a class="dropdown-item active" href="#">Month</a>
                                        <a class="dropdown-item" href="#">This Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <div class="small text-gray-500">Hardware
                                    <div class="small float-right"><b>{{ $hardware }} of {{ $total }}</b>
                                    </div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                        style="width: {{ ($hardware / $total) * 100 }}%"
                                        aria-valuenow="{{ ($hardware / $total) * 100 }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <div class="small text-gray-500">Software
                                    <div class="small float-right"><b>{{ $software }} of {{ $total }}</b>
                                    </div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-success" role="progressbar"
                                        style="width: {{ ($software / $total) * 100 }}%"
                                        aria-valuenow="{{ ($software / $total) * 100 }}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <div class="small text-gray-500">Network
                                    <div class="small float-right"><b>{{ $network }} of {{ $total }}</b>
                                    </div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                        style="width: {{ ($network / $total) * 100 }}%"
                                        aria-valuenow="{{ ($network / $total) * 100 }}" aria-valuemin="0"
                                        aria-valuemax="100">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 p-2">
                                <div class="small text-gray-500">Lain - Lain
                                    <div class="small float-right"><b>{{ $lain_lain }} of {{ $total }}</b>
                                    </div>
                                </div>
                                <div class="progress" style="height: 12px;">
                                    <div class="progress-bar bg-info" role="progressbar"
                                        style="width: {{ ($lain_lain / $total) * 100 }}%"
                                        aria-valuenow="{{ ($lain_lain / $total) * 100 }}" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a class="m-0 small text-primary card-link" href="#">View More <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!--end row-->

                </div>
            </div>
            <!--end page wrapper -->
            @include('layout.theme')
            @include('layout.footer')
        </div>
        {{-- <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                        @foreach ($data as $row)
                        '{{ $row->tanggal }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Kunjungan Tiket',
                        data: [
                            @foreach ($data as $row)
                            {{ $row->total }},
                            @endforeach
                        ],
                        backgroundColor: 'transparent',
                        borderColor: 'rgba(255,99,132,1)',
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                    legend: {
                        display: false
                    }
                }
            });
            </script> --}}
    @endsection
