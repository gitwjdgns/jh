function check_input()
{
    if(!document.loginSbmt.id.value)
    {
        alert("Please enter ID");
        document.loginSbmt.id.focus();
        return;
    }

    if(!document.loginSbmt.pw.value)
    {
        alert("Please enter Password");
        document.loginSbmt.pw.focus();
        return;
    }
    document.loginSbmt.submit();
}
