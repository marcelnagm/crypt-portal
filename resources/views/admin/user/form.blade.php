<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($user->name) ? $user->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="control-label">{{ 'password' }}</label>
    <input class="form-control" name="password" type="password" id="password" value="{{ isset($user->password) ? $user->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="email" type="email" id="email" value="{{ isset($user->email) ? $user->email : ''}}" >
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('email_verifyed_at') ? 'has-error' : ''}}">
    <label for="email_verifyed_at" class="control-label">{{ 'Email Verifyed At' }}</label>
    <input class="form-control" name="email_verifyed_at" type="datetime-local" id="email_verifyed_at" value="{{ isset($user->email_verifyed_at) ? $user->email_verifyed_at : ''}}" >
    {!! $errors->first('email_verifyed_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('whatsapp') ? 'has-error' : ''}}">
    <label for="whatsapp" class="control-label">{{ 'Whatsapp' }}</label>
    <input class="form-control" name="whatsapp" type="text" id="whatsapp" value="{{ isset($user->whatsapp) ? $user->whatsapp : ''}}" >
    {!! $errors->first('whatsapp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('profile_id') ? 'has-error' : ''}}">
    <label class="main-content-label tx-11 tx-medium tx-gray-600"> Perfil
</label>
    @include('partials.select', 
    array(
    'field' => 'profile_id',
    'items' => $items,
    'selected' => isset($user->profile_id) ? $user->profile_id : ''
    ))
    
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
