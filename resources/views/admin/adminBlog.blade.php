@extends('layout.masterAdmin')
@section('title')
Admin blog
@endsection
@section('content')

<div class="dashboard-container blog">
    <h1>Blog Post.</h1>
    <p class="blob">Create, edit, and manage the posts here. </p>
    <div class="blog-container-admin">
        <button class="add-new-blog top">Add new post</button>
        <div class="published-draft-trash-search">
            <div class="first">
                <p class="settings-heading currently">Published ({{ $allblog }})</p>
                <p class="settings-heading">Drafts (0)</p>
                <p class="settings-heading">Trash (0)</p>
            </div>
            <div class="input-search">
                <input type="text" placeholder="search for">
                <img src="../img/Vector (8).png" alt="search-icon">
            </div>


        </div>

        <div class="drafted-blogs" style="display: none;">

            <div class="if-no-published-blog">
                <img src="../img/Draft.png" alt="svg">
                <p>No Post Found.</p>
                <button class="add-new-blog">Add new post</button>
            </div>

        </div>

        <div class="trashed-blogs" style="display: none;">

            <div class="if-no-published-blog">
                <img src="../img/Bin.png" alt="svg">
                <p>No Post Found.</p>
                <button class="add-new-blog">Add new post</button>
            </div>

        </div>
        <div class="published-blogs">
            <!--
                <div class="if-no-published-blog">
                    <img src="../img/blog-cow.png" alt="svg">
                    <p>No Post Found.</p>
                    <button class="add-new-blog">Add new post</button>
                </div>
                -->
            @foreach($posts as $blog)
            <div class="blog-flex-grid">
                <div class="blog-content">
                    <h4><span class="category-blog">{{$blog->blog_category->name}}</span><span class="blog-date" style="font-weight: 300;">• {{ date('F d, Y', strtotime($blog->created_at)) }}</span></h4>
                    <a href='#'>
                        <h1 style="padding-top: 0px;padding-bottom: 0px;">{{ $blog->title }}</h1>
                    </a>
                    <p>{!! $blog->content !!}</p>
                </div>
                <img src="{{url($blog->image_cover)}}" alt="image" class="blog-img" style="height: 300px;">
                <div class="last-sect">
                    <a href="{{ route('updateblog', $blog->slug) }}"><img src="../img/blog-edit.png" class="blog-edit" style="width: 35px;height: 35px;object-fit: contain;" alt="blog-edit"></a>
                    <a href="{{ route('deleteblog', $blog->id) }}"><img src="../img/blog-delete.png" style="width: 35px;height: 35px;object-fit: contain;" alt="blog-delete"></a>
                    <img src="../img/blog-draft.png" class="blog-draft" style="width: 35px;height: 35px;object-fit: contain;" alt="blog-draft">
                </div>
            </div>
            @endforeach
        </div>



    </div>
    <!--Add new blog post modal starts-->
    <div class="add-blog-post-modal admin-add-item">
        <div class="blog-post-modal">
            <div class="head-and-back">
                <div>Add New Post</div>
                <img class="close-modal" style="cursor: pointer;" src="../img/back-blog.svg" alt="#">
            </div>
            <form method="POST" action="{{ url('/admin/post-blog') }}" enctype="multipart/form-data">
                @csrf
                <div class="blog-category">
                    <label>Category:</label>
                    <select name="blog_category_id">
                        <option selected disabled>Select Category</option>
                        @foreach($blogcategory as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="topic-date">
                    <div class="topic">
                        <label>Topic:</label>
                        <input type="text" name="title" placeholder="Input topic here">
                    </div>
                </div>
                <div class="text">
                    <textarea name="content" id="" cols="30" rows="12" placeholder="Write blog post..."></textarea>
                </div>
                <div class="add-pic-submit">
                    <input type="file" name="image" id="">
                    <div class="button-admin-container">
                        <button class="add-item-submit admin-dash-submit"><span class="span-class">Submit</span> <img class="loader" src="../img/loader-hifarm.gif" alt="#"> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Add new blog post modal ends-->

    <!--Edit blog post modal starts-->
    <div class="add-blog-post-modal admin-add-item edit-modal">
        <div class="blog-post-modal">
            <div class="head-and-back">
                <div>Edit Post</div>
                <img class="close-blogedit-modal" style="cursor: pointer;" src="../img/back-blog.svg" alt="#">
            </div>
            <form method="POST" action="{{ route('updateblog', $editposts) }}" enctype="multipart/form-data">
                @csrf
                <div class="blog-category">
                    <label>Category:</label>
                    <select name="blog_category_id">
                        <option value="{{ $editposts->blog_category->id}}" selected>{{ $editposts->blog_category->name}}</option>
                        <option disabled>Select another Category</option>
                        @foreach($blogcategory as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="topic-date">
                    <div class="topic">
                        <label>Topic:</label>
                        <input type="text" name="title" value="{{ $editposts->title }}" placeholder="Input topic here">
                    </div>
                </div>
                <div class="text">
                    <textarea name="content" id="" cols="30" rows="12" placeholder="Write blog post...">{{ $editposts->content }}</textarea>
                </div>
                <div class="add-pic-submit">
                    <input type="file" name="image" id="">
                    <div class="button-admin-container">
                        <button class="add-item-submit admin-dash-submit"><span class="edit-want-to-sell-span" style="padding-left: 47px;
                        padding-right: 46px;">Save</span> <img class="loader loader-edit" src="{{url($editposts->image_cover)}}" alt="#"> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Edit blog post modal ends-->


    <!--Delete Blog starts-->
    <div class="delete-modal i-want-to-sell-delete">
        <div class="delete-modal-container">
            <div class="close-delete-modal i-want-to-delete">x</div>
            <h1 style="margin-bottom: 20px;margin-top: 30px;text-align: center;">Are you sure?🙁</h1>
            <div class="yes-no-delete-modal">
                <button class="yes-delete-modal main-delete">Yes</button>
                <button class="no no-delete-modal">No</button>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <!--Delete Blog ends-->



    <script src="../js/adminBlog.js"></script>
    </body>

    </html>
    @endsection