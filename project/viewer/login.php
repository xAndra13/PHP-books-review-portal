<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BookVerse | Login</title>

  <style>
    /** BEGIN TEMPLATE SECTION - EDIT CAREFULLY */
    body, html
    {
      /* This makes the header and the footer stick to top and bottom correctly */
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      /* This makes the space in between footer and header to be high enough to cover the entire page*/
      height: 100%;
    }

    main
    {
      flex: 1; /*Makes main to take up all the space left between footer and header */
    }
    /** END TEMPLATE SECTION */
    
    main
    {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;

      background-image: url("../images/books.jpeg");
      background-size: cover;       /* cover the entire main area */
      background-position: center;  /* center the image */
      background-repeat: no-repeat; /* don’t tile */
    }

    .container
    {
      background: linear-gradient(to bottom right, rgba(255,255,255,0.95), rgba(255, 246, 222, 0.95));
      height: 100%;
      width: 30%;
      border-radius: 20px;
      color: #473821;
      text-align: center;
      padding-top: 40px;
      padding-bottom: 40px;

      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .login_form{
      margin-bottom: 100px;
      margin-top: 50px;
    }

    input[type="text"]
    {
      width: 100%;
      padding: 14px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 1rem;
    }

    input[type="submit"]
    {
      width: 200px;
      height: 40px;
      border: 0;
      border-radius: 20px;
      font-size: 17px;
      background-color: #AD8759;
    }

    h4
    {
      margin-bottom: 20px;
    }

    .register_button
    {
      background-color: #AD8759;
      width: 150px;
      height: 40px;
      border: 0;
      border-radius: 20px;
      font-size: 15px;
    }

  </style>
</head>

<body>
  <?php include('header.php'); ?>

  <main>
    <div class = "container">
      <h1>Welcome to BookVerse!</h1>
      <p style = "margin-bottom:30px;">A world of stories at your fingertips.</p>

      <form action="../controller/loginController.php" method = "POST" class = "login_form">
        <h4>Join us to connect with stories that inspire!</h4>
        <input type="text" id="email" name="email" placeholder = "Email">
        <br>
        <input type="text" id="password" name="password" placeholder = "Password">
        <br><br>
        <input type="submit" value="Login">
      </form>

      <h4>No account? Start your journey in BookVerse!</h4>
      <button class = "register_button" onclick="window.location.href='register.php'">Register now</button>

    </div>
  </main>

  <?php include('footer.php'); ?>
</body>

</html>