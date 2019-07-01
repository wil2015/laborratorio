@extends ('layouts.master')

@section('content')

	<header>
    <div class="title">
      <h2>Nova ATividade</h2>
    </div>
    </header>

	@include ('layouts.message')

	@include ('layouts.errors')

	<form method="POST" action="/historico" autocomplete="off" class="form-horizontal">
	{{ csrf_field() }}

		@include ('historico._form', ['buttonText' => 'Cadastrar'])
	</form>

@endsection
