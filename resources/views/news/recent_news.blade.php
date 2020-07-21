@forelse($recent_news as $news)
    <div class="blog__recent__item">
        <div class="blog__recent__item__pic">
            @if(is_null($news->image))
                <img src="{{ asset('/img/news/default1.jpg') }}" alt="" width="70" height="70">
            @else
                <img src="{{ asset('/img/news/'.$news->image) }}" alt="" width="70" height="70">
            @endif
        </div>
        <div class="blog__recent__item__text">
            <h6>{{ $news->headline }}</h6>
            <span>{{ Carbon\Carbon::parse($news->created_at)->format('d-M-Y') }}</span>
            <a href="{{ url('displayNews') }}" style="color: #5768ad;">More</a>
        </div>
    </div>
@empty
    <h5 align="center">No News Available</h5>
@endforelse