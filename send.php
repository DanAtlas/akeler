<?php 
  if($_POST) {
    $first_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['tel'];

    $to = "$email";
    $from = "info@akeler.kz";

    $subject= '=?utf-8?B?' . base64_encode($subject_text) . '?=';
    
    
    $subject = "Новая заявка от $first_name";
          
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
    {
    show_error("<br /> Е-mail адрес не существует");
    }
          
    $mail_to_myemail = "Ф.И.О отправителя: $first_name\nE-mail: $email\nНомер телефона: $phone";  
    
    $headers = "From: $from \r\n";
          
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    // header( "Location: https://kazstroy.kz/thankyou.html" );
  }
?>