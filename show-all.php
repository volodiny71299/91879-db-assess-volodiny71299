<?php include "head.php";
        
$showall_sql="SELECT *
FROM `2020_L1_assess_food_review`
ORDER BY `2020_L1_assess_food_review`.`Name` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>

        <div class="box main">
            <h2>All Items</h2>
        <?php
            
        if ($count<1)
                
            {
                
                ?>
            
            <div class="error">
                Sorry! There are no results that match your search. Please use the search 
            </div>
                
                <?php
            
            } // end count 'if'
            
            // if there are no results, output and error
            else {
                
                do {
                    
                ?>
            
            <!-- Results go here -->
            <div class="results">

                <p>Dish name: <span class="sub_heading"><?php echo $showall_rs['Name']; ?></span></p>

                <p>Dish type: <span class="sub_heading"><?php echo $showall_rs['Meal']; ?></span></p>
                
                <p>Rating: <span class="sub_heading">
                
                    <?php
                    
                    for ($x=0; $x < $showall_rs['Rating']; $x++)

                    {
                        echo "&#9733;";
                    }
                    
                    ?>
                    </span></p>
                
                <p>Location: <span class="sub_heading"><?php echo $showall_rs['Location']; ?></span></p>
                
                <p>
                    <?php echo $showall_rs['Review']; ?> <u><?php echo $showall_rs['Vegetarian']; ?></u>
                </p>
            
                
            </div>
                
                <br>
            
            <?php
            
                } // end of 'do'
                
                while($showall_rs=mysqli_fetch_assoc($showall_query));
                
            } // end else
            
            
            // if there are results, display them
            
            
            ?>
            
            
        </div>    <!-- end of main -->
        
        <?php include "side.php";?>

        <?php include "footer.php";?>
