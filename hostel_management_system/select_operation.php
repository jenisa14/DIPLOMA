<?php

session_start();
?>




<?php

if(!empty($_SESSION['wname'] && !empty($_SESSION['pas'])))
{
    header("Location: op.php");
				exit;
}
else
{
    echo "<script> alert('only warden can login!!'); document.location='home-page.php' </script>";

}

?>