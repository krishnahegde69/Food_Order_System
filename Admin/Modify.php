 <HTML>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <BODY>
     <div class="container" style="background-color:#E6D3F2;">
         <div class="row" style="height: 5%; background-color:#D193F7; padding:40px;">
             <div class="col-12"></div>

         </div>
         <div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
             <div class="col-8">
                 <h3>Food Order</h3>
             </div>
             <!-- <div class="col-2"><a href="HomePage.html">LogIn to Order</a></div> -->
             <div class="col-2"><a href="logout.php">Log Out <?php session_start();
                                                                echo $_SESSION['Uname']; ?></a></div>
         </div>
         <div class="row" style="height: 20%; ">
             <div class="col-12"></div>

         </div>
         <span class="align-middle">
             <div class="row">
                 <div class="col">

                 </div>
                 <?php
                    $con = mysqli_connect("localhost", "root", "", "foodorder");
                    $id = $_GET["key"];
                    $qry = "select * from fooditem where ItemId=$id";
                    $run = mysqli_query($con, $qry);
                    while ($rows = mysqli_fetch_array($run)) {
                    ?>

                     <div class="colcol-lg-2" style="background-color:#ffffff; padding:40px; border-color:#230237; border-style: solid;border-width: thin;">
                         <form method="POST" action="UpdateItem.php">
                             <div class="form-group">
                                 <label for="exampleInputName">Item ID</label>
                                 <input type="string" class="form-control" id="username" aria-describedby="emailHelp" name="ItemId" value=<?php echo $rows['ItemId']; ?>>
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Item Neme</label>
                                 <input type="string" class="form-control" id="exampleInputPassword1" placeholder="Item Name" name="ItemName" value=<?php echo $rows['ItemName']; ?>>

                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Price</label>
                                 <input type="string" class="form-control" id="exampleInputPassword1" placeholder="Price" name="Price" value=<?php echo $rows['Price']; ?>>

                             </div>
                             <button type="submit" class="btn btn-primary">Update Item</button>
                         </form>
                     </div>
                 <?php } ?>
                 <div class="col -md-auto">

                 </div>
             </div>
         </span>
         <div class="row" style="height: 20%; ">
             <div class="col-12"></div>

         </div>
     </div>
 </BODY>

 </HTML>