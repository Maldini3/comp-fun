<? include ("blocks/bd.php");
$result=mysql_query ("SELECT title,meta_dec,meta_key,text FROM settings WHERE page='training'", $db);
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
<title><? echo $myrow ["title"];?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
<meta name="description" content="<? echo $myrow ["meta_dec"];?>" >
<meta name="keywords" content="<? echo $myrow ["meta_key"];?>" >


</head>

<body>
<table width="690" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
  <? include ("blocks/header.php");?>
  <tr>
    <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
       <? include ("blocks/lefttd.php");?> 
        <td align="left" valign="top"><p class="text_nav"> <p><img src="image/girl.jpg" width="280" height="234"></p><? echo $myrow ["text"];?></p>
          </td>
      </tr>
    </table></td>
  </tr>
  <? include ("blocks/footer.php");?>
</table>
</body>
</html>

