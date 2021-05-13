<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>MVM  PHP contact form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spartan">

    <style>
        body {
            font-family: 'Spartan', serif;
            font-size: 18px;
            font-weight: 500;
            color: #0b5082;
        }

        button {
            font-family: 'Spartan', serif;
            font-size: 18px;
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <main>
        
        <form class="contact-form" action="send-email.php" method="post">
            <label for="fname">Full Name</label>
            <input type="text" id="fname" name="name" placeholder="Full name">

            <label for="email">Your Email</label>
            <input type="text" id="email" name="mail" placeholder="Your E-mail">

            <label for="pnumber">Phone Number</label>
            <input type="text" id="pnumber" name="number" placeholder="Your Phone Number">

            <label for="sub">Subject</label>
            <input type="text" id="sub" name="subject" placeholder="Subject">

            <label for="msg">Message</label>
            <textarea name="message" id="msg" placeholder="Your Message"></textarea>

            <button class="button" type="submit" name="submit">
                <span class="material-icons">send</span>
                <sup class = button-font>Send</sup>
            </button>



        </form>


    </main>

</body>




</html>