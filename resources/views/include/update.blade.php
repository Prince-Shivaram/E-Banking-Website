<html>
    <head><title>edit</title>
        <style>
              table
              {
                  border:1px solid lightgrey;
                  border-radius: 5px;
                  padding: 1% 5% 1% 5%;
                  font-family: segoe ui;
              }
              input[type="text"]
              {
                  padding: 2% 4% 2% 4%;
                  font-family: courier new;
              }
              input[type="submit"]
              {
                  padding: 1% 8% 2% 8%;
                  font-family: segoe ui;
                 font-size: 16px;
                  border-radius: 2px;
                  color:white;
                  border: none;
                  background-color: #2E86C1;
              }
            </style>
    </head>
    <body>
        
        <center>
            <form action="{{url('admins/admin').$fo}}" method="POST">
                {{ csrf_field() }}
                    <input type="hidden" name="_method" value="put">
                <table cellpadding="8">
     
                <tr><td>e-mail</td><td><input type="text" name="email"></td></tr>
                   <tr> <th colspan="2">OR</th></tr>
                        <tr><td>mobile</td><td><input type="text" name="mobile"></td>       
                    </tr>
                    <tr><th colspan="2" align="right"><input type="submit" value="submit"></th></tr>
                </table>
            </form>
        </center>
    </body>
</html>