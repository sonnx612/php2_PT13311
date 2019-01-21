<?php
$string = 'ad$%^&*()s';
$pattern = '/./';
if (preg_match($pattern, $string)) {
    echo 'Khớp';
} else {
    echo 'Không khớp';
}

?>