@extends('layout.masterAdmin')
@section('title')
Admin Wallet
@endsection
@section('content')
<div class="dashboard-container sponsor mrkt-plc">
    <h1 class="h1">My Wallet.</h1>
    <div class="wallet-flex">
        <div class="spending">
            <div class="spend-1">
                <p>My Spendings</p>
                <p>₦ {{ number_format($amount, 0,'.',',') }}</p>
            </div>
            <img src="../img/analye.png" alt="chart" class="analyze">
            <img src="../img/options.png">
        </div>
        <div class="spending-2">
            <div class="ledger">
                <p>Ledger Balance</p>
                <p>₦ {{ number_format($ledgerbalance, 0,'.',',') }}</p>
            </div>
            <div class="wallet-ledge">
                <p>Available Balance</p>
                <button class="wallet-ledge-btn">Withdraw</button>
                <p>₦ {{ number_format($balance, 0,'.',',') }}</p>
            </div>
        </div>
    </div>
    <div class="search-show-entry">
        <div>Show Entries: <span class="ten">10</span></div>
        <div class="entry-search">
            <p>Search</p>
            <div class="input-search">
                <input type="text" placeholder="search for">
                <img src="../img/Vector (8).png" alt="search-icon">
            </div>
        </div>
    </div>
    <div class="transaction-history">
        <p>Transaction history</p>
        <div class="transaction-history-flex">
            <div class="transact-history-option">
                <div>User ID</div>
                <div>Status</div>
                <div>Amount</div>
            </div>
            @foreach($withdraws as $with)
            <div class="transaction-records">
                <div>{{ $with->user->username }}</div><br>
                @if($with->withdraw_status_id = 3)
                <div style="color: #53AF46;">Paid</div><br>
                @elseif($with->withdraw_status_id = 1)
                <div style="color: #1E88E5;">Pending</div><br>
                @endif
                <div>₦ {{ number_format($with->amount, 0,'.',',') }}</div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!--Add status starts-->
<div class="delete-modal add-status-modal">
    <div class="delete-modal-container">
        <div class="close-delete-modal close-status">x</div>
        <h1 style="margin-left:-18px;font-size: 23px;text-align: center;margin-bottom:30px;margin-top: 55px;">Withdrawal Request</h1>
        <form method="POST" action="{{ route('adminwithdraw') }}">
            @csrf
            <label style="color:#000;font-size: 20px;">Amount:</label>
            <input type="text" name="amount" placeholder="Enter here..." class="category-value" style="font-size:18px;border: 1px solid #cccccc;margin-left: 8px;padding: 15px;width: 70%;">

            <div class="button-admin-container" style="margin-top: 20px;">
                <button type="submit" class="add-item-submit"><span style="padding-left:46px ;padding-right: 46px;" class="span-class">Send</span> <img class="loader loader-span" src="../img/loader-hifarm.gif" alt="#"> </button>
            </div>
        </form>
    </div>
</div>
<div class="overlay"></div>
<!--Add status ends-->

<script src="../js/userWallet.js"></script>
<script src="../js/dashboardHamburger.js"></script>

@endsection