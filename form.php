<?php
$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') 
{        
  if(!isset($_POST['firstname']) || (empty(trim($_POST['firstname'])))) 
    $errors[] = "Firstname is required";
  if(!isset($_POST['lastname']) || (empty(trim($_POST['lastname'])))) 
    $errors[] = "Lastname is required";
  if(!isset($_POST['phone']) || (empty(trim($_POST['phone'])))) 
    $errors[] = "Phone is required";
  if(!isset($_POST['message']) || (empty(trim($_POST['message'])))) 
    $errors[] = "Message is required";
  if(!isset(($_POST['email'])) || (empty(trim($_POST['email'])))) 
    $errors[] = "Email is required";
  if (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL))
    $errors[] = "Email is not valid";

  if(empty($errors)) 
{
    header('Location: thanks.php');
}
}        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>

<?php if(count($errors) > 0) : ?>
    <div>
      <ul>
        <?php foreach ($errors as $error) : ?>
        <li><?= $error ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
<?php endif; ?>


<form method="post">
<div>
    <label  for="lastname">Lastname :</label>
      <input  type="text"  id="lastname"  name="lastname" required>
    </div>
    <div>
      <label  for="firstname">Firstname :</label>
      <input  type="text"  id="firstname"  name="firstname" required>
    </div>    
    <div>
      <label  for="email">Email :</label>
        <input  type="text"  id="email"  name="email" required>
    </div>
    <div>
      <label  for="phone">Phone :</label>
      <input  type="text"  id="phone"  name="phone" required>
    </div> 
    <div>
            <label for="subject">Subject</label>
            <select name="subject" id="subject" required>
                <option value="choose-your-subject"></option>
                <option value="php">PHP</option>
                <option value="java">JAVA</option>
                <option value="python">Python</option>
            </select>
        </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="message" id="message" required></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Submit</button>
    </div>

  </form>
 
</body>
</html>