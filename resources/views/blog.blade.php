@extends('layout.app')

@section('content')
  <!--Blog Page starts here-->
   <div class="showcase-img blog">
       <div class="showcase-content">
        <h1>Blog</h1>
       </div>
   </div>
   <div class="about-description">
       Home <img src="img/Arrow 1.svg" width="12"> Blog
   </div>
   
   <div class="blog-flex">
     <p class="current-blog all-blog">ALL</p>
     <P class="agritech">AgriTech</P>
     <p class="agric-science">Agric Sciences</p>
     <p class="update">Updates</p>
     <p class="success-story">Success Stories</p>
     <p class="out-break">Out Breaks</p>
     <p class="others">Others</p>
     <div class="flex-line"></div>
   </div>
   
   <div class="all-blog-container">
    @foreach($posts as $post)
    <div class="blog-flex-grid">
      <div class="blog-content">
           <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}
        </span></h4>
           <h1>{{$post->title}}.</h1>
           <p>{{$post->content}}.</p>
       </div>
       <img src={{url($post->image_cover)}} alt="">
    </div>
   @endforeach
</div>


<div class="agritech-container" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='agritech')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
           <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
    @endif
    @endforeach
</div>

<div class="agric-science-container" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='agric-science')

    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
    @endif
    @endforeach
</div>


<div class="update-blog-container" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='updates')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
@endif
@endforeach
</div>

<div class="success-stories-blog" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='success-stories')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src={{url($post->image_cover)}} alt="">
    </div>
@endif
@endforeach
</div>

<div class="out-break-blog" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='out-break')
<div class="blog-flex-grid">
    <div class="blog-content">
        <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
        <h1>{{$post->title}}.</h1>
        <p>{{$post->content}}.</p>
    </div>
    <img src={{url($post->image_cover)}} alt="">
</div>
@endif
@endforeach
</div>

<div class="other-blog" style="display: none">
@foreach($posts as $post)
@if($post->blog_category->name=='other')
    <div class="blog-flex-grid">
        <div class="blog-content">
            <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}</span></h4>
            <h1>{{$post->title}}.</h1>
            <p>{{$post->content}}.</p>
        </div>
        <img src="img/unsplash_KEKVOJt7lOY.png" alt="">
    </div>
@endif
@endforeach
</div>

  <!--Blog page end-->
@endsection('content')

@section('js')
<script src="/js/main.js"></script>
@endsection('js')
</body>
</html>