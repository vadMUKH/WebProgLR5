<!DOCTYPE html>
<html>
<head>
	<title>МухамедьяровВА_ИП_ЛР3</title>
</head>
<body>
 <h1>Задание №3.6</h1>

 <h2>Вариант 18</h2>
Дан текст.<br>Определите, каких букв (строчных или прописных) в нем больше, и
преобразуйте следующим образом: <br>если больше прописных букв, чем строчных, то все
буквы преобразуются в прописные; <br>если больше строчных, то все буквы
преобразуются в строчные; если поровну и тех и других — текст остается без
изменения.
 <br><br>

  <FORM method="POST" action="s3-6p.php">
 Введите текст:  <INPUT type="text" name="gachi" size="60">

 <P> <INPUT type="submit" name="sostav" value="Преобразовать">
</FORM>

 	<h2>Вариант 21</h2>
Пользователь вводит слово и после нажатия кнопки получает зашифрованное.<br>
Шифрование осуществляется по следующей схеме: <br>после каждых трех символов в
слово вставляется буква "Е". <br>Например, зашифрованное слово "ИНФОРМАТИКА"
выглядит так "ИНФЕОРМЕАТИЕКА". 
 <br><br>
  <FORM method="POST" action="s3-6p.php">
 Введите слово:  <INPUT type="text" name="word" size="10">
 <br>
 <P> <INPUT type="submit" name="inscript" value="Зашифровать">
</FORM>

<h2>Вариант 24</h2>
Пользователем задается произвольный текст и два числовых значения a, b. Сделать функцию,<br>
которая будет перепечатывать заданный текст так, чтобы каждые n-предложений
выводились в <р>..</р>, где n- постоянно меняющееся число от a до b.<br> Результат
показывать в html виде, чтобы было видно форматирование. 
 <br><br>
 <FORM method="POST" action="s3-6p.php">
 Введите текст:  <INPUT type="text" name="text" size="90">
 <br>
  Введите A:  <INPUT type="text" name="a" size="10">
  <br>
   Введите B:  <INPUT type="text" name="b" size="10">
 <P> <INPUT type="submit" name="format" value="Форматировать">
</FORM>

</body>
</html>