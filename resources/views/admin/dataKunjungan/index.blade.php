@extends('layouts.dashboardAdmin')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Kunjungan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Kunjungan</li>
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
                          <th>KR2</th>
                          <th>KR4</th>
                          <th>KR6</th>
                          <th>Lokal (A)</th>
                          <th>Lokal (D)</th>
                          <th>Mancanegara (D)</th>
                          <th>Mancanegara (A)</th>
                          <th>Keterangan</th>
                          
                          {{-- <th style="width: 40px">Label</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Jum'at, 01 Desember 2023</td>
                          <td>4</td>
                          <td>2</td>
                          <td>-</td>
                          <td>5</td>
                          <td>10</td>
                          <td>-</td>
                          <td>-</td>
                          <td> Penyetor Hasan</td>
                          
                       </tr>
                        <tr>
                          <td>2</td>
                          <td>Sabtu, 02 Desember 2023</td>
                          <td>7</td>
                          <td>-</td>
                          <td>-</td>
                          <td>2</td>
                          <td>15</td>
                          <td>-</td>
                          <td>-</td>
                          <td> Penyetor Hasan</td>
                          
                       </tr>
                        <tr>
                          <td>3</td>
                          <td>Minggu, 03 Desember 2023</td>
                          <td>3</td>
                          <td>-</td>
                          <td>1</td>
                          <td>10</td>
                          <td>17</td>
                          <td>-</td>
                          <td>-</td>
                          <td> Penyetor Hasan</td>
                          
                       </tr>
                        <tr>
                          <td>4</td>
                          <td>Senin, 04 Desember 2023</td>
                          <td>5</td>
                          <td>-</td>
                          <td>-</td>
                          <td>3</td>
                          <td>7</td>
                          <td>-</td>
                          <td>-</td>
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