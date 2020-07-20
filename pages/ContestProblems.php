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
                    <a style="color:inherit;" href="../afterlogging.php">Home</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="Problems.php">Problems</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="Contests.php">Contests</a>
                </li>
                <li class="ivu-menu-item">
                <a style="color:inherit;" href="Rankings.php">Rankings</a>
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
                        <a style="color:inherit;" href="pages/home.php">Home</a>
                    </li>
                    <li class="ivu-dropdown-item" data-v-b3967d56="">
                        <a style="color:inherit;" href="pages/settings.php">Settings</a>
                    </li>
                    <li class="ivu-dropdown-item" data-v-b3967d56="">
                        <a style="color:inherit;" href="pages/logout.php">Logout</a>
                    </li>
                </ul>
                </div>
                </div>
            </div>
                </ul>
                <script>
$(document).mouseup(function(e){
    var container = $("#dropdownforlogin");

    if(!container.is(e.target) && container.has(e.target).length === 0){
        container.hide();
    }
});
</script>
                </div>
                </div>
                <div class="content-app">
                <div class="flex-container" data-v-1a125a7e="">
                <div id="contest-main" data-v-1a125a7e="">
                <div data-v-37737398="" data-v-1a125a7e="">
                <div class="ivu-card ivu-card-bordered" data-v-37737398="">
                <div class="ivu-card-head">
                <div class="panel-title">
                <div data-v-37737398=""><?php 
                $var=$_GET['id'];
                $status=$_GET['status'];
                if($status==1)
                header('location:Contests.php');
                ?>Problems List
                </div>
                </div>
                <div class="ivu-card-extra">
                <div class="panel-title"></div>
                </div>
                <div class="ivu-card-body" style="padding:0px;">
                <div class="panel-body">
                <div class="ivu-table-wrapper" data-v-37737398="">
                <div class="ivu-table">
            <div class="ivu-table-header">
                <table style="width:1000px;" cellspacing="0" cellpadding="0">
                <colgroup>
                <col width="150">
                <col width="383">
                <col width="383">
            </colgroup>
            <thead>
                <tr>
                    <th class="">
                    <div class="ivu-table-cell">
                        <span class="">#</span>
                    </div>
                    </th>
                    <th class="">
                    <div class="ivu-table-cell">
                        <span class="">Title</span>
                    </div>
                    </th>
                    <th class="">
                    <div class="ivu-table-cell">
                        <span class="">AC</span>
                    </div>
                    </th>
                </tr>
            </thead>
            </table>
            </div>    
            <div class="ivu-table-body">
                <table style="width:1000px;" cellspacing="0" cellpadding="0">
                <?php
                $var=$_GET['id'];
                $status=$_GET['status'];
                $link=mysqli_connect('localhost','root','','Project') or die("database error");
                $query="SELECT * FROM ContestProblem WHERE contest_id='$var'";
                $result=mysqli_query($link,$query) or die;
                echo '<colgroup>';
                    echo '<col width="150">';
                    echo '<col width="383">';
                    echo '<col width="383">';
                    echo '</colgroup>';
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
                {
                    
                    echo '<tbody class="ivu-table-tbody">';
                    echo '<tr class="ivu-table-row">';
                    echo '<td class="">';
                    echo '<div class="ivu-table-cell">';
                    echo '<span>';
                    echo $row['qid'];
                    echo '</span>';
                    echo '</div>';
                    echo '</td>';
                    echo '<td class="">';
                    echo '<div class="ivu-table-cell">';
                    echo '<span>';
                    echo "<a style='color:inherit;' href='ProblemPage.php?id={$row['qid']}'>";
                    echo $row['title'];
                    echo '</span>';
                    echo '</a>';
                    echo '</div>';
                    echo '</td>';
                    echo '<td class="">';
                    echo '<div class="ivu-table-cell">';
                    echo '<span>';
                    echo $row['number_of_ac'];
                    echo '</span>';
                    echo '</div>';
                    echo '</td>';
                    echo '</tr>';
                    echo '</tbody>';

                }

                ?>
                </table>
            </div>
            </div>
                </div>
                </div>
                </div>
                </div>
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