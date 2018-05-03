<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uncle Sam's Restaurent</title>

    <link rel="stylesheet" href="{{ asset('/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/unite-gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>
    <div class="container header">
        <div class="row text-center">
            <div class="col-xs-12 col-md-6">
                <img src="{{ asset('/images/logo.png') }}" alt="logo" width="50%">
            </div>
            <div class="col-xs-12 col-md-6">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque, dicta!
            </div>
        </div>
    </div>

    <div class="container navs">
        <div class="row">
        <div class="col-xs-12 col-md-3">
                <div id='cssmenu'>
                    <ul>
                        <li class='active'>
                            <a href='#'>
                                <span>Trang chủ</span>
                            </a>
                        </li>
                        @foreach($data as $dt)
                        
                        <li class={{ count($dt->food)>0 ? 'has-sub' : '' }}>
                            <a href='#'>
                                <span>{{$dt->name}}</span>
                            </a>
                                @if(count($dt->food)>0)
                                <ul>
                                @foreach($dt->food as $food)
                                <li>
                                    <a href='#'>
                                        <span>{{$food->name}}</span>
                                    </a>
                                </li>
                               @endforeach
                               </ul>
                               @endif
                            
                        </li>
                        
                        @endforeach
                        <li class='last'>
                            <a href='#'>
                                <span>Liên hệ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9">
                @yield('content')
            </div>
        </div>    
    </div>
    <div class="footer container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <p><img src="{{asset('images/logo.png')}}" alt="" style="width:20%;"></p>
                <h4>Nhà hàng ABC - Hoằng Ngọc, Hoằng Hóa, Thanh Hóa</h4>
                <h4>Hotline: 1900 9000 - 1911 9111</h4>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/unitegallery.js') }}"></script>
    <script src="{{ asset('/js/ug-theme-grid.js') }}"></script>


    <script src="{{ asset('/js/script.js') }}"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery("#gallery").unitegallery({
                gallery_theme: "grid",
                theme_panel_position: "left"
            });
            $('#myTab a').on('click', function (e) {
                e.preventDefault()
                $(this).tab('show')
            })
            $('.carousel').carousel()
        });
    </script>
</body>

</html>