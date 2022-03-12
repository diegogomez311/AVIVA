<?php 
if(isset($_POST['name'])){
  if(!empty($_POST['mame']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['msg'])){
    $name = $_POST['name'];
    $name = $_POST['email'];
    $name = $_POST['asunto'];
    $name = $_POST['msg'];
    $header = "From: diego.zagga@gmail.com" . "\r\n";
    $header. = "Reply-To: diego.zagga@gmail.com" . "\r\n";
    $header. = "X-mailer: PHP/". phpversion();
    $mail = mail($email,$asunto, $msg, $header);
    if ($mail) {
      echo "<h4>Mail enviado exitosamente</h4>"
    }
  }
}

?>