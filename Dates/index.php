<?php

date_default_timezone_set("Europe/Madrid");

setlocale(LC_TIME, 'spanish');

echo "<strong>Ejercicio 1 - Funci&oacute;n date()</strong><br><br>";

echo "1. El a&ntilde;o actual es: ".date("Y")."<br><br>";

echo "2. La fecha y hora (24h) es: ".date("j/n/Y H:i:s")."<br><br>";

echo "3. Hoy es: ".date("l")." del ".date("j")." de ".date("F")." de ".date("Y")."<br><br>";

echo "4. Fecha completa formato RFC2822 es: ".date("r")."<br><br>";

echo "5. Fecha completa formato ISO 8061 es: ".date("c")."<br><br>";

echo "6. El mes de ".date("F")." tiene ".date("t")." d&iacute;as<br><br>";

echo "7. El n&uacute;mero del d&iacute;a ".date("l")." de la semana es: ".date("N")." (N)<br><br>";

echo "8. El n&uacute;mero del d&iacute;a ".date("l")." de la semana es: ".date("w")." (w)<br><br>";

echo "9. El n&uacute;mero del d&iacute;a del a&ntilde;o ".date("Y")." es: ".date("z")."<br><br>";

echo "10. La hora en 24h y con ceros delante es: ".date("H:i:s")."<br><br>";

echo "11. La hora en 24h y sin ceros delante es: ".date("G:i:s")."<br><br>";

echo "12. La hora en 12h y con ceros delante es: ".date("h:i:s")."<br><br>";

echo "13. La hora en 12h y sin ceros delante es: ".date("g:i:s")."<br><br>";

echo "<strong>Ejercicio 2 - Funci&oacute;n strftime()</strong><br><br>";

echo "Ejemplo 1: ".strftime("%A, %d de %B de %Y")."<br><br>";

echo "Ejemplo 2: ".strftime("%a %d de %m de %y")."<br><br>";

echo "Ejemplo 3: ".strftime("%A, %d de %b de %y")."<br><br>";

echo "Ejemplo 4: ".strftime("%H:%M:%S")."<br><br>";

echo "Ejemplo 5: ".strftime("%I:%M:%S")."<br><br>";

echo "Ejemplo 6: ".strftime("%c")."<br><br>";

echo "Ejemplo 7: ".strftime("%x")."<br><br>";

echo "Ejemplo 8: ".strftime("%X")."<br><br>";