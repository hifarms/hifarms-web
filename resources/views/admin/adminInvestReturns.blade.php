@extends('layout.masterAdmin')
@section('title')
 Admin Investment
@endsection
@section('content')
<div class="dashboard-container returns">
        <h1>Investment Returns.</h1>
        
        <div class="investment-returns">
            <div class="total-investment">
                <p>Total Investment</p>
                <p>₦0.00</p>
            </div>
            <div class="total-returns">
                <p>Total Investment Returns</p>
                <p>₦.000</p>
            </div>
            <div class="active-projects">
                <p>Active Projects</p>
                <p>0</p>
            </div>
        </div>

        <div class="investment-table">
            <p>You have no investments yet.</p>
            <div class="buttons">
                <button><img src="img/csv.svg" width="120"></button>
                <button><img src="img/pdf.svg" width="120"></button>
            </div>
        </div>
    </div>
    @endsection
