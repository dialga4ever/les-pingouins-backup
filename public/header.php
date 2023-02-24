	<head>
	    <meta charset="utf-8" />
        <link rel="stylesheet" href="styles/style.css" />
		<title> Sauveteur Du Dunkerquois </title>
        <link rel="icon" href="images/icon_site.png" type="image/png" />
	</head>

    <script src="scripts/script_totalement_normal.js"></script>

    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
            }
        }          
        }
    </script>

    <header>
        <div class="all">
        <div onclick="myFunction()" class="dropbtn" ">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>

        

        <div class="recherche">
        <?php include("bare_recherche.php") ?>
        </div>


        <div class="logo">
        <a href="index.php" >  <img src="images/logo.png" alt="logo"  style="width:70px;height:70px"  /> </a>
        </div>
    
        <div class="media">
            <a href="https://www.snsm.org/nous-soutenir/donner/faire-un-don"><img src="images/don.png"alt="donnation"style="width:40px;height:40px"/></a>
            <a href="https://twitter.com/boutelierphili1">  <img src="images/twitter.png" alt="twitter" style="width:40px;height:40px" /> </a>
            <a href="https://www.facebook.com/groups/938396409644949"> <img src="images/facebook.png" alt="facebook" style="width:40px;height:40px" /> </a>
            <a href="mailto:sauveteurdudunkerquois@gmail.com"> <img src="images/mail.png" alt="mail" style="width:40px;height:40px" /> </a>
        </div>
    


        
        </div>
        </div>
        <div class="dropdown">
            <div id="myDropdown" class="dropdown-content">
              <a href="#">Sauveteurs</a>
              <a href="#">Sorties en mer</a>
              <a href="#">Stations</a>
              <a href="#">Service du port</a>
              <a href="#">Moyens maritimes</a>
              <a href="#">Techniques</a>
              <a href="#">Historique</a>
                <a href="#">Compléments</a>
            </div>
    </header>


