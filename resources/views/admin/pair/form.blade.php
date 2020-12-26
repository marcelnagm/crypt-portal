<div class="form-group {{ $errors->has('pair') ? 'has-error' : ''}}">
    <label for="pair" class="control-label">{{ 'Pair' }}</label>
    <input class="form-control" name="pair" type="text" id="pair" value="{{ isset($pair->pair) ? $pair->pair : ''}}" >
    {!! $errors->first('pair', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('main_coin') ? 'has-error' : ''}}">
    <label for="main_coin" class="control-label">{{ 'Main Coin' }}</label>
    <input class="form-control" name="main_coin" type="text" id="main_coin" value="{{ isset($pair->main_coin) ? $pair->main_coin : ''}}" >
    {!! $errors->first('main_coin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('sec_coin') ? 'has-error' : ''}}">
    <label for="sec_coin" class="control-label">{{ 'Sec Coin' }}</label>
    <input class="form-control" name="sec_coin" type="text" id="sec_coin" value="{{ isset($pair->sec_coin) ? $pair->sec_coin : ''}}" >
    {!! $errors->first('sec_coin', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('min_quantity') ? 'has-error' : ''}}">
    <label for="min_quantity" class="control-label">{{ 'Min Quantity' }}</label>
    <input class="form-control" name="min_quantity" type="number" id="min_quantity" value="{{ isset($pair->min_quantity) ? $pair->min_quantity : ''}}" >
    {!! $errors->first('min_quantity', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
