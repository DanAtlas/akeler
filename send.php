<?php 
  if($_POST) {
    $last_name = $_POST['lastName'];
    $first_name = $_POST['name'];
    $middle_name = $_POST['middleName'];
    $job = $_POST['job'];
    $job_title = $_POST['jobTitle'];
    $city = $_POST['city'];
    $phone = $_POST['tel'];
    $email = $_POST['email'];

    $to = "$email";
    $from = "info@akeler.kz";

    $subject= '=?utf-8?B?' . base64_encode($subject_text) . '?=';
    
    
    $subject = "Cпасибо за регистрацию!";
          
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
      show_error("<br /> Е-mail адрес не существует");
    }
          
    $mail_to_myemail = "Тегі/Фамилия: $last_name\nАты/Имя: $first_name\nӘкесінің аты/Отчество: $middle_name\nЖұмыс орны/Место работы: $job\nЛауазымы/Должность: $job_title\nҚала/Город: $city\nНомер телефона: $phone\nE-mail: $email";  
    
    $headers = "From: $from \r\n";
          
    mail($to, $subject, $mail_to_myemail, $headers . 'Content-type: text/plain; charset=utf-8');
    // header( "Location: https://akeler.kz/thankyou.html" );
  }
?>