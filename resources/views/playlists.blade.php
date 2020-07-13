@extends('layouts.layout')

@section('name')
    Playlists
@endsection
    @section('content')

    
    
    <!-- Blog Hero Begin -->
    <section class="breadcrumb-option blog-hero set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h2>Playlists</h2>
                        <div class="breadcrumb__widget">
                            <a href="./index.html">Home</a>
                            <span>Playlists</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero End -->
<!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                @foreach($playlist as $i)
                <div class="col-lg-6  order-lg-2 order-1">
                    <div class="blog__details">
                        <div class="blog__details__author">
                            <div class="blog__details__author__pic">
                            </div>
                            <div class="blog__details__author__text">
                            @if(is_null($i->image))
                                    <img src="{{ asset('/img/playlists/default3.png') }}" alt="" width="500" height="250">
                                @else
                                    <img src="{{ asset('/img/playlists/'.$i->image) }}" alt="" width="500" height="250">
                                @endif
                            </div>
                    
                                <h4>Source: {{$i->playlistSource}} </h4>
                                 <p>Tag : {{$i->playlistTag}}</p>
                                
                                <p> URL:
                            <a href="{{ $i->playlistURL }}" style="color:#5768ad;" target="_blank">Click Here</a></p>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
                <div class="col-lg-12"><span>{{$playlist->links()}}</span></div>
            </div>
        </div>
    </section>
    @endsection