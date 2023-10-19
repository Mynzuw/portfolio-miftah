<?php
function cekId($input) {
    if (ctype_digit($input)) {
        return true;
    }
    else {
        return false;
    }
}

?>