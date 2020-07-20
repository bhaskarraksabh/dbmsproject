<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RV OJ |Home</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

</head>
<body>
    <div>
        <div id="header" data-v-b3967d56="">
            <ul class="oj-menu ivu-menu ivu-menu-light ivu-menu-horizontal">
                <div class="logo" data-v-b3967d56="">
                    <span data-v-b3967d56="">R.V.C.E Virtual Judge</span>
                </div>
                <li class="ivu-menu-item ivu-menu-item-active ivu-menu-item-selected">
                    <a style="color:inherit;" href="../index.php">Home</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="pages/Problems.php">Problems</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="pages/Contests.php">Contests</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="pages/Rankings.php">Rankings</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="pages/About.php">About</a>
                    </li>
                <div id="btn-menu-changer" style="display:block;"class="btn-menu" data-v-b3967d56="">
                    <button class="ivu-btn ivu-btn-ghost ivu-btn-circle" type="button" id="login" name="login">
                        <span>Login</span>
                      
                    </button>
                       
                    <button class="ivu-btn ivu-btn-ghost ivu-btn-circle" type="button" name="register" id="register">
                        <span>Register</span>
                    </button>
                </div>
                <div id="loginSuccess" style="display:none" class="drop-menu ivu-dropdown" data-v-b3967d56="">
                <div class="ivu-dropdown-rel">
                    <button onclick="displayDropper()"class="drop-menu-title ivu-btn ivu-btn-text" data-v-b3967d56="" type="button">
                        <span id="nameDisplayer"></span>
                    </button>
                    <div id="dropdownforlogin" style="display:none;"  class="ivu-select-dropdown" style="transform-origin:center top 0px; position:absolute;will-change:top,left;top:60px;left:-100px;" x-placement="bottom">
                <ul class="ivu-dropdown-menu" data-v-b3967d56="">
                <li class="ivu-dropdown-item" data-v-b3967d56="">
                        <a style="color:inherit;" href="home.php">Home</a>
                    </li>
                    <li class="ivu-dropdown-item" data-v-b3967d56="">
                        <a style="color:inherit;" href="settings.php">Settings</a>
                    </li>
                    <li class="ivu-dropdown-item" data-v-b3967d56="">
                        <a style="color:inherit;" href="logout.php">Logout</a>
                    </li>
                </ul>
                </div>
                </div>
            </div>
                </ul>
                </div>
                </div>
                <script>
$(document).mouseup(function(e){
    var container = $("#dropdownforlogin");

    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.hide();
    }
});
</script>
                <div class="content-app">
                    <div class="ivu-row-flex ivu-row-flex-space-around" data-v-2b7a3f32="">
                        <div class="ivu-col ivu-col-span-22" data-v-2b7a3f32="">
                            <div class="announcement ivu-card ivu-card-dis-hover ivu-card-shadow" data-v-9990c8ce="">
                                <div class="ivu-card-head">
                                    <div clas="panel-title">
                                        <div data-v-9990c8ce="">Announcement</div>
                                    </div>
                                </div>
                                <div class="ivu-card-extra">
                                    <div class="panel-extra">
                                        <div data-v-9990c8ce="">
                                            <button class="ivu-btn ivu-btn-info" data-v-9990c8ce="" type="button">
                                                <span>Refresh</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="ivu-card-body" style="padding:10px;">
                                <div class="panel-body">
                                    <span data-v-9990c8ce="" mode="in-out">
                                        <ul class="announcements-container" data-v-9990c8ce="">
                                            <li data-v-9990c8ce="">
                                                <div class="flex-container" data-v-9990c8ce="">
                                                    <div class="title" data-v-9990c8ce="">
                                                        <a class="entry" data-v-9990c8ce="">Something1</a>
                                                    </div>
                                                    <div class="date" data-v-9990c8ce="">SOME DATE</div>
                                                    <div class="creator" data-v-9990c8ce="">ADDED BY</div>
                                                </div>
                                            </li>
                                            <li data-v-9990c8ce="">
                                                <div class="flex-container" data-v-9990c8ce="">
                                                    <div class="title" data-v-9990c8ce="">
                                                        <a class="entry" data-v-9990c8ce="">Something2</a>
                                                    </div>
                                                    <div class="date" data-v-9990c8ce="">SOME DATE</div>
                                                    <div class="creator" data-v-9990c8ce="">ADDED BY</div>
                                                </div>
                                            </li>
                                        </li>
                                        <li data-v-9990c8ce="">
                                            <div class="flex-container" data-v-9990c8ce="">
                                                <div class="title" data-v-9990c8ce="">
                                                    <a class="entry" data-v-9990c8ce="">Something3</a>
                                                </div>
                                                <div class="date" data-v-9990c8ce="">SOME DATE</div>
                                                <div class="creator" data-v-9990c8ce="">ADDED BY</div>
                                            </div>
                                        </li>
                                    </li>
                                    <li data-v-9990c8ce="">
                                        <div class="flex-container" data-v-9990c8ce="">
                                            <div class="title" data-v-9990c8ce="">
                                                <a class="entry" data-v-9990c8ce="">Something4</a>
                                            </div>
                                            <div class="date" data-v-9990c8ce="">SOME DATE</div>
                                            <div class="creator" data-v-9990c8ce="">ADDED BY</div>
                                        </div>
                                    </li>
                                </li>
                                <li data-v-9990c8ce="">
                                    <div class="flex-container" data-v-9990c8ce="">
                                        <div class="title" data-v-9990c8ce="">
                                            <a class="entry" data-v-9990c8ce="">Something5</a>
                                        </div>
                                        <div class="date" data-v-9990c8ce="">SOME DATE</div>
                                        <div class="creator" data-v-9990c8ce="">ADDED BY</div>
                                    </div>
                                </li>
                            </li>
                            <li data-v-9990c8ce="">
                                <div class="flex-container" data-v-9990c8ce="">
                                    <div class="title" data-v-9990c8ce="">
                                        <a class="entry" data-v-9990c8ce="">Something6</a>
                                    </div>
                                    <div class="date" data-v-9990c8ce="">SOME DATE</div>
                                    <div class="creator" data-v-9990c8ce="">ADDED BY</div>
                                </div>
                            </li>
                                        </ul>
                                    </span>
                                </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="footer">
                    <p>developed by @loser</p>
                </div>
                <div class="v-transfer-dom" data-v-b3967d56="" data-transfer="true">
                    <div id="wrapper" class="ivu-modal-mask" style="display:none;"></div>
                    <div id="wrapper2" class="ivu-modal-wrap" style="display:none;">
                    <div id="myModal" class="ivu-modal" style="width:400px; display:none;" >
                        <div class="ivu-modal-content">
                            <a class="ivu-modal-close"></a>
                            <div class="ivu-modal-header">
                                <div class="modal-title" data-v-b3967d56="">
                                    <span>Login</span>
                                    <span class="close" style="float:right; font-size:28px;">&times;</span>
                                    </div>
                                </div>
                                <div id="modalclass"class="ivu-modal-body">
                                    <div data-v-2e6c3eff="" data-v-b3967d56="">
                                        <form class="ivu-form ivu-form-label-right" data-v-2e6c3eff="">
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" id="firstlogin" name="firstlogin" placeholder="Username" type="text"></input>
                                                    </div>
                                                </div>
    
                                            </div>
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" id="firstpassword" name="firstpassword" type="password" placeholder="Password"></input>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="footer" data-v-2e6c3eff="">
                                            <button name="but_submit" id="but_submit"class="btn ivu-btn ivu-btn-primary ivu-btn-long" data-v-2e6c3eff="">
                                                <span>Login</span>
                                            </button>
                                            <a id="registertologin" data-v-2e6c3eff="">Register</a>
                                            <a data-v-2e6c3eff="" style="float:right">Forgot password</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="ivu-modal-footer">
                                    <div data-v-b3967d56="" style="display:none;">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                </div>
                <div class="v-transfer-dom" data-v-b3967d56="" data-transfer="true">
                    <div id="forsecond" class="ivu-modal-mask" style="display:none;"></div>
                    <div id="forsecond2" class="ivu-modal-wrap" style="display:none;">
                    <div id="secondmodal" class="ivu-modal" style="width:400px; display:none;">
                        <div class="ivu-modal-content">
                            <a class="ivu-modal-close"></a>
                            <div class="ivu-modal-header">
                                <div class="modal-title" data-v-b3967d56="">
                                    <span>Register :)</span>
                                    <span class="forclose" style="float:right; font-size:28px;">&times;</span>
                                    </div>
                                </div>
                                <div class="ivu-modal-body">
                                    <div data-v-2e6c3eff="" data-v-b3967d56="">
                                        <form class="ivu-form ivu-form-label-right" data-v-2e6c3eff="">
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" name="username" id="usn" placeholder="Username" type="text">
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" id="e_mail" name="e_mail" type="text" placeholder="email">
                                                    </div>
                                                    </div>
                                                    </div>
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" id="passcode" name="passcode" type="password" placeholder="Password">
                                                    </div>
                                                    </div>
                                            </div>
                                                    <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                        <div class="ivu-form-item-content">
                                                            <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                                <input class="ivu-input ivu-input-large" id="confirm_passcode" name="confirm_passcode" type="password" placeholder="Password again">
                                                            </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="footer" data-v-2e6c3eff="">
                                            <button id="register_button" name="register_button" class="btn ivu-btn ivu-btn-primary ivu-btn-long" data-v-2e6c3eff="">
                                                <span>Register</span>
                                            </button>
                                            <a id="logintoregister" data-v-2e6c3eff="">Login</a>
                                            <div><p id="errordisplay"> </p></div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="ivu-modal-footer">
                                    <div data-v-b3967d56="" style="display:none;">
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    
        
                <script>
                     var elementer=document.getElementById('dropdownforlogin');
                    var abcd="<?php echo $_SESSION['username'];?>"
                    console.log(abcd);
                    console.log("<?php echo $_SESSION['username'];?>");
                
                   function displayDropper()
                   { 
                       elementer.style.display="block";
                   }
                   
                    
                            var ed=document.getElementById('btn-menu-changer');
                            if(abcd==null)
                            {
                    var uname = document.getElementById('firstlogin').value;
                    var passkey=document.getElementById('firstpassword').value;
                    var modal=document.getElementById("myModal"); 
                    modal.style.display="none";
                    var element2=document.getElementById("wrapper");
                    var element3=document.getElementById("wrapper2");
                    element2.style.display="none";
                    element3.style.display="none";
                            ed.style.display="none";
                            loginSuccess.style.display="block";
                            }
                            else
                            {
                                ed.style.display="block";
                            loginSuccess.style.display="none";
                            }
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
                    $("#logintoregister").click(function()
                    {
                           
                           var element2=document.getElementById('secondmodal');
                           element2.style.display="none"; 
                           var element3=document.getElementById('forsecond2');
                           var element4=document.getElementById('forsecond');
                           element3.style.display="none";
                           element4.style.display="none";
                           var element=document.getElementById('myModal');
                                 
                           var element5=document.getElementById("wrapper");
                    var element6=document.getElementById("wrapper2");     
                    element5.style.display="block";
                    element6.style.display="block";       
                    element.style.display="block";                
                                                    
                    });
                    $("#registertologin").click(function()
                    {
                        var element=document.getElementById('myModal');
                        var element5=document.getElementById("wrapper");
                    var element6=document.getElementById("wrapper2");     
                    element5.style.display="none";
                    element6.style.display="none";       
                    element.style.display="none";   
                           var element2=document.getElementById('secondmodal');
                           element2.style.display="block"; 
                           var element3=document.getElementById('forsecond2');
                           var element4=document.getElementById('forsecond');
                           element3.style.display="block";
                           element4.style.display="block";
                          
                                 
                                        
                                                    
                    });
                    $('#but_submit').click(function() {
                    var uname = document.getElementById('firstlogin').value;
                    var passkey=document.getElementById('firstpassword').value;
                    var modal=document.getElementById("myModal"); 
                    modal.style.display="none";
                    var element2=document.getElementById("wrapper");
                    var element3=document.getElementById("wrapper2");
                    element2.style.display="none";
                    element3.style.display="none";
                    $.ajax({
                    type: 'POST',
                    url: 'authenticate.php',
                     data: {text1:uname ,text2:passkey},
                    success: function(response) {
                        if(response=="YES")
                        {
                            console.log(response);
                            window.location="afterlogging.php";
                        }
                        else if(response=="NO")
                        alert("wrong password!");
                    }
                    });
                    });
                    var btn=document.getElementById("login");
                    var modal=document.getElementById("myModal");            
                    var element2=document.getElementById("wrapper");
                    var element3=document.getElementById("wrapper2");
                    var btn2=document.getElementById("register");
                    var element4=document.getElementById("forsecond");
                    var element5=document.getElementById("forsecond2");
                    var element6=document.getElementById("secondmodal");
                    var span1=document.getElementsByClassName("close")[0];
                    var span2=document.getElementsByClassName("forclose")[0];
                    span1.onclick = function() {
                        element2.style.display="none";
                    element3.style.display="none";
                    modal.style.display = "none";
}
span2.onclick = function() {
    element6.style.display="none";
                        element5.style.display="none";
                        element4.style.display = "none";
}
                    btn2.onclick=function(){
                    element4.style.display="block";
                    element5.style.display="block";
                    element6.style.display="block";
                    }
                    btn.onclick = function() {
                    element2.style.display="block";
                    element3.style.display="block";
                    modal.style.display = "block";
                    }
                    window.onclick = function(event) {
                    if (event.target == modal || event.target==element3 || event.target==element2) {
                    element2.style.display="none";
                    element3.style.display="none";
                    modal.style.display = "none";
                     }
                     if (event.target == element6 || event.target==element5 || event.target==element4) {
                        element6.style.display="none";
                        element5.style.display="none";
                        element4.style.display = "none";
                     }

}
                 </script>

</div>
</body>
</html>
