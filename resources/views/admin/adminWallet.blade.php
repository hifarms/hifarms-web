@extends('layout.masterAdmin')
@section('title')
Admin Wallet
@endsection
@section('content')
<div class="dashboard-container">
    <h1>My Wallet.</h1>
    <div class="wallet-flex">
        <div class="spending">
            <div class="spend-1">
                <p>My Spendings</p>
                <p>₦ 0</p>
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
            <div class="transaction-records">
            </div>
          
        </div>
    </div>
</div>

@endsection