<?php
echo file_get_contents("header.html");
echo file_get_contents((isset($_GET['page'])?$_GET['page']:'home').".html");
echo file_get_contents("footer.html");
?>