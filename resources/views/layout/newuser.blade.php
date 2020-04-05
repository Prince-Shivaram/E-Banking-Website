<html>
    <head><title>New user</title>
        <style>
            span.soro{
               color:darkgreen;
               font-family: segoe UI;
               font-size: 18px;
               margin-left: 27%;
               position: absolute;
               margin-top: 2%;
            }
            
            </style>
    </head>
    <body>
            <img  src="images\logo1.png" height="100" width="200">
            @if ($message = Session::get('warning'))
            <span class="soro">{{$message}}</span>
            @endif
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                <span class="soro">{{$error}}</span>
                    @endforeach
                    @endif
                    @include('include.newuser')
    </body>
</html>