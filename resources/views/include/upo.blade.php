<html>
    <head><title>password</title>
        <style>
            html,body
            {
                height: 100%;
                width:100%;
                margin: 0% 0%  0% 0%;
                           }
            table
            {
                
 
 border:1px solid lightgrey;
 margin-top: 2%;
  font-family: segoe ui;
 color:darkgrey;
 
 border-radius: 5px;
 padding: 1% 5% 1% 5%;
 }
 input[type="submit"]
 {
    background-color:#2E86C1;
    color:white;
    padding: 1% 6% 1% 6%;
    outline:none;
    border-radius: 2px;
    cursor: pointer;
    border:none;
    font-size: 15px;
    
 }  
 
            </style>
    </head>
    <body>
        
        <center>
        <form action="{{url('users/user').$bank}}" method="POST">
            {{ csrf_field() }}
                <table cellpadding="8">
                    <tr><Td><input type="hidden" name="_method" value="PUT"> </Td></tr>
                     <tr><td>old password</td><td><input type="password" name="opwd"></td></tr>
                        <tr><td>new password</td><td><input type="password" name="pwd"></td>   
                    </tr>
                    <tr><td>confirm password</td><td><input type="password" name="cpwd"></td></tr>
                    <tr><td align="right" colspan="2"><BR><input type="submit" value="change"></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>