
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

function checkRadioGroup(groupName, displayName)
{
    let radioSuccess = false;
    const rdgrp = document.querySelectorAll(`input[name="${groupName}"]`)
    for( btn of rdgrp)
    {
        if( btn.checked )
            radioSuccess = true;
    }
    if(!radioSuccess)
    {
        alert( `No option was selected in ${displayName}` );
        return false;
    }
    return true;
}

function validate()
{
    const inputIDS = ["email", "emailCheck", "userName", "passWord"];
    for(id of inputIDS)
        if( document.getElementById(id).value.length < 1 )
        {
            alert( ` The ${id} text field is empty` );
            return; // Early End
        }

    if( !checkRadioGroup("grp1", "Radio Group 1") )
        return // Early End

    if( !checkRadioGroup("grp2", "Radio Group 2") )
        return; //Early End

    let oneCheck = false;
    const checkBoxIDS = ["cgrp1", "cgrp2", "cgrp3"];
    for(id of checkBoxIDS)
        if( document.getElementById(id).checked )
        {
            oneCheck = true;
        }
    if(!oneCheck)
    {
        alert( "At least one box has to be checked" );
        return;
    }
    alert( " ALL REQUIRED FIELDS ARE FILLED " )
}