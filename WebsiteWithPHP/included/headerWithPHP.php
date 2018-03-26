<nav>
        <img id="menu-button" onclick="toggleMenu();" src="./icons/menu.svg" />
        <div id="logo">
            <a  href="index.php">
            <img src="images/logo123.png" alt="company logo" />
            </a>
        </div>
        <div id="center-container">
            <div id="searchBar">
                <input type="text" name="searchBar" placeholder="What are you looking for?">
            </div>
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
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </div>
        <div id="cart-container">
            <a id="cart" href="shopping_cart_1.php">   
                <img src="images/shoppingcart.png"/>
            </a>
        </div>
</nav>
<div id = "box"><p id = "number"></p></div> 