<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RV OJ |Home</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="codemirror/lib/codemirror.css"/>
    <script src="codemirror/lib/codemirror.js"></script>
    <script src="codemirror/mode/clike/clike.js"></script>
    <script src="codemirror/mode/python/python.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="codemirror/theme/solarized.css"/>
</head>
<body>
    <div>
        <div id="header" data-v-b3967d56="">
            <ul class="oj-menu ivu-menu ivu-menu-light ivu-menu-horizontal">
                <div class="logo" data-v-b3967d56="">
                    <span data-v-b3967d56="">R.V.C.E Virtual Judge</span>
                </div>
                <li class="ivu-menu-item ivu-menu-item-active ivu-menu-item-selected">
                    <a style="color:inherit;" href="../afterlogging.php">Home</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="Problems.php">Problems</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="Contests.php">Contests</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="Ranking.php">Rankings</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="About.php">About</a>
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
                        <span id="nameDisplayer"><?php echo $_SESSION['username'];?></span>
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
            <script>
$(document).mouseup(function(e){
    var container = $("#dropdownforlogin");

    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.hide();
    }
});
</script>
                </ul>
                </div>
                </div>
                <div class="content-app">
                    <div class="flex-container" data-v-6e5e6c6e="">
                    <div id="problem-main" data-v-6e5e6c6e="">
                    <div class="ivu-card ivu-card-dis-hover ivu-card-shadow" data-v-6e5e6c6e="">
                    <div class="ivu-card-head">
                    <div class="panel-title">
                    <div data-v-6e5e6c6e="">
                        <?php
                        $var=$_GET['id'];
                        $link=mysqli_connect('localhost','root','','Project') or die("connection error");
                        $query="SELECT * FROM Problems WHERE qid='$var'";
                        $result=mysqli_query($link,$query) or die("query error");
                        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                        echo $row['question_name'];
                        echo " PROBLEM"
                    ?>
                    </div>
                </div>
                </div>
                <div class="ivu-card-extra">
                <div class="panel-extra"></div>
                </div>
                <div class="ivu-card-body" style="padding:40px;">
                <div class="panel-body">
                <div id="problem-content" class="markdown-body" data-v-6e5e6c6e="">
                <p class="title" data-v-6e5e6c6e="" >Description</p>
                <p class="content" data-v-6e5e6c6e="">
                <?php
                 $var=$_GET['id'];
                 $link=mysqli_connect('localhost','root','','Project') or die("connection error");
                 $query="SELECT * FROM Problems WHERE qid='$var'";
                 $result=mysqli_query($link,$query) or die("query error");
                 $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                 echo $row['problem_description'];
                ?>
                </p>
                <p class="title" data-v-6e5e6c6e="">
                Input
                <div class="ivu-card-extra">
                <div class="panel-extra"></div>
                </div>
                <br/>
                <p class="content" data-v-6e5e6c6e="">
                <?php
                $var=$_GET['id'];
                $link=mysqli_connect('localhost','root','','Project') or die("connection error");
                $query="SELECT * FROM Problems WHERE qid='$var'";
                $result=mysqli_query($link,$query) or die("query error");
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo $row['problem_input'];
                ?>
                </p>
                </p>
                <p class="title" data-v-6e5e6c6e="">
                Testcases
                <p class="content" data-v-6e5e6c6e="">
                <?php
                $var=$_GET['id'];
                $link=mysqli_connect('localhost','root','','Project') or die("connection error");
                $query="SELECT * FROM Problems WHERE qid='$var'";
                $result=mysqli_query($link,$query) or die("query error");
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo $row['testcases'];
                ?>
                </p>
                </p>
                <p class="title" data-v-6e5e6c6e="">
                Output
                <p class="content" data-v-6e5e6c6e="">
                <?php
                $var=$_GET['id'];
                $link=mysqli_connect('localhost','root','','Project') or die("connection error");
                $query="SELECT * FROM Problems WHERE qid='$var'";
                $result=mysqli_query($link,$query) or die("query error");
                $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
                echo $row['output'];
                ?>
                </p>
                </p>
                </div>
                </div>
                </div>
                    </div>
                    <div id="submit-code" class="ivu-card ivu-card-bordered ivu-card-dis-hover" data-v-6e5e6c6e="">
                    <div class="ivu-card-body"style="padding:20px">
                    <div data-v-6e5e6c6e="" data-v-3655497a="" style="margin:0px 0px 15px;">
                    <div class="header ivu-row-flex ivu-row-flex-space-between" data-v-3655497a="">
                    <div class="ivu-col ivu-col-span-12" data-v-3655497a="">
                    <div data-v-3655497a="">
                    <span data-v-3655497a="">Language</span>
                    <div class="adjust ivu-select ivu-select-single" data-v-3655497a="">
                    <div class="ivu-select-selection" tabindex=0>
                    <input type="hidden" value="C">
                    <div>
                    <select onchange="changer()" id="langselector" size="0" style="width:100%">
                        <option>C</option>
                        <option>C++</option>
                        <option>JAVA</option>
                        <option>PYTHON</option>
                    </select>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <textarea style="display:none" id="textArea"></textarea>
    <br/>
    <div class="ivu-row-flex ivu-row-flex-space-between" data-v-6e5e6c6e="">
        <div id="printer" class="ivu-col ivu-col-span-12" data-v-6e5e6c6e="">

        </div> 
        <div style=" justify-content: flex-end; "class="ivu-col ivu-col-span-10" data-v-6e5e6c6e="">
            <button id="buttoninserter" class="fl-right ivu-btn ivu-btn-warning" type="button">
                <span data-v-6e5e6c6e="">
                    Submit
                </span>
            </button>
        </div>

    </div>
    <script>
                    var val3=<?php echo $var;?>;
                    var editor=CodeMirror.fromTextArea(document.getElementById('textArea'),
                    {
                        mode:"clike" ,
                        theme:"solarized",
                        lineNumbers:true
                    });
                    console.log(val3);
                    selectelement=document.querySelector('#langselector');
                    language=selectelement.value;
                    if(language=="C")
                    editor.setValue('#include<stdio.h>\nint main()\n{\nreturn 0;\n}');
                    $('#buttoninserter').click(function() {
                    var val1 = editor.getValue();
                    var val2=language;
                    $.ajax({
                    type: 'POST',
                     url: 'submitted.php',
                     data: {text1:val1 ,text2:val2,text3:val3},
                    success: function(response) {
                        console.log(response);
                     $('#printer').html(response);
                    }
                    });
                    });
                    function changer()
                    {
                    selectelement=document.querySelector('#langselector');
                    language=selectelement.value;
                    if(language=="C")
                    editor.setValue('#include<stdio.h>\nint main()\n{\nreturn 0;\n}');
                    if(language=="C++")
                    editor.setValue('#include<bits/stdc++.h>\nusing namespace std;\nint main()\n{\nreturn 0;\n}');
                    if(language=="JAVA")
                    editor.setValue('class Solution\n{\npublic static void main(String args[])\n{\n}\n}\n');
                    if(language=="PYTHON")
                    editor.setValue('');
                    }
                    </script>
                    </button>
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
                                            <a data-v-2e6c3eff="">Register</a>
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
                                                        <input class="ivu-input ivu-input-large" placeholder="Username" type="text">
                                                    </div>
                                                </div>
                                                </div>
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" type="text" placeholder="email">
                                                    </div>
                                                    </div>
                                                    </div>
                                            <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                <div class="ivu-form-item-content">
                                                    <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                        <input class="ivu-input ivu-input-large" type="password" placeholder="Password">
                                                    </div>
                                                    </div>
                                            </div>
                                                    <div class="ivu-form-item ivu-form-item-required" data-v-2e6c3eff="">
                                                        <div class="ivu-form-item-content">
                                                            <div class="ivu-input-wrapper ivu-input-wrapper-large ivu-input-type ivu-input-group ivu-input-group-large ivu-input-group-with-prepend" data-v-2e6c3eff="">
                                                                <input class="ivu-input ivu-input-large" type="password" placeholder="Password again">
                                                            </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="footer" data-v-2e6c3eff="">
                                            <button class="btn ivu-btn ivu-btn-primary ivu-btn-long" data-v-2e6c3eff="">
                                                <span>Register</span>
                                            </button>
                                            <a data-v-2e6c3eff="">Register</a>
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
                            if(abcd==null || abcd=="")
                            {
 
                    var modal=document.getElementById("myModal"); 
                    modal.style.display="none";
                    var element2=document.getElementById("wrapper");
                    var element3=document.getElementById("wrapper2");
                    element2.style.display="none";
                    element3.style.display="none";
                            ed.style.display="block";
                            loginSuccess.style.display="none";
                            }
                            else
                            {
                            ed.style.display="none";
                            loginSuccess.style.display="block";
                            }
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
                            window.location="../afterlogging.php";
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