@extends('layouts.dashboardAdmin')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h2>Edit Profil</h2>
                </div>
            </div>
            
          <div class="row mb-2" style="">
            <div class="col-md-5" style="text-align: center">
                <div style="position: relative; display: inline-block;" class="mt-5">
                <img src="{{ asset('admin/dist/img/cewe.png') }}" class="img-account-profile rounded-circle mb-2" width="250px" height="250px" data-toggle="modal" data-target="#profileModal" >
            <!-- Modal for profile picture -->
        <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ asset('admin/dist/img/cewe.png' ) }}" alt="Profile Picture" width="100%">
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <a href="/profil" class="btn mt-3 mb-1" style="padding: 8px 100px; color:rgb(255, 255, 255); background-color:rgb(9, 255, 9); font-weight:bold">Simpan</a>
        <br>
        <a href="/profil" class="btn mt-1 mb-5" style="padding: 8px 108px; color:rgb(255, 255, 255); background-color:red; font-weight:bold">Batal</a>
            </div>
            <div class="col-sm-6 mt-5" style="">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Admin">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="" value="admin@gmail.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Balongan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="0987654321">
                </div>
                

                

                

                
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
  
      <!-- Main content -->
      <section class="content">
          
      </section>
      <!-- /.content -->

@endsection