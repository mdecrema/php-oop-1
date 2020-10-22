<?php

class User {
  public $name;
  public $lastname;
  public $eta;
  public $username;
  public $email;
  public $password;

  public function __constructor($_name, $_lastname, $_eta, $_username, $_email, $_password) {
    $this->$_name;
    $this->$_lastname;
    $this->$_eta;
    $this->$_username;
    $this->$_email;
    $this->$_password;
  }

  $utente1 = new User("Paolo","Rossi","45", "pr45","p.rossi@virgilio.it","pr0001#");
  $utente2 = new User("Mario","Bianchi","38", "mb38","m.bianchi@gmail.com","mb0002#");
  $utente3 = new User("Luca","Verdi","26", "lv26","l.verdi@outlook.com","lv0003#");

}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OOP - 1</title>
  </head>
  <body>

    <h1>TABELLA DATI</h1>

    <tr>
      <th>NOME</th>
      <th>COGNOME</th>
      <th>USERNAME</th>
      <th>MAIL</th>
      <th>PASSWORD</th>

      <td><?php echo $utente1->$name ?></td>
      <td><?php echo $utente1->$lastname ?></td>
      <td><?php echo $utente1->$eta ?></td>
      <td><?php echo $utente1->$username ?></td>
    </tr>
  </body>
</html>
