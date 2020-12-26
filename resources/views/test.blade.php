
@if(Auth::check() )
@if(Auth::user()->isAdmin()  )
<head>
    <meta http-equiv="refresh" content="0; URL=/admin/dashboard" />
</head>
@emdif
@if(Auth::user()->isUser()  )
<head>
    <meta http-equiv="refresh" content="0; URL=/user/dashboard" />
</head>
@endif
@if(Auth::user()->isGuest()  )
<head>
    <meta http-equiv="refresh" content="0; URL=/guest/" />
</head>
@endif
@else
<head>
    <meta http-equiv="refresh" content="0; URL=/login" />
</head>
@endif