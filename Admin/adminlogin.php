 <HTML>

 <head>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script>
         $(document).ready(function() {
             $("#newCat").click(function() {
                 $("#contents").load("AddCategory.html");
             });
             $("#newItem").click(function() {
                 $("#contents").load("AddMenuItem.php");
             });
             $("#DelCat").click(function() {
                 $("#contents").load("DeleteCategory.php");
             });
             $("#ModifyItem").click(function() {
                 $("#contents").load("ModifyItem.php");
             });

             $("#View").click(function() {
                 $("#contents").load("View.php");
             });

         });
     </script>
 </head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <BODY>
     <div class="container" style="background-color:#d9eef1;">
         <div class="row" style="height: 5%;background-color:#d9eef1; padding:40px;">
             <div class="col-12"></div>

         </div>
         <div class="row" style="height: 5%;background-color:#40c4a7; color:#ffffff;">
             <div class="col-10">
                 <h3>Food Order</h3>
             </div>
             <div class="col-2"><a href="logout.php">Log Out <?php session_start();
                                                                echo $_SESSION['Uname']; ?></a></div>
         </div>



         <div class="row" style="margin:25px;height:90%;">
             <div class="shadow-sm p-3 mb-5 bg-white rounded">
                 <div class="col-4" style="background-color:#ffffff; padding:40px; border-color:#d9eef1; margin:10px;"></div>
                 <ul class="list-group">
                     <div class="list-group-item list-group-item-info"><a id="newCat" href="#"> Create Food Category</a></div>
                     <div class="list-group-item list-group-item-info"><a id="newItem" href="#"> Add Food Item</a></div>
                     <div class="list-group-item list-group-item-info"><a id="DelCat" href="#"> Delete Food Category</a></div>
                     <div class="list-group-item list-group-item-info"><a id="ModifyItem" href="#"> Modify Food Item</a></div>
                     <div class="list-group-item list-group-item-info"><a id="View" href="#">View Food Count List</a></div>
             </div>

             <div class="col-8 shadow p-3 mb-5 bg-white rounded">
                 <div class="col-8" id="contents" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;">
                 </div>
             </div>

         </div>
     </div>


     </div>
 </BODY>

 </HTML>