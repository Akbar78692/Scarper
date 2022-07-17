function validate()
{

    var op= document.my.choice.value;
    var ps= document.my.price.value;

    
    if(op==='-1')
    {
        alert("select the material....");

        return false;
    }
    if(ps==='')
    {
        alert("please enter the price....");

        return false;
    }

}
function validateLogin()
{
    var mail = document.login.email.value;
    var pass= document.login.password.value;

    if(mail==='')
    {
        alert("please enter the email....");

        return false;
    }
    if(pass==='')
    {
        alert("please enter the password....");

        return false;
    }

}
function validateInq()
{
    var mail = document.contact.email.value;
    var name= document.contact.name.value;
    var choice= document.contact.choice.value;
    var contact= document.contact.contact.value;

  
    if(name==='')
    {
        alert("please enter the name....");

        return false;
    }
    if(mail==='')
    {
        alert("please enter the email....");

        return false;
    }
    if(choice==='-1')
    {
        alert("select the material....");

        return false;
    }
    if(contact==='')
    {
        alert("please enter the contact....");

        return false;
    }
}
