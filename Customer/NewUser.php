 <HTML>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <BODY>
     <?php
        session_start();
        $_SESSION['cart'] = "";
        ?>
     <div class="container" style="background-color:#d9eef1;">
         <div class="row" style="height: 5%; background-color:#d9eef1; padding:40px;">
             <div class="col-12"></div>

         </div>
         <div class="row" style="height: 5%;background-color:#40c4a7; color:#ffffff;">
             <div class="col-8">
                 <h2>Food Order</h2>
             </div>
             <div class="col-2"><a href="HomePage.html">Log In to Order</a></div>
         </div>
         <div class="row" style="height: 10%; ">
             <div class="col-12"></div>

         </div>
         <span class="align-middle">
             <div class="row">
                 <div class="col">

                 </div>

                 <div class="colcol-lg-2" style="background-color:#ffffff; padding:40px; border-color:#230237; border-style: solid;border-width: thin;">
                     <form method="POST" Action="SaveUser.php">
                         <div class="form-group">
                             <label for="exampleInputPhone">UserId</label>
                             <input type="String" class="form-control" id="userid" placeholder=" User Id" name="userid">

                         </div>
                         <div class=" form-group">
                             <label for="exampleInputName">User Name</label>
                             <input type="string" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Your Name">

                         </div>
                         <div class="form-group">
                             <label for="exampleInputPassword1">Password</label>
                             <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                         </div>
                         <div class="form-group">
                             <label for="exampleInputPhone">Contact Number</label>
                             <input type="String" class="form-control" id="PhoneNo" placeholder=" Contact Number" name="phoneno">

                         </div>
                         <div class="form-group">
                             <label for="exampleInputemail">EmailID</label>
                             <input type="String" class="form-control" id="Email" placeholder=" Email ID" name="email">

                         </div>
                         <div class="form-group">
                             <label for="exampleInputPhone">Address</label>
                             <input type="String" class="form-control" id="DelAdd" placeholder=" Delivery Adderess" name="DeliAdd">

                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                 </div>
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