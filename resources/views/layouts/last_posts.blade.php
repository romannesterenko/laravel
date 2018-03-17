<div class="col-lg-4 col-md-4 col-sm-6 padbot30">
  <h4><b>Последние</b> посты</h4>
  @foreach ($articles as $article)
    <div class="recent_posts_small clearfix">
      <div class="post_item_img_small">
        <img src="{{URL::asset('images/blog/1.jpg')}}" alt="{{$article->title}}" />
      </div>
      <div class="post_item_content_small">
        <a class="title" href="/posts/{{$article->id}}" >{{$article->title}}</a>
        <ul class="post_item_inf_small">
          <li>10 January 2014</li>
        </ul>
      </div>
    </div>

  @endforeach
</div>
