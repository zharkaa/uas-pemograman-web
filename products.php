<?php 
include 'db_conn.php';
session_start();

// Prepare and execute the SQL query
$query = "SELECT id, title, about, image FROM products ORDER BY id ASC";
$result = mysqli_query($conn, $query);

// Fetch the data and store it in an array
$cards = array();
while ($row = mysqli_fetch_assoc($result)) {
    $cards[] = $row;
}


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style/products.style.css" />
    <link rel="stylesheet" href="./style/footer.style.css" />
    <!-- <link rel="stylesheet" href="../style/style.css"> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Products</title>
  </head>
  <body>
    <div id="pd-nav">
      <div class="pd-cont">
        <nav>
          <ul class="pd-links">
            <li>
              <a href="./home.php">Home</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="s-container">
      <div id="search">
        <h1>List of Books</h1>
      </div>
    </div>

    <div class="card-container" id="cardContainer">
    <?php foreach ($cards as $card) : ?>
      <div class="card">
        <a>
          <img class="card-img" src="data:image/jpeg;base64,<?php echo base64_encode($card['image']); ?>" alt="" />
          <div class="card-info">
            <h2 class="card-title"><?php echo $card['title']; ?></h2>
            <p class="card-text"><?php echo $card['about']; ?></p>
          </div>
        </a>
      </div>
    <?php endforeach; ?>
    </div>

    <footer>
      <div class="footer">
        <div class="row">
          <a href=""><i class="fa-brands fa-facebook"></i></a>
          <a href=""><i class="fa-brands fa-instagram"></i></a>
          <a href=""><i class="fa-brands fa-youtube"></i></a>
          <a href=""><i class="fa-brands fa-twitter"></i></a>
        </div>
        <div class="row">
          <ul>
            <li>
              <a href="./pages/about.php">About Us</a>
            </li>
            <!-- <li>
              <a href="">Collection</a>
            </li> -->
            <li>
              <a href="#">Presentation</a>
            </li>
          </ul>
        </div>
        <div class="row">CopyRight &copy; 2023</div>
      </div>
    </footer>
    <script src="../js/products.js"></script>
  </body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>