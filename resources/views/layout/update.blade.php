<html>
    <head>
        <style>
            html,body
            {
                height: 100%;
                width: 100%;
                margin-left: 0%;
                margin-top: 0%;

            }
            div
            {
                text-align: center;
                color: white;
                padding: 1%;
                font-family: segoe ui;
                margin-bottom: 2%;
                background-color: #2E86C1;
            }
            p
            {
                margin-bottom: 2%;
                color:blue;
                text-align: center;
                font-family: segoe UI;
                border-top: 1px solid grey;
                border-bottom: 1px solid grey;
                padding :1% 0% 1% 0%;
            }
        </style>
    </head>
    <body>
        
        <div>Updation</div>
        @if ($message = Session::get('warning'))
        <p>{{$message}}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $error)
    <p>{{$error}} </p>
        @endforeach
        @endif
        @include('include.update')
    </body>
</html>