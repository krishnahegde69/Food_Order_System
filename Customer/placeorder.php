 <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>
 <style>
     /* Chrome, Safari, Edge, Opera */
     .arrow-hidden::-webkit-outer-spin-button,
     .arrow-hidden::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0;
     }

     /* Firefox */
     input[type=number].arrow-hidden {
         -moz-appearance: textfield;
     }
 </style>
 <form method="POST" action="SaveBill.php">
     <table border="1" align="center">
         <tr>
             <th>Item ID</th>
             <th>Item Name</th>
             <th>Quantity</th>
             <th>Price</th>
             <th>Amount</th>
         </tr><?php
                session_start();
                $con = mysqli_connect("localhost", "root", "", "foodorder");
                $i = 1;
                if (isset($_SESSION['cart'])) {
                    $tt = explode(",", substr($_SESSION['cart'], 1));
                    $items_quantity = array();
                    foreach ($tt as $item) {
                        if (isset($items_quantity[$item]))
                            $items_quantity[$item] = $items_quantity[$item] + 1;
                        else
                            $items_quantity[$item] = 1;
                    }
                    $_SESSION['items_with_quantity'] = $items_quantity;
                    foreach ($items_quantity as $key => $value) {
                        $qry = 'select * from fooditem where ItemId=' . $key;
                        $run = mysqli_query($con, $qry);
                        if ($run)
                            while ($rows = mysqli_fetch_array($run)) {
                                if ($i % 2 == 0) {
                                    echo "<tr bgcolor='#94cfc2'><td>";
                                } else {
                                    echo "<tr bgcolor='#94cfc2'><td>";
                                }
                                $i++;
                                echo $rows["ItemId"];
                                echo "</td>";
                                echo "<td>";
                                echo $rows["ItemName"];
                                echo "</td>";
                                echo "<td>";
                                echo "<input type='number'  name='Quantity[]' value='$value' size=5 style='text-align: center;'";
                                echo "</td>";
                                echo "<td>";
                                echo '<input type="number" class="arrow-hidden" name="Price[]" value="' . $rows["Price"] . '" size=5 style="text-align: center;" disabled';
                                echo "</td>";
                                echo "<td>";
                                echo $rows["Price"] * $value;
                                echo "</td>";
                                echo "<td>";
                            }
                    }
                }
                ?>
     </table><select class="form-select" name="PaymentMode">
         <option value=" Cash">Cash</option>
         <option value="DebitCard">DebitCard</option>
         <option value="UPI">UPI</option>
     </select><br><br>
     <center><input type="submit" class="btn btn-outline-success" Value="Place Order"></button></center>
 </form>