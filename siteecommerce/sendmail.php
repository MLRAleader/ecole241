<?php

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="utf_8"'."\n";
$header.='Content-transfer-Encoding: 8bit';

$message='
	<html>
		<body>
			<div align="center">
				J\'ai envoiyé ce mail en php.
				</br>
				<img src="http://www.primfx.com/mailling/seperation.png"/>
			</div>
		</body>
	</html>
';

mail(mouwenlegan@gmail.com, "message", $message,$header);

?>