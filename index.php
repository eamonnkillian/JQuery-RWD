<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel='stylesheet' href='css/simplesite.css' />
        <script src=http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js></script>
        <script type="text/javascript" src="js/simplesite.js"></script>
        <title>Simple site layout - The HTML</title>
    </head>
    <body>
        <!-- Lets first define the total container -->
        <div class="mainContainer">
            <!-- First up in the container is the heading section -->
            <div class="mainHeader">
                <!-- The title for the site -->
                <span class="mainTitle">Simple Site Layout</span>
                <!-- The Logo for the simple site -->
                <img class="logoImage" src="img/simplesitelogo.png" />    
            </div>
            <!-- Next up the menu area -->
            <div class="mainMenu">
                <nav>
                    <ul>
                        <li class='menuItem'><a href="#">Menu#1</a></li>
                        <li class='menuItem'><a href="#">Menu#2</a></li>
                        <li class='menuItem'><a href="#">Menu#3</a></li>
                        <li class='menuItem'><a href="#">Menu#4</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Next the viewing area -->
            <div class="mainView">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna 
                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit 
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
                    occaecat cupidatat non proident, sunt in culpa qui officia 
                    deserunt mollit anim id est laborum.
                </p>
            </div>
            <!-- Finally the footer section -->
            <div class="mainFooter">
                <!-- The copyright information -->
                <span class="mainCopyright">&#169; 2014</span>
                <!-- The contact information -->
                <span class="mainContactInfo">Contact: D. Smith</span>
            </div>
        </div>
    </body>
</html>
