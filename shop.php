<? include ("blocks/bd.php");
$result=mysql_query ("SELECT title,meta_dec,meta_key,text FROM settings WHERE page='index'", $db);
if (!$result)
{
echo "<p>Запрос на выбор данных из базы не прошел успешно </p>";
exit(mysql_error());
}
if (mysql_num_rows($result)>0)
{$myrow=mysql_fetch_array($result);}
else 
{
echo "<p>Информация отсуствует</p>";
exit ();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title><? echo $myrow ["title"];?> </title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="description" content="<? echo $myrow ["meta_dec"];?>" >
<meta name="keywords" content="<? echo $myrow ["meta_key"];?>" >
<style type="text/css">
<!--
.стиль3 {font-size: 18px}
-->
</style></head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
  <? include ("blocks/header.php");?>
  <tr>
    <td valign="top"><table width="97%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       <? include ("blocks/lefttd.php");?> 
        <td width="489" align="left" valign="top"><div align="center">Товары для безопасного поддержания здоровья спортом.</div>
          <div align="center">
            <p><img src="товары/экипи для жима.jpg" width="188" height="191" /></p>
            <p>Экипировка для жима больших весов , специально для профессионалов и опытных атлетов данного вида спорта .</p>
            <p align="center">Цена : 7000 тенге</p>
            <form id="form1" name="form1" method="post" action="">
              <label>Размеры
                <select name="select" size="1" id="select">
                  <option>XXXL</option>
                  <option>XXL</option>
                  <option>XL</option>
                  <option>L</option>
                </select>
              </label>
              <form><input name="Отправить" type="submit" onClick='location.href="buy.php"' value="Купить">
</form>
                    <form>
<input name="Отправить" type="submit" onClick='location.href="registration.php"' value="Зарегистрироваться">
</form>
            </div>
                </label>
              </p>
            </form>
            <p align="center"><img src="товары/пояс.jpg" width="210" height="138" /> </p>
            <p align="center">&#1055;&#1086;&#1103;&#1089; &#1076;&#1083;&#1103; &#1087;&#1072;&#1091;&#1101;&#1088; &#1083;&#1080;&#1092;&#1090;&#1080;&#1085;&#1075;&#1072; &#1080; &#1088;&#1072;&#1073;&#1086;&#1090;&#1099; &#1089; &#1074;&#1077;&#1089;&#1072;&#1084;&#1080; &#1082;&#1086;&#1090;&#1086;&#1088;&#1099;&#1077; &#1084;&#1086;&#1075;&#1091;&#1090; &#1073;&#1099;&#1090;&#1100; &#1074;&#1088;&#1077;&#1076;&#1085;&#1099; &#1076;&#1083;&#1103; &#1074;&#1072;&#1096;&#1077;&#1081; &#1087;&#1086;&#1103;&#1089;&#1085;&#1080;&#1094;&#1099;.</p>
            <p align="center">Цена: 5000 тенге</p>
            <form id="form2" name="form2" method="post" action="">
              <label>Размеры
                <select name="select2" size="1" id="select2">
                  <option>XXXL</option>
                  <option>XXL</option>
                  <option>XL</option>
                  <option>L</option>
                </select>
                </label>
              <p>
                <label>
                <input type="submit" name="button3" id="button3" value="Купить" />
                </label>
                <label>
                <input type="submit" name="button4" id="button4" value="Зарегистрироваться" />
                </label>
              </p>
            </form>
            <p align="center">&nbsp;</p>
          </div></td>
      </tr>
    </table></td>
  </tr>
  <? include ("blocks/footer.php");?>
</table>
</body>
</html>
