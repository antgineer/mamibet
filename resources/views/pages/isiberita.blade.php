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
                    <h1 class="title2">{{$beritas->judul}}</h1>
                  </div>
                  <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                    <h2 class="title3">{{$beritas->created_at}}</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="suscribe-area">
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
                    <div class="suscribe-text text-center">
                    <h3>Dapatkan Bonus Menarik Untuk Member Baru</h3>
                    <a class="sus-btn" href="#">Klaim Bonus</a>
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
                                            @foreach($recent as $recents)
                                                <?php if($count == 4) break; ?>
                                                <!-- start single post -->
                                                <div class="recent-single-post">
                                                    <div class="post-img">
                                                    <a href="#">
                                                        <img src="{{asset('img/blog/1.jpg')}}" alt="">
                                                    </a>
                                                    </div>
                                                    <div class="pst-content">
                                                    <p><a href="/berita/{{$recents->id}}">{{$recents->judul}}</a></p>
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
                            <?php date_default_timezone_set('Asia/Jakarta');?>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <article class="blog-post-wrapper">
                                    <div class="post-thumbnail">
                                        <img src="/storage/cover_images/{{$beritas->gambar}}" alt="" />
                                    </div>
                                    <div class="post-information">
                                            <h2>{{$beritas->judul}}</h2>
                                            <div class="entry-meta">
                                              <span class="author-meta"><i class="fa fa-user"></i> <a href="http://www.mamibet.com">Mamibet</a></span>
                                              <span><i class="fa fa-clock-o"></i> {{date('Y-m-d',strtotime($beritas->created_at))}}</span>
                                            </div>
                                            <div class="entry-content">
                                                <p>{!!$beritas->konten!!}</p>
                                            </div>
                                          </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection