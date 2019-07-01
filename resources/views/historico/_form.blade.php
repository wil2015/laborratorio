
<fieldset>

<!-- Form Name -->
<legend>Historico</legend>

<input id="equipamento" name="equipamento_id" type="hidden" value="{{ $id }}">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Responsavel</label>  
  <div class="col-md-4">
  <input id="textinput" name="usuario" type="text" placeholder="" class="form-control input-md" required>
    
  </div>
</div>





<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dataini">Data Inicio</label>  
  <div class="col-md-4">
  <input id="data_inicio" name="data_inicio" type="date" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="datafim">Dara Devolução</label>  
  <div class="col-md-4">
  <input id="data_fim" name="data_fim" type="date" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempo">Tempo de Uso</label>  
  <div class="col-md-4">
  <input id="tempo_uso" name="tempo_uso" type="time" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempo">Quantidade de Amostras</label>  
  <div class="col-md-4">
  <input id="quantida" name="quantidade_de_amostras" type="number" placeholder="" class="form-control input-md" required>
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tempo">Observação</label>  
  <div class="col-md-4">
  <input id="observacao" name="observacao" type="textarea" placeholder="" class="form-control input-md" required>
    
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Inclui</button>
  </div>
</div>

</fieldset>
