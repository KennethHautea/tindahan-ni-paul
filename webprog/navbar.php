<style>
    /* The navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
    position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */
    z-index: 10;
}

/* Links inside the navbar */
.navbar a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change background on mouse-over */
.navbar a:hover {
    background: #ddd;
    color: black;
}

.logo{
    width: 20%;
    float: left;
    padding-top: 10px;
    padding-left: 30px;
    padding-bottom: 4px;
}
.location{
    margin-top: 53px;
    float: left;
    margin-left: 700px;
}


</style>

<div class="navbar">
    <img src="img/log.png" class="logo">
    <div class="location">
        <a href="index.php">Products</a>
        <a href="contact.php">Contact</a>
        <a href="about.php">About</a>
        <?php include("php/navbar_selector.php"); ?>
    </div>  
</div>