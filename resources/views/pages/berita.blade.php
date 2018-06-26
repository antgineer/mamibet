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
                <h1 class="title2">Kumpulan Berita Terbaru Dan Terupdate</h1>
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
                <div class="row">
            
                    @if(count($beritas) > 1)
                    <?php $count = 0; date_default_timezone_set('Asia/Jakarta');?>
                        @foreach($beritas as $berita)
                        <?php if($count == 3) break;?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="single-blog-img">
                                            <a href="blog-details.html">
                                            <img src="/storage/cover_images/{{$berita->gambar}}" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-meta">
                                            <span class="date-type">
                                                <i class="fa fa-calendar"></i>{{date('Y-m-d',strtotime($berita->created_at))}}
                                            </span>
                                        </div>
                                        <div class="blog-text">
                                            <h4>
                                                <a href="/berita/{{$berita->id}}">{{$berita->judul}}</a>
                                            </h4>
                                            <p>
                                                {!!str_limit($berita->konten , 115)!!}
                                            </p>
                                        </div>
                                        <span>
                                            <a href="/berita/{{$berita->id}}" class="ready-btn">Read more</a>
                                        </span>
                                    </div>
                                    </div>
                                    <!-- End single blog -->
                                    
                                </div>
                            </div>
                        <?php $count++;?>
                        @endforeach
                        {{$beritas->links()}}
                    @else
                    <p>Tidak ada Berita</p>
                    {{$beritas->links()}}
                    @endif
                    {{-- End single blog --}}
                </div>
            </div>        

        </div>
    </div>
</div>
@endsection
