<?php
	include "lib.inc.php";
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Saytın şablonu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <table width="100%" border="1">

        <tr>
            <td colspan="2" align="center">
                <!-- Səhifənin yuxarı hissəsi -->
                <?php
			include "top.inc.php";
		?>
            </td>
        </tr>

        <tr>
            <td width="20%" valign="top">
                <!-- Menyu -->
                <?php
			include "menu.inc.php";
		?>
            </td>
            <td>
                <!-- Əsas məzmunun sahəsi -->
                <?php
				$id = isset($_GET['id']) ? $_GET['id'] : '';

			// Switch konstruksiyası ilə müvafiq səhifənin məlumatını ekrana çıxardırıq
			switch ($id) {
			case '1':
				echo 'Bu 1-ci səhifədir';
				break;
			case '2':
				echo 'Bu 2-ci səhifədir';
				break;
			case '3':
				echo 'Bu 3-cü səhifədir';
				break;
			default:
				echo 'Belə bir səhifə mövcud deyil';
				break;
			}
		?>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <!-- Səhifənin aşağı hissəsi -->
                <?php
			include "bottom.inc.php";
		?>
            </td>
        </tr>
    </table>

</body>

</html>