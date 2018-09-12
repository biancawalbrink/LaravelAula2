<h1>Formulário de cadastro de Mensagens </h1>
<hr>

<form action ="/mensagens" method="post">
{{ csrf_field() }}
Título:  <input type="text" name="titulo"> <br>
Texto:  <input type="text" name="descricao"> <br>
Autor:  <input type="text" name="autor"> <br>
<input type="submit" value="Salvar">
</form>
