<?php
include("layouts/head.php");
include("layouts/header.php");
?>
<main>
        <div class="row">
            <div class="col s4 hide-on-med-and-down"></div>
            <div class ="col s8 center">
                <div class="row">
                    <div class="col s10">
                        <div class="row">
                            <form class="col s12" action="generate.php" method ="post">
                                <div class="row"></div>
                                <div class="row">
                                <div class="input-field col s4">
                                    <input id="firstname" type="text" value="<?= $row["firstname"] ?>" name ="firstname" class="validate" required>
                                    <label for="firstname">Firstname</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="middlename" type="text" value="<?= $row["middlename"] ?>" name="middlename" class="validate" required>
                                    <label for="middlename">Middlename</label>
                                </div>
                                <div class="input-field col s4">
                                    <input id="lastname" type="text" value="<?= $row["lastname"] ?>" name="lastname" class="validate" required>
                                    <label for="lastname">Lastname</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    <div class="input-field col s4">
                                        <select id="gender" name="gender" required>
                                            <option value="" disabled>Select gender</option>
                                            <option value="Male" >Male</option>
                                            <option value="Female" >Female</option>

                                        </select>
                                    </div> 

                                    <div class="input-field col s4">
                                        <select name="country" id="country" required>
                                            <option value=''>--- Select Country---</option>
                                            <?php
                                            $sql = "SELECT * FROM country";
                                            $res = mysqli_query($con, $sql);

                                            if (mysqli_num_rows($res) > 0) {
                                                while ($row = mysqli_fetch_object($res)) {

                                                    echo "<option  value='" . $row->country_id . "'>" . $row->name . "</option>";
                                                    ?><option  value='<?= $row->country_id ?>'><?= $row->name ?></option><?php
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div> 
                                    <div class="input-field col s4">
                                        <select class="state" id="state" name="state" required>
                                            <option>---Select State---</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <textarea id="address" name="address" value="<?= $row["address"] ?>" class="materialize-textarea" required></textarea>
                                    <label for="address">Address</label>
                                </div>
                                <div class="input-field col s6">
                                        <input type="text" id="birth" name="birth" value="<?= $row["birth"] ?>" class="datepicker">

                                        <label for="birth">Date of birth</label>
                                    </div>
                            </div>
                            <div class="row">
                                <div class="col s12">
                                    
                                <div class="input-field col s4">
                                    <input id="PhoneNumber" type="text" name="phoneno" value="<?= $row["phoneno"] ?>" class="validate" required>
                                    <label for="PhoneNumber">Phone number</label>

                                </div>
                                    <div class="input-field col s4">
                                        <input id="email" type="email" name="pemail" value="<?= $row["pemail"] ?>" class="validate" required>
                                        <label for="PersonalEmail">Personal Email</label>
                                    </div>
                                   
                                    <div class="input-field col s4">
                                        <input id="password" type="password" name="password" value="<?= $row["password"] ?>" class="validate" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
                                               title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required>
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                           
                            <div class="row">
                                <div class="col s12 left">
                                    <div class="waves-effect waves-light btn right pulse"><input type="submit" value="Submit"/>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Form ends here-->

                <div class="col s1">
                </div>
            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

<?php
include("layouts/foot.php");
include("layouts/footer.php");
?>