<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>BookVerse</title>
  <link href="https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap" rel="stylesheet">
  <style>

    main
    {
      background-color: #fff6deff;
      display: flex;
      justify-content: center;
      gap: 15px;
      width: 100%;
    }

    /* The both columns */
    .content
    {
      background-color: transparent;
    }

    /* The left column */
    .recomandations
    {
      width: 700px;
      color: #473821;
    }

    .message
    {
      margin-top: 20px;
      margin-bottom: 20px;
      font-family: 'Emilys Candy', cursive;
      font-size: 27px;
      text-align: center;
      width: 100%;
    }

    .questions
    {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      font-size: 13px;
      margin-bottom: 20px;
    }

    .books_recom
    {
      display: flex;
      gap: 10px;
      align-items: center;
      justify-content: center;
      background-color: #DFD3AD;
      border-radius:  10px;
      padding: 15px;
      margin-bottom: 20px;
    }

    img
    {
      width: 150px;
      height: 230px;
      object-fit: cover;
    }
    
    /* The right column */
    .news
    {
      width: 410px;
      color: #473821;
    }

    .search
    {
      margin-bottom: 20px;
      margin-top: 20px;
      border-radius: 10px;
      background-color: #DFD3AD;
      padding: 10px;
      padding-bottom: 20px;
    }

    .search-bar
    {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 5px;
      margin-bottom: 15px;
      margin-top: 10px;
      text-align: center;
    }

    .search-bar input[type="text"]
    {
      flex: 1;
      height: 30px;
      border: 0px;
      border-radius: 15px;
      padding: 15px;
    }

    button[name="search_button"]
    {
      flex: 0 0 70px;
      height: 30px;
      border: 0;
      border-radius: 15px;
      background-color: #AD8759
    }

    .genre_search
    {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      gap: 15px;
      font-size: 12px;
    }

    .author_program
    {
      padding-left: 10px;
    }

    button[class="author_program_info"]
    {
      height: 30px;
      width: 40%;
      border: 0;
      border-radius: 15px;
      background-color: #AD8759;
      font-size: 15px;
    }

  </style>
</head>

<body>

  <?php include('viewer/header.php'); ?>

  <main>
    <div class = "content recomandations">
      <div class = "message">
        <h2>FIND YOUR NEW LITERARY ADVENTURE ON BOOKVERSE!</h2>
      </div>

      <div class = "questions">
        <div style = "width: 50%">
          <h2>Looking for your next great read?</h2>
          <p>
            You've come to the right place. Explore new stories, timeless classics, and hidden gems 
            tailored to your taste. Whether you're into fantasy realms, heartwarming romances, or gripping mysteries — 
            BookVerse helps you discover books you'll truly love.
          </p>
        </div>

        <div style = "width: 50%">
          <h2>Curious what others are reading?</h2>
          <p>
            Join our community of passionate readers! See what your friends are exploring, 
            share your thoughts, and build your own literary universe one page at a time.
          </p>
        </div>
      </div>

      <h2>BEST CLASSICS OF THIS MONTH</h2>
      <div class = "books_recom">
        <img src="images/pride_and_prejudice_jane_austen.jpg">
        <img src="images/les_miserables_victor_hugo.png">
        <img src="images/crime_and_punishment_fyodor_dostoevsky.jpg">
        <img src="images/anna_karenina_leo_tolstoy.jpg">
      </div>

      <h2>NEW BOOKS</h2>
      <div class = "books_recom">
        <img src="images/a_court_of_thorns_and_roses_sarah_j_maas.jpg">
        <img src="images/the_housemaid_freida_mcfadden.jpg">
        <img src="images/follow_me_to_the_ground_sue_rainsford.jpg">
        <img src="images/orwells_roses_rebecca_solnit.jpg">
      </div>

    </div>

    <div class = "content news">
      <div class = "search">
        <form action="searchController.php" method="GET" class="search-bar">
          <input type="text" name="search_input" placeholder="Search for a book or author..." required>
          <button name = "search_button" type="submit">Search</button>
        </form>

        <h5 style = "margin-left: 10px; margin-bottom: 10px;">SEARCH BY GENRE</h5>
        <div class = "genre_search">
          <div>
            Art<br>
            Biography<br>
            Business<br>
            Children's<br>
            Christian<br>
            Classics<br>
            Comics<br>
            Cookbooks<br>
          </div>
          <div>
            Ebooks<br>
            Fantasy<br>
            Fiction<br>
            Graphic Novels<br>
            Historical Fiction<br>
            History<br>
            Horror<br>
            Memoir<br>
          </div>
          <div>
            Music<br>
            Mystery<br>
            Nonfiction<br>
            Poetry<br>
            Psychology<br>
            Romance<br>
            Science<br>
            Science Fiction<br>
          </div>
          <div>
            Self Help<br>
            Sports<br>
            Thriller<br>
            Travel<br>
            Young Adult<br>
            More genres<br>
          </div>
        </div>
      </div>

      <div class = "author_program">
        <h3> Are you an author? </h3>
        <p style = "margin-bottom: 10px;">
          Step into BookVerse, where words travel far and stories never fade.
          Let your books reach the hearts of readers everywhere.
        </p>
        <div style = "display: flex; align-items: center; justify-content: flex-start; gap: 10px;">
          <button class = "author_program_info"> Author program</button>
          <button class = "author_program_info"> More information</button>
        </div>
        
      </div>

      <div>
      </div>
      
    </div>

  </main>

  <?php include('viewer/footer.php'); ?>

</body>
</html>