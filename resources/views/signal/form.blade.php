<div class="form-group {{ $errors->has('pair_id') ? 'has-error' : ''}}">
    <label for="pair_id" class="control-label">{{ 'Pair Id' }}</label>
    <input class="form-control" name="pair_id" type="number" id="pair_id" value="{{ isset($signal->pair_id) ? $signal->pair_id : ''}}" >
    {!! $errors->first('pair_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('entry_value') ? 'has-error' : ''}}">
    <label for="entry_value" class="control-label">{{ 'Entry Value' }}</label>
    <input class="form-control" name="entry_value" type="number" id="entry_value" value="{{ isset($signal->entry_value) ? $signal->entry_value : ''}}" >
    {!! $errors->first('entry_value', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('target') ? 'has-error' : ''}}">
    <label for="target" class="control-label">{{ 'Target' }}</label>
    <input class="form-control" name="target" type="number" id="target" value="{{ isset($signal->target) ? $signal->target : ''}}" >
    {!! $errors->first('target', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stop') ? 'has-error' : ''}}">
    <label for="stop" class="control-label">{{ 'Stop' }}</label>
    <input class="form-control" name="stop" type="number" id="stop" value="{{ isset($signal->stop) ? $signal->stop : ''}}" >
    {!! $errors->first('stop', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stop_up') ? 'has-error' : ''}}">
    <label for="stop_up" class="control-label">{{ 'Stop Up' }}</label>
    <input class="form-control" name="stop_up" type="number" id="stop_up" value="{{ isset($signal->stop_up) ? $signal->stop_up : ''}}" >
    {!! $errors->first('stop_up', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
