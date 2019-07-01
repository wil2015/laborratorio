@extends('datatables.eloquent.master')

@section('content')
	<header>
    <div class="title">
      <h2>Novo Equipamento</h2>
    </div>
    </header>

	@include ('layouts.message')

	@include ('layouts.errors')

	<form id="form1" name="form1" method="POST" action="/equipamento" autocomplete="off"  class="form-horizontal">
	{{ csrf_field() }}


		@include ('equipamento._form', ['buttonText' => 'Cadastrar'])
	</form>


	@endsection
