<div class="container">
        <h1 class="mt-4 mb-3">Articles</h1>
        
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
        $sql = 'SELECT COUNT (*) FROM pages;';
        
        
        
        $stmt = $dbc->query($sql);//execute the query
        
        //Get the first column from the first row in result set
        $cnt = $stmt->fetchColumn();
        
        //4. Display total number of categories
        echo "<h2>Total Articles: $cnt</h2>";
        
        //5. Build the SQL Query to retrieve all categories
        $q= "Select id, title, description FROM pages;";
        
        //6. Execute the query 
        $stmt = $dbc->query($q);
        
        //7. Fetch all the records from the statement above
        $article_list = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        //8. Loop and display the article pages in html table 
        //start table
        echo "<table class='table table-striped table-bordered'>
            <thead class='thead-dark'>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>description</th>
            </tr>
            </thead>
            <tbody>";
        foreach($article_list as $row){
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['description']}</td>
                 </tr>";
        }
            
        ?>
</div>