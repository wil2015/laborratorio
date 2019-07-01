@extends('datatables.eloquent.master')


@section('content')

	<header>
    <div class="title">
      <h2>Editar Equipamento</h2>
    </div>
  </header>

	@include ('layouts.message')

	@include ('layouts.errors')

	<form form id="form1" name="form1"  method="POST" action="/equipamento/{{$equipamento -> id }}/update">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="POST" autocomplete="off">


		@include ('equipamento._form', ['buttonText' => 'Alterar'])
	</form>


@endsection
