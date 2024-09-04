<x-main>
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2"
                        style="background: linear-gradient(45deg, #001f3f, #007bff); border-radius: 15px;">
                        <div class="card-body">
                            <img src="{{ asset('img/transaksi.png') }}" alt="Transaksi Icon"
                                style="height: 20px; width: 20px; margin-right: 8px; filter: brightness(0) invert(1);">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                        Transaksi
                                    </div>
                                    <hr style="border: 0.5px solid rgba(255, 255, 255, 0.5); margin: 0.5rem 0;">
                                    <div class="h5 mb-0 font-weight-bold text-white">Rp. 784,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2"
                        style="background: linear-gradient(45deg, #28a745, #20c997); border-radius: 15px;">
                        <div class="card-body">
                            <img src="{{ asset('img/simpanan.png') }}" alt="Transaksi Icon"
                                style="height: 20px; width: 20px; margin-right: 8px; filter: brightness(0) invert(1);">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                        Simpanan
                                    </div>
                                    <hr style="border: 0.5px solid rgba(255, 255, 255, 0.5); margin: 0.5rem 0;">
                                    <div class="h5 mb-0 font-weight-bold text-white">Rp. 35,800,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2"
                        style="background: linear-gradient(45deg, #dc3545, #ff6b6b); border-radius: 15px;">
                        <div class="card-body">
                            <img src="{{ asset('img/pinjaman.png') }}" alt="Transaksi Icon"
                                style="height: 20px; width: 20px; margin-right: 8px; filter: brightness(0) invert(1);">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                        PINJAMAN
                                    </div>
                                    <hr style="border: 0.5px solid rgba(255, 255, 255, 0.5); margin: 0.5rem 0;">
                                    <div class="h5 mb-0 font-weight-bold text-white">Rp. 50,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card shadow h-100 py-2"
                        style="background: linear-gradient(45deg, #ff7f00, #ff4500); border-radius: 15px;">
                        <div class="card-body">
                            <img src="{{ asset('img/tabungan.png') }}" alt="Transaksi Icon"
                                style="height: 20px; width: 20px; margin-right: 8px; filter: brightness(0) invert(1);">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                                        Tabungan Qurban
                                    </div>
                                    <hr style="border: 0.5px solid rgba(255, 255, 255, 0.5); margin: 0.5rem 0;">
                                    <div class="h5 mb-0 font-weight-bold text-white">Rp. 2,600,000</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->


                <!-- Area Chart -->
                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
                            <h6 class="m-0 font-weight-bold text-light">Earnings Overview</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-dark">
                            <h6 class="m-0 font-weight-bold text-light">Data Transaksi</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Label</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Pos</th>
                                            <th scope="col">Payment</th>
                                            <th scope="col">Nominal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($transaksi as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->label }}</td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>{{ $item->pos }}</td>
                                                <td>{{ $item->payment }}</td>
                                                <td>{{ number_format($item->nominal, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-dark">
                            <h6 class="m-0 font-weight-bold text-light">Simpanan</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Jenis Simpanan</th>
                                            <th scope="col">Awal Angsuran</th>
                                            <th scope="col">Akhir Angsuran</th>
                                            <th scope="col">Nominal Pengajuan</th>
                                            <th scope="col">Nominal Disetujui</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($simpanan as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nomor }}</td>
                                                <td>{{ $item->jenis_simpanan }}</td>
                                                <td>{{ number_format($item->awal_angsuran, 0, ',', '.') }}</td>
                                                <td>{{ number_format($item->akhir_angsuran, 0, ',', '.') }}</td>
                                                <td>{{ number_format($item->nominal_pengajuan, 0, ',', '.') }}</td>
                                                <td>{{ number_format($item->nominal_disetujui, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-dark">
                            <h6 class="m-0 font-weight-bold text-light">Pinjaman</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Jenis Pinjaman</th>
                                            <th scope="col">Awal Angsuran</th>
                                            <th scope="col">Akhir Angsuran</th>
                                            <th scope="col">Nominal Pengajuan</th>
                                            <th scope="col">Nominal Disetujui</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pinjaman as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nomor }}</td>
                                                <td>{{ $item->jenis_pinjaman }}</td>
                                                <td>{{ number_format($item->awal_angsuran, 0, ',', '.') }}</td>
                                                <td>{{ number_format($item->akhir_angsuran, 0, ',', '.') }}</td>
                                                <td>{{ number_format($item->nominal_pengajuan, 0, ',', '.') }}</td>
                                                <td>{{ number_format($item->nominal_disetujui, 0, ',', '.') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-dark">
                            <h6 class="m-0 font-weight-bold text-light">Tabungan Qurban</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                    aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-light">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">NRP</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Perusahaan</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nominal</th>
                                            <th scope="col">Jangka Waktu</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tabungan as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $item->nrp }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->perusahaan }}</td>
                                                <td>{{ $item->tanggal }}</td>
                                                <td>{{ number_format($item->nominal, 0, ',', '.') }}</td>
                                                <td>{{ $item->jangka_waktu }}</td>
                                                <td>{{ $item->status }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
            <!-- /.container-fluid -->

        </div>
</x-main>
