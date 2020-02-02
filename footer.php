</body>
</html>

<?php

session_start();

if ($_SESSION['fail']>0)
{
	echo ' Login  fail'.$_SESSION['fail'];
}

?>
<p>Thanks for co-operation </p>

</body>
</html>
