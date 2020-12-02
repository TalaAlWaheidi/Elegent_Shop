<?php
include('includs/connection.php');
include('includs/header.php');
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Order list</h4>
                        <p class="card-category"> Check Out Details</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Products Name
                                    </th>
                                    <th>
                                        Products Price
                                    </th>
                                    <th>
                                        Products Sale
                                    </th>
                                    <th>
                                        Products Quantity
                                    </th>
                                    <th>
                                        Products Total
                                    </th>
                                    <th>
                                        Products Final Total
                                    </th>
                                    <th>
                                        User ID
                                    </th>
                                    <th>
                                        Date
                                    </th>
                                </thead>
                                <tbody>
                                <?php
                                 $query  = "select * from checkout";
                                 $result = mysqli_query($conn,$query);
                                 while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                        echo "<td>{$row['checkout_id']}</td>";
                                        echo "<td>{$row['products_name']}</td>";
                                        echo "<td>{$row['products_price']}</td>";
                                        echo "<td>{$row['products_sale']}</td>";
                                        echo "<td>{$row['product_quantity']}</td>";
                                        echo "<td>{$row['product_total']}</td>";
                                        echo "<td>{$row['product_final_total']}</td>";
                                        echo "<td>{$row['user_id']}</td>";
                                        echo "<td>{$row['date']}</td>";
                                        echo "</tr>";}
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includs/footer.php');
?>