@extends('layout')
@section('content')
<style>
    .menu{
        height: auto;
        width: 100%;
        margin-top: 50px;
        display: block;
    }
    .category{
        float: left;
        width: 20%;
        height: auto;
    }
    .products{
        float: right;
        width: 80%;
        height: auto;
       
        
    }
    .category ul li{
        list-style: none;
        padding-bottom: 10px;
    }
    .category ul li a{
        text-decoration: none;
        font-size: 35px;
        color: black;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        margin-left: 100px;
    }
    .product{
        height: 500px;
        width: 350px;
        padding-left: 100px;
        cursor: pointer;
        display: inline-table;
    }
    .product img{
        height: 350px;
        width: 350px;
    }
    .product h3{
        font-size: 35px;
        font-weight: bold;
        color: red;
    }
    .product p{
        font-size: 20px;
        color: red;
    }
</style>

<div class="menu">
    <div class="category">
        <ul>
            @foreach($Category as $category)
            <li><a href="">{{$category->name}}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="products">
        @foreach($Product as $product)
        <div class="product">
            <img src="{{asset('product/image/'.$product->image[0]->path)}}" alt=""><br>
            <h2>{{$product->name}}</h2>
            <h3>Price: {{$product->price}}</h3>
            <p>{{$product->description}}</p>
        </div>
        @endforeach
    </div>
</div>

@endsection