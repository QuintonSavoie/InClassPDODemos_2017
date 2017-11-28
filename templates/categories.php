
<div class="container">
        <h1 class="mt-4 mb-3">Categories</h1>
        
        <!-- mwilliams:  breadcrumb navigation -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">About</li>            
        </ol>
        <?php
        //1. Get the configuration file (holds the connection info)
        require './includes/config.php';
        
        //2. connect to the database 
        require MYSQL;
        
        //3. Get the total  number of records in categories table
        $sql = 'SELECT COUNT (*) FROM categories';
        
        
        
        $stmt = $dbc->query($sql);//execute the query
        
        //Get the first column from the first row in result set
        $cnt = $stmt->fetchColumn();
        
        //4. Display total number of categories
        echo "<h2>Total Categories: $cnt</h2>";
        
        //5. Build the SQL Query to retrieve all categories
        $q= "Select id, category FROM categories ORDER BY 1";
        
        //6. Execute the query
        $stmt = $dbc->query($q);
        $category_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //Start the list
        echo "<ul>";
        //7. Loop the array and display in ul list
        foreach ($category_list as $row){
            echo "<li>".$row['id']." - ".$row['category']."</li>";
        }
        
        //End the list
        echo "</ul>";
        
        
        
        ?>

        
        
</div>