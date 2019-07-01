@extends ('layouts.master')

@section('content')

	<header>
    <div class="title">
      <h2>Editar usuário</h2>
      <p><span class="glyphicon glyphicon-map-marker"></span> {{ resolve('App\NotaryOffice')->name }} </p>
    </div>
  </header>

	@include ('layouts.message')

	@include ('layouts.errors')

	<form method="POST" action="/users/{{ $user->id }}">
		<input type="hidden" name="_method" value="PATCH" autocomplete="off">
		@include ('users._form', ['buttonText' => 'Salvar'])
	</form>


@endsection
