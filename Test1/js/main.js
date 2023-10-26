
function checkSimilarity()
{
    const emailRef = document.getElementById("email");
    const emailConfRef = document.getElementById("emailCheck");

    const email = emailRef.value;
    const check = emailConfRef.value;

    if(email.length < 1 || check < 1)
    {
        alert("Email Section is empty");
        return;
    }

    if(email === check)
    {
        alert("The inputs are the same");
    }
    else
    {
        alert("The inputs are not the same");
    }
}

function validate()
{
    const inputIDS = ["email", "emailCheck", "userName", "passWord"];
    for(id of inputIDS)
        if( document.getElementById(id).value.length < 1 )
        {
            alert( ` The  ${id} element is empty` );
            return false;
        }

    let radioSuccess = false;
    const rdgrp1 = document.querySelectorAll('input[name="grp1"]')
    for( btn of rdgrp1)
    {
        if( btn.checked )
            radioSuccess = true;
    }
    if(!radioSuccess)
    {
        alert( "No option was selected in radio group 1" );
        return false;
    }
    radioSuccess = false;
    const rdgrp2 = document.querySelectorAll('input[name="grp2"]')
    for( btn of rdgrp2)
    {
        if( btn.checked )
            radioSuccess = true;
    }
    if(!radioSuccess)
    {
        alert( "No option was selected in radio group 2" );
        return false;
    }
    radioSuccess = false;

    const checkBoxIDS = ["cgrp1", "cgrp2", "cgrp3"];
    for(id of checkBoxIDS)
        if( document.getElementById(id).checked )
        {
            radioSuccess = true;
        }
    if(!radioSuccess)
    {
        alert( "At least one box has to be checked" );
        return false;
    }

    alert( " ALL REQUIRED FIELDS ARE FILLED " )

}