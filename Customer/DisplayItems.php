 <HTML>

 <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>

 <body>
     <form>
         <div class="card-columns">
             <?php
                $mc = $_POST['suggest'];
                $con = mysqli_connect("localhost", "root", "", "foodorder");
                $qry = 'select * from food_category where CatId= ' . $mc;
                $run = mysqli_query($con, $qry);
                while ($rows = mysqli_fetch_array($run)) {
                    echo '<div class="card" >';
                    echo '<p class="card-text">' . $rows['ItemId'] . '</p>';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">' . $rows['CategoryName'] . '</p>';
                    echo '<p class="card-text">' . $rows['ItemName'] . '</p>';
                    echo '<p class="card-text">Rs.' . $rows['Price'] . '</p>';
                    $key = $rows["ItemId"];
                    echo "<a href='AddToCart.php?ItemID=$key'><button type='button' class='btn btn-primary'>Add Cart</button></a>";
                    echo '</div></div>';
                }
                ?>
         </div>
     </form>
 </body>

 </HTML>