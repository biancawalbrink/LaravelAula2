<h1>Formulário de Edição da Mensagem código {{$msg->id}}</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/mensagens/{{$msg->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Título: 		<input type="text" name="titulo" value="{{$msg->titulo}}"><br>
	Descrição:		<input type="text" name="descricao" value="{{$msg->descricao}}">   <br>
	Agendado para:  <input type="text" name="autor" value="{{$msg->autor}}">   <br>
	<input type="submit" value="Salvar">
</form>
