@extends('layouts.user.app')

@section('content')
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12 row-item row introduct-shop">
            <div><h3>Chào mừng bạn đến với HOME SHOP - Kênh người bán</h3></div>
            <div class="margin-top-30"><h4>Mời bạn chọn danh mục</h4></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-ls-12 row-item row margin-top-50">
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <a href="{!! route('user.collection.index') !!}">
                    <div class="block-categoty-shop one"></div>
                </a>
                <a href="{!! route('user.collection.index') !!}">
                    <div class="name-category-shop"><h4>Collection</h4></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <a href="">
                    <div class="block-categoty-shop two"></div>
                </a>
                <a href="">
                    <div class="name-category-shop"><h4>Product</h4></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3">
                <a href="">
                    <div class="block-categoty-shop three"></div>
                </a>
                <a href="">
                    <div class="name-category-shop"><h4>Order</h4></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-ls-3" >
                <a href="">
                    <div class="block-categoty-shop four"></div>
                </a>
                <a href="">
                    <div class="name-category-shop"><h4>View Shop</h4></div>
                </a>
            </div>
        </div>
    </div>
@stop
