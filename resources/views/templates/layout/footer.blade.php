<?php
    $setting = Cache::get('setting');
    $chinhanh = DB::table('chinhanh')->get();
?>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-page-facebook">
                    <div class="fb-page" data-href="{{$setting->facebook}}" data-tabs="timeline" data-width="320px" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="{{$setting->facebook}}" class="fb-xfbml-parse-ignore"><a href="{{$setting->facebook}}">Facebook</a></blockquote></div>
                    </div>
                </div>
                <div class="col-md-4 center">                   
                    <h4 class="name-company">{{$setting->company}}</h4>
                    @foreach($chinhanh as $cn)
                    <p>- {{$cn->name}}: {{$cn->address}}</p>
                    @endforeach
                    <!-- <p class="mst">MST: 0108 417 286</p> -->
                    <p>Email: {{$setting->email}}</p>
                </div>
                <div class="col-md-4">
                    <div class="box-map">
                        {!! $setting->iframemap !!}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon" style="left: -50px; bottom: 0; display: block;position: fixed; z-index: 99999999999999999999999">
        <div class="phonering-alo-ph-circle"></div>
            <div class="phonering-alo-ph-circle-fill"></div>
              <a href="tel:{{$setting->phone}}"></a>
        <div class="phonering-alo-ph-img-circle">
            <a href="tel:{{$setting->phone}}"></a>
            <a href="tel:{{$setting->phone}}" class="pps-btn-img " title="{{$setting->phone}}">
                    <img src="https://i.imgur.com/v8TniL3.png" alt="" width="50" onmouseover="this.src = 'https://i.imgur.com/v8TniL3.png';" onmouseout="this.src = 'https://i.imgur.com/v8TniL3.png';">
            </a>
        </div>   
        <span style="color: yellow; font-weight: bold; display: inline-block; font-size: 25px; margin-left: 50px; text-shadow: 2px 2px 2px #cc0000;">{{$setting->phone}}</span>     
    </div>