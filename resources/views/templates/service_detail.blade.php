@extends('index')
@section('content')
<?php
    $setting = Cache::get('setting');
?>
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active">{{$news_detail->name}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="box-content-detail" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 left-detail">
                <div class="album-image">
                    <div class="slider-for">
                    	@if(count($albums) > 0) 
	                    	@foreach($albums as $album)
	                        <div class="item">
	                            <img src="{{asset('upload/albumnews/'.$album->photo)}}" alt="image"  draggable="false"/>
	                        </div>
	                        @endforeach
                        @else
	                        <div class="item">
	                            <img src="{{asset('upload/news/'.$news_detail->photo)}}" alt="image"  draggable="false"/>
	                        </div>
                        @endif
                        
                        
                    </div>

                    <div class="slider-nav">
                        @if(count($albums) > 0) 
	                    	@foreach($albums as $album)
	                        <div class="item">
	                            <img src="{{asset('upload/albumnews/'.$album->photo)}}" alt="image"  draggable="false"/>
	                        </div>
	                        @endforeach
                        @else
	                        <div class="item">
	                            <img src="{{asset('upload/news/'.$news_detail->photo)}}" alt="image"  draggable="false"/>
	                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h1 class="product_name">{{$news_detail->name}}</h1>
                <div class="product-short-description">
                    <pre><img class="size-full wp-image-991" src="{{asset('public/images/diachi.png')}}" alt="Địa chỉ" width="52" height="52"><span style="font-size: 20px; color: #000"> <strong>ĐỊA CHỈ:</strong> </span></pre>
                     <ul>
                     	@foreach($chinhanh as $cn)
                        <li><span style="">{{$cn->name}}: {{$cn->address}}</span></li>
                        @endforeach
                       
                     </ul>
                     <pre><img class="size-full wp-image-993" src="{{asset('public/images/phone.png')}}" alt="Icon điện thoại" width="52" height="52">&nbsp;<span style="font-size: 20px; color: #000"><strong>HOTLINE:</strong> <span style="color: #ff0000;"><em><strong>{{$setting->phone}}</strong></em></span></span></pre>
                     <pre><img class="size-full wp-image-993" src="{{asset('public/images/email.png')}}" alt="Icon email" width="52" height="52">&nbsp;<span style="font-size: 20px; color: #000"><strong>Email:</strong> <span style="color: #ff0000;"><em><strong>{{$setting->email}}</strong></em></span></span></pre>
                </div>
               
            </div>
        </div>
        <div class="row">
            <h4 class="detail_contentx col-md-12"><span>Mô tả chi tiết</span></h4>
            <div class="content_detail_product col-md-12">
                {!! $news_detail->content !!}
            </div>
        </div>
        <div class="row">
        	<h4 class="postSame">Dịch vụ liên quan</h4>
            <div class="service-samece">
                <div class="list-item-product">
                    @foreach($newsSameCate as $item)
                    <div class="col-md-3 mb-30">
                        <a href="{{url('dich-vu'.$item->alias.'.html')}}" title="{{$item->name}}">
                            <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}">
                        </a>
                        <p class="name_product"><a href="{{url('dich-vu'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                        
                        
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection