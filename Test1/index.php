<html>

<head>
    <title> Intro To PHP Form Validating </title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

    <?php 
    $nameElement = "NAME";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $conf_email = $username = $password = "";
        $email = htmlspecialchars( $_POST["email"] ) ;
        $conf_email = htmlspecialchars( $_POST["emailCheck"] ) ;
        $username= htmlspecialchars( $_POST["userName"] ) ;
        $password= htmlspecialchars( $_POST["passWord"] ) ;

        if(empty($email))
        {
            echo "<p class=\"error\">email empty</p>";
        }else
        {
            echo $email;
        }
        if(empty($conf_email))
        {
            echo "<p class=\"error\">email confirm empty</p>";
        }else
        {
            echo $conf_email;
            if($conf_email === $email)
            {
                echo "<p class=\"success\"> Email Confirmed </p>";
            }
        }
        if(empty($username))
        {
            echo "<p class=\"error\">username empty</p>";
        }else
        {
            echo $username;
            $nameElement = $username;
        }
        if(empty($password))
        {
            echo "<p class=\"error\">password empty</p>";
        }  else
        {
            echo $password;
        } 
    }

    ?>

    <h1><?php echo $nameElement?></h1>
    <form action="" method="post">

        <label for="email"> Enter Email: </label>
        <input name="email" id="email" type="text"><br/><br/>

        <label for="emailCheck"> Confirm Email: </label>
        <input name="emailCheck" id="emailCheck" type="text"><br/><br/>
        
        <label for="userName"> Enter Username: </label>
        <input name="userName" id="userName" type="text"><br/><br/>

        <label for="passWord"> Password: </label>
        <input name="passWord" id="passWord" type="password"><br/><br/>

        <p> Select One </p>
        <!-- Radio Group 1  -->
        <input id="rgrp1-1" name="grp1" type="radio">
        <label for="rgrp1-1"> OP1 </label></br>

        <input id="rgrp1-2" name="grp1" type="radio">
        <label for="rgrp1-2"> OP2 </label></br>

        <input id="rgrp1-3" name="grp1" type="radio">
        <label for="rgrp1-3"> OP3 </label></br>
        <br/>

        <p> Select One </p>
        <!-- Radio Group 2  -->
        <input id="rgrp2-1" name="grp2" type="radio">
        <label for="rgrp2-1"> OP1 </label></br>

        <input id="rgrp2-2" name="grp2" type="radio">
        <label for="rgrp2-2"> OP2 </label></br>

        <input id="rgrp2-3" name="grp2" type="radio">
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
        <textarea id="textArea1" >Text Area ...</textarea><br/>

        <br/>
        <!-- Buttons -->
        <input onclick="checkSimilarity()" id="SimCheck" type="button" value="SimCheck"> <br/><br/>

        <button type="button" onclick="validate()" > Validate </button><br/><br/>

        <input type="submit"><br/><br/>

</form>
</body>

<script src="js/main.js" ></script>

</html>