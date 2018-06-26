@extends('template.admin')
@section('content')

<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Berita</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">   
            <div class="col-md-2"></div>
            <div class="col-md-8">
                {!! Form::open(['action' => 'HomeController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
                <div class="card-body">
                    <div class="form-group">
                        {{Form::label('judul','Judul')}}
                        {{Form::text('judul','',['class'=>'form-control', 'placeholder' => 'Judul'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('konten','Konten')}}
                        {{Form::textarea('konten','',['id'=>'article-ckeditor','class'=>'form-control', 'placeholder' => 'konten'])}}
                    </div>
                    <div class="form-group">
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
                    
                {!! Form::close() !!}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection