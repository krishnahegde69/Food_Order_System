<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<table class="table">
    <thead>
        <tr>
            <th>CategoryId</th>
            <th>CategoryName</th>
            <th>ItemCount</th>
            <!-- <th colspan=2 align="center">ACTION</th> -->
        </tr>
    </thead>
    <tbody>
        <?php
        $con = mysqli_connect("localhost", "root", "", "foodorder");
        $qry = 'CALL category_item_count()';
        $recset = mysqli_query($con, $qry);
        //var_dump($recset);
        while ($row = mysqli_fetch_array($recset)) {
            echo "<td>";
            echo $row["CatId"];
            echo "</td>";
            echo "<td>";
            echo $row["CategoryName"];

            echo "</td>";
            echo "<td>";
            echo $row["count"];

            echo "</td>";
            echo "</tr>";
            // echo "<script> alert('Not found');</script>";
            // echo "<script> window.location='adminLogin.php';</script>";
        }
        ?>
    </tbody>
</table>