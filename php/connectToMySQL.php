<?php

function showResearches( $_connection, $_category ){
    
    $mode = "";
    if( isset($_GET["mode"]) ){
        $mode = $_GET["mode"];
    }

    $q = "SELECT * FROM research WHERE category='$_category'";

    foreach( $_connection->query( $q ) as list($id, $date, $category, $title, $description, $thumbnail_url, $achievements, $status) ){

        if( $status == "private" && $mode != "admin" ){
            continue;
        }

        $item  = "<div class='item-margin'></div>";
        $item .= "<div class='item'>";
        $item .= "<div class='item-heading'>";
        $item .= "<img class='symbol' src='../../img/research/$category.png'>";
        $item .= "<div class='achievement-heading'>$title</div>";
        $item .= "</div>";
        $item .= "<div class='item-desc'>";
        $item .= $description;
        $item .= "</div>";
        $item .= "<div class='item-thumbnail'>";
        $item .= "<img src='$thumbnail_url'>";
        $item .= "</div>";

        $item .= "<div class='achievement-list'>";
        $json_arr = json_decode( $achievements );
        foreach( $json_arr as $obj ){
            $name  = $obj->{"name"};
            $label = $obj->{"label"};
            $url   = $obj->{"url"};

            $item .= "<div class='achievement-box'>";
            $item .= "<a href='$url'>";
            $item .= "<img src='../../../img/achievement/$name.jpg'>";
            $item .= "<p>$label</p>";
            $item .= "</a>";
            $item .= "</div>";
        }
        $item .= "</div>";
        $item .= "</div>";

        echo $item;
    }

    $_connection = null;
}

?>