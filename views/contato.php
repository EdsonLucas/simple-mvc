<h1>Contato</h1>

<form method="POST" action="<?php echo BASE_URL ?>/contato/enviar_email">
	Nome:<br/>
	<input type="text" name="nome" /><br/><br/>

	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Assunto:<br/>
	<input type="text" name="assunto" /><br/><br/>

	Mensagem:<br/>
	<textarea name="mensagem"></textarea><br/><br/>

	<input type="submit" value="Enviar Mensagem" />
</form>

