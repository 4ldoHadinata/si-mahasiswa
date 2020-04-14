@extends("layout")

@section("content")
    <ul>
        <li>ID: {{ $data->id }} </li>
        <li>Nama: {{ $data->nama }}</li>
        <li>NIM: {{ $data->nim }}</li>
        <li>Alamat: {{ $data->address }}</li>
        <li><img src ="{{ Storage::url( $data->photo ) }}" alt="{{ Storage::url( $data->photo ) }}"></li>
    </ul>

    <a href="{{ route('biodata.index') }}">Kembali</a>
@endsection