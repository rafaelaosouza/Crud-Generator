<div class="row">
    <div class="form-group col-sm-6">
        <label for="nameSingle" class="required">Nome no singular</label>
        <input type="text" name="nameSingle" id="nameSingle" class="form-control"  style="text-transform:uppercase"  required autofocus value="{{ old('nameSingle',$crud->nameSingle) }}">
    </div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        <label for="nameMultiple" class="required">Nome no plural</label>
        <input type="text" name="nameMultiple" id="nameMultiple" class="form-control"  style="text-transform:uppercase"  required autofocus value="{{ old('nameMultiple',$crud->nameMultiple) }}">
    </div>
</div>