<div class="form-group {{ $errors->has('exchange_id') ? 'has-error' : ''}}">
    <label for="exchange_id" class="control-label">{{ 'Exchange Id' }}</label>
      @include('partials.select', 
    array(
    'field' => 'exchange_id',
    'items' => $items,
    'selected' => isset($configuration->exchange_id) ? $configuration->exchange_id : ''
    ))
    {!! $errors->first('exchange_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('api_key') ? 'has-error' : ''}}">
    <label for="api_key" class="control-label">{{ 'Api Key' }}</label>
    <input class="form-control" name="api_key" type="text" id="api_key" value="{{ isset($configuration->api_key) ? $configuration->api_key : ''}}" >
    {!! $errors->first('api_key', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('api_secret') ? 'has-error' : ''}}">
    <label for="api_secret" class="control-label">{{ 'Api Secret' }}</label>
    <input class="form-control" name="api_secret" type="text" id="api_secret" value="{{ isset($configuration->api_secret) ? $configuration->api_secret : ''}}" >
    {!! $errors->first('api_secret', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bot_active') ? 'has-error' : ''}}">
    <label for="bot_active" class="control-label">{{ 'Bot Active' }}</label>
    <div class="radio">
    <label><input name="bot_active" type="radio" value="1" {{ (isset($configuration) && 1 == $configuration->bot_active) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="bot_active" type="radio" value="0" @if (isset($configuration)) {{ (0 == $configuration->bot_active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('bot_active', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('balance_operation') ? 'has-error' : ''}}">
    <label for="balance_operation" class="control-label">{{ 'Balance Operation' }}</label>
    <input class="form-control" name="balance_operation" type="number" id="balance_operation" value="{{ isset($configuration->balance_operation) ? $configuration->balance_operation : ''}}" >
    {!! $errors->first('balance_operation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('target_profile') ? 'has-error' : ''}}">
    <label for="target_profile" class="control-label">{{ 'Target Profile' }}</label>
      @include('partials.select', 
    array(
    'field' => 'target_profile',
    'items' => $items2,
    'selected' => isset($configuration->target_profile) ? $configuration->target_profile : ''
    ))
    {!! $errors->first('exchange_id', '<p class="help-block">:message</p>') !!}
    
    {!! $errors->first('target_profile', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stop_loss') ? 'has-error' : ''}}">
    <label for="stop_loss" class="control-label">{{ 'Stop Loss' }}</label>
    <input class="form-control" name="stop_loss" type="string" id="stop_loss" value="{{ isset($configuration->stop_loss) ? $configuration->stop_loss : ''}}" >
    {!! $errors->first('stop_loss', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telegram_active') ? 'has-error' : ''}}">
    <label for="telegram_active" class="control-label">{{ 'Telegram Active' }}</label>
    <div class="radio">
    <label><input name="telegram_active" type="radio" value="1" {{ (isset($configuration) && 1 == $configuration->telegram_active) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="telegram_active" type="radio" value="0" @if (isset($configuration)) {{ (0 == $configuration->telegram_active) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
    {!! $errors->first('telegram_active', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('telegram_key') ? 'has-error' : ''}}">
    <label for="telegram_key" class="control-label">{{ 'Telegram Key' }}</label>
    <input class="form-control" name="telegram_key" type="text" id="telegram_key" value="{{ isset($configuration->telegram_key) ? $configuration->telegram_key : ''}}" >
    {!! $errors->first('telegram_key', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
