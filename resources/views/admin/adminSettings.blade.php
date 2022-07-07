@extends('layout.masterAdmin')
@section('title')
Admin Invest
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
                    <input type="checkbox" id="admin-chekbox">
                    <span class="slider round"></span>
                    </label>
                 </div>
                 <h2 class="disable">Disabled</h2>
               </div>
            <div class="reset-admin">
                <img src="img/admin-reset-off.png" alt="reset" class="reset-img">
                <h2 class='res-h2'>Reset</h2>
            </div>
        </div>
       </div>
    </div>
    <div class="setting-options">
        <div class="settings-heading current">General Settings</div>
        <div class="settings-heading">Manage Users</div>
        <div class="settings-heading">Account</div>
        <div class="settings-heading">Blog Posts</div>
        <div class="settings-heading">Referrals</div>
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
                 <div  style="margin-left: 20px;" class="switch-button">
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
                 <div class="user">
                     <div class="user-part">
                         <img src="img/user-list-user.png" alt="user-avatar">
                         <p>muhammadsaniharuna44@gmail.com</p>
                     </div>
                     <div class="delete-edit-user">
                         <img src="img/user-list-edit.png" alt="edit">
                         <img src="img/user-list-delete.png" alt="delete">
                     </div>
                 </div>
             </div>

            <form class="general-settings-form">
               <div class="save-changes">
                   <button>Delete All</button>
               </div>
            </form>
        </div>
     </div>
    </div>
     <!---Manage Users Settings ends-->

     <!--Change Password Modal starts-->
     <div class="admin-add-item change-password">
        <div class="admin-add-item-container">
            <div class="close-add-item">x</div>
            <h1>Change Password</h1>
            <div class="old-password-flex">
                <label>Old Password:</label>
                <div class="password-visible">
                   <input type="password" style="margin-left: 15px;" class="pass-val">
                   <img src="img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            <div class="old-password-flex">
                <label>New Password:</label>
                <div class="password-visible">
                   <input type="password" style="margin-left: 15px;" class="pass-val">
                   <img src="img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            <div class="old-password-flex">
                <label>Old Password:</label>
                <div class="password-visible">
                   <input type="password" style="margin-left: 15px;" class="pass-val">
                   <img src="img/invisible.png" alt="" class="toggle-password">
                </div>
            </div> <br>
            <div class="button-admin-container">
                <button class="add-item-submit">Save</button>
            </div>
        </div>
    </div>
      <!--Change Password Modal ends-->


</div>
<div class="overlay"></div>
<script src="js/adminSettings.js"></script>
   @endsection>