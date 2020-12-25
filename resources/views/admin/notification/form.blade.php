<div class="form-group {{ $errors->has('type_id') ? 'has-error' : ''}}">
    <label for="type_id" class="control-label">{{ 'Type Id' }}</label>
    <input class="form-control" name="type_id" type="number" id="type_id" value="{{ isset($notification->type_id) ? $notification->type_id : ''}}" >
    {!! $errors->first('type_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($notification->user_id) ? $notification->user_id : ''}}" >
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
<div class="form-group {{ $errors->has('readed') ? 'has-error' : ''}}">
    <label for="readed" class="control-label">{{ 'Readed' }}</label>
    <div class="radio">
    <label><input name="readed" type="radio" value="1" {{ (isset($notification) && 1 == $notification->readed) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="readed" type="radio" value="0" @if (isset($notification)) {{ (0 == $notification->readed) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('readed', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
