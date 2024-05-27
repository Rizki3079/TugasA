@extends('layouts.dashboardAdmin')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tiket</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tiket</li>
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
                          <th>Jenis Tiket</th>
                          <th>Harga</th>
                          
                          {{-- <th style="width: 40px">Label</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Dewasa/Biasa</td>
                          <td>Rp.10.000</td>
                          
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Dewasa/Weekend</td>
                          <td>Rp.15.000</td>
                          
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Anak-anak/Biasa</td>
                          <td>Rp.7000</td>
                          
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Anak-anak/Weekend</td>
                          <td>Rp.12.000</td>
                          
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