<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $cateService = \App\NewsCate::where('com','dich-vu')->where('parent_id',0)->orderBy('id','asc')->get();
?>


<div class="top-header">
    <img src="{{asset('public/images/banner.jpg')}}" alt="">
</div>

<div class="visible-xs visible-sm menu-mobile">
    <div class="vk-header__search">
        <div class="container">                
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            
            <li><a href="{{url('')}}">Trang chủ</a></li>
            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
            @foreach($cateService as $cate)
            <li>
                <a href="{{url('dich-vu')}}">{{$cate->name}}</a>

                <a href="#menu{{$cate->id}}" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu{{$cate->id}}">
                    @foreach($cate->posts() as $post)
                    <li><a href="{{url('dich-vu/'.$post->alias.'.html')}}">{{$post->name}}</a></li>
                    @endforeach                     
                </ul>
            </li>
            @endforeach
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
    </nav>        
</div>
<!-- <div class="slider-mobile visible-xs">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
                
        <div class="carousel-inner">
            <div class="item ">
                <img  alt="Third slide" src="images/slider.png">
                
            </div>
            <div class="item active">
                <img  alt="Third slide" src="images/slider.png">
                
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div> -->
<div class="menu-cate visible-md visible-lg">
    <div class="top-menu">
        <div class="col-md-2"></div>
        <div class="col-md-10 menu pdl-0">
            <ul class="navi">
                <li><a href="{{url('')}}">Trang chủ</a></li>
                <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
                @foreach($cateService as $cate)
                <li>
                    <a href="{{url('dich-vu/'.$cate->alias)}}">{{$cate->name}}</a>
                    <i class="fa fa-angle-down"></i>
                    <ul class="vk-menu__child">                                
                        @foreach($cate->posts() as $post)
                        <li><a href="{{url('dich-vu/'.$post->alias.'.html')}}">{{$post->name}}</a></li>
                        @endforeach                        
                    </ul>
                </li>
                @endforeach                         
                                
                <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>                            
                <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
            </ul>
        </div>
        
    </div>       
</div>