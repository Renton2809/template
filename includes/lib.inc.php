<?php
function drawMenu($menu, $headerMenu = false) {
    $style = '';
    // Если меня не в header, зададим стили
    if(!$headerMenu) {
        $style = " style='display:inline; margin-right: 15px;'";
        echo "<ul>";
        foreach($menu as $punkt_menu){
            echo "<li$style>";
            echo "<a href='{$punkt_menu['href']}'>{$punkt_menu['link']}</a>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<ul class='nav navbar-nav navbar-nav-right'>";
        foreach($menu as $punkt_menu){
            echo '<li class="js_nav-item nav-item">';
            echo "<a class='nav-item-child nav-item-hover' href='{$punkt_menu['href']}'>{$punkt_menu['link']}</a>";
            echo "</li>";
        }
        echo "</ul>";
    }
}

function drawTable($rows, $cols, $bg_color) {
    echo '<table border="1">';
    for($tr = 1; $tr <= $rows; $tr++) {
        echo '<tr>';
        for($td = 1; $td <= $cols; $td++) {
            if($tr == 1 OR $td == 1) { ?>
                <th style="background: <?php echo $bg_color; ?>"><?php echo $tr*$td; ?></th>

            <?php } else {
                echo '<td>'.$tr*$td.'</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>