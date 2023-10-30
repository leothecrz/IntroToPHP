<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Intro To PHP Form Validation</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php 
        function createRadioGroup($nameID, &$values, $checkedValue)
        {
            $start = 0;
            $count = count($values);
            foreach ($values as $val)
            {
                $checked = ( ($checkedValue === $val) ? "checked" : "" );
                echo "<input type='radio' name='{$nameID}' id='{$nameID}-{$start}' value='{$val}' {$checked}>";
                echo "<label for='{$nameID}-{$start}'> {$val} </label></br>";
                $start++;
            }
        }
        function cleanInput($input)
        {
            $in = trim($input);
            $in = stripslashes($in);
            $in = htmlspecialchars($in);
            return $in;
        }
    ?>
    <?php 
        $email = $emailConf = $user = $pass = 
        $rGrp1 = $rGrp2 = 
        $checkboxes = 
        $dropBox = 
        $userText = "";
        $submitted = false;
        $success = true;
        $nameElem = "NAME";
        if($_SERVER["REQUEST_METHOD"] == "POST")
        { // Form Sumbmition Gather
            if( !empty($_POST["email"]) )
            {
                $email = cleanInput( $_POST["email"] );
            }
            if( !empty($_POST["emailCheck"]) )
            {
                $emailConf = cleanInput( $_POST["emailCheck"] );
            }
            if( !empty($_POST["username"]) )
            {
                $user = cleanInput( $_POST["username"] );
            }
            if( !empty($_POST["pass"]) )
            {
                $pass = cleanInput( $_POST["pass"] );
            }
            if( !empty($_POST["group1"]) )
            {
                $rGrp1 = cleanInput( $_POST["group1"] );
            }
            if( !empty($_POST["group2"]) )
            {
                $rGrp2 = cleanInput( $_POST["group2"] );
            }
            if( !empty($_POST["drp1"]) )
            {
                $dropBox = cleanInput( $_POST["drp1"] );
            }
            if( !empty($_POST["textArea1"]) )
            {
                $userText = cleanInput( $_POST["textArea1"] );
            }
            if( !empty($_POST["cgrp"]) )
            {
                $checkboxes = $_POST["cgrp"];
            }
            $submitted = true;
            if( !empty($emailConf) && !empty($email) && !empty($user) )
                if( $emailConf === $email)
                    $nameElem = $user;
            else
                $success = false;
        }
    ?>

    <h1> <?php echo $nameElem ?> </h1>
    <form action="" method="post">
    
        <!-- Text Fields -->
        <label for="email"> Enter Email </label>
        <input name="email" id="email" type="text" value="<?php echo $email ?>" >
        
        <?php if($submitted && empty($email)){
            echo "<span class='error'> Value Required </span>";
            $success = false;
        }?>
        <br/><br/>

        <label for='emailCheck'> Confirm Email: </label>
        <input name="emailCheck" id="emailCheck" type="text" value="<?php echo $emailConf ?>" >
        
        <?php if($submitted && empty($emailConf)){
            echo "<span class='error'> Value Required </span>";
            $success = false;
        }?>
        <br/><br/>
         
        <label for="username"> Username: </label>
        <input name="username" id="username" type="text" value="<?php echo $user ?>" >
        
        <?php if($submitted && empty($user)){
            echo "<span class='error'> Value Required </span>";
            $success = false;
        }?>
        <br/><br/>

        <label for="pass"> Password: </label>
        <input name="pass" id="pass" type="password" value="<?php echo $pass ?>" >
        
        <?php if($submitted && empty($pass)){
            echo "<span class='error'> Value Required </span>";
            $success = false;
        }?>

        <!-- RadioGroups -->
        <h3>Radio 1</h3>
        <?php 
            $groupOPS = array("OP1", "OP2", "OP3", "OP4");
            $selected = null;
            if($submitted)
            {
                if(empty($rGrp1))
                {
                    echo "<span class='error'> Select ONE  </span></br>";
                    $success = false;
                }
                else
                    $selected = $rGrp1;
            }
            createRadioGroup("group1", $groupOPS, $selected);
        ?>
        <h3>Radio 2</h3>
        <?php 
            if($submitted)
            {
                if(empty($rGrp2))
                {
                    echo "<span class='error'> Select ONE  </span></br>";
                    $success = false;
                }
                else
                    $selected = $rGrp2;
            }
            createRadioGroup("group2", $groupOPS, $selected);
        ?>

        <!-- CheckBoxes -->
        <p> Select AT Least One </p>
        <?php 
            $checkCheckboxes = false;
            if($submitted) 
            {
                if( empty($checkboxes)) 
                {
                    echo "<span class='error'> Select at Least ONE  </span></br>";
                    $success = false;
                }
                else
                    $checkCheckboxes = true;
            }        
        ?>
        <?php
            $checkedHTML = "";
            if($checkCheckboxes && array_search("OP 1", $checkboxes) !== false  )
                $checkedHTML = "checked"; 
        ?>
        <input type="checkbox" name="cgrp[]" id="cgrp1" value="OP 1" <?php echo $checkedHTML ?> >
        <label for="cgrp1"> OP1 </label>

        <?php
            $checkedHTML = "";
            if($checkCheckboxes && array_search("OP 2", $checkboxes) !== false )
                $checkedHTML = "checked";
        ?>
        <input type="checkbox" name="cgrp[]" id="cgrp2" value="OP 2" <?php echo $checkedHTML ?> > 
        <label for="cgrp2"> OP2 </label>

        <?php
            $checkedHTML = "";
            if($checkCheckboxes && array_search("OP 3", $checkboxes) !== false )
                $checkedHTML = "checked";
        ?>
        <input type="checkbox" name="cgrp[]" id="cgrp3" value="OP 3" <?php echo $checkedHTML ?> >  
        <label for="cgrp3"> OP3 </label>
        <br/><br/>

        <!-- Dropbox -->
        <label for="drp1"> DROPBOX 1</label><br/>
        <select name="drp1" id="drp1">
            <?php 
                $drpVals = array("NO OP", "OP 1", "OP 2", "OP 3", "OP 4");
                foreach ($drpVals as $val)
                {   
                    $sel = "";
                    if($submitted && $dropBox === $val)
                        $sel = "selected";
                    
                    echo "<option {$sel}> {$val} </option>";
                }
            ?>
        </select><br/><br/>

        <!-- Text Area -->
        <label for="textArea1" > Text Area: </label><br/>
        <textarea name="textArea1" id="textArea1" >Text Area ...</textarea><br/><br/>

        <!-- Buttons -->
        <input onclick="checkSimilarity()" id="SimCheck" type="button" value="SimCheck"> <br/><br/>
        <button type="button" onclick="validate()" > Validate </button><br/><br/>
        <input type="submit"><br/><br/>

        <?php 
        if($submitted)
            if($success)
            {
                echo "<span class='success'> -- Form Success -- </span></br>";
                echo "Email: " . $email . "</br>";
                echo "Email Conf: " . $emailConf . "</br>"; 
                echo "Username: " . $user . "</br>";
                echo "Password: " . $pass . "</br>";
                echo "Radio Group 1: " . $rGrp1 . "</br>";
                echo "Radio Group 2: " . $rGrp2 . "</br>";
                echo "CheckBoxes: "; 
                var_dump($checkboxes);
                echo "</br>";
                echo "Dropbox: " . $dropBox . "</br>";
                echo "TEXT: </br>" . $userText . "</br>";
            }
            else
            {
                echo "<span class='error'> -- Form Failure -- </span>";
            }
        ?>


    </form>

</body>

<script src="js/main.js" ></script>

</html>