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

@extends("layout")

@push("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
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

    <h1>Daftar Mahasiswa</h1>
        <a href="{{ route('biodata.create') }}" class="btn btn-info">Tambahkan</a><br><br>
        <a href="/biodata-mahasiswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
        {!!$html->table()!!}

@endsection

@push("script")
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    {!! $html->scripts() !!}
@endpush
