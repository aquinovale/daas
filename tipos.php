    <header class="header">
           <?php
                require 'topo.php';
#                require 'checkLogin.php';
                if($_POST){
                     if($db->inserir('tipo', $_POST)){
                        header('location:tipos.php');
                     }
                }
           ?>
              <style type="text/css">
            textarea, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input{
	           padding: 10px;
                height:auto;
            }
        </style>
    </header>
    <div class="container">
    <div class="row">
    <div class="span12" style="margin-top:20px">
        <legend class="title">
            <h3>+ Novo Tipo</h3>
        </legend>

		<form action="#" method="post" class="form">
			<p>
				<label for="nome">Nome</label> <input type="text" name="nome"
					id="nome" required>
			</p>
<p>
				<button class="btn">Gravar</button>
			</p>
		</form>


 <div class="">
        <legend class="title">
            <h3>Lista de Tipos</h3>
        </legend>
          <table class="table table-striped">
                <thead>
                    <tr class="bold">
                        <td>Nome/Razão</td>
                        <td style="width: 36px;">Ações</td>
                    </tr>
                </thead>
                <tbody>

                    <?php //inicio do codigo

							$registros = $db->listar('tipo','id,nome');
							foreach( $registros as $registro ){

						?>
					     <tr class="bold">
                        <td><?php echo $registro['nome'] ?></td>
                        <td style="width: 36px;">
			<a href="alterarCliente.php?id=<?php echo $registro['id'] ?>"><i class="icon-pencil"> </i></a>
			<a href="excluirCliente.php?id=<?php echo $registro['id'] ?>"><i class="icon-remove"> </i></a>
								</td>
                    </tr>
					  <?php //fim do codigo
					    }
						?>

                </tbody>
            </table>
	</div>
<?php
                require 'footer.php';
           ?>


