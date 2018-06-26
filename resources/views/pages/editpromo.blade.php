@extends('template.admin')
@section('content')

<div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
              <a class="btn btn-primary" href="/internal/promo">Back</a>
            <h1 class="m-0 text-dark">Edit Promo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
    <div class="container-fluid">
        <div class="row">   
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                {!! Form::open(['action' => ['HomeController@updatepromo',$promo->id], 'method' => 'POST','enctype'=> 'multipart/form-data']) !!}
                <div class="card-body">
                    
                    <div class="form-group">
                        {{Form::label('promosi','Promo')}}
                        {{Form::textarea('promosi',$promo->promosi,['id'=>'article-ckeditor','class'=>'form-control', 'placeholder' => 'konten'])}}
                    </div>
              
                   <div class="form-group">
                        {{Form::label('gambar','Gambar')}}
                        <img src="/storage/cover_images/{{$promo->gambar}}" alt="" style="width:50%;">
                   </div>
                    <div class="form-group">
                        {{Form::file('cover_image')}}
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                </div>
                    
                {!! Form::close() !!}
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@endsection