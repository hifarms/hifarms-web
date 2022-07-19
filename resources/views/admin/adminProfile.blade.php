@extends('layout.masterAdmin')
@section('title')
 Profile
@endsection
@section('content')
<div class="dashboard-container profile">
        <h1>My Profile.</h1>
        <p>Hello AdminðŸ‘‹</p>
        <div class="profile-hero">
            <img src="img/Image icon.png" alt="profile-image">
            <p>Administrator</p>
            <button>Upload Image</button>
        </div>
        <div class="profile-details">
            <div class="contact">Contact: <span></span></div>
            <div class="gender">Gender: <span></span></div>
            <div class="email">Email: <span></span></div>
            <div class="soo">State of Origin: <span></span></div>
            <div class="occupation">Occupation: <span></span></div>
            <div class="address">Residence Address: <span></span></div>
        </div>
        <div class="buttons-profile">
            <button>Update Profile</button>
            <button>Edit Profile</button>
        </div>
    </div>

    @endsection