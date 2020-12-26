@if(Auth::user()->isAdmin())
<head>
  <meta http-equiv="refresh" content="0; URL=/admin/dashboard" />
</head>
@endif
@if(Auth::user()->isUser())
<head>
  <meta http-equiv="refresh" content="0; URL=/user/dashboard" />
</head>
@endif
<head>
  <meta http-equiv="refresh" content="0; URL=/guest/" />
</head>