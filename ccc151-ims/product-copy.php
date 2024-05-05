<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="main-style.css">
    </head>
    <body>
    <div class="page-header">
            <div class="notif-bell"><i class='bx bx-bell'>&nbsp;</i></div>
            <div class="logo"><img src="media/mr.png" height="40" width="180"></div>
        </div> 
        <div class="sidenav">
            <h1>Inventory Management System</h1>
            <div class="panel-profile">
                <img src="media/profile.png" alt="img" height="300" width="300">
                </div>
            <div class="nav-text">
                <a href="#"><i class='bx bx-bar-chart-alt-2'></i>&nbsp;Dashboard</a>
                <a href="#"><i class='bx bx-category-alt'>&nbsp;Products List</i></a>
                <a href="#"><i class='bx bx-group'></i>&nbsp;Supplier List</i></a>
                <a href="#"><i class='bx bx-cart'></i>&nbsp;Order/Purchase</i></a>
            </div>
          </div>
        
        <div class="table">
            <div class="table-header">
            </div>
        
            <div class="buttons">
                <button class="to-order-btn">View <span style="color:#F36A1C;"><em> to reoder</em></span> items <i class='bx bx-cart'></i></button></button> 
                <button class="to-dispose-btn">View <span style="color: red;"><em>to dispose</em></span> items <i class='bx bx-trash'></i>&nbsp;</button></button>
                <button class="to-discont-btn">To <span style="color: #574F4F;" ><em><b>discontinue </b><i class='bx bx-x-circle'></i>&nbsp;</em></span></button></button>   
            </div>
            <button class="create-new" id="create-new"><i class='bx bx-plus'></i>&nbsp;Create New Product</button>

            <div class="popup-create">
                <div class="close-btn">&times;</div>
                    
            </div> 
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button class="search-btn"><i class='bx bx-search'></i></button>
            </div>
            <div class="table-section">
                <table>
                    <thead>
                        <tr>
                            <th>SKU</th>
                            <th>Product Name</th>
                            <th>QTY</th>
                            <th>Shelf Life</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $db_name = "ims-db";    

                            $connection = new mysqli($servername, $username, $password, $db_name);

                            //create connection
                            if ($connection->connect_error){
                                die("Conneciton failed: " .$connection->connect_error);
                            }
                            
                            //read data from database table
                            $sql = "SELECT * FROM `products`";
                            $result = $connection->query($sql);

                            if (!$result){
                                die("Invalid query: " .$connection->error);
                            }

                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                    <td>" . $row["sku"] . "</td>
                                    <td>" . $row["product_name"] . "</td>
                                    <td>" . $row["qty"] . "</td>
                                    <td>" . $row["shelf_life"] . "</td>
                                    <td>
                                    <button><i class='bx bx-cart'></i></button>
                                    <button><i class='bx bx-trash'></i></button>
                                    <button><i class='bx bx-x-circle'></i></button>
                                </td>
                            </tr>";
                            }

                        ?>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
        <script src="script.js"></script>
    </body>
    
</html>