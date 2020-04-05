<html>
    <head>
        <style>
            table
            {
                color:red;
                font-size: 18px;
            }
     span
     {
         color:seagreen; font-weight:bold;
            text-align:center;  font-family:Courier New;
     }
            </style>
    </head>
    <body>
       <center>     
        @if ($message = Session::get('success'))
            <p> {{ $message }} &#10004;</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $error)
    <span> <span style="color:red;"> &#10008;</span> {{$error}} </span>
        @endforeach
        @endif
       </center>
        @include('include.admin')
       
       
    </body>
</html>