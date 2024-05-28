@extends('layouts.dashboardAdmin')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Akun Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Akun Pelanggan</li>
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
                <table id="datatable" class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
@endsection

@section('script')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> --}}
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script> --}}

<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  var $table;

  
  $(document).ready(function() {
      
      table = $("#datatable").DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          autoWidth: false,
          ajax: "{{ route('pelanggan.datatable') }}",
          columnDefs: [
          {
              targets: 0,
              render: function(data, type, full, meta) {
                  return (meta.row + 1);
              }
          }, 
          {
                targets: 2,
                render: function(data, type, full, meta) {
                if (data !== null) {
                    return full.user_customer.email;
                } else {
                    return 'Belum Ada Data!';
                }
            }
          },
          {
              targets: 5,
                  render: function(data, type, full, meta) {
                      return data ? `<img class="img-thumbnail" style="border-radius: 50%; width: 75px; height: 75px; object-fit: cover;" src="{{ asset('storage') }}/${data}" alt="Image">` : `<img class="img-thumbnail wd-100p wd-sm-200" style="border-radius: 50%;" src="{{ asset('admin/dist/img/default-150x150.png') }}">`;
                  }

          },
          {
            targets: -1,
            render: function(data) {
                let btn = `
                    <div class="btn-list">
                        <a href="{{ route('pelanggan.edit', ':id') }}" class="btn btn-md btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="#" onclick="destroy('${data}')" class="btn btn-md btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                    </div>
                `;

                btn = btn.replaceAll(':id', data);

                return btn;
            },
        }, ],
          columns: [
              { data: null },
              { data: 'name'},
              { data: 'user_customer_id'}, 
              { data: 'phone_number'}, 
              { data: 'address'}, 
              { data: 'image'}, 
              { data: 'id'}, 
          ],
          language: {
              searchPlaceholder: 'Search...',
              sSearch: '',
          }
      });
  })

  function destroy(id) {
    var url = "{{ route('pelanggan.destroy', ':id') }}".replace(':id', id);
    var csrfToken = $('meta[name="csrf-token"]').attr('content');

    if (confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')) {
        $.ajax({
            url: url,
            type: 'DELETE',
            data: { "id": id },
            dataType: "JSON",
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function(data) {
                // Reload the table
                alert('Berhasil Menghapus pelanggan.');

                table.ajax.reload();
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat menghapus pelanggan.');
            }
        });
    }
}


</script>

@endsection