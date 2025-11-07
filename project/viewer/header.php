<!DOCTYPE html>
<html lang="ro">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap" rel="stylesheet">
  <style>
    
    *{ 
      /*all the objects have no margins, so the header has no marging around it and it is full length*/
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header
    {
      background-color: #DFD3AD;
      color: #473821;
      padding: 15px;
      text-align: center;

      /*make the header have elements on each end*/
      display: flex;
      justify-content: space-between;
      align-items: center;

      /*make it not selectable*/
      user-select: none;       /* Standard */
    }

    div[name="logo"]
    {
      padding-left: 20px;
      font-size: 20px;
    }

    h1
    {
      font-family: 'Emilys Candy', cursive;
    }
    
    .motto
    {
      font-size: 15px;
    }

    div[name="options"]
    {
      padding-right: 20px;
    }

    button
    {
      background-color: #AD8759;
      width: 100px;
      height: 40px;
      border: 0;
      border-radius: 20px;
      font-size: 15px;
    }

  </style>
</head>

<body>
  <header>

    <div name = "logo">
        <h1>BookVerse</h1>
        <p class = "motto">Where Stories Live</p>
    </div>

    <div name = "options">
      <button onclick="window.location.href='login.html'">Log in</button>
    </div>
    
  </header>
</body>