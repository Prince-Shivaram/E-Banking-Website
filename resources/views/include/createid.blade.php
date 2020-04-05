<html>
    <head><title>password page</title>
        <script>
            function show()
            {
                var a = document.getElementById("pw");
                var b = document.getElementById("rpw");
                if(a.type == "password" || b.type == "password")
                {
                    a.type = "text";
                    b.type = "text";
                }
                else
                {
                    a.type = "password";
                    b.type = "password";
                }
            }
        </script>
        <style>
            html,body
            {
                height: 100%;
                width:100%;
                margin-top: 0%;
                margin-left: 0%;
                background-color: #F7F9F9;
            }
           
            table
            {
                margin-top: 5%;
                color: #283747;
                border-radius: 5px;
                font-family:Segoe UI;
                padding: 1% 6% 1% 6%;
                border:1px solid darkgray;
            }
            input[type="text"],input[type="password"]
            {
                border-radius: 2px;
                border:1px solid gray;
                padding:1% 3% 1% 3%;
                font-family: times new roman;
                font-size: 16px;
                color: black;
            }
            input[type="submit"]
            {
                cursor: pointer;
                background-color:#2E86C1;
                border:none;
                padding:1% 6% 1% 6%;
                outline: none;
                color:white;
                border-radius: 2px;
                font-family:segoe uI;
                font-size: 20px;
            }
            div.user
            {
                text-align: center;
                background-color:#2E86C1;;
                padding: 0.5%;
                color:white;
                margin-bottom: 0.5%; 
                font-size: 20px;
                font-family: segoe UI;

            }
            img.banner
            {
                margin-top: 3%;
                border-radius: 5px;
            }
            </style>
    </head>
    <body>
        
    <div class="user">Welcome dear customer</div>
        <center>
         <table cellpadding="8">
               
                

         <form action="">
                    <tr><td>Create username</td><th><input type="text"  name="user_id"></th></tr>
         <tr><td>M</td><th><input type="text" value=""  name="mobile"></th></tr>
                    <tr><td>Create password</td><th><input type="password" id="pw" name="wd"></th></tr>
                    <tr><td>Re-enter password</td><th><input type="password" id="rpw" name="rwd"></th></tr>
                    <tr><td></td><td><input type="checkbox" onclick="show()" name="chk">show password</td></tr>
                    <tr><th colspan="2" align="right"><input type="submit" name="passubmit" value="submit"></th></tr>
                </form>
            </table>
    <img class="banner" src="banner2.jpg" height="300" width="1000">
        </center>
    </body>
    </html>