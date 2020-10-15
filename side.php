        <div class="box side"> <!-- start of side bar -->
            
            <h2>Search | <a class="side" href="show-all.php">Show all</a></h2>
            
            <hr />
            <p>Side bar goes here</p>
            
            
            <!-- Start of name search -->
            <form method="post" action="name-search.php" enctype="multipart/form-data" >
    
                <input class="search" type="text" name="name" size="40" value="" required placeholder="Dish name..." />
                
                <input class="submit" type="submit" name="find_name" value="&#128269;"/>
                
            </form>
            <!-- End of name search -->
            
            <br>
            
            
            <form method="post" action="type-search.php" enctype="multipart/form-data">
                
                <select name="meal">
                    <option value="Dessert">Dessert</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Lunch" selected>Lunch</option>
                    <option value="Breakfast">Breakfast</option>
                </select>
            
            <input class="submit" type="submit" name="find_meal" value="&#128269;" />

            </form>
            
            
            
            
            
        </div> <!-- end of side bar -->