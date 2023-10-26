<html>

<head>
    <title> Intro To PHP Form Validating </title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php 
        $email = $conf_email = $username = $password = $textArea1 = $drp1 = $grp1 = $grp2 =  $cgrp1 = $cgrp2 = $cgrp3 = "";
        $nameElement = "NAME";
        $submited = false;
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
        
            $email = htmlspecialchars( $_POST["email"] ) ;
            $conf_email = htmlspecialchars( $_POST["emailCheck"] ) ;
            $username = htmlspecialchars( $_POST["userName"] ) ;
            $password = htmlspecialchars( $_POST["passWord"] ) ;

            $textArea1 = htmlspecialchars( $_POST["textArea1"] );
            $drp1 = htmlspecialchars( $_POST["drop1"] );
            
            if(!empty($_POST["grp1"]))
                $grp1 = htmlspecialchars( $_POST["grp1"] );
            if(!empty($_POST["grp2"]))
                $grp2 = htmlspecialchars( $_POST["grp2"] );
            if(!empty($_POST["cgrp1"]))
                $cgrp1 = htmlspecialchars($_POST["cgrp1"]);
            if(!empty($_POST["cgrp2"]))
                $cgrp2 = htmlspecialchars($_POST["cgrp2"]);
            if(!empty($_POST["cgrp3"]))
                $cgrp3 = htmlspecialchars($_POST["cgrp3"]);
            
            $submited = true;
        }

    ?>

    <h1> <?php echo $nameElement?> </h1>
    <form action="" method="post">

        <label for="email"> Enter Email: </label>
        <input name="email" id="email" type="text" value="<?php echo $email?>"><br/><br/>

        <label for="emailCheck"> Confirm Email: </label>
        <input name="emailCheck" id="emailCheck" type="text" value="<?php echo $conf_email?>" ><br/><br/>
        
        <label for="userName"> Enter Username: </label>
        <input name="userName" id="userName" type="text" value="<?php echo $username?>" ><br/><br/>

        <label for="passWord"> Password: </label>
        <input name="passWord" id="passWord" type="password" value="<?php echo $password?>" ><br/><br/>

        <p> Select One </p>
        <!-- Radio Group 1  -->
        <input id="rgrp1-1" name="grp1" type="radio" value="OP1" <?php echo (($submited && $grp1 === "OP1") ? ("checked") : (""))  ?>  >
        <label for="rgrp1-1"> OP1 </label></br>

        <input id="rgrp1-2" name="grp1" type="radio" value="OP2" <?php echo (($submited && $grp1 === "OP2") ? ("checked") : (""))  ?>>
        <label for="rgrp1-2"> OP2 </label></br>

        <input id="rgrp1-3" name="grp1" type="radio" value="OP3" <?php echo (($submited && $grp1 === "OP3") ? ("checked") : (""))  ?>>
        <label for="rgrp1-3"> OP3 </label></br>
        <br/>

        <p> Select One </p>
        <!-- Radio Group 2  -->
        <input id="rgrp2-1" name="grp2" type="radio" value="OP1" <?php echo (($submited && $grp2 === "OP1") ? ("checked") : (""))  ?>>
        <label for="rgrp2-1"> OP1 </label></br>

        <input id="rgrp2-2" name="grp2" type="radio" value="OP2" <?php echo (($submited && $grp2 === "OP1") ? ("checked") : (""))  ?>>
        <label for="rgrp2-2"> OP2 </label></br>

        <input id="rgrp2-3" name="grp2" type="radio" value="OP3" <?php echo (($submited && $grp2 === "OP1") ? ("checked") : (""))  ?>>
        <label for="rgrp2-3"> OP3 </label></br>
        <br/>

        <p> Select AT Least One </p>
        <!-- CheckBoxes -->
        <input name="cgrp1" id="cgrp1" type="checkbox">
        <label for="cgrp1"> OP1 </label>

        <input name="cgrp2" id="cgrp2" type="checkbox">
        <label for="cgrp2"> OP2 </label>

        <input name="cgrp3" id="cgrp3" type="checkbox">
        <label for="cgrp3"> OP3 </label>
        <br/>
        <br/>

        <!-- Dropbox -->
        <label for="drp1"> DROPBOX 1</label><br/>
        <select name="drop1" id="drp1">
            <option> NO OP </option>
            <option> OP 1  </option>
            <option> OP 2  </option>
            <option> OP 3  </option>
            <option> OP 4  </option>
        </select><br/>

        <br/>
        <!-- Text Area -->
        <label for="textArea1" >  </label>
        <textarea name="textArea1" id="textArea1" value="" ><?php echo ((empty($textArea1)) ? "Text Area ..." : $textArea1) ?></textarea><br/>

        <br/>
        <!-- Buttons -->
        <input onclick="checkSimilarity()" id="SimCheck" type="button" value="SimCheck"> <br/><br/>

        <button type="button" onclick="validate()" > Validate </button><br/><br/>

        <input type="submit"><br/><br/>

    </form>
</body>

<script src="js/main.js" ></script>

</html>