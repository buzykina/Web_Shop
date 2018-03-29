

<?php
	if (isset($_POST['searchbtn'])) {

	
	$user = "root";
	$password = "";
	

    $dbh = new PDO('mysql:host=localhost;dbname=SearchBar', $user, $password);

	$searchedItem = $_POST['search'];

    $items = $dbh->query($sql_query1);

    function test(){

        $sql_query1 = "select Name from SearchData";

        foreach ($items as $row) {
           $row['Name']; 
           //echo '<option value="'. .'">'; 
           echo $row['Name'];
        }
    }

    /*$sql_query1 = "select Name from SearchData";

    foreach ($dbh->query($sql_query1) as $row) {
    $testName = $row['Name'];
    function test($testName){
    echo '<datalist id="items_list">';
    echo '<option value="' . $testName . '">';
    echo '</datalist>';
    }
    }*/

    $sql_query = "select * from SearchData where Name = '".$searchedItem."' limit 1";

	foreach ($dbh->query($sql_query) as $row) {
        //print $row['Name'] . "\t";
        $type = $row['Type'];
        if ($type == "Laptop") {
        	header( "Location: laptops_page.php" );
        }
        elseif ($type == "Keyboard") {
        	header( "Location: keyboards_page.php" );
        }
        elseif ($type == "Mouse") {
            header( "Location: mice_page.php" );
        }
        elseif ($type == "Speaker") {
            header( "Location: speakers_page.php" );
        }
    }

	}
			
	
?>

<nav>
        <img id="menu-button" src="./icons/menu.svg" />
        <div id="logo">
            <a  href="index.php">
            <img src="images/logo123.png" alt="company logo" />
            </a>
        </div>
        <div id="center-container">

            <form action = "#" method="post">
            <div id="searchBar">
            	<input type="text" name="search" id="search" placeholder="What are you looking for?" list="items_list" >
                <input type="submit" value="Search" name="searchbtn">
            </div>
            </form>
          
            <datalist id="items_list">';
	          <option value="fj">';
	          <option value="qwe">';
              <option value="asdsad">';
	          <option value="asdnk">';
            </datalist>
           
            <ul>
                <li class = "dropdown">
                    Categories
                    <div class="dropdown-content">
                        <a href="laptops_page.php">Laptops</a>
                        <a href="mice_page.php">Mice</a>
                        <a href="keyboards_page.php">Keyboards</a>
                        <a href="speakers_page.php">Speakers</a>
                    </div>
                </li>           
                <li><a href="deals.php">Deals</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="sign_in.php">Log in</a></li>
            </ul>
        </div>
        <div id="cart-container">
            <a id="cart" href="shopping_cart_1.php">   
                <img src="images/shoppingcart.png"/>
            </a>
        </div>
</nav>
<div id = "box"><p id = "number"></p></div> 

