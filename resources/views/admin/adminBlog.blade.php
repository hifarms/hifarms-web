<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../table.css">
    <meta name="_token" content="{{ csrf_token() }}" />
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <title>Admin Blog</title>
</head>
<body>
       <!--Dashboard Hamburger Starts-->
       <div class="dashboard-hamburger">
        <div class="dash-hamb-img-name">
        <img src="../img/dashboard-hamburger-profile.png" alt="profile" class="profile-header ham">
        <h2>Welcome, <br>
            {{ Auth::user()->username }}
        </h2>
        </div>
        <div class="input-search ham">
            <input type="text" placeholder="search for">
            <img src="../img/Vector (8).png" alt="search-icon">
        </div>
        <div class="side-ar">
        <h3>General</h3>
        <div class="second-se-bar">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard.svg" alt="dashboard" class="current"> <p>Dashboard</p></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"> <p>Marketplace</p></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"> <p>Manage my farm</p></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"> <p>Invest In a Project</p></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"> <p>ROI</p></a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"> <p>Wallet</p></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog-pin.png" alt="blog-pin"> <p>Blog</p></a>
        </div>
    </div>
    <div class="third-se-bar">
            <a href="adminSettings.html"><img src="../img/settings.png" alt="settings"> <p>Settings</p></a>
            <a href=""><img src="../img/log out.svg" alt="settings"> <p>Logout</p></a>
    </div>
    <div class="guide-dash">
        <img src="../img/Notifications.png" alt="notifications" class="notifications">
        <img src="../img/Guides.png" alt="guides" width="32">
    </div>
      </div>
    <!--Dashboard Hamburger Ends-->
    <div class="moved-to-draft">
        Moved To Drafts!
    </div>
    <div class="added-successfully">
        Blog Published!
    </div>
    <div class="deleted-successfully">
        Deleted Successfully!!!
    </div>
    <div class="moved-successfully">
        Moved To Trash!!!
    </div>
    <div class="network-error">
        Error!! 
        <br> Something went wrong.
    </div>
    <div class="edited-successfully">
        Edited Successfully!!!
    </div>
    @if(Session('success_message'))
    <div class="added-successfully-blade">
        {{Session('success_message')}}
    </div>
    @endif

    @if(Session('warning_message'))
    <div class="deleted-successfully-blade">
        {{Session('warning_message')}}
    </div>
    @endif
    <header class="dashbrd-header">
        <div class="dashboard-header">
            <img src="../img/hamburger.svg" alt="#" id="hamburger" class="hamburger1">
            <div class="header-img">
                <img src="../img/logo.png" class="logo1x" alt="logo" width="113">
            </div>
            <div class="header-icons">
                <div class="cart-whatsapp cart-whatsapp-dash">
                    <a href='{{url('/cart')}}'><img src="../img/Group 51.png" alt="cart" class="cart"></a>
                       <span class="cart-counter"></span>
                </div>
                <div class="input-search">
                    <input type="text" placeholder="search for">
                    <img src="../img/Vector (8).png" alt="search-icon">
                </div>
                <div class="notifs">
                    <img src="../img/Notifications.png" alt="notifications" class="notifications">
                    <div class="notification-modal">
                        <div class="notif-head">
                            <div class="ntf">
                                <p>Notifications</p>
                                <div class="line"></div>
                            </div>
                            <button>Mark all as read</button>
                        </div>
                    </div>
                </div>
                 <div class="guides">
                    <img src="../img/Guides.png" alt="guides" width="32">
                      <div class="guide-download">
                        <h2>Help & Guide</h2>
                        <div class="line"></div>
                        <p>Help & Guide
                            Click Here to download 
                            Hi Farms instruction 
                            Manual.</p>
                      </div>
                 </div>
                <div class="profile-inclusive">
                    <img src="../img/Profile.png" alt="profile" class="profile-header">
                    <div class="my-profile-log-out">
                        <button><a href="adminProfile.html">My Profile</a></button>
                        <button><a href="logout">Log Out</a></button>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="side-bar">
        <div class="first-side-bar">
            <img src="../img/side-bar.svg" alt="side-bar">
        </div>
        <div class="second-side-bar admin" style="margin-top: 27px;">
            <a href="{{ url('admin/adminDashboard')}}"> <img src="../img/Dashboard (1).svg" alt="dashboard"></a>
            <a href="{{ url('admin/adminMarketplace')}}"><img src="../img/marketplace.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminMyFarm')}}"><img src="../img/livestock-dashboard.svg" alt="livestock"></a>
            <a href="{{ url('admin/adminInvest')}}"><img src="../img/invest.svg" alt="marketplace"></a>
            <a href="{{ url('admin/adminInvestReturns')}}"><img src="../img/history.svg" alt="history"> </a>
            <a href="{{ url('admin/adminWithraw')}}"><img src="../img/wallet.svg" alt="wallet"></a>
            <a href="{{ url('admin/adminBlog') }}"><img src="../img/blog_clicked.png" alt="blog-pin" class="current"> </a>
        </div>
        <div class="third-side-bar" style="display: flex;flex-direction: column; align-items: center;margin-bottom: 10px;">
            <a href="{{ url('admin/adminSettings')}}"><img src="../img/settings.png" style="margin-bottom: 30px;" alt="settings"></a>
            <a href="{{ url('logout') }}"><img src="../img/log out.svg" alt="log-out"></a>
        </div>
    </div>
    <div class="dashboard-container blog">
        <h1 class="bj">Blog Post.</h1>
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
                <form action="">
                    <div class="input-search">
                        <input type="text" placeholder="search for Blog" value="{{old('search')}}" name="search">
                        <button type="submit" class="btn"><img src="../img/Vector (8).png" alt="search-icon"></button>
                    </div>
                </form>
            </div>

              
            </div>

            <div class="drafted-blogs" style="display: none;">

                <div class="if-no-published-blog">
                    <img class="img-draft" src="../img/Draft.png" alt="svg">
                    <p>No Post Found.</p>
                    <button class="add-new-blog">Add new post</button>
                </div>
               
            </div>

            <div class="trashed-blogs" style="display: none;">
                
                <div class="if-no-published-blog">
                    <img class="img-bin" src="../img/Bin.png" alt="svg">
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
                        <h1 style="padding-top: 0px;padding-bottom: 0px;" class="title_">{{ $blog->title }}</h1>
                    </a>
                    <p class="content_">{!! $blog->content !!}</p>
                </div>
                <img src="{{url($blog->image_cover)}}" alt="image" class="blog-img" style="height: 300px;">
                <div class="last-sect">
                    <a href=""><img src="../img/blog-edit.png" class="blog-edit" id="{{$blog->id}}" style="width: 35px;height: 35px;object-fit: contain;" alt="blog-edit"></a>
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
                        <input type="text" placeholder="Input topic here" class="blgh" name="title">
                    </div>
                    <div class="date">
                        <label>Date:</label>
                        <input type="text" placeholder="Input date here" name="date">
                    </div>
                </div>
                <div class="text">
                    <textarea name="content" id="" cols="30" rows="12"  placeholder="Write blog post..."></textarea>
                </div>
                <input type="hidden" value="" name="id" />
                <div class="add-pic-submit">
                    <input type="file" name="image" id="">
                    <div class="button-admin-container">
                        <button class="add-item-submit admin-dash-submit"><span class="span-class">Submit</span>  <img class="loader" src="../img/loader-hifarm.gif" alt="#"> </button>
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
			<form method="post" action="{{route('update-blog')}}" enctype="multipart/form-data">
                @csrf
            <div class="blog-category">
                <label>Category:</label>
               <select name="blog_category_id">
                        <option disabled>Select another Category</option>
                        @foreach($blogcategory as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="topic-date">
                <div class="topic">
                    <label>Topic:</label>
                    <input type="text" class="e-title"  placeholder="Input topic here" name="title">
                </div>
                <div class="date">
                    <label>Date:</label>
                    <input type="date" name="date" placeholder="Input date here">
                </div>
            </div>
            <div class="text">
                <textarea name="content"  class="e-content" cols="30" rows="12"  placeholder="Write blog post..."></textarea>
            </div>
            <input class="hidden-input" type="hidden" name="id" value="">
            <div class="add-pic-submit">
                <input type="file" name="image" id="">
                <div class="button-admin-container">
                    <button type="submit" class="add-item-submit admin-dash-submit"><span class="edit-want-to-sell-span" style="padding-left: 47px;
                        padding-right: 46px;">Save</span>  <img class="loader loader-edit" src="" alt="#"> </button>
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


         <script src="../js/dashboardHamburger.js"></script>
        <script src="../js/adminBlog.js"></script>
        <script>
    $('.blog-edit').on('click',(e)=>{
        let hiddenInput = document.querySelector('.hidden-input');
        hiddenInput.value= e.target.id

        con = e.target.parentElement.parentElement.parentElement;
        console.log(con)
        title = con.querySelector('.title_');
        content = con.querySelector('.content_');
        document.querySelector(".e-title").value = title.innerHTML;
        document.querySelector(".e-content").value = content.innerHTML;


})
        </script>
         <script>
            function getNotification() {
          jQuery.ajax({
                  url: "http://127.0.0.1:8000/user/messages",
                  method: "get",
                  success: function (data) {
                      data.messages.forEach(message => {
                          $('.notification-modal').append(`
                              <div class="notif-${message.seen==0?'1':'2'}">
                              <p>${message.message_body}.</p>
                              <p>${message.created_at.split('T')[0]}</p>
                              </div>`
                          )
                      });
                  },
                  error: function (e) {
                     console.log(e)
                  },
              });
          }
  getNotification();
  </script>
    </body>
</html>