<html>
    <head>
        <style>
             div
 {
    color: white;
    font-family: 'Courier New', Courier, monospace;
    font-size: 16px;
    background-color:#2E86C1;
    text-align: center;
    padding:0.5%;  
 }  
 p
  {
     border-top: 1px solid grey;
     border-bottom: 1px solid gray;
     color:blue;
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     font-size: 16px;
     text-align: center;
     padding: 0.5%;
     
 }
            </style>
    </head>
    <body>
            <div>Change password!</div><br><Br><Br>
        
            @if ($message = Session::get('warning'))
            <p>{{$message}}</p>
            @endif
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                <p>{{$error}}</p>
                    @endforeach
                    @endif
            
        @include('include.upo')
    </body>
</html>