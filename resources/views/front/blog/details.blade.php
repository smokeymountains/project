@extends('layouts.app')

@section('content')
    <!-- PAGE TITLE
                ================================================== -->
    <section class="page-title-section bg-img cover-background mx-lg-4 mx-xl-6 rounded-lg" data-overlay-dark="4"
        data-background="img/banner/page-title-01.jpg">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h1 class="text-animation" data-in-effect="fadeInRight">Blog Post Detail</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#!">Blog Post Detail</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="position-absolute z-index-1 right bottom-n5 opacity2 ani-left-right">
            <span class="square bg-primary"></span>
            <span class="square bg-secondary"></span>
        </div>
    </section>

    <!-- BLOG DETAILS
                ================================================== -->
    <section class="blogs">
        <div class="container">
            <div class="row">
                <!-- left content -->
                <div class="col-lg-9 pe-lg-2-5 pe-xl-2-9 mb-2-9 mb-lg-0">
                    @if ($blog)
                        @if ($blog->id)
                            <div class="posts">

                                <!-- post -->
                                <div class="wow fadeIn" data-wow-delay="200ms">
                                    <img src="{{ $blog->getFirstMediaUrl('blog', 'bigthumb') }}" class="rounded"
                                        alt="...">
                                </div>

                                <div class="content wow fadeIn" data-wow-delay="400ms">
                                    <div class="meta">
                                        <h2 class="h3 mb-3">{{ $blog->Title }}</h2>
                                        <ul class="meta ps-0">
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-user me-1 text-secondary"></i> {{ $blog->Author }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-calendar me-1 text-secondary"></i> {{ $blog->created_at->diffForHumans() }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-tags me-1 text-secondary"></i> {{ $blog->keyword }}
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#!">
                                                    <i class="fa fa-comments me-1 text-secondary"></i> {{ count($blog->comments) }} Comments
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="mb-0">{!! $blog->Descr !!}</p>


                                    </div>

                                    <div class="separator"></div>
                                    <div class="row g-0">

                                        <div class="col-md-6 col-xs-12">
                                            <h6 class="mb-3 text-md-end text-start">Share Post</h6>
                                            <div>
                                                <ul class="social-icon-style1 text-md-end text-start">
                                                    <li><a href="https://www.facebook.com/TAHO786110/"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://mobile.twitter.com/taho_tanzania"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://www.instagram.com/taho_tanzania/"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end post -->

                                <!-- comment -->
                                <div class="comments-area wow fadeIn" data-wow-delay="600ms">
                                    <h3
                                        class="display-26 display-md-25 display-xl-24 text-secondary mb-1-6 font-weight-600">
                                        Comments({{ count($blog->comments) }})</h3>
                                        @foreach ($blog->comments as $comment)
                                             <div class="media mb-1-9 pb-1-9 border-bottom border-color-light-gray">
                                            <div class="media-body ms-3 ms-sm-4">
                                            <h6>{{ $comment->name }}</h6> 
                                             <span class="text-muted">{{ $comment->created_at->diffForHumans() }}</span>
                                            <p class="mb-3">{{ $comment->comment }}</p>
                                            
                                        </div>
                                    </div>
                                        @endforeach
                                   


                                    <!-- form -->
                                    <div>
                                        <h3 class="h4 mb-3">Post a Comment</h3>
                                        <form  method="POST" action="{{ url('blog/'.$blog->id)}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" name="name"
                                                            placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" name="email"
                                                            placeholder="Email Address">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="reply" rows="6" class="form-control" placeholder="Your Reply"></textarea>
                                            </div>
                                            <div>
                                                <button class="butn small" type="submit">submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end form -->
                                </div>
                                <!-- end comment -->
                            </div>
                        @endif
                    @endif

                </div>
                <!-- end left content -->

                <!-- right sidebar -->
                <div class="col-lg-3">
                    <div class="side-bar">

                        <div class="widget wow fadeInUp" data-wow-delay="300ms">
                            <h6 class="h5 mb-3">Check posts by categories</h6>
                            <ul class="list-style4">
                                @if (count($categories))
                                    @foreach ($categories as $item)
                                        <li><a href="#!"><i
                                                    class="fas fa-angle-right me-2"></i>{{ $item->Title }}</a></li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                      <div class="widget wow fadeInUp" data-wow-delay="400ms">
                          
                                <h6 class="h5 mb-3">Popular Blog Posts</h6>
                            <div class="media mb-1-6">
                                <img class="me-3" src="" alt="...">
                                <div class="media-body align-self-center">
                                    <h4 class="h6 mb-1"><a href="#!"></a></h4>
                                    <small> Comments</small>
                                </div>
                            </div>
                            
                            

                        </div>

                        <div class="widget wow fadeInUp" data-wow-delay="700ms">
                            <h6 class="h5 mb-3">Follow Us</h6>
                            <ul class="social-icon-style1">

                                <li><a href="https://www.facebook.com/TAHO786110/"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="https://mobile.twitter.com/taho_tanzania"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.instagram.com/taho_tanzania/"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end right sidebar -->

            </div>
        </div>
    </section>
@endsection
