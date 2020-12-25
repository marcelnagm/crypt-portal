
{{$selected}}
<select id="{{$field}}" class="form-control select2" name="{{$field}}">
<select class="form-control select2" name="{{$field}}" id="{{$field}}">
    
    <option label="Escolha uma opção">
    </option>
@foreach($items as $item)    
    <option value="{{$item->id}}" 
            <?php 
            if($selected == $item->id) echo 'selected'      ?>           
            >
      {{$item}}
    </option>
    @endforeach
</select >
