<div class="form-group {{ $errors->has('type_id') ? 'has-error' : ''}}">
    <label for="type_id" class="control-label">{{ 'Type Id' }}</label>
    <input class="form-control" name="type_id" type="number" id="type_id" value="{{ isset($notification->type_id) ? $notification->type_id : ''}}" >
    {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
     <select id="user_id" class="form-control select2" name="user_id"   required>
   
    <option label="Escolha uma opção">
    </option>
    <option label="Todos Usuarios" value="1">
    </option>
    <option label="Todos Usuarios- Admin" value="2">
    </option>
    <option label="Todos Usuarios- Traders" value="3">
    </option>
    <option label="Todos Usuarios- User" value="4">
    </option>

</select >

    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="control-label">{{ 'Title' }}</label>
    <input class="form-control" name="title" type="text" id="title" value="{{ isset($notification->title) ? $notification->title : ''}}" >
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
    <label for="message" class="control-label">{{ 'Message' }}</label>
    <input class="form-control" name="message" type="text" id="message" value="{{ isset($notification->message) ? $notification->message : ''}}" >
    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
