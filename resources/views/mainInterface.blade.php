<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bulsu</title>

        {{-- Bootstrap --}}
        <!-- <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all"> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <!--Bootstrap 5-->
        <link rel="stylesheet" href="{{asset('css/interface.css')}}">
        {{-- Icon --}}
        <link rel="shortcut icon" href="{{asset('img/bulsu-logo.png')}}" type="image/png">
        <link rel="stylesheet" media="(max-width:768px)" href="{{asset('css/mobile.css')}}">

        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/all.min.css')}}" />
        <link rel="stylesheet" href="{{asset('fontawesome-free-6.4.0-web/css/fontawesome.min.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('css/bootstrap-5.0.0-beta1.min.css')}}"> -->

        {{-- Css --}}
        <link rel="stylesheet" href="{{asset('css/base.css')}}">
        <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
        <!-- <link rel="stylesheet" href="{{asset('css/main.css')}}"> -->
        <!-- <link rel="stylesheet" href="{{asset('css/main.css')}}">  -->

        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        {{-- Script --}}
        <script src="{{asset('js/modernizr.js')}}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>    

        {{-- Pannellum--}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>

        <!-- Fading Out Overlay -->
        <script>
            $(document).ready(function(){
                $("#hide").click(function(){
                    $(".home-content-table").fadeOut(1000);
                });
            });
        </script>
    </head>

    <body>
    

    <div id="main ">
         <!-- Modal -->
    <div class="modal fade" id="denahModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="map">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btnMOdal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        <div id="pannellum">
            <div id="controls">
                <div class="ctrl" id="zoom-in">&plus;</div>
                <div class="ctrl" id="zoom-out">&minus;</div>
                <div class="ctrl" id="fullscreen">&#x2922;</div>
            </div>
            <div class="content">
                <i class="fa-solid fa-bars"></i>
                <!-- search -->
                

                <form action="{{ route('autocomplete')}}" method="GET" class="InputContainer" id="searchGroup">
                <!-- {{csrf_field()}} -->
               
                    <input type="search" name="search-input" id="search-input" class="input" placeholder="Search Building...." onkeyup="showHint(this.value)"/>
                    <div id="search-results"></div>
                    <label for="input" class="labelMenu">
                        <!-- <svg viewBox="0 0 512 512" class="searchIcon">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg> -->
                    </label>
                    <div class="border"></div>
                   
                        <button class="micButton" type="search" name="btnsearch" id="btnsearch" ><i class="fa-solid fa-location-arrow"></i></button>
                       
                    </form>
                   
                <!-- navbar -->
                <div class="topnav" id="myTopnav">
                    <a href="{{ route('welcome')}}" class="active"><i class="fa-solid fa-house"></i>Home</a>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> A
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <?php
                        if (DB::connection()->getPdo()) {
                            $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%Building A%']])->get();
                            foreach ($title as $test) {
                                ?>
                                <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                        <?php
                        }
                        }
                        ?>
                         </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> B
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <?php
                        if (DB::connection()->getPdo()) {
                            $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%Building B%']])->get();
                            foreach ($title as $test) {
                                ?>
                               <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                            <?php
                        }
                        }
                        ?>

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> C
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content scroll">
                        <?php
                        if (DB::connection()->getPdo()) {
                            $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%Building C%']])->get();
                            foreach ($title as $test) {
                                ?>
                                <li style=" scroll-behavior: smooth;"><a onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                        }
                        }
                        ?>
                    </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> D
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <?php
                    if (DB::connection()->getPdo()) {
                        $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%Building D%']])->get();
                        foreach ($title as $test) {
                            ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                    <?php
                    }
                    }
                    ?>

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> E
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <?php
                        if (DB::connection()->getPdo()) {
                            $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%Building E%']])->get();
                            foreach ($title as $test) {
                                ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                          <?php
                        }
                        }
                        ?>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> Offices
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <?php
                        if (DB::connection()->getPdo()) {
                            $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', '%Admin%']])->get();
                            foreach ($title as $test) {
                                ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                        }
                        }
                        ?>
                            <!-- <a href="#">Admin</a>
                            <a href="#">Registar</a>
                            <a href="#">LSC Dep</a>
                            <a href="#">Educ Dep</a>
                            <a href="#">IIT Dep</a>
                            <a href="#" onclick="roomclick('infirmaryin')">Infirmary</a> -->
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i>Grounds
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                        <?php
                        if (DB::connection()->getPdo()) {
                            $title = DB::table('scenes')->select('title', 'id')->where([['title', 'like', 'Building A%','OR','like', '%Building B%']])->get();
                            foreach ($title as $test) {
                                ?>
                            <li><a class="smoothscroll" onclick="loadScene({{$test->id}})" >{{$test->title}}</a></li>
                         <?php
                        }
                        }
                        ?>
                            <!-- <a href="#" onclick="roomclick('gateout')">Entrance</a>
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
                            <a href="#" onclick="roomclick('infirmaryin')">Infirmary</a> -->
                        </div>
                    </div>

                    <a href="javascript:void(0);" style="font-size:15px;" class="icon"
                        onclick="myFunction()">&#9776;</a>
                </div>
            </div>
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
   
        </div>

    </div>
    <!-- Java Script -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

<script type="text/javascript">
    // search

    $('#search-input').select2({
            placeholder: 'Search Building...',
            ajax: {
                url: "{{route('searchdata')}}",
                dataType: 'json',
                delay: 250,
                processResults: function(data) {
                    return {

                        results: $.map(data, function(item) {
                            return {
                                text: item.title,
                                id: item.id
                            }
                        })
                    };
                },
                cache: true
            }
        });
        $("#search-input").change(function() {
            var scene = $("#search-input").val();
            loadScene(scene);
            var imageUrl = "/img/minimap/" + scene + ".png";
            $("#map").attr("src", imageUrl);
        });

    //minimap change
    $(".pnlm-title-box").ready(function() {
            var title = $(".pnlm-title-box").text();
            console.log(title);
            // Select the element you want to observe
            var targetElement = $('.pnlm-title-box');

            // Create a new MutationObserver instance
            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    // Check if the target element has been added or loaded
                    if (mutation.addedNodes && mutation.addedNodes.length > 0) {
                        // Trigger your desired event or perform any actions
                        var title = $(".pnlm-title-box").text();
                        var imageUrl = "/img/minimap/" + title + ".png";
                        $("#map").attr("src", imageUrl);
                    }
                });
            });

            // Configure and start observing the target element
            var config = {
                childList: true,
                subtree: true
            };
            observer.observe(targetElement[0], config);

        });

        
    
</script>
    <script>
        var load = pannellum.viewer('pannellum', {
            "default": {
                "firstScene": "{{$fscene->id}}",
                "author": "mark feliciano",
                "autoLoad":true,
                "sceneFadeDuration": 2000,
                "autoRotate": -1,
                "autoRotateInactivityDelay": 30000,
                "hotSpotDebug":true,
                "disableKeyboardCtrl":true
            },
            "scenes": { @foreach($scenes as $scene)
                "{{$scene->id}}": {
                    "title": "{{$scene->title}}",
                    "hfov": {{$scene->hfov}},
                    "pitch": {{$scene->pitch}},
                    "yaw": {{$scene->yaw}},
                    "horizonPitch": {{$scene->horizonPitch}},
                    "horizonRoll": {{$scene->horizonRoll}},
                    "type": "{{$scene->type}}",
                    "panorama": "{{asset('/img/uploads/' . $scene->image)}}",
                    "hotSpots": [
                        @foreach ($hotspots->where('sourceScene', $scene->id) as $hotspot)
                        {
                            "pitch": "{{$hotspot->pitch}}",
                            "yaw": "{{$hotspot->yaw}}",
                            "type": "{{$hotspot->type}}",
                            "text": "{{$hotspot->info}}",
                            "horizonPitch": "{{$scene->horizonPitch}}",
                            "horizonRoll":"{{$scene->horizonRoll}}",
                            @if($hotspot->type == "scene")
                                "sceneId": "{{$hotspot->targetScene}}"
                            @endif
                        },
                        @endforeach
                    ]
                }, @endforeach
            }
        });

        function loadScene(clicked_id){
            load.loadScene(clicked_id);
        }
    </script>

    <script>
        function showModal(){
            $('#denahModal').modal('show');
        };
    </script>

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
    <script src="{{asset('js/dashboard.js')}}"></script>
    <script src="{{asset('js/todolist.js')}}"></script>
  </body>
</html>