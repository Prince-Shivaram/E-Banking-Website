<html><title>Account</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script> 
    $(document).ready(function(){
      $(".close").click(function(){
        $(".adc").slideToggle("slow");
      });
    });
    </script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
                    <script> 
                        $(document).ready(function(){
                          $(".btn").click(function(){
                            $(".red").close("slow");
                          });
                        });
                        </script>
 <style>
    html,body
            {
                height:100%;
                width:100%;
                margin-left: 0%;
                margin-top: 0%;
                background-color: #F4F6F7;
            }
   button.lgt
            {
                float:right;
                margin-right: 4%;
                border:none;
                padding:1%;
                cursor: pointer;
                margin-top: -0.15%;
                font-family: Courier New;
                padding-left: 2%;
                padding-right: 2%;
                color:#F2F3F4;
                outline: none;
                background-color: #34495E;
            }
            img.rado
            {
              border-radius: 150px;
              border: 1px solid lightgrey;
              margin-top: 15%;
              box-shadow: 5px 5px 5px lightgrey;
            }
            table.info
            {
              margin-top: 20%;
              margin-left: 40%;
              border:2px solid lightgrey;
              border-radius: 1px;
              font-family: segoe ui;
            }
            td{
              text-align: center;
              background-color: lightgray;
            }
            
    div.had
           {
                background-color: #2E86C1;
                text-align:center;
                font-family: verdana;
                color:#F2F3F4;
           }
  .dropbtn 
           {
                background-color:transparent;
                color: white;
                padding-top: 8%;
                padding-bottom: 8%;
                outline: none;
                font-size: 15px;
                border: none;
           }
           footer
           {
             font-size: 20px;
             color:darkgray;
             font-family: segoe ui;
             background-color: lightgray;
             margin-top: 5%;
             padding: 1%;
           }
.dropdown
          {
                position: relative;
                display: inline-block;
          }

.dropdown-content 
          {
               display: none;
               position: absolute;
               background-color: #f1f1f1;
               width:100px;
               border-left: 1px solid lightgrey;
               border-right: 1px solid lightgrey;
               border-bottom: 1px solid lightgrey;
               z-index: 1;
               padding: 0% 6% 0% 6%;
               margin-top: 2%;
          }

.dropdown-content a
          {
               font-size: 11px;
               color: black;
               padding-top:5px;
               padding-bottom: 5px;
               border-bottom: 1px solid lightgrey;
               text-decoration: none;
               display:block;
          }
.dropdown:hover .dropdown-content
          {
               display: block;
              
          }
          .dropdown-content a:hover
          {
           color:blue;
          }
.acc
{
  position: absolute;
  margin-left: 2%;
  margin-top: 2%;
  font-family: times new roman;
}
        </style>
    </head>
    <body>
          
          
        <div class="had">
                <div class="dropdown">
                        <button class="dropbtn">MY ACCOUNT</button>
                        <div class="dropdown-content">
                          <a href="{{url('/admins/admin').$post->id}}">Update profile</a>
                          <a href="#">Account summary</a>
                          <a href="{{url('/banks/bank').$post->id}}">view profile</a>
                          <a href="#">Credit cards</a>
                        <a href="{{url('users/user').$post->id}}">Change password</a>
                          <a href="#">Deposits</a>
                        </div>
                      </div>&nbsp;&nbsp;&nbsp;&nbsp;
                      <div class="dropdown">
                            <button class="dropbtn">PAYMENTS</button>
                            <div class="dropdown-content">
                              <a href="#">Fund transfer</a>
                              <a href="#">Bill payments</a>
                              <a href="#">Monthly statment</a>
                              <a href="#">Recharge</a>
                              <a href="#">Mange payees</a>
                              <a href="#">Quick transfer</a>
                            </div>
                          </div>&nbsp;&nbsp;&nbsp;&nbsp;
                          <div class="dropdown">
                                <button class="dropbtn">SERVICES</button>
                                <div class="dropdown-content">
                                  <a href="#">Life insurance</a>
                        <a href="#">Genrel insurance</a>
                        <a href="#">My details</a>
                        <a href="#">Investment online</a>
                        <a href="#">Personal details</a>
                                </div>
                              </div>&nbsp;&nbsp;&nbsp;&nbsp;
                              <div class="dropdown">
                                    <button class="dropbtn">CONTACT US</button>
                                    <div class="dropdown-content">
                                      <a href="#">mail us</a>
                                      <a href="#">fax us</a>
                                      <a href="#">customer care</a>
                                    </div>
                                  </div>
        </div>


        <table class="acc">
            <tr><th><img class="user" src="user1.png" height="100" width="100" style="border-radius:150px;"></th></tr>
            <tr><th>Welcome {{$post->fname}} {{$post->lname}}</th></tr>
          </table>
          <button class="close" style="position:absolute;margin-left:75.27%;margin-top:2%;z-index:+1;">X</button>
          <img class="adc" src="rig.gif" height="200" width="500" style="margin-top:2%;margin-left: 40%;border-radius:2px; position:absolute;"><br>
          <img class="banner2" src="ibm.gif" width="400" height="200" style="position: absolute; margin-left: 2%; margin-top:18%;">   
         <table cellpadding="8" class="info">
           <tr style="background-color:#2E86C1;color:white;"><th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Balance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cif number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
            <th>e-mail</th></tr>
           <tr><td>&#x20B9; {{$post->balance}}</td><td>{{$post->account}}</td><td>{{$post->cif}}</td><td>{{$post->email}}</td></tr>
         </table>
         <center><img src="gopo.png" height="150" width="150" class="rado">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <img src="gopo1.jpg" height="150" width="150" class="rado">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="gopo2.png" height="150" width="150" class="rado">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="gopo3.jpg" height="150" width="150" class="rado">
         </center>
         <center><footer>Welcome dear customer</footer></center>
        </body>

</html>