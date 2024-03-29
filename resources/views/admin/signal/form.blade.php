<div class="form-group {{ $errors->has('pair_id') ? 'has-error' : ''}}">
    <label for="pair_id" class="control-label">{{ 'Pares' }}</label>
    
       @include('partials.ajaxCombo', 
    array(
    'field' => 'pair_id',
    'items' => $items,
    'selected' => isset($signal->pair_id) ? $signal->pair_id : '',
    'url' => '/user/price/',
    'destination' => 'entry_value'
    ))
    {!! $errors->first('pair_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entry_value') ? 'has-error' : ''}}">
    <label for="entry_value" class="control-label">{{ 'Entry Value' }}</label>
    <input class="form-control" name="entry_value" type="string" id="entry_value" value="{{ isset($signal->entry_value) ? $signal->entry_value : ''}}"   required>
    {!! $errors->first('entry_value', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('target_1') ? 'has-error' : ''}}">
    <label for="target_1" class="control-label">{{ 'Target 1' }}</label>
    <input class="form-control" name="target_1_p" type="string" id="target_1" value="{{ isset($signal->target_1_p) ? $signal->target_1_p : ''}}" placeholder="%"   required>
    {!! $errors->first('target', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('target_2') ? 'has-error' : ''}}">
    <label for="target_2" class="control-label">{{ 'Target 2' }}</label>
    <input class="form-control" name="target_2_p" type="string" id="target_2" value="{{ isset($signal->target_2_p) ? $signal->target_2_p : ''}}" placeholder="%"   required>
    {!! $errors->first('target', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('target_3') ? 'has-error' : ''}}">
    <label for="target_3" class="control-label">{{ 'Target 3' }}</label>
    <input class="form-control" name="target_3_p" type="string" id="target_3" value="{{ isset($signal->target_3_p) ? $signal->target_3_p : ''}}" placeholder="%"   required>
    {!! $errors->first('target', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('stop') ? 'has-error' : ''}}">
    <label for="stop" class="control-label">{{ 'Stop' }}</label>
    <input class="form-control" name="stop_p" type="string" id="stop" value="{{ isset($signal->stop_p) ? $signal->stop_p : ''}}" placeholder="%"   required>
    {!! $errors->first('stop', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stop_up') ? 'has-error' : ''}}">
    <label for="stop_up" class="control-label">{{ 'Stop Up' }}</label>
    <input class="form-control" name="stop_up" type="string" id="stop_up" value="{{ isset($signal->stop_up) ? $signal->stop_up : ''}}" placeholder="%"  required  >
    {!! $errors->first('stop_up', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
