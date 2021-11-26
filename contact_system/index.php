



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact System</title>
</head>
<body>
    <form action="contact.php" method="POST">
 <h1>Contact Us</h1>
    <div>
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">
    </div>

    <div>
        <label for="email">Your Email</label>
        <input type="text" id="email" name="email">
    </div>

    <div>
        <label for="message">Your Message</label>
        <textarea type="message" name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <div>
        <input type="submit" value="send">
    </div>

  

    </form>
   
    

</body>
</html>