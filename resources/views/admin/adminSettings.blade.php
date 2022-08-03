@extends('layout.masterAdmin1')
@section('title')
Admin Settings
@endsection
@section('content')
<div class="dashboard-container admin-setting">
    <div class="settings-header">
        <div class="settings-inner">
            <h1>Settings</h1>
            <div class="check-box-reset">
                <!-- Rounded switch -->
                <div class="round-switch-name">
                    <div class="switch-button">
                        <label class="switch">
                            <input type="checkbox" checked id="admin-chekbox">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <h2 class="disable" style="color: #8bc53e;">Active</h2>
                </div>
                <div class="reset-admin">
                    <img src="../img/admin-reset-off.png" alt="reset" class="reset-img">
                    <h2 class='res-h2'>Reset</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="setting-options">
        <div class="settings-heading current">General Settings</div>
        <div class="settings-heading">Manage Users</div>
        <div class="settings-heading stars">Statistics</div>
        <div class="settings-heading">Inbox</div>
    </div>


    <!---General Settings starts-->
    <div class="display-general">
        <div class="general-settings generalify">
            <div class="general-ser">
                <div class="head">General Settings</div>
                <form class="general-settings-form">
                    <label>User:</label>
                    <input type="text"> <br>
                    <label>Email:</label>
                    <input type="text"> <br>
                    <label>Phone Number:</label>
                    <select>
                        <option>+234</option>
                    </select>
                    <input type="text"> <br>
                    <label>Password:</label>
                    <button class="pass">Change Password</button> <br>
                    <div class="lb-auth">
                        <label>Two-Factor Auth:</label>
                        <div class="round-switch-name">
                            <div style="margin-left: 20px;" class="switch-button">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <h2>Disabled</h2>
                        </div> <br>
                    </div>
                    <div class="save-changes">
                        <button>Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---General Settings ends-->

    <!---Manager User Settings starts-->
    <div class="display-manage">
        <div class="general-settings managify">
            <div class="general-ser manage">
                <div class="head">Manage Users</div>
                <div class="users-list">
                    @foreach($user as $use)
                    <div class="user">
                        <div class="user-part">
                            <img src="../img/user-list-user.png" alt="user-avatar">
                            <p>{{ $use->email }}</p>
                        </div>
                        <div class="delete-edit-user">
                            <img src="../img/user-list-edit.png" alt="edit">
                            <a href="{{ route('deleteuser', $use->id) }}"><img src="../img/user-list-delete.png" alt="delete"></a>
                        </div>
                    </div>
                    @endforeach
                    <div class="line-add-user"><span>+</span>
                        <div>Add account</div>
                    </div>
                </div>

                <form class="general-settings-form">
                    <div class="save-changes">
                        <button class="delete-all">Delete All</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---Manage Users Settings ends-->

    <!--Inbox settings starts-->
    <div class="display-general inbox">
        <div class="general-settings generalify">
            <div class="general-ser inbox">
                <div class="head">General Messages</div>
                <div class="all-mark">
                    <div>All</div>
                    <button>Mark all as read</button>
                </div>
                <div class="messages-catalog">
                    @foreach($messages as $message)
                    <div class="message-inner">
                        <small>{{ $message->user->email }}</small>&nbsp;&nbsp;&nbsp;&nbsp;
                        <small> {{ $message->message_body }}</small>&nbsp;&nbsp;&nbsp;&nbsp;
                        <small> {{ date('F d, Y', strtotime($message->created_at)) }}</small>
                    </div>
                    @endforeach
                </div>
                <div class="save-changes">
                    <button class="send-msg">Send a Message</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Inbox settings ends-->

    <!---Statistics settings starts-->
    <div class="display-stats">
        <div class="general-settings managify">
            <div class="general-ser stats">
                <div class="head">Statistics & Analytics</div>
                <select>
                    <option>This Year</option>
                    <option>This Month</option>
                    <option>This Week</option>
                    <option>Today</option>
                </select>
                <div class="general-information stats">
                    <div class="info-1 diff">
                        <div class="info-images">
                            <img src="../img/admin-views.svg" alt="views">
                            <img src="../img/admin-stats.png" alt="stats">
                        </div>
                        <h5>Total Views</h5>
                        <h3>0</h3>
                        <p>Start from Jan 1, 2021</p>
                    </div>
                    <div class="info-2">
                        <div class="info-images">
                            <img src="../img/admin-products.svg" alt="views">
                        </div>
                        <h5>Total Products</h5>
                        <h2>{{ $products }}</h2>
                        <p class="add-new-product">updates every day.</p>
                    </div>
                    <div class="info-3">
                        <div class="info-images">
                            <img src="../img/admin-vector.png" alt="views">
                        </div>
                        <h5>Total Users</h5>
                        <h2>{{ $users }}</h2>
                        <p>New user noted every week</p>
                    </div>
                    <div class="info-4">
                        <div class="info-images">
                            <img src="../img/admin-cart.png" alt="stats">
                        </div>
                        <h5>Total Sales</h5>
                        <h2>{{ $orders }}</h2>
                        <p>Start from Jan 1, 2022</p>
                    </div>
                    <div class="info-4">
                        <div class="info-images">
                            <img src="../img/set-stat.png" alt="stats">
                        </div>
                        <h5>Total Products</h5>
                        <h2>{{ $products }}</h2>
                        <p>Updates every week</p>
                    </div>
                    <div class="info-1 diff">
                        <div class="info-images">
                            <img src="../img/not-set.png" alt="views">
                            <img src="../img/admin-stats.png" alt="stats">
                        </div>
                        <h5>Active Projects</h5>
                        <h3>0</h3>
                        <p>Projects currently investing</p>
                    </div>
                </div>
                <div class="farm-activities-setting">
                    <h3>Farm Activities</h3>
                    <img src="../img/options.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</div>
<!---Statistics settings ends-->

<!--Change Password Modal starts-->
<div class="admin-add-item change-password">
    <div class="admin-add-item-container">
        <div class="close-add-item" style="padding-top: unset;">x</div>
        <h1 style="margin-bottom: 20px;">Change Password</h1>
        <div class="old-password-flex">
            <label>Old Password:</label>
            <div class="password-visible">
                <input type="password" style="margin-left: 15px;" class="pass-val">
                <img src="../img/invisible.png" alt="" class="toggle-password">
            </div>
        </div> <br>
        <div class="old-password-flex">
            <label>New Password:</label>
            <div class="password-visible">
                <input type="password" style="margin-left: 15px;" class="pass-val">
                <img src="../img/invisible.png" alt="" class="toggle-password">
            </div>
        </div> <br>
        <div class="old-password-flex">
            <label>Old Password:</label>
            <div class="password-visible">
                <input type="password" style="margin-left: 15px;" class="pass-val">
                <img src="../img/invisible.png" alt="" class="toggle-password">
            </div>
        </div> <br>
        <div class="button-admin-container">
            <button class="add-item-submit admin-dash-submit"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-sell-span">Save</span> <img class="loader loader-edit" src="../img/loader-hifarm.gif" alt="#"> </button>
        </div>
    </div>
</div>
<!--Change Password Modal ends-->

<!--Priviledges modal-->
<!--Edit User to manage platform starts-->
<div class="admin-add-item change-password admin-edit-priv priv">
    <div class="admin-add-item-container">
        <div class="close-add-item priv-close" style="padding-top: unset;">x</div>
        <h1 style="font-size:20px;margin-top:-25px;margin-bottom: 20px;display: flex;justify-content: center;">Accounts & Priviledges</h1>
        <div class="first-box">
            <input type="checkbox" checked class="toggle-priv">
            <div>All Priviledges</div>
        </div>
        <div class="second-box">
            <div class="third-box">
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>General Settings</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Blog Post</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Manage Users</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Message Replies</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Security Settings</div>
                </div>
            </div>
            <div class="fourth-box">
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Add/Edit Products</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Add/Edit Projects</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Account Settings</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Manage Farms</div>
                </div>
                <div class="first-box this">
                    <input type="checkbox" checked class="all">
                    <div>Two Fact Auth</div>
                </div>
            </div>
        </div>
        <div class="save-changes">
            <button class="save-priv">Save Changes</button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Priviledges modal ends-->

<!--Edit User to manage platform starts-->
<div class="admin-add-item change-password admin-edit-user">
    <div class="admin-add-item-container">
        <div class="close-add-item edit-user-close" style="padding-top: unset;">x</div>
        <h1 style="font-size:25px;margin-bottom: 20px;display: flex;justify-content: left;margin-top: 15px;">Edit User</h1>
        <div class="old-password-flex user">
            <label>Email:</label>
            <div class="password-visible user val">
                <input type="email" class="pass-val user">
            </div>
        </div> <br>
        <div class="old-password-flex user">
            <label>Password:</label>
            <div class="password-visible user">
                <input type="password" class="pass-val">
                <img src="../img/invisible.png" alt="" class="toggle-password">
            </div>
        </div> <br>
        <div class="button-admin-container">
            <button class="add-item-submit admin-dash-submit"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-edit-span">Save</span> <img class="loader loader-user-edit" src="../img/loader-hifarm.gif" alt="#"> </button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Edit User to manage platform ends-->


<!--Add User to manage platform starts-->
<div class="admin-add-item change-password admin-add-user">
    <div class="admin-add-item-container">
        <div class="close-add-item add-user-close" style="padding-top: unset;">x</div>
        <h1 style="font-size:25px;margin-bottom: 20px;display: flex;justify-content: left;margin-top: 15px;">Add User</h1>
        <div class="old-password-flex user">
            <label>Email:</label>
            <div class="password-visible user val">
                <input type="email" class="pass-val user">
            </div>
        </div> <br>
        <div class="old-password-flex user">
            <label>Password:</label>
            <div class="password-visible user">
                <input type="password" class="pass-val">
                <img src="../img/invisible.png" alt="" class="toggle-password">
            </div>
        </div> <br>
        <div class="button-admin-container">
            <button class="add-item-submit admin-dash-submit"><span style="padding-left:47px ;padding-right: 46px;" class="edit-want-to-add-span">Save</span> <img class="loader loader-add" src="../img/loader-hifarm.gif" alt="#"> </button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Add User to manage platform ends-->

<!--Delete all manage users list starts-->
<div class="delete-modal invest">
    <div class="delete-modal-container">
        <div class="close-delete-modal">x</div>
        <h1 style="margin-bottom: 50px;margin-top: 60px;text-align: center;">Are you sure?🙁</h1>
        <div class="yes-no-delete-modal">
            <button class="yes-delete-modal main-delete yes-delete">Yes</button>
            <button class="no no-delete-modal">No</button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Delete all manage users list ends-->

<!--Delete Item starts-->
<div class="delete-modal invest btn-delete">
    <div class="delete-modal-container">
        <div class="close-delete-modal btn-delete-modal">x</div>
        <h1 style="margin-bottom: 50px;margin-top: 60px;text-align: center;">Are you sure?🙁</h1>
        <div class="yes-no-delete-modal">
            <button class="yes-delete-modal main-delete approve">Yes</button>
            <button class="no no-delete-modal-btn">No</button>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!--Delete item ends-->

<!--Add new message post modal starts-->
<div class="add-blog-post-modal admin-add-item msg-modal">
    <div class="blog-post-modal">
        <div class="head-and-back">
            <div>New Message</div>
            <img class="close-modal" style="cursor: pointer;" src="../img/back-blog.svg" alt="#">
        </div>
        <form method="POST" action="{{ url('admin/send-message') }}">
        @csrf
            <div class="blog-category">
                <label>From:</label>
                <input type="text" value=" {{ Auth::user()->email }}" disabled style="
                 padding: 10px;
                 margin-left: 10px;
                 width: 200px;
                 border: 1px solid #ebe8e8;
                 border-radius: 10px;
              ">
            </div>
            <div class="topic-date">
                <div class="topic">
                    <label>To:</label>
                    <select name="recipient_id" style="width: 700px;height:30px;">
                        <option selected disabled>Select Recipient</option>
                        @foreach($user as $use)
                        <option value="{{ $use->id }}">{{ $use->email }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="text">
                <textarea name="message_body" id="" cols="30" rows="12" placeholder="Write message here..."></textarea>
            </div>
            <div class="button-admin-container">
                <button type="submit" class="add-item-submit">Send Message</button>
            </div>
        </form>
    </div>
</div>
<div class="overlay"></div>
<!--Add new message post modal ends-->
</div>
<div class="overlay"></div>
<script src="../js/adminSettings.js"></script>
@endsection