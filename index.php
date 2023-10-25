
<html>
<body>

    <h1>NAME</h1>

    <form action="formcheck.php" method="post">

        <input type="text"><br/><br/>
        <input type="text"><br/><br/>
        <input type="text"><br/><br/>
        <input type="password"><br/><br/>

        <!-- Radio Group 1  -->
        <input id="rgrp1-1" name="grp1" type="radio">
        <label for="rgrp1-1"> OP1 </label></br>

        <input id="rgrp1-2" name="grp1" type="radio">
        <label for="rgrp1-2"> OP2 </label></br>

        <input id="rgrp1-3" name="grp1" type="radio">
        <label for="rgrp1-3"> OP3 </label></br>
        <br/>

        <!-- Radio Group 2  -->
        <input id="rgrp2-1" name="grp2" type="radio">
        <label for="rgrp2-1"> OP1 </label></br>

        <input id="rgrp2-2" name="grp2" type="radio">
        <label for="rgrp2-2"> OP2 </label></br>

        <input id="rgrp2-3" name="grp2" type="radio">
        <label for="rgrp2-3"> OP3 </label></br>
        <br/>

        <!-- CheckBoxes -->
        <input id="cgrp1" type="checkbox">
        <label for="cgrp1"> OP1 </label>

        <input id="cgrp2" type="checkbox">
        <label for="cgrp2"> OP2 </label>

        <input id="cgrp2" type="checkbox">
        <label for="cgrp2"> OP3 </label>
        <br/>
        <br/>

        <!-- Dropbox -->
        <label for="drp1"> DROPBOX 1</label><br/>
        <select name="drop1" id="drp1">
            <option> OP 1 </option>
            <option> OP 2 </option>
            <option> OP 3 </option>
            <option> OP 4 </option>
        </select><br/>

        <br/>

        <!-- Text Area -->
        <label for="textArea1" >  </label>
        <textarea id="textArea1" >Text Area ...</textarea><br/>

        <br/>
        <!-- Buttons -->
        <input onclick="checkSimilarity()" id="SimCheck" type="button" value="SimCheck">
        <button onclick="validate()" > Validate </button>
        <input type="submit">


</form>

</body>
</html>