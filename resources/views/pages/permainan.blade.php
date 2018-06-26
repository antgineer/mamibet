@extends('template.app')
@section('content')
<div class="header-bg page-area">
        <div class="home-overly"></div>
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="slider-content text-center">
                <div class="header-bottom">
                    <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                    <h1 class="title2">Permainan Yang Disediakan Mamibet</h1>
                    </div>
                    <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <h2 class="title3"></h2>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
</div>
<div class="blog-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="page-head-blog">
                                <div class="single-blog-page">
                                  <!-- search option start -->
                                  <form action="#">
                                    <div class="search-option">
                                      <input type="text" placeholder="Search...">
                                      <button class="button" type="submit">
                                          <i class="fa fa-search"></i>
                                      </button>
                                    </div>
                                  </form>
                                  <!-- search option end -->
                                </div>
                                <div class="single-blog-page">
                                  <!-- recent start -->
                                  <div class="left-blog">
                                    <h4>recent post</h4>
                                    <div class="recent-post">
                                        {{-- count data --}}
                                        <?php $count = 0;?>
                                        @foreach($beritas as $berita)
                                            <?php if($count == 4) break; ?>
                                            <!-- start single post -->
                                            <div class="recent-single-post">
                                                <div class="post-img">
                                                <a href="#">
                                                    <img src="/storage/cover_images/{{$berita->gambar}}" alt="">
                                                </a>
                                                </div>
                                                <div class="pst-content">
                                                <p><a href="/berita/{{$berita->id}}"> {{$berita->judul}}</a></p>
                                                </div>
                                            </div>
                                          <!-- End single post -->
                                          <?php $count++; ?>
                                        @endforeach
                                      
                                    </div>
                                  </div>
                                  <!-- recent end -->
                                </div>
                                <div class="single-blog-page">
                                  <div class="left-blog">
                                    <h4>LINK ALTERNATIF MAMIBET</h4>
                                    <ul>
                                      <li>
                                        <a href="#">WWW.MAMIBET.BIZ</a>
                                      </li>
                                      <li>
                                        <a href="#">WWW.MAMIBET.CLICK</a>
                                      </li>
                                      <li>
                                        <a href="#">WWW.MAMIBET.INFO</a>
                                      </li>
                                      <li>
                                        <a href="#">WWW.MAMIBET.ME</a>
                                      </li>
                                      <li>
                                        <a href="#">WWW.MAMIBET.ORG</a>
                                      </li>
                                      
                                    </ul>
                                  </div>
                                </div>
                               
                              </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="panel-group" id="accordion">
                        @foreach($permainans as $permainan)
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="check-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#check{{$permainan->id}}">
                                        <span class="acc-icons"></span>
                                        {{$permainan->permainan}}
                                    </a>
                                </h4>
                            </div>
                        <div id="check{{$permainan->id}}" class="panel-collapse collapse">
                                <div class="panel-body">
                                <p>
                                    {!!$permainan->konten!!}
                                </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>        
    
            </div>
        </div>
    </div>
@endsection