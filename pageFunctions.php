<?php
function nav(){
    echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">";
    echo "<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">";
    echo "<span class=\"navbar-toggler-icon\"></span>";
    echo "</button>";
    echo "<div class=\"collapse navbar-collapse\" id=\"navbarNav\">";
    echo "<ul class=\"navbar-nav\">";
    echo "<li class=\"nav-item active\">";
    echo "<a class=\"nav-link\" href=\"index.php\">Home</a>";
    echo "</li><li class=\"nav-item active\">";
    echo "<a class=\"nav-link\" href=\"credentials.php\">Education</a>";
    echo "</li><li class=\"nav-item active\"><a class=\"nav-link\" href=\"workexperience.php\">Experience</a></li></ul></div></nav>"; 
}

// creates an extra column for formatting purposes
function columnBuffer()
{
    echo "<div class=\"col-sm\"></div>";
}

