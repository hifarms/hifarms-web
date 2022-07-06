@extends('layout.masterAdmin')
@section('title')
My Farm
@endsection
@section('content')
<div class="dashboard-container livestock">
      <h1>My Farm</h1>
      <div class="my-farm-1">
        <img src="img/Farmer Icon (1).svg" alt="farm-icon" width="130" class="farm-icon">
        <div class="weatherflex">
            <div class="weather-2">
                <div class="flex-1">
                    <p>Weather</p>
                    <img src="img/clouds.png" alt="clouds">
                    <img src="img/temprature.png" alt="celsius">
                </div>
                <div class="flex-2">
                    <img src="img/options.png" alt="">
                </div>
            </div>
            <div class="weather-2">
                <div class="flex-1">
                    <p>Humidity</p>
                    <img src="img/clouds.png" alt="clouds">
                    <img src="img/16ยบ.svg" alt="celsius">
                </div>
                <div class="flex-2">
                    <img src="img/options.png" alt="">
                </div>
            </div>
        </div>
          <img src="img/Farm chart.svg" alt="farm-chart" class="farm-chart">
      </div>
        <div class="dashboard-flex livestock">
       <div class="marketplace-flex manage-your-farm livestock">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="img/livestock-dashboard.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Livestock Farming</p>
                  </div>
                <div class="views-numbers">
                    <p>6</p>
                    <img src="img/play-button.svg" alt="eye-icon" width="23">
                </div>
            </div>
            <div class="marketplace-flex invest-your-farm livestock">
                <div class="top-marketplace-flex">
                    <p>Manage Your Farm</p>
                    <img src="img/manage-farm.svg" alt="icon">
                </div>
                  <div class="marketplace-body">
                    <p>Crops Farming</p>
                  </div>
                <div class="views-numbers">
                    <p>3</p>
                    <img src="img/play-button.svg" alt="eye-icon" width="23">
                </div>
            </div>  
        </div>
   
        <p class="livestock-bottom">Livestock Farming</p>
    </div>
    @endsection