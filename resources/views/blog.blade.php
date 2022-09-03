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

   <select class="select-blog" >
       <option value="0">All</option>

       @foreach($category as $cat)
       <option value="{{$cat->id}}"  {{ $cat->id==$current? 'selected': null}}>{{$cat->name}}</option>
       @endforeach
   </select>
   
   <div class="blog-flex">
    <p class="section {{ $current==null? 'current-blog': null}}" id="0"><a href="/blog/category">ALL</a></p>
    @foreach($category as $cat)
    <p class="section {{ $cat->id==$current? 'current-blog': null}}" id="0"><a href="/blog/category/{{$cat->id}}">{{$cat->name}}</a></p>
    @endforeach
     <div class="flex-line"></div>
   </div>
   
   <div class="all-blog-container">
    @foreach($posts as $post)
    <div class="blog-flex-grid">
      <div class="blog-content">
           <h4>{{$post->blog_category->name}} <span style="font-weight: 300;">• {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY')}}
        </span></h4>
           <a href="{{url('blog/'.$post->slug)}}"><h1>{{$post->title}}.</h1></a>
           <p><pre style="">{{ Str::limit($post->content,300) }}</pre> <a href="{{url('blog/'.$post->slug)}}" style="color: rgb(44, 44, 189)">Read more</a></p>
       </div>
       <img src="{{url($post->image_cover)}}" alt="">
    </div>
   @endforeach
</div>



  <!--Blog page end-->
@endsection('content')

@section('js')
<script src="/js/main.js"></script>
<script>
    $('.select-blog').on('change',(e)=>{
        id = e.target.value
        window.location.replace(`/blog/category/${id!==0? id : ''}`);
    })
</script>
@endsection('js')
</body>
</html>