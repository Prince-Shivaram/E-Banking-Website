<html>
    <head>
        <style>
            html,body
            {
                margin-left: 0%;
                margin-top: 0%;
                width: 100%;
            }
            input[type="password"],input[type="text"]
            {
                padding: 2% 3% 2% 3%;
                font-size: 18px;
                font-family: 'Times New Roman', Times, serif;
                border-radius: 2px;
                border: 1px solid lightgrey;
            }
            input[type="submit"]
            {
                border: none;
                padding: 1% 10% 1.5% 10%;
                font-size: 18px;
                color:white;
                border-radius: 2px;
                font-family: segoe UI;
                background-color: #2E86C1;
            }
           
            table
            {
                font-family: segoe UI;
                border-radius: 5px;
                border:2px solid lightgrey;
                padding: 1% 5% 1% 4%;
            }
        </style>
    </head>
    <body>
            <center>
                
            <form action="{{url('/banks')}}" method="GET">
                    <table cellpadding="5">
                        <tr><td rowspan="2" align="left"><img class="red" src="avatar.png" height="100" width="100"></td><td>Admin_id</td><td><input type="text" name="adminid"></td></tr>
                        <tr><td>Password</td><td><input type="password" name="password"></td></tr>
                        <tr><th colspan="3" align="right"><br><input type="submit" value="login" name="asub"></th></tr>
                    </table>
                </form>
                <img src="images\govt.jpg">
            </center>
    </body>
</html>