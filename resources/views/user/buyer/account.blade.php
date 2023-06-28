@extends('layout.buyer-layout')
@section('content')
<style>
    .account{
        height: 800px;
        width: 1200px;
        background-color: blue;
        margin-top: 80px;
        margin-left: 500px;
    }
</style>
<div class="account">
    <div class="image">
        <img src="" alt="1" srcset="">
    </div>
    <div class="information">
        <form action="" method="post">
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" name="address" id="adđress">
            </div>
            <div>
                <label for=""></label>
            </div>
        </form>
    </div>
</div>
@endsection