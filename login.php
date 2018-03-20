<?php
include("layouts/head.php");
?>
<body background="1200x630bb.png">
<form action="logining.php" method="POST">

<div class="row">
    <div class="col s12">
        <div class="col s4">

        </div>

        <div class="col s4 card-panel center-align card-panellls"> 

            <form class="col s12 center" method="POST" action="">
                <div class="row">

                </div>
                <div class="row">
                    <div class="input-field col s12">

                        <input id="email" type="text" class="validate" name="email">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Login
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
                <div class = "center-align">
                    <a href ="registration.php">Need to register</a>
                </div>
                <div class = "center-align">
                    <a href ="registration.php">Forgot Password?</a>
                </div>


        </div> 


    </div>

</div>
</form>
