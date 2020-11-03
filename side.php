        <div class="box side"> <!-- start of side bar -->
            
            <h2>Search | <a class="side" href="show-all.php">Show all</a></h2>
            
            <hr />
            
            <!-- Start of name search -->
            <form method="post" action="name-search.php" enctype="multipart/form-data" >
    
                <input class="search" type="text" name="name" size="40" value="" required placeholder="Dish name..." />
                
                <input class="submit" type="submit" name="find_name" value="&#128269;"/>
                
            </form>
            <!-- End of name search -->
            
            <br>
            <h4>Meal type</h4>
            
            <!-- Start of meal-type search -->
            <form method="post" action="type-search.php" enctype="multipart/form-data">
                
                <select name="meal">
                    <option value="Dessert">Dessert</option>
                    <option value="Dinner">Dinner</option>
                    <option value="Lunch" selected>Lunch</option>
                    <option value="Breakfast">Breakfast</option>
                </select>
            
            <input class="submit" type="submit" name="find_meal" value="&#128269;" />

            </form>
            <!-- End of meal-type search -->
            
            <br>
            
            <!-- Start of rating search -->
            <form method="post" action="rating-search.php" enctype="multipart/form-data">
                <select class="half_width" name="amount">
                    <option value="exactly" selected>Exactly...</option>
                    <option value="more">At least...</option>
                    <option value="less">At most...</option>
                </select>
            
                <select class="half_width" name="stars">
                    <option value=5 selected>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=3>&#9733;&#9733;&#9733;</option>
                    <option value=2>&#9733;&#9733;</option>
                    <option value=1>&#9733;</option>
                </select>
                
                <input class="submit" type="submit" name="find_rating" value="&#128269;"/>
            
            </form>
            <!-- End of rating search -->
            
            
        </div> <!-- end of side bar -->