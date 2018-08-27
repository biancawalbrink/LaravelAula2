h1>Formulário de cadastro de Mensagens </h1>
<hr>

<from action ="/mensagem" method="post">
{{csrf_field() }}
Título:  <input type="text" name="titulo"> <br>
Descrição:  <input type="text" name="texto"> <br>
Autor:  <input type="text" name="text"> <br>
	<input type="submit" value="Salvar">
</from>
