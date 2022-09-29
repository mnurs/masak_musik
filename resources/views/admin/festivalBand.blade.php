@extends('layouts.app-admin')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pendaftar Festival Band Hari Jadi Pati 2022</h1>
                    <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama Pimpinan</th>
                                            <th>Nomor Telepon/WA</th>
                                            <th>Nama Band</th>
                                            <th>Jumlah Personil</th>
                                            <th>Alamat</th>
                                            <th>Nama Personil</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Pimpinan</th>
                                            <th>Nomor Telepon/WA</th>
                                            <th>Nama Band</th>
                                            <th>Jumlah Personil</th>
                                            <th>Alamat</th>
                                            <th>Nama Personil</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($daftar_festivals as $daftar_festival)
                                        <tr>
                                            <td>{{ $daftar_festival->pimpinan }}</td>
                                            <td>{{ $daftar_festival->wa }}</td>
                                            <td>{{ $daftar_festival->band }}</td>
                                            <td>{{ $daftar_festival->jumlah }}</td>
                                            <td>{{ $daftar_festival->alamat }}</td>
                                            <td>
                                                1. {{ $daftar_festival->vocal }} (Vocal) <br>
                                                2. {{ $daftar_festival->drum }} (Drums) <br>
                                                3. {{ $daftar_festival->guitar }} (Guitar) <br>
                                                4. {{ $daftar_festival->bass }} (Bass) <br>
                                                5. {{ $daftar_festival->keyboard }} (Keyboard) <br>
                                                6. {{ $daftar_festival->other }} (Lainnya) <br>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection