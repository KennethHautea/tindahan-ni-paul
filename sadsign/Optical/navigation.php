<nav class="navbar navbar-fixed-top" style="background-color: #BBDFFF">
    <div class="container-fluid">
        <a href="" class="navbar-brand" style="color: black;">Duray Veron Optical Clinic</a>
        </br>
        <div class="dropdown pull-right" style="margin-top: -10px;">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><span class='glyphicon glyphicon-user' aria-hidden='true'></span>
            <?php echo $session_username . " ($session_role)"; ?> <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#logout" data-toggle="modal"><span class='glyphicon glyphicon-log-out' aria-hidden='true'></span> Logout</a></li>
                <li><a href="#changepass" data-toggle="modal"><span class='glyphicon glyphicon-edit' aria-hidden='true'></span> Change Password</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php include ("sidenavcss.php");?>
