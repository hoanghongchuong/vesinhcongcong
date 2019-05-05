@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->get();
?>
<div class="slider">
    <div id="carousel-id1" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    @foreach($sliders as $k=>$slider)
                        <div class="item @if($k==0) active @endif">
                            <img  alt="" src="{{asset('upload/hinhanh/'.$slider->photo)}}">
                        </div>
                    @endforeach
                </div>
                <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
         
</div>
<div class="box-home" style="margin-bottom: 20px;">
    <div class="col-md-8 col-lg-8">
        <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="color:blue;"><i class="fa fa-star"></i>GIỚI THIỆU</span><b></b></h3>
        <div class="des-about">
            {!! $about->mota !!}
        </div>
    </div>
    <div class="col-md-4 col-lg-4">
        <h3 class="section-title section-title-center"><b></b><span class="section-title-main" style="color:blue;"><i class="fa fa-heart"></i>Dịch vụ nổi bật</span><b></b></h3>
        <div class="list-service-hot">
            @foreach($serviceHot as $hot)
            <div class="item">
                <div class="media">
                    <a class="pull-left" href="{{url('dich-vu/'.$hot->alias.'.html')}}">
                        <img class="media-object" src="{{asset('upload/news/'.$hot->photo)}}" alt="Image">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="{{url('dich-vu/'.$hot->alias.'.html')}}">{{$hot->name}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>        
</div>
<div class="box-linhvuc box-home">
    <div class="container">
        <div class="row">
            <h3>Lĩnh vực hoạt động</h3>
            <div class="list-lv">
                @foreach($newsCate as $data)
                <div class="col-md-4">
                    <div class="media">
                        <a class="pull-left" href="{{url('dich-vu/'.$data->alias)}}">
                            <img class="media-object" src="{{asset('upload/news/'.$data->photo)}}" alt="Image">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$data->name}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@foreach($newsCate as $data)
<div class="box-home box-service">
    <div class="title-cate-service">{{$data->name}}</div>
    <div class="container">
        <div class="row">
            @foreach($data->posts() as $item)
            <div class="col-md-4 col-xs-12 col-lg-4">
                <div class="item fix-animation">
                    <a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}"><img src="{{asset('upload/news/'.$item->photo)}}" alt="{{$item->name}}"></a>
                    <div class="name-service"><a href="{{url('dich-vu/'.$item->alias.'.html')}}" title="{{$item->name}}">{{$item->name}}</a></div>
                </div>

            </div>
            @endforeach
            <div class="read-more"><a href="{{url('dich-vu/'.$data->alias)}}"><span>Xem thêm</span></a></div>
        </div>

    </div>
</div>
@endforeach
<div class="box-home feedback">
    <h3>Ý kiến khách hàng</h3>
    <div class="container">
        <div class="row">
            <div class="list-item-feedback">
                <div class="owl-carousel owl-theme owl-carousel-product">
                    @foreach($feedback as $f)
                    <div class="item">
                        <div class="media">
                            <a class="pull-left" href="">
                                <img class="media-object" src="{{asset('upload/hinhanh/'.$f->photo)}}" alt="Image">
                            </a>
                            <div class="media-body">
                                <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                <h4 class="media-heading">{{$f->name}}</h4>
                                <p>{!!$f->content!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
