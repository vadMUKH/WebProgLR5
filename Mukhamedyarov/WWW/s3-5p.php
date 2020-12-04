<?
$sum=0;
if ($_POST["1"]=="No"){$sum+=1;}
if ($_POST["2"]=="No"){$sum+=1;}
if ($_POST["4"]=="No"){$sum+=1;}
if ($_POST["5"]=="No"){$sum+=1;}
if ($_POST["6"]=="No"){$sum+=1;}
if ($_POST["7"]=="No"){$sum+=1;}
if ($_POST["8"]=="No"){$sum+=1;}
if ($_POST["11"]=="No"){$sum+=1;}
if ($_POST["12"]=="No"){$sum+=1;}
if ($_POST["15"]=="No"){$sum+=1;}
if ($_POST["16"]=="No"){$sum+=1;}
if ($_POST["17"]=="No"){$sum+=1;}
if ($_POST["18"]=="No"){$sum+=1;}
if ($_POST["20"]=="No"){$sum+=1;}

if ($_POST["3"]=="Yes"){$sum+=1;}
if ($_POST["9"]=="Yes"){$sum+=1;}
if ($_POST["10"]=="Yes"){$sum+=1;}
if ($_POST["13"]=="Yes"){$sum+=1;}
if ($_POST["14"]=="Yes"){$sum+=1;}
if ($_POST["19"]=="Yes"){$sum+=1;}

if($sum>15){
	echo $_POST["yourname"].", у Вас покладистый характер";
}
if($sum<=15 && $sum>8){
	echo $_POST["yourname"].", вы не лишены недостатков, но с вами можно ладить";
}
if($sum<=8){
	echo $_POST["yourname"].", вашим друзьям можно посочувствовать";
}
?> 

