<?php
include("layouts/head.php");
include("layouts/header.php");
?>
<main>
    <form action="generate.php" method ="post">
        <div class="row center">
    <div class="row">
        <div class="col s3 m4"></div>
        <div class="col s5 m7 center">
             <img src="logo-4ddraw-01.gif" height="200px" width ="100%"> 
        </div>
    </div>

    <div class="row">
        
    </div>
    <div class="row">
        
    </div>

<div class="row center">
    <?php
    $len = 6;   // total number of numbers
    $min = 1;  // minimum
    $max = 49;  // maximum
    $range = []; // initialize array
    foreach (range(0, $len - 1) as $i) {
        while (in_array($num = mt_rand($min, $max), $range));
        $range[] = $num;
    }
    ?>

<div class="col s3 m4 hide-on-med-and-down"></div>
<div class="show-on-medium-and-down">
<div class="col s2 m1 center hide-on-med-and-down"></div>
        <div class="col s2 m1 center">
        <span style="font-size: 30px; color: #fff; line-height: 36px; text-align: center; position: absolute; width: 55.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 55.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[1]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 30px; color: #fff; line-height: 36px; text-align: center; position: absolute; width: 55.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 55.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[2]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 30px; color: #fff; line-height: 36px; text-align: center; position: absolute; width: 55.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 55.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[3]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 30px; color: #fff; line-height: 36px; text-align: center; position: absolute; width: 55.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 55.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[4]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 30px; color: #fff; line-height: 36px; text-align: center; position: absolute; width: 55.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 55.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[5]); ?></span>
        </div>
       <div class="col s2"></div>
</div>

<div class="hide-on-med-and-down">
    <div class="col s3 m4 "></div>
    <div class="col s2 m1 center"></div>
        <div class="col s2 m1 center">
        <span style="font-size: 36px; color: #fff; line-height: 50px; text-align: center; position: absolute; width: 67.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 67.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[1]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 36px; color: #fff; line-height: 50px; text-align: center; position: absolute; width: 67.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 67.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[2]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 36px; color: #fff; line-height: 50px; text-align: center; position: absolute; width: 67.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 67.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[3]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 36px; color: #fff; line-height: 50px; text-align: center; position: absolute; width: 67.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 67.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[4]); ?></span>
        </div><div class="col s2 m1 center">
        <span style="font-size: 36px; color: #fff; line-height: 50px; text-align: center; position: absolute; width: 67.56px; background: #D11B1B;  box-shadow: inset 0px 4px 40px #000000; height: 67.56px; border-radius:50%; border:solid black 1px; padding:10px;"><?php print_r($range[5]); ?></span>
       </div>
       <div class="col s2"></div>
</div>
</div>
<div class="row">
        
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        
    </div>
    <div class="row">
        
    </div>
<div class="row center">
        <div class="col s3 m4 hide-on-med-and-down"></div>
        
        <button class="btn waves-effect waves-light" type="submit" name="someAction">Generate your lucky numbers
                                    </button>
        </div>
        <div class="col s3 m4"></div>
    </div>

<div class="row">
        
        </div>
        <div class="row">
            
        </div>
        <div class="row">
            
        </div>
        <div class="row center">
        <div class="col s3 m4 hide-on-med-and-down"></div>
            <h5>You can also input your lucky numbers here</h5>
        </div>
        
        <div class="row center">
       <div class="col s3 m4 hide-on-med-and-down"></div>
    <div class="col s1 m1 center hide-on-med-and-down"></div>
    <div class="col s1 m1 center"></div>

        <div class="col s2 m1 center">
        <div class="input-field">
            <input id="no1" class="validate">
        </div></div>

        <div class="col s2 m1 center">
        <div class="input-field">
            <input id="no2"  class="validate">
        </div></div>
        
        <div class="col s2 m1 center">
        <div class="input-field ">
            <input id="no3"  class="validate">
        </div></div>
        
        <div class="col s2 m1 center">
       <div class="input-field ">
            <input id="no4"  class="validate">
        </div>
        </div>
        
        <div class="col s2 m1 center">
        <div class="input-field">
            <input id="no5"  class="validate">
       </div>
       </div>
      
       <div class="col s2 hide-on-med-and-down"></div>

    </div>

        <div class="row center">
        <div class="col s3 m4"></div>
        
        <button class="btn waves-effect waves-light" type="submit" name="submit">Enter Numbers
                                    </button>
        </div>
        <div class="col s3 m4"></div>
    </div>
</div>
</form>
</main>

<?php
include("layouts/foot.php");
include("layouts/footer.php");
?>