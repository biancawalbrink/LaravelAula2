<h1>Lista de Mensagens</h1>
 <hr>
@foreach($mensagens as $mensagem)
     <h3><a href="mensagens/{{$mensagem->id}}">{{$mensagem->titulo}}</a></h3>
     <p>{{$mensagem->texto}}</p>
     <p>{{$mensagem->autor}}</p>
     <a href="mensagens/{{$mensagem->id}}">Visualizar</a>
     <a href="mensagens/{{$mensagem->id}}/edit">Editar</a>
     <a href="mensagens/{{$mensagem->id}}/delete">Deletar</a>
     <br>
     @endforeach