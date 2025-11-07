<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    
    *{ 
      /*all the objects have no margins, so the header has no marging around it and it is full length*/
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    footer
    {
      background-color: #DFD3AD;
      color: #473821;
      padding: 15px;
      text-align: center;

      /*make the header have elements on each end*/
      justify-content: space-between;
      align-items: center;

      /*make it not selectable*/
      user-select: none;       /* Standard */
    }

    .columns
    {
      /*make the header have elements on each end*/
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

  </style>
</head>

<body>
    <footer>
        <div class = "columns">
          <div name = "about_us">
            <p>ABOUT US</p>
            <P>Terms</p>
            <p>Help</p>
          </div>

          <div name = "social-buttons">
            <p>CONNECT</p>
            <P>Facebook</p>
            <p>Instagram</p>
          </div>

        </div>
        &copy; 2025 BookVerse. All rights reserved.
    </footer>
</body>
 