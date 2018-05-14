<?php

function showResearches( $_connection, $_category ){
    $mode = $_GET["mode"];

    $q = "SELECT * FROM research WHERE category='$_category'";

    foreach( $_connection->query( $q ) as $c ){

        if( $c[7] == "private" && $mode != "admin" ){
            continue;
        }

        $item  = "<div class='item-margin'></div>";
        $item .= "<div class='item'>";
        $item .= "<div class='item-heading'>";
        $item .= "<img class='symbol' src='../../img/research/$c[2].png'>";
        $item .= "<div class='achievement-heading'>$c[3]</div>";
        $item .= "</div>";
        $item .= "<div class='item-desc'>";
        $item .= $c[4];
        $item .= "</div>";
        $item .= "<div class='item-thumbnail'>";
        $item .= "<img src='$c[5]'>";
        $item .= "</div>";

        $item .= "<div class='achievement-list'>";
        $json_arr = json_decode( $c[6] );
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