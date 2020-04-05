<html>
    <head><title>Admin</title>
        <style>
            html,body
            {
                width:100%;
                height:100%;
                margin-left: 0%;
                margin-top:0%;
            }
            div.admn
            {
                text-align: center;
                background-color: #2E86C1;
                color:#F7F9F9;
                font-family: Courier New;
                font-size: 20px;
                padding:0.5%;
            }
            input[type="submit"],input[type="reset"]
 {
    background-color:#2E86C1;
    color:#F7F9F9;
    padding-left: 2%;
    padding-right: 2%;
    font-family: Verdana;
    outline:none;
    padding-bottom: 2%;
    cursor: pointer;
    border:none;
    font-size: 15px;
    width: 100%;
    margin-left: 0%;
    margin-right: 0%;
 }
 table
 {
 border:1px solid lightgrey;
 margin-top: 2%;
 box-shadow:0px 15px 10px -15px #111; 
 color:#2C3E50;
 font-family: Segoe UI;
 border-radius: 5px;
 padding: 1% 5% 1% 5%;
 }
 input[type="date"]
 {
     text-transform: uppercase;
     font-family: segoe UI;
     font-size: 13px;
     padding-left: 22%;
 }
 input
 {
     padding:2%;
     border:1px solid grey;
     background-color:transparent;
     border-radius: 2px;
     color:black;
     font-size: 15px;
     font-family: Courier New;
 }
            </style>
    </head>
    <body>
        
        <div class="admn">Admin page</div>
       <center> <table cellpadding="10">
            <form action="{{url('/banks')}}" method="POST">
                {{ csrf_field() }}
                <tr><td>First name</td><td><input type="text" name="fname"></td>
                    <td>last name</td><td><input type="text" name="lname"></td></tr>
                    <tr><td>Gender</td><td><input type="radio" name="gender" value="M"> M <input type="radio" name="gender" value="F"> F</td>
                        <td>Date of birth</td><td><input type="date" name="dob"></td></tr>
                <tr><td>Account number</td><td><input type="text" name="account"></td>
                <td>Debit card no</td><td><input type="text" name="debitcard"></td></tr>
                <tr><td>Balance</td><td><input type="text" name="balance"></td>
                <td>Cif number</td><td><input type="text" name="cif"></td></tr> 
                <tr><td>Pin</td><td><input type="password" name="ipin"></td>
                <td>E-mail address</td><td><input type="text" name="email"></td></tr>  
                <tr><td>MObile</td><td><input type="text" name="mobile"></td>
                    <td>Address</td><td><input type="text" name="addr"></td></tr>
                <tr><th colspan="2"><br><br><input type="submit" value="Submit" name="subm"></th>
                    <th colspan="2"><br><br><input type="reset" value="Reset" name="reset"></th>
                </tr>
            </form>
        </table></center>
    </body>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
              <script>
                  CKEDITOR.replace( 'editor' );
              </script>
</html>
?>