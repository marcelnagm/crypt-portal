<div style="display:none;" class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="control-label">{{ 'User Id' }}</label>
    <input class="form-control" name="user_id" type="number" id="user_id" value="{{ isset($usersignature->user_id ) ? $usersignature->user_id : $user}}" >
    {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('signature_type_id') ? 'has-error' : ''}}">
    <label for="signature_type_id" class="control-label">Tipo de Assinatura</label>
      @include('partials.select', 
    array(
    'field' => 'signature_type_id',
    'items' => $items,
    'selected' => isset($usersignature->signature_type_id) ? $usersignature->signature_type_id : ''
    ))
    
    {!! $errors->first('signature_type_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('start_at') ? 'has-error' : ''}}">
    <label for="start_at" class="control-label">{{ 'Start At' }}</label>
    <input class="form-control" name="start_at" type="datetime-local" id="start_at" value="{{ isset($usersignature->start_at) ? $usersignature->start_at : ''}}" >
    {!! $errors->first('start_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('finish_at') ? 'has-error' : ''}}">
    <label for="finish_at" class="control-label">{{ 'Finish At' }}</label>
    <input class="form-control" name="finish_at" type="datetime-local" id="finish_at" value="{{ isset($usersignature->finish_at) ? $usersignature->finish_at : ''}}" >
    {!! $errors->first('finish_at', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
