<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bulsu</title>

        
        <!-- <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" media="all"> -->
        <link rel="stylesheet" href="<?php echo e(asset('css/interface.css')); ?>">
        
        <link rel="icon" href="<?php echo e(asset('img/UnsoedIcon.png')); ?>">

        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web/css/all.min.css')); ?>" />
        <link rel="stylesheet" href="<?php echo e(asset('fontawesome-free-6.4.0-web/css/fontawesome.min.css')); ?>">
        
        
        <link rel="stylesheet" href="<?php echo e(asset('css/base.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/vendor.css')); ?>">  
        <!-- <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">  -->
        
        <!-- Jquery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- Bootstrap -->
        <!-- <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script> -->

        
        <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>

        
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
                    <input type="text" name="text" class="input" id="input" placeholder="Search Building...." />
                    <label for="input" class="labelMenu">
                        <svg viewBox="0 0 512 512" class="searchIcon">
                            <path
                                d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path>
                        </svg>
                    </label>
                    <div class="border"></div>
                    <button class="micButton"><i class="fa-solid fa-location-arrow"></i></button>
                </div>
                <!-- navbar -->
                <div class="topnav" id="myTopnav">
                    <a href="<?php echo e(route('welcome')); ?>" class="active"><i class="fa-solid fa-house"></i>Home</a>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> A
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            
                            <a href="#" onclick="roomclick('a216')">Room 216</a>
                            <a href="#" onclick="roomclick('a217')">Room 217</a>
                            <a href="#" onclick="roomclick('a312')">Room 312</a>
                            <a href="#" onclick="roomclick('a313')">Room 313</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> B
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" onclick="roomclick('b101')">Room 101</a>
                            <a href="#" onclick="roomclick('b201')">Room 201</a>
                            <a href="#" onclick="roomclick('b203')">Room 203</a>
                            <a href="#" onclick="roomclick('b204')">Room 204</a>
                            <a href="#" onclick="roomclick('b205')">Room 205</a>
                            <a href="#" onclick="roomclick('b206')">Room 206</a>
                            <a href="#" onclick="roomclick('b301')">Room 301</a>
                            <a href="#" onclick="roomclick('b304')">Room 304</a>
                            <a href="#" onclick="roomclick('b306')">Room 306</a>

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> C
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
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
                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> D
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" onclick="roomclick('d101')">Room 101</a>
                            <a href="#" onclick="roomclick('d102')">Room 102</a>
                            <a href="#" onclick="roomclick('d201')">Room 201</a>
                            <a href="#" onclick="roomclick('d202')">Room 202</a>

                        </div>
                    </div>
                    <div class="dropdown">
                        <button class="dropbtn"><i class="fa-solid fa-building"></i> E
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="#" onclick="roomclick('e101')">Room 101</a>
                            <a href="#" onclick="roomclick('e102')">Room 102</a>
                            <a href="#" onclick="roomclick('e103')">Room 103</a>
                            <a href="#" onclick="roomclick('e201')">Room 201</a>
                            <a href="#" onclick="roomclick('e202')">Room 202</a>
                            <a href="#" onclick="roomclick('e203')">Room 203</a>
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
        </div>
    </div>
    <!-- Java Script --> 
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script>
        var load = pannellum.viewer('pannellum', {
            "default": {
                "firstScene": "<?php echo e($fscene->id); ?>",
                "title": "",
                "autoLoad":true,
                "sceneFadeDuration": 2000,
                "autoRotate": -1,
                "autoRotateInactivityDelay": 30000,
                "hotSpotDebug":true
            },

            "scenes": { <?php $__currentLoopData = $scenes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scene): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                "<?php echo e($scene->id); ?>": {
                    "title": "<?php echo e($scene->title); ?>",
                    "hfov": <?php echo e($scene->hfov); ?>,
                    "pitch": <?php echo e($scene->pitch); ?>,
                    "yaw": <?php echo e($scene->yaw); ?>,
                    "type": "<?php echo e($scene->type); ?>",
                    "panorama": "<?php echo e(asset('/img/uploads/' . $scene->image)); ?>",

                    "hotSpots": [<?php $__currentLoopData = $hotspots->where('sourceScene', $scene->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotspot): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        {
                            "pitch": "<?php echo e($hotspot->pitch); ?>",
                            "yaw": "<?php echo e($hotspot->yaw); ?>",
                            "type": "<?php echo e($hotspot->type); ?>",
                            "text": "<?php echo e($hotspot->info); ?>",
                            <?php if($hotspot->type == "scene"): ?>
                                "sceneId": "<?php echo e($hotspot->targetScene); ?>"
                            <?php endif; ?>
                        }, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    ]
                }, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <script src="<?php echo e(asset('vendors/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.cookie.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('js/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('js/hoverable-collapse.js')); ?>"></script>
    <script src="<?php echo e(asset('js/misc.js')); ?>"></script>
    <script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/todolist.js')); ?>"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\3D-Scway\Bulsu\resources\views//mainInterface.blade.php ENDPATH**/ ?>