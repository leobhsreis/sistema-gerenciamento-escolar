<?php 
    //Inclusão de página com o conteúdo do cabeçalho
    require_once "header.php" 

    
?>


        <h1>Sistema de Gerenciamento Escolar</h1>

        <fieldset>
            <legend>Formulário de Cadastro de Alunos</legend><br><br>
             <!-- Formulario de cadastro de alunos -->
            <form action="cadastroaluno.php" method="post">
                        <label for="student_name">Nome:</label>
                        <input type="text" name="student_name" id="student_name"><br><br>

                        <label for="student_email">E-mail: </label>
                        <input type="email" name="student_email" id="student_email"><br><br>

                        <label for="student_cell">Celular</label>
                        <input type="tel" name="student_cell" id="student_cell"><br><br>

                        <input type="submit" value="CADASTRAR ALUNO">

            </form>
        </fieldset>

       
       





<?php include "footer.php" ?>
        