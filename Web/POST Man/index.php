<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "JUflag{POST#REQU4ST}";
} else  {
    echo "This site takes POST data that you have not submitted!";
}
?>
