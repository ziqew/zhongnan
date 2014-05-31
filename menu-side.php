<nav id="menu" class="navbar-default navbar-static-side hidden-xs" role="navigation">
<div class="sidebar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-user">
            <div class="user-img">
                <img src="../assets/images/people/65x65/1.jpg" alt="" data-src="../assets/images/people/65x65/1.jpg"
                     data-src-retina="../assets/images/people/x2/1x2.jpg" width="65" height="65"
                     class="img-responsive img-circle animated bounceIn">
            </div>
            <div class="user-info">
                <div class="user-greet">Welcome</div>
                <div class="user-name">Jonathan Doe</div>
                <div class="user-status animated bounceInLeft">
                    <span class="label label-success dropdown-toggle">Online</span>
                </div>
            </div>
        </li>
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Quick Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
            </div>
            <!-- /input-group -->
        </li>

        <?php

        $menu_dashboard = array(
            "url" => "index.php",
            "title" => " Dashboard",
        );


        $menu_panel = array(
            "url" => "panels-wells.php",
            "title" => "Panels and Wells",
        );

        $menu_button = array(
            "url" => "buttons.php",
            "title" => "Buttons",
        );

        $menu_animation = array(
            "url" => "animations.php",
            "title" => "CSS Animations <span class=\"label label-info\">NEW</span>",
        );


        $menu_ui_components=array(
            "sub_menu" => array($menu_panel,$menu_button,$menu_animation),
            "title" => "<i class=\"fa fa-wrench fa-fw\"></i> UI Components <span class=\"fa arrow\"></span>",
        );


        $menu_all=array($menu_dashboard,$menu_ui_components);
        $request_uri=$_SERVER['REQUEST_URI'];
        $selected_menu=null;
        $selected_sub_menu=null;
        foreach ($menu_all as $item){
            $title=$item["title"];
            if (isset($item["url"])&&strpos($request_uri,$item["url"]) !== FALSE){
                $selected_menu=$item;
            }


            if(isset($item["sub_menu"])){
                $sub_menu=$item["sub_menu"];

                foreach($sub_menu as $sub_menu_item){
                    $sub_title=$sub_menu_item["title"];
                    $sub_url=$sub_menu_item["url"];
                    if (isset($sub_menu_item["url"])&&strpos($request_uri,$sub_menu_item["url"]) !== FALSE){
                        $selected_menu=$item;
                        $selected_sub_menu=$sub_menu_item;
                    }
                }
            }

            if($selected_menu!=null){
                echo '<li class="active">';
            }else{
                echo '<li>';
            }



            if(isset($item["url"])){
                $url=$item["url"];
                echo '<a href="' .$url . '"><i class="fa fa-desktop fa-fw"></i>' . $title . '</a>';
            }elseif(isset($item["sub_menu"])){
                $sub_menu=$item["sub_menu"];
                echo '<a href="#">' . $title . '</a>';
                if($selected_menu==$item){
                    echo '<ul class="nav nav-second-level in">';
                }else{
                    echo '<ul class="nav nav-second-level">';
                }

                foreach($sub_menu as $sub_menu_item){

                    if($selected_sub_menu==$sub_menu_item){
                        echo '<li class="active">';
                    }else{
                        echo '<li>';
                    }
                    $sub_title=$sub_menu_item["title"];
                    $sub_url=$sub_menu_item["url"];

                    echo '<a href="' . $sub_url . '">' . $sub_title . '</a>';
                    echo '</li>';
                }
            }
            echo '</li>';
        }



        ?>

    </ul>
    <!-- /#side-menu -->
</div>
<!-- /.sidebar-collapse -->

<ul class="sidebar-stats">
    <li class="margin left right">
        <h5>summary</h5>
    </li>
    <li class="row margin left right inner-b">
        <div class="col-xs-6 reset padding left">
            <span class="text-muted">Daily Traffic</span>
            <span class="h4">630, 201</span>
        </div>
        <div class="sparkline warning col-xs-6 text-right inner-t reset padding right"></div>
    </li>
    <li class="row margin left right inner-t">
        <span class="text-muted">Project OASIS</span>
        <span class="text-muted pull-right">40% completed</span>

        <div class="progress progress-bar-mini progress-striped active">
            <div class="progress-bar progress-bar-info" data-toggle="tooltip" data-container="body"
                 title="Task progress 40%" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                 style="width: 40%">
                <span class="sr-only">40% (success)</span>
            </div>
        </div>
    </li>
    <li class="row margin left right">
        <div class="col-xs-6 reset padding left">
            <span class="text-muted">CPU Usage</span>
            <span class="h4">78,5%</span>
        </div>
        <div class="easy-pie danger pull-right margin right" data-percent="78%">
            <div class="percent"></div>
        </div>
    </li>
</ul>


</nav>