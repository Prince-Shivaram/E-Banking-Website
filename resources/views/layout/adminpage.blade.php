<html>
    <head>
        <style>
            p.alert
            {
                font-family: Segoe UI;
                font-size: 18px;
                padding: 0.4%;
                border-left: none;
                border-right: none;
                color:darkblue;
                border:1px solid powderblue;
                text-align:center;
            }
            span{
                color: red;
                font-size: 18px;
                font-weight: bold;
            }
            </style>
    </head>
    <body>
            <img class="logo" src="images\logo1.png" height="100" width="200">
            @if ($message = Session::get('warning'))
	<p class="alert">{{ $message }} <span> *</span></p>
</div>
@endif
        @if($errors->any())
        @foreach($errors->all() as $error)
    <p class="alert">{{$error}} <span> *</span></p>
        @endforeach
        @endif
        @include('include.adminpage')
    </body>
</html>