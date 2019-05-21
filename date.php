<?php
$mydate=getdate(date("U"));
echo "$mydate[month] $mydate[mday]";
if ($mydate['month']=="December" && $mydate['mday']=="25") {
	echo "Merry Christmas!";
}
else
{
	echo "Not merry christmas!";
}
?>