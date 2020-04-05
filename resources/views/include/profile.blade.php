<html>
    <head><title>Profile</title>
        <style>
            table
            {
                margin-top: 4%;
            width: 70%;
            border:1px solid green;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            div
            {
                padding: 0.5%;
                background-color:#2E86C1;
                text-align: center;
                font-size: 16px;
                color: white;
                font-family: 'Courier New', Courier, monospace;
                font-weight: 500;
            }
            th
            {
                text-align: left;
            }
            </style>
    </head>
    <body>
        <div>Profile</div>
       <center>     
        <table cellpadding="7" rules="rows">
    <tr><th>Fname</th><td>{{$bank->fname}}</td></tr>
    <tr><th>Lname</th><td>{{$bank->lname}}</td></tr>
    <tr><th>Email</th><td>{{$bank->email}}</td></tr>
    <tr><th>Mobile</th><td>{{$bank->mobile}}</td></tr>
    <tr><th>Dob</th><td>{{$bank->dob}}</td></tr>
    <tr><th>Account number</th><td>{{$bank->account}}</td></tr>
    <tr><th>Cif number</th><td>{{$bank->cif}}</td></tr>
    <tr><th>Debit card</th><td>{{$bank->gender}}</td></tr> 
        </table>
       </center>
    </body>
</html>