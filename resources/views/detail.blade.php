@extends('layout')
@section('content')
<style>
    .Images{
        height: auto;
        width: 55%;
        float: left;
        background-color: aqua;
        display: block;
    }
    .image{
        height: auto;
        width: 30%;
        float: left;
        margin-left: 30px;
    }
    .image img{
        height: 80px;
        width: 75px;
        padding: 10px 10px 0 0 ;
    }
    .showSlideDetail{
        height: 700px;
        width: 65%;
        float: right;
        padding-top: 10px;
        position: relative;
    }
    .showSlideDetail .slideDetail{
        height: 100%;
        width: 100%;
       
    }
    .showSlideDetail .slideDetail  img{
        height: 700px;
        width: 650px;
        
    }
    .next{
        position: absolute;
        top: 45%;
        right: 0;
        height: 50px;
        width: 45px;
        cursor: pointer;
    }
    .prev{
        position: absolute;
        top: 45%;
        left: 5%;
        height: 50px;
        width: 45px;
        cursor: pointer;
    }
    .fa-solid{
        font-size: 30px;
    }
    
    .red{
        height: 50px;
        width: 50px;
        background-color: red;
        display: inline-block;
        cursor: pointer;
    }
    .black{
        height: 50px;
        width: 50px;
        background-color: black;
        display: inline-block;
        cursor: pointer;
    }
    .size{
        height: 50px;
        width: 50px;
        border
        display: inline-block;
        cursor: pointer;
        border: 1px solid;
        
    }

    .information{
        height: 1000px;
        width: 40%;
        float: right;
        
    }
</style>
<div class="detail">
    <div class="Images">
        <div class="showSlideDetail">
            <div class="slideDetail">
                <img src="phat.jpg" alt="" srcset="">
            </div>
            <button class="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button class="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>
        <div class="image">
            <img src="tung.png" alt="1">
            <img src="phat.jpg" alt="2"><br>
            <img src="" alt="3">
            <img src="" alt="4"><br>
            <img src="" alt="5">
            <img src="" alt="6">
        </div>
    </div>
    <div class="information">
        <h1 style="font-size: 50px">Áo Thun Supima Cotton Cổ Tròn Ngắn Tay</h1>
        <h2 style="font-size: 45px; color:red">Price</h2>
        <p style="font-size: 25px; color:red">Description</p>
        <hr>
        <p style="font-size: 25px; font-weight:bold">Màu sắc</p> 
    <div class="color">
        <div name="red" class="red"></div>
        <div name="black" class="black" ></div>
    </div>
    <hr>
    <p style="font-size: 25px; font-weight:bold">Size</p> 
    <div class="Sizes">
        <div class="size">XXL</div>
        <div class="size">XXX</div>
    </div>
    </div>
</div>
<div class="comment">

</div>
@endsection