<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bulsu</title>

        {{-- Bootstrap --}}
        <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"> -->
        <link rel="stylesheet" href="{{asset('css/interface.css')}}">
        {{-- Icon --}}
        <link rel="icon" href="{{asset('img/UnsoedIcon.png')}}">

        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/fontawesome.min.css')}}">
<<<<<<< HEAD
        
        {{-- Css --}}
        <link rel="stylesheet" href="{{asset('css/base.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor.css')}}">  
        <!-- <link rel="stylesheet" href="{{asset('css/main.css')}}">  -->
        
=======

        {{-- Css --}}
        <link rel="stylesheet" href="{{asset('css/base.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('css/main.css')}}">  -->

>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap -->
        <!-- <script src="{{asset('js/bootstrap.min.js')}}"></script> -->

        {{-- Script --}}
        <script src="{{asset('js/modernizr.js')}}"></script>

        {{-- Pannellum--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
<<<<<<< HEAD
        
=======

>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
        <!-- Fading Out Overlay -->
        <script>
            $(document).ready(function(){
                $("#hide").click(function(){
                    $(".home-content-table").fadeOut(1000);
                });
            });
        </script>
    </head>
<<<<<<< HEAD
    
    <body>
     <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <span class="titleHeading">
            <i class="fa-solid fa-location-crosshairs"></i>
            <h1>Set your location</h1>
        </span>

        <div class="locationPoint" id="startingpoint">
            <input type="text" name="text" class="input" id="input" placeholder="Starting point...." />
            <div class="border"></div>
            <button class="micButton"><i class="fa-solid fa-location-dot"></i></button>
        </div>
        <div class="locationPoint" id="destination">
            <input type="text" name="text" class="input" id="input" placeholder="Destination...." />
            <div class="border"></div>
            <button class="micButton"><i class="fa-solid fa-location-arrow"></i></button>
        </div>
        <div class="locationHeading">
            <h1>Description</h1>
        </div>
    </div>
    <div id="main">
=======

    <body>
    
    <div id="main ">
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
        <div id="pannellum">
            <div id="controls">
                <div class="ctrl" id="zoom-in">&plus;</div>
                <div class="ctrl" id="zoom-out">&minus;</div>
                <div class="ctrl" id="fullscreen">&#x2922;</div>
            </div>
            <div class="content">
                <i class="fa-solid fa-bars"></i>
                <!-- search -->
                <div class="InputContainer" id="searchGroup">
                    <button class="openbtn" onclick="openNav()"><i class="fa-solid fa-bars"></i></button>
<<<<<<< HEAD
                    <input type="text" name="text" class="input" id="input" placeholder="Search Building...." />
=======
                    <input type="search" name="search" class="input" id="input" placeholder="Search Building...." />
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                    <label for="input" class="labelMenu">
                        <svg viewBox="0 0 512 512" class="searchIcon">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg>
                    </label>
                    <div class="border"></div>
<<<<<<< HEAD
                    <button class="micButton"><i class="fa-solid fa-location-arrow"></i></button>
                </div>
                <div class="sliderWrap">
        <ul>
            <li class="info">
                <i class="fa fa-map" aria-hidden="true"></i>
                    <div class="sliderBar">
                        <a onclick="showModal()">
                            <p> Denah Kampus </p>
                        </a>
                    </div>
            </li>
        </ul>
    </div>
=======
                    <?php
                            if (DB::connection()->getPdo()) {
                                $title = DB::table('scenes')->select('title', 'id')->where([['title','like','%'. request('search') . '%']])->get();
                                foreach ($title as $test) {
                                    ?>
                            <button class="micButton" onclick="loadScene({{$test->id}})"><i class="fa-solid fa-location-arrow"></i></button>
                         <?php
                            }
                            }
                            ?>
                    
                </div>

>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                <!-- navbar -->
                <div class="topnav" id="myTopnav">
                    <a href="{{ route('welcome')}}" class="active"><i class="fa-solid fa-house"></i>Home</a>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> A
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
<<<<<<< HEAD
                        @foreach($scenes as $scene)
                             <li><a class="smoothscroll" onclick="loadScene({{$scene->id}})" >{{$scene->title}}</a></li>
                        @endforeach	
=======
                        <?php
                            if (DB::connection()->getPdo()) {
                                $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%A Room%']])->get();
                                foreach ($title as $test) {
                                    ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                            }
                            }
                            ?>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> B
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
<<<<<<< HEAD
                            <a href="#" onclick="roomclick('b101')">Room 101</a>
                            <a href="#" onclick="roomclick('b201')">Room 201</a>
                            <a href="#" onclick="roomclick('b203')">Room 203</a>
                            <a href="#" onclick="roomclick('b204')">Room 204</a>
                            <a href="#" onclick="roomclick('b205')">Room 205</a>
                            <a href="#" onclick="roomclick('b206')">Room 206</a>
                            <a href="#" onclick="roomclick('b301')">Room 301</a>
                            <a href="#" onclick="roomclick('b304')">Room 304</a>
                            <a href="#" onclick="roomclick('b306')">Room 306</a>
=======
                        <?php
                            if (DB::connection()->getPdo()) {
                                $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%B Room%']])->get();
                                foreach ($title as $test) {
                                    ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                            }
                            }
                            ?>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> C
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
<<<<<<< HEAD
                            <option value=""></option>
                            <a href="#" onclick="roomclick('c107')">Room 107</a>
                            <a href="#" onclick="roomclick('c108')">Room 108</a>
                            <a href="#" onclick="roomclick('c207')">Room 207</a>
                            <a href="#" onclick="roomclick('c208')">Room 208</a>
                            <a href="#" onclick="roomclick('c209')">Room 209</a>
                            <a href="#" onclick="roomclick('c210')">Room 210</a>
                            <a href="#" onclick="roomclick('c211')">Room 211</a>
                            <a href="#" onclick="roomclick('c3sh1')">Social Hall 1</a>
                            <a href="#" onclick="roomclick('c3sh2')">Social Hall 2</a>
                            <a href="#" onclick="roomclick('c3sh3')">Social Hall 3</a>
                            <a href="#" onclick="roomclick('c307')">Room 307</a>
                            <a href="#" onclick="roomclick('c308')">Room 308</a>
                            <a href="#" onclick="roomclick('c309')">Room 309</a>
=======
                        <?php
                            if (DB::connection()->getPdo()) {
                                $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%C Room%']])->get();
                                foreach ($title as $test) {
                                    ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                            }
                            }
                            ?>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> D
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
<<<<<<< HEAD
                            <a href="#" onclick="roomclick('d101')">Room 101</a>
                            <a href="#" onclick="roomclick('d102')">Room 102</a>
                            <a href="#" onclick="roomclick('d201')">Room 201</a>
                            <a href="#" onclick="roomclick('d202')">Room 202</a>
=======
                        <?php
                            if (DB::connection()->getPdo()) {
                                $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%D Room%']])->get();
                                foreach ($title as $test) {
                                    ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                            }
                            }
                            ?>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> E
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
<<<<<<< HEAD
                            <a href="#" onclick="roomclick('e101')">Room 101</a>
                            <a href="#" onclick="roomclick('e102')">Room 102</a>
                            <a href="#" onclick="roomclick('e103')">Room 103</a>
                            <a href="#" onclick="roomclick('e201')">Room 201</a>
                            <a href="#" onclick="roomclick('e202')">Room 202</a>
                            <a href="#" onclick="roomclick('e203')">Room 203</a>
=======
                        <?php
                            if (DB::connection()->getPdo()) {
                                $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%E Room%']])->get();
                                foreach ($title as $test) {
                                    ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                            }
                            }
                            ?>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> Offices
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Admin</a>
                            <a href="#">Registar</a>
                            <a href="#">LSC Dep</a>
                            <a href="#">Educ Dep</a>
                            <a href="#">IIT Dep</a>
                            <a href="#" onclick="roomclick('infirmaryin')">Infirmary</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i>Grounds
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" onclick="roomclick('gateout')">Entrance</a>
                            <a href="#" onclick="roomclick('buildingA')"><i class="fa-solid fa-building"></i> A</a>
                            <a href="#" onclick="roomclick('buildingB')"><i class="fa-solid fa-building"></i> B</a>
                            <a href="#" onclick="roomclick('buildingC')"><i class="fa-solid fa-building"></i> C</a>
                            <a href="#" onclick="roomclick('buildingD')"><i class="fa-solid fa-building"></i> D</a>
                            <a href="#" onclick="roomclick('buildingE')"><i class="fa-solid fa-building"></i> E</a>
                            <a href="#">Admin</a>
                            <a href="#">Registar</a>
                            <a href="#">LSC Dep</a>
                            <a href="#">Educ Dep</a>
                            <a href="#">IIT Dep</a>
                            <a href="#" onclick="roomclick('infirmaryin')">Infirmary</a>
                        </div>
                    </div>

                    <a href="javascript:void(0);" style="font-size:15px;" class="icon"
                        onclick="myFunction()">&#9776;</a>
                </div>
            </div>
<<<<<<< HEAD
        </div>
    </div>
    <!-- Java Script --> 
=======
     <div class="miniMap">
        <ul>
            <li class="info">
                <i class="fa fa-map fw-bold" aria-hidden="true"></i>
                    <div class="sliderBar">
                        <a onclick="showModal()">
                            <p>BulSu-SC</p>
                        </a>
                    </div>
            </li>
        </ul>
    </div>
    <div class="modal fade" id="denahModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="{{asset('/img/Main_2.png')}}" id="map">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        </div>

    </div>
    <!-- Java Script -->
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        var load = pannellum.viewer('pannellum', {
            "default": {
                "firstScene": "{{$fscene->id}}",
<<<<<<< HEAD
                "title": "",
=======
                "author": "mark feliciano",
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                "autoLoad":true,
                "sceneFadeDuration": 2000,
                "autoRotate": -1,
                "autoRotateInactivityDelay": 30000,
<<<<<<< HEAD
                "hotSpotDebug":true
=======
                "hotSpotDebug":true,
                "disableKeyboardCtrl":true
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
            },

            "scenes": { @foreach($scenes as $scene)
                "{{$scene->id}}": {
                    "title": "{{$scene->title}}",
                    "hfov": {{$scene->hfov}},
                    "pitch": {{$scene->pitch}},
                    "yaw": {{$scene->yaw}},
<<<<<<< HEAD
                    "type": "{{$scene->type}}",
                    "panorama": "{{asset('/img/uploads/' . $scene->image)}}",

                    "hotSpots": [@foreach ($hotspots->where('sourceScene', $scene->id) as $hotspot)
=======
                    "horizonPitch": {{$scene->horizonPitch}},
                    "horizonRoll": {{$scene->horizonRoll}},
                    "type": "{{$scene->type}}",
                    "panorama": "{{asset('/img/uploads/' . $scene->image)}}",
                    "hotSpots": [
                        @foreach ($hotspots->where('sourceScene', $scene->id) as $hotspot)
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                        {
                            "pitch": "{{$hotspot->pitch}}",
                            "yaw": "{{$hotspot->yaw}}",
                            "type": "{{$hotspot->type}}",
                            "text": "{{$hotspot->info}}",
<<<<<<< HEAD
                            @if($hotspot->type == "scene")
                                "sceneId": "{{$hotspot->targetScene}}"
                            @endif
                        }, @endforeach
=======
                            "horizonPitch": "{{$scene->horizonPitch}}",
                            "horizonRoll":"{{$scene->horizonRoll}}",
                            @if($hotspot->type == "scene")
                                "sceneId": "{{$hotspot->targetScene}}"
                            @endif
                        },
                        @endforeach
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
                    ]
                }, @endforeach
            }
        });

        function loadScene(clicked_id){
            load.loadScene(clicked_id);
        }
<<<<<<< HEAD
    </script> 
    
    <script> 
        function showModal(){
            $('#denahModal').modal('show');
        };   
    </script> 
=======
    </script>

    <script>
        function showModal(){
            $('#denahModal').modal('show');
        };
    </script>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8

    <script>
        $("#menu-nav-wrap > ul > li > a").on('click', function(){
            $(".close-button").click();
        });
    </script>
    <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>
<<<<<<< HEAD
    <script src="{{asset('js/dashboard.js')}}"></script>
=======
    // <script src="{{asset('js/dashboard.js')}}"></script>
>>>>>>> 9d0f165443253363713b12d7b0a724c5cd2dc8a8
    <script src="{{asset('js/todolist.js')}}"></script>
  </body>
</html>