<html>
    <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            button.lgt
            {
             cursor: pointer;
             background-color: #138D75;
             border: none;
             float:right;
             color: white;
             position: absolute;
             margin-left: 85%;
             outline: none;
             font-family: segoe UI;
             padding: 0.5% 3% 0.5% 3%;
            }
            </style>
    </head>
    <body>
            
         
         <form action="{{url('off')}}"><button class="lgt">Logout <i class="fa fa-sign-out"></i></button></form>
            <img src="logo1.png" height="100" width="200">
        @include('include.account')
        
    </body>
</html>