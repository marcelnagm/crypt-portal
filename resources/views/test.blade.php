
@if(Auth::check() )
@if(Auth::user()->isAdmin()  )
<head>
    <meta http-equiv="refresh" content="0; URL=/admin/dashboard" />
</head>
@else
<head>
    <meta http-equiv="refresh" content="0; URL=/user/dashboard" />
</head>
@endif
@else
<head>
    <meta http-equiv="refresh" content="0; URL=/guest/" />
</head>
@endif