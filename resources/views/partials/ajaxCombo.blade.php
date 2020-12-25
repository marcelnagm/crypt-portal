<select class="form-control select2" name="{{$field}}" id="{{$field}}" onchange="ajax(this)">

    <option label="Escolha uma opção">
    </option>
    @foreach($items as $item)    
    <option value="{{$item->id}}" 
    <?php if ($selected == $item->id) echo 'selected' ?>           
            >
        {{$item}}
    </option>
    @endforeach
</select >

<!-- comment --><script>
    function ajax($obj) {
        var xhttp = new XMLHttpRequest();
//            xhttp.open("GET", '/user/op/1/edit', true);
        xhttp.open("GET", "<?php echo $url; ?>?id=" + $obj.value, true);
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
//                console.log(xhttp.response);
                document.getElementById("<?php echo $destination; ?>").value = xhttp.responseText;
//        document.getElementById("<?php echo $destination; ?>").value = 999;
            }
        };
        xhttp.send();
//        if (xhttp.readyState == 4 && xhttp.status == 200) {
 //        }
    }
</script>