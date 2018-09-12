<h1>Lista de Mensagens</h1>
 <hr>

<!-- EXIBE MENSAGENS DE SUCESSO -->
   @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif 


@foreach($mensagens as $mensagem)
     <h3><a href="mensagens/{{$mensagem->id}}">{{$mensagem->titulo}}</a></h3>
     <p>{{$mensagem->texto}}</p>
     <p>{{$mensagem->autor}}</p>
     <a href="mensagens/{{$mensagem->id}}">Visualizar</a>
     <a href="mensagens/{{$mensagem->id}}/edit">Editar</a>
     <a href="mensagens/{{$mensagem->id}}/delete">Deletar</a>
     <br>
@endforeach

<br>
<br>
<a href="/mensagens/create">Criar Mensagem</a>