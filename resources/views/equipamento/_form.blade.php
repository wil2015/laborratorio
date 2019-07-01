<!--<form id="form1" name="form1" method="post" action="adicionaequipamento.php" class="form-horizontal"> -->
<fieldset>

<!-- Form Name -->
<legend>Equipamento</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-sd-4 control-label" for="Equipamento">Equipamento</label>  
  <div class="col-sd-4">
  <input id="nome" name="nome" type="text" placeholder="" value="{{$equipamento -> nome or 'Default' }}" class="form-control input-md">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-sd-4 control-label" for="textinput">Descriçao</label>  
  <div class="col-sd-4">
  <input id="descricao" name="descricao" type="text" placeholder="" value ="{{$equipamento -> descricao or 'Default'}}" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-sd-4 control-label" for="submite"></label>
  <div class="col-sd-4">
    <button role="submit" id="submite" name="submite" class="btn btn-primary">  {{ $buttonText }} </button>
  </div>
</div>

</fieldset>
<!-- </form> -->

