<html>
    <head>
    </head>
    <body>
           
            <img src="logo1.png" height="100" width="200">
            @if ($message = Session::get('warning'))
            <p class="error">{{$message}}</p>
            @endif
                    @if($errors->any())
                    @foreach($errors->all() as $error)
                <p class="error">{{$error}}</p>
                    @endforeach
                    @endif
        @include('include.createid')
    </body>
</html>