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
</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
  <? include ("blocks/header.php");?>
  <tr>
    <td valign="top"><table width="98%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       <? include ("blocks/lefttd.php");?> 
        <td width="495" align="left" valign="top" bgcolor="#FFFFFF"><form id="form1" name="form1" method="post" action="">
          <label></label>
          <p>
            <label>
            <div align="left">
              <blockquote>
                <p><br />
                <br />
                    <br />
                  
                    <input type="text" name="textfield" id="textfield" />
                  Имя и Фамилия<br />
                  <br />
                  <input type="text" name="textfield4" id="textfield4" />
                  Товар или название абонемента<br />
                  <br />
                  <input type="text" name="textfield5" id="textfield5" />
                  Возраст<br />
                  <br />
                  <input type="text" name="textfield6" id="textfield6" />
                  Цена товара или услуги<br />                                             
                  <br />
                  <input type="text" name="textfield2" id="textfield2" />
                  Контактные данные<br />
                  <br />
                  <input type="text" name="textfield3" id="textfield3" />
                  Способ оплаты
                  <br />
                  <br />
                  <input type="text" name="textfield7" id="textfield7" />
                  Номер счета киви или карты если имеется
                  <br />
                  
            <form>
<input name="Отправить" type="submit" onClick='location.href="finish.php"' value="Зарегистрироваться и купить товар">
</form>
                 
                  </div>
                  </p>
              </blockquote>
            </div>
            </label>
          </p>
          <label></label>
          <label></label>
        </form>        </td>
      </tr>
    </table></td>
  </tr>
  <? include ("blocks/footer.php");?>
</table>
</body>
</html>
