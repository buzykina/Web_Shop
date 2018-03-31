

<?php

	if (isset($_POST['searchbtn'])) {

	
      	$user = "dbi392854";
	$password = "1234";
      	$dbh = new PDO('mysql:host=tudmysql01.fhict.local;dbname=dbi392854', $user, $password);
        $searchedItem = $_POST['search'];

        $sql_query = "select * from laptop where Name = '".$searchedItem."' limit 1";

      	foreach ($dbh->query($sql_query) as $row) {
              
              $type = $row['Type'];

              if ($type == "laptop") {
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
        <img id="menu-button" onclick="toggleMenu();" src="./icons/menu.svg" />
        <div id="logo">
            <a  href="index.php">
            <img src="images/logo123.png" alt="company logo" />
            </a>
        </div>
        <div id="center-container">
          <form action = "#" method="post" id="searchBar">
            	<input type="text" name="search" id="search" placeholder="What are you looking for?" list="items_list" >
              <input type="submit" value="" name="searchbtn" id = "searchbtn">
              </form>
          
        <datalist id="items_list">
  	          <option value="CORSAIR K95 RGB PLATINUM RGB LED">
  	          <option value="SPEEDLINK Accusor Advanced">
              <option value="CORSAIR K65 RAPIDFIRE COMPACT RGB LED">
	            <option value="LOGITECH G G613">
              <option value="LOGITECH G Pro Gaming Keyboard">
              <option value="CORSAIR K55 RGB">
              <option value="SPEEDLINK Iovia">
              <option value="LOGITECH G G213 Prodigy">
              <option value="CORSAIR Safe RGB">
              <option value="LOGITECH K400 Plus">
              <option value="SPEEDLINK Rapax">
              <option value="CORSAIR K70 RapidFire">
              <option value="APPLE MacBook Air 13">
              <option value="ACER Aspire 1 A114-31-C471">
              <option value="ACER Chromebook 15 CB3-532-C8E0">
              <option value="ACER Spin SP513-51-34EU">
              <option value="APPLE MacBook Pro 13">
              <option value="ACER Aspire 5 A515-51G-58C6">
              <option value="ACER Aspire 3 A315-51-35WL">
              <option value="ACER Aspire 3 (A315-51-59AP)">
              <option value="ASUS VivoBook X441UA-WX367T">
              <option value="ACER Chromebook 11 CB5-132T-C14K">
              <option value="ACER One 10 S1003-11QZ">
              <option value="APPLE MacBook Pro 15 (2016) with Touch Bar">
              <option value="JBL Flip 3 Special Edition">
              <option value="JBL Xtreme">
              <option value="JBL Go">
              <option value="JBL Trip">
              <option value="SONY SRS-XB10">
              <option value="SONY SRS-XB40">
              <option value="SONY SRS-XB20">
              <option value="SONY GTK-XB60">
              <option value="BOSE SoundLink Revolve">
              <option value="BOSE SoundLink Micro">
              <option value="BOSE SoundTouch 10">
              <option value="BOSE SoundLink Mini II">
              <option value="APPLE Magic Mouse 2">
              <option value="Speedlink Snappy Mouse">
              <option value="Speedlink Axon USB Mouse">
              <option value="Speedlink Calado Silent Mouse">
              <option value="Logitech M330 Silent Plus">
              <option value="Logitech M187 Wireless Mini Mouse">
              <option value="Logitech M100">
              <option value="Logitech MX Anywhere 2">
              <option value="Logitech M280">
              <option value="Logitech MX Master 2S">
              <option value="Logitech M560 Wireless Mouse">
              <option value="Logitech M187 Wireless Mini Mouse">
              <option value="APPLE Magic Trackpad 2">
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
