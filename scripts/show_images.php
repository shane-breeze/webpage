<?php
$dirname = "images/";
$images = glob($dirname."*.png");

$idx = -1;
echo '<table style="width:100%">';
foreach ($images as $image) {
    $idx += 1;
    if ($idx == 0) {
        echo '<tr>';
    }
    echo '<td>';
    echo '<h3 align="center">'.$image.'</h3>';
    echo '<a target="_blank" href="'.str_replace("png","pdf",$image).'">';
    echo '<img class="img" alt="mouseover and alt text" title="mouseover and alt text" src="'.$image.'">';
    echo '</a>';
    echo '</td>';
    if ($idx == 3) {
        echo '</tr>';
        $idx = -1;
    }
}
echo '</table>';
?>
