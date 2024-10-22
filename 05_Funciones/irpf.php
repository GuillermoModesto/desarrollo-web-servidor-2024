<?php
function comprobarIRPF ($renta) {
    if ($renta != "")
        return true;
    echo "<p>Te sobran cromosomas.</p>";
    return false;
}
?>