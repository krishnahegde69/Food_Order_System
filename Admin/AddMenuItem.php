 <HTML>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <BODY>
     <form method="POST" Action="SaveMenuItem.php">

         <div class="form-row align-items-center">
             <div class="col-auto my-1">
                 <label for="exampleInputName">Select Food category </label>
                 <select class="custom-select mr-sm-2" name="Category">
                     <option selected>Choose...</option>
                     <?php
                        $con = mysqli_connect("localhost", "root", "", "foodorder");
                        $qry = "select CatId, CategoryName from category";
                        $run = mysqli_query($con, $qry);
                        while ($rows = mysqli_fetch_array($run)) {

                            echo "<option value=" . $rows['CatId'] . ">" . $rows['CategoryName'] . "</option>";
                        }
                        ?>

                 </select>
             </div>
         </div>
         <div class="form-group">
             <label for="exampleInputName">Add Food Item </label>
             <input type="string" class="form-control" id="ItemName" name="ItemName" placeholder="New Food Item">

         </div>
         <div class="form-group">
             <label for="exampleInputName">Price</label>
             <input type="string" class="form-control" id="Price" name="Price" placeholder="Price">

         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
     </form>

 </BODY>

 </HTML>