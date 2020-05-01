@section('js')
<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>

@stop

@extends("layout.app")

@push("style")
<link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css' ) }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@section("content")

    {{-- <h1>Daftar Mahasiswa</h1>
    <table class="table table-striped table-hover" id="biodata_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA</th>
                <th>NIM</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswa as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>
                        <a href="{{ route('biodata.show', ['id' => $data->id]) }}" class="btn btn-success">Detail</a>
                        <a href="{{ route('biodata.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Apakah Anda yakin?');" href="{{ route('biodata.destroy', ['id' => $data->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4">Data belum tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table> --}}

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Daftar Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Kelola Mahasiswa</a></li>
                <li class="breadcrumb-item active">Daftar Mahasiswa</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                    <h1>Daftar Mahasiswa</h1>
                    <a href="{{ route('biodata.create') }}" class="btn btn-info">Tambahkan</a>
                    <a href="/biodata-mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    {!!$html->table()!!}
                  </div>
              </div>
          </div>
      </section>

@endsection

@push("script")
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    {!! $html->scripts() !!}
@endpush
