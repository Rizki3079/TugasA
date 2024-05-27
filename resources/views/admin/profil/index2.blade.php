@extends('layouts.dashboardAdmin')
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-4" style="text-align: center">
        <div style="position: relative; display: inline-block;">
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
        </div><br>
        <a href="/editProfilSuperAdmin" class="btn mt-3 mb-5 btn-lg-orange" style="padding: 8px 100px">Edit</a>
    </div>

    <div class="col-6" >
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fs-6 fw-bold" >Nama Lengkap</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" value="" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fs-6 fw-bold">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" value="" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fs-6 fw-bold">Alamat</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" value="" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fs-6 fw-bold">No. Telepon</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" value="" disabled>
        </div>

        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Kota</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="" disabled>
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Provinsi</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value=""disabled>
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Kode Pos</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value=""disabled>
            </div>
        </div>
    </div>

</div>
@endsection