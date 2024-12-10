@extends('layout.master')

@section('title','Admin Panel')

@section('content')

        <div class="card">
            <div class="card-header">
                <h3>Product</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/product/create')}}">
                    <button class="btn btn-info">add product</button>
                </a>

                <a href="{{url('admin/product')}}">
                    <button class="btn btn-info">product</button>
                </a>
            </div>   
        </div>       
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Stock</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/stock/create')}}">
                    <button class="btn btn-info">refill stock</button>
                </a>

                <a href="{{url('admin/stock')}}">
                    <button class="btn btn-info">stock</button>
                </a>
            </div>   
        </div>       
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Sale</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/sale/create')}}">
                    <button class="btn btn-info">new sale</button>
                </a>

                <a href="{{url('admin/sale')}}">
                    <button class="btn btn-info">sale list</button>
                </a>
            </div>   
        </div>    

        <br>
        <div class="card">
            <div class="card-header">
                <h3>Categories</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/category/create')}}">
                    <button class="btn btn-info">add category</button>
                </a>
                <a href="{{url('admin/category')}}">
                    <button class="btn btn-info">category</button>
                </a>                
            </div>   
        </div>


        <br>
        <div class="card">
            <div class="card-header">
                <h3>Posts</h3>
            </div>
            <div class="card-body">
                <a href="{{url('#')}}">
                    <button class="btn btn-info">add Post</button>
                </a>
                <a href="{{url('#')}}">
                    <button class="btn btn-info">Posts</button>
                </a>               
            </div>   
        </div>

        <br>
        <div class="card">
            <div class="card-header">
                <h3>User Mangement</h3>
            </div>
            <div class="card-body">            
                <a href="{{url('admin/user')}}">
                    <button class="btn btn-info">users</button>
                </a>     
                <a href="{{url('admin/role/create')}}">
                    <button class="btn btn-info">add user roles</button>
                </a>                    
            </div>   
        </div>
        <br>

        <div class="card">
            <div class="card-header">
                <h3>Package</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/package/create')}}">
                    <button class="btn btn-info">add package</button>
                </a>
                <a href="{{url('admin/package')}}">
                    <button class="btn btn-info">package</button>
                </a>                
            </div>   
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Foc</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/foc/create')}}">
                    <button class="btn btn-info">add foc</button>
                </a>
                <a href="{{url('admin/foc')}}">
                    <button class="btn btn-info">foc</button>
                </a>                
            </div>   
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3>Customers</h3>
            </div>
            <div class="card-body">
                <a href="{{url('admin/customer/create')}}">
                    <button class="btn btn-info">add customer</button>
                </a>
                <a href="{{url('admin/customer')}}">
                    <button class="btn btn-info">customers</button>
                </a>                
            </div>   
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <h3>About</h3>
            </div>
            <div class="card-body">
                <p>
                    <ul>
                        <li>version : 0.0.01 (demo)</li>
                        <li>Date : October 2020</li>
                        <li>Project Owner : <a href="https://www.facebook.com/mr.zauhkun">Zau Hkun Wa Ra</a></li>
                    </ul>                    
                </p>                               
            </div>   
        </div>
        <br>

@endsection