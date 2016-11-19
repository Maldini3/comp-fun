<td width="182" valign="top" class="left">

<p>
<p align="center" class="title">Меню</p>
<div id="coolmenu">
<a href="index1.php" class="nav_link"<a>Главная</a>
<a href="training.php" class="nav_link">Тренировки</a>
<a href="dream.php" class="nav_link">Режим сна</a>
<a href="music.php" class="nav_link">Музыка</a>
<a href="info.php" class="nav_link">О нас</a>
<a href="registration.php" class="nav_link">Регистрация</a>
<a href="shop.php" class="nav_link">Cпортивная атрибутика</a>
</div>	

</p>

<div class="nav_title">Абонементы</div>
<?
 $result2 = mysql_query("SELECT * FROM categories",$db);

if (!$result2)
{
echo "<p>Çàïðîñ íà âûáîðêó äàííûõ èç áàçû íå ïðîøåë. Íàïèøèòå îá ýòîì àäìèíèñòðàòîðó admin@ruseller.com. <br> <strong>Êîä îøèáêè:</strong></p>";
exit(mysql_error());
}

if (mysql_num_rows($result2) > 0)

{
$myrow2 = mysql_fetch_array($result2);


do 
{
printf ("<p><a class='nav_link' href='view_cat.php?cat=%s'>%s</a></p>",$myrow2["id"],$myrow2["title"]);



}
while ($myrow2 = mysql_fetch_array($result2));



 
}

else
{
echo "<p>Èíôîðìàöèÿ ïî çàïðîñó íå ìîæåò áûòü èçâëå÷åíà â òàáëèöå íåò çàïèñåé.</p>";
exit();
}


 ?>
</td>