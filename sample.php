<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 

    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" href="codemirror/lib/codemirror.css"/>
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/mode/clike/clike.js"></script>
    <script src="codemirror/mode/python/python.js"></script>
    <link rel="stylesheet" href="codemirror/theme/solarized.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Jotorres Login Form</title>
</head>
<body>
        <input type="text" id="e_mail" name="e_mail"></input>
        <input type="text" id="usn" name="usn"></input>
        <input type="text" id="passcode" name="passcode"></input>
        <input type="text" id="confirm_passcode"name="confirm_passcode"></input>
            <button id="register_button" name="register_button"></button>
    <script>
        $("#register_button").click(function()
                    {
                        var e_mail=document.getElementById('e_mail').value;
                        var user_name=document.getElementById('usn').value;
                        var pass_code=document.getElementById('passcode').value;
                        var confirm_pass_code=document.getElementById('confirm_passcode').value;
                        if(pass_code!=confirm_pass_code)
                        alert("password and confirm password should be same");   
                         else{
                    $.ajax({
                    type: 'POST',
                    url: 'register.php',
                     data: {e_m_ail:e_mail ,User_name:user_name,pass_code:pass_code},
                    success: function(response) {
                        if(response=="YES")
                        {
                            console.log(response);
                            window.location="afterlogging.php";
                        }
                        else
                        {
                                console.log(response);
                        }
                    }        
                                                    
                    });
                    }
                    });
        </script>
</body>
</html>
