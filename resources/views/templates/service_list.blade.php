@extends('index')
@section('content')
<div class="crumb">
    <div class="container">
        <div class="row">
            <ol class="breadcrumb breadcrumbx">
                <li>
                    <a href="{{url('')}}">Trang chủ</a>
                </li>
                <li class="active">{{$tintuc_cate->name}}</li>
            </ol>
        </div>
    </div>
</div>
<div class="content-home-cate box-contact-home">
    <div class="container">
        <div class="row">
            <div class="box-product-home">
                
                <div class="col-md-12  right">
                    <div class="box-cate1">                            
                        <div class="list-item-product">
                            @foreach($data as $item)
                            <div class="col-md-3 mb-30">
                                <a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">
                                    <img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}">
                                </a>
                                <p class="name_product"><a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
