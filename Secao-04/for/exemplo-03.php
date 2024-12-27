<?php

echo '<select>';
for ($y = date('Y'); $y >= date('Y') - 100; $y--) echo '<option value="'. $y .'">'. $y .'</option>'; 
echo '</select>';

?>