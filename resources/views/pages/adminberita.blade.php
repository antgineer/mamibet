@extends('template.admin')
@section('content')
<div class="card">
    <div class="col-md-3">
        <br>
        <a href="/internal/createberita" class="btn btn-primary btn-md">Tambah Berita</a>
    </div>
        <div class="card-header">
          <h3 class="card-title">Berita</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>No.</th>
              <th>Judul</th>
              <th>Konten</th>
              <th>Tanggal</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
                <?php $no=1; date_default_timezone_set('Asia/Jakarta');?>
                @foreach($beritas as $berita)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$berita->judul}}</td>
                    <td>{!!str_limit($berita->konten , 150)!!}</td>
                    <td>{{date('Y-m-d',strtotime($berita->created_at))}}</td>
                    <td>
                        <a href="/internal/{{$berita->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                        {!!Form::open(['action' => ['HomeController@destroy', $berita->id], 'method' => 'POST'])!!}
                            {!!Form::hidden('_method','DELETE')!!}
                            {!!Form::submit('Hapus',['class' => 'btn btn-danger'])!!}
                        {!!Form::close()!!}
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Konten</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
@endsection