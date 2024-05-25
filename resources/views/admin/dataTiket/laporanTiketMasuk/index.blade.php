@extends('layouts.dashboardAdmin')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Laporan Tiket Masuk</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Tiket Masuk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    {{-- <h3 class="card-title">Bordered Table</h3> --}}
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">No</th>
                          <th>Hari/Tanggal</th>
                          <th>Uraian</th>
                          <th>REF</th>
                          <th>Jumlah</th>
                          <th>Total</th>
                          <th>Bayar PAD</th>
                          <th>Keterangan</th>
                          
                          {{-- <th style="width: 40px">Label</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jum'at, 01 Desember 2023</td>
                          <td>- Karcis Dewasa 10.000 <br> - Karcis Anak-anak 7.500</td>
                          <td> 5.000 <br> 2.500</td>
                          <td> 10 <br> 5</td>
                          <td> 50.000 <br> 7.500</td>
                          <td> 57.500</td>
                          <td> Penyetor Hasan</td>
                          
                        </tr> 
                        <tr>
                          <td>2</td>
                          <td>Sabtu, 02 Desember 2023</td>
                          <td>- Karcis Dewasa 12.500 <br> - Karcis Anak-anak 10.000</td>
                          <td> 7.500 <br> 2.500</td>
                          <td> 15 <br> 5</td>
                          <td> 112.500 <br> 12.500</td>
                          <td> 125.000</td>
                          <td> Penyetor Hasan</td>
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Minggu, 03 Desember 2023</td>
                          <td>- Karcis Dewasa 12.500 <br> - Karcis Anak-anak 10.000</td>
                          <td> 7.500 <br> 2.500</td>
                          <td> 21 <br> 7</td>
                          <td> 157.500 <br> 17.500</td>
                          <td> 175.000</td>
                          <td> Penyetor Hasan</td>
                          
                        </tr>

                        
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
    </section>
    <!-- /.content -->
@endsection