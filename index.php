<?php
session_start();
if (empty(($_SESSION['Username']))){
$_SESSION["Username"]="Guest";
}
//echo $_SESSION['Username'];
include('header.php')
?>


    <h2>Educational Video Explorer</h2><br><br>
    <p>"Learning is a treasure that will follow its owner everywhere."-A Chinese proverb says. This statement says it all. We wish to incorporate this statement in the lives of our peers of IIT Ropar by providing them with a portal which can cater to their need of educational resources for helping them to aquire new skills. The website is open to all the students of IIT Ropar. Any student from this institute can sign up at this website. This will give the person privilege of not only browsing through the contents but also posting their comments or reviews about the videos. Accessing the e-books is open for all the visitors on the website. The books posted on the website are relevant to the courses taught in the institute. Hope you enjoy your learning experience . Have fun.

<?php
    include('footer.php')
?>

