<?php include "head.php";
     

// if find button pushed...
if(isset($_POST['find_vege']))
    
{
// Retrieves name and sanitises it.
$vegetarian = $_POST['vegetarian'];
    
$find_sql="SELECT * FROM `2020_L1_assess_food_review` WHERE `Vegetarian` LIKE '%$vegetarian%' ";
$find_query=mysqli_query($dbconnect, $find_sql);
$find_rs=mysqli_fetch_assoc($find_query);
$count=mysqli_num_rows($find_query);

?>

        <div class="box main">
            <h2>All Items</h2>
            <?php
            
            if ($count<1)

            {

                ?>
            
            <div class="error">
                Sorry! There are no results that match your search. Please use the search box in the sidebar to try again.
            </div>
                
                <?php
            
            } // end count 'if'
            
            // if there are no results, output and error
            else {
                
                do {
                    
                ?>
            
            <!-- Results go here -->
            <div class="results">

                <p>Dish name: <span class="sub_heading"><?php echo $find_rs['Name']; ?></span></p>

                <p>Dish type: <span class="sub_heading"><?php echo $find_rs['Meal']; ?></span></p>
                
                <p>Rating: <span class="sub_heading">
                    
                    <?php
                    
                    for ($x=0; $x < $find_rs['Rating']; $x++)

                    {
                        echo "&#9733;";
                    }
                    
                    ?>
                    </span></p>
                
                <p>
                    Vegetarian: <span class="sub_heading"><?php echo $find_rs['Vegetarian']; ?></span>
                </p>
                
                <p>Location: <span class="sub_heading"><?php echo $find_rs['Location']; ?></span></p>
                
                <p><?php echo $find_rs['Review']; ?> </p>
                
            
            </div>
                
                <br>
            
            <?php
            
                } // end of 'do'
                
                while($find_rs=mysqli_fetch_assoc($find_query));
                
            } // end else
            
            
            // if there are results, display them
            
    
            } // end isset
            
            ?>
            
            
        </div>    <!-- end of main -->
        
        <?php include "side.php";?>

        <?php include "footer.php";?>
