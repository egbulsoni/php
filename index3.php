<?php

# mysqli

#conexao com banco de dados mysql

$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);

/*
# Criando tabelas usando PHP
# Tabela cursos (nome do curso, carga horaria)
$query = "CREATE TABLE CURSOS (
    id int not null auto_increment,
    nome_curso varchar(255) not null,
    carga_horaria int not null,
    primary key(id)
)";

// $executar = mysqli_query($conexao, $query);

if($executar){
    echo "Executado com sucesso (cursos)<br>";
}
else{
    echo "Falha ao executar (cursos)<br>";
}
# Tabela alunos (nome do aluno, data de nascimento)
$query = "CREATE TABLE ALUNOS(
    id int not null auto_increment,
    nome_aluno varchar(255) not null,
    data_nascimento varchar(255),
    primary key(id)
    )";

// $executar = mysqli_query($conexao, $query);
# Tabela alunos_cursos (aluno, curso)
if($executar){
    echo "Executado com sucesso (alunos)<br>";
}
else{
    echo "Falha ao executar (alunos)<br>";
}
$query = "CREATE TABLE ALUNOS_CURSOS(
    id_aluno_curso int not null auto_increment,
    id_aluno int not null,
    id_curso int not null,
    primary key(id_aluno_curso)
    )";

// $executar = mysqli_query($conexao, $query);

if($executar){
    echo "Executado com sucesso (aluno_cursos)<br>";
}
else{
    echo "Falha ao executar (aluno_cursos)<br>";
}

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('Jose', '01-01-1990')";
$executar = mysqli_query($conexao, $query);

if($executar){
    echo "Executado com sucesso (inserção)<br>";
} else {
    echo "Falha ao executar (alunos_cursos)<br>";
}

$query = "INSERT INTO ALUNOS(nome_aluno, data_nascimento) VALUES('Maria', '01-04-1991')";
$executar = mysqli_query($conexao, $query);

if($executar){
    echo "Executado com sucesso (inserção)<br>";
} else {
    echo "Falha ao executar (alunos_cursos)<br>";
}

# Inserir cursos

$query = "INSERT INTO CURSOS(nome_curso, carga_horaria) VALUES('PHP E MYSQL', 10)";
$executar = mysqli_query($conexao, $query);

$query = "INSERT INTO alunos_cursos(id_aluno, id_curso) VALUES(6,1)";
mysqli_query($conexao, $query);
*/

// if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID = 4"))
// {
//     echo 'Apagado com sucesso';
// } else {
//     echo 'Falha ao apagar dados';
// }

// if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID = 5"))
// {
//     echo 'Apagado com sucesso';
// } else {
//     echo 'Falha ao apagar dados';
// }

// if(mysqli_query($conexao, "DELETE FROM ALUNOS WHERE ID = 6"))
// {
//     echo 'Apagado com sucesso';
// } else {
//     echo 'Falha ao apagar dados';
// }

// if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Jose Miguel' WHERE ID = 7"))
// {
//     echo 'sucesso';
// }
// if(mysqli_query($conexao, "UPDATE ALUNOS SET NOME_ALUNO = 'Maria Capitolina' WHERE ID = 8"))
// {
//     echo 'sucesso';
// }

// echo '<table>
//         <tr>
//             <th>id</th>
//             <th>Nome</th>
//             <th>Data de nascimento</th>
//         </tr>';

// $consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS");

// // print_r($consulta);
// while($linha = mysqli_fetch_array($consulta)){
//     echo '<tr>';
//     echo '<td>';
//     echo $linha['id'];
//     echo '<td>';
//     echo '<td>';
//     echo $linha['nome_aluno'];
//     echo '<td>';
//     echo '<td>';
//     echo $linha['data_nascimento'];
//     echo '</td>';
//     echo '</tr>';
    
// }
// echo '</table>';
// mysqli_query($conexao, "ALTER TABLE ALUNOS CHANGE id id_alunos int not null auto_increment");

$consulta = mysqli_query($conexao, "SELECT ALUNOS.nome_aluno, CURSOS.nome_curso 
FROM alunos, cursos, alunos_cursos
WHERE alunos_cursos.id_aluno = alunos.id_alunos and alunos_cursos.id_curso = cursos.id_curso");

// $consulta = mysqli_query($conexao, "SELECT * FROM ALUNOS_CURSOS");
echo '<table border=1><tr><th>Nome do aluno</th><th>Nome do curso</th></tr>';
while($linha = mysqli_fetch_array($consulta)){
    echo '<tr><td>'.$linha['nome_aluno'].'</td>';
    echo '<td>'.$linha['nome_curso'].'</td></tr>';
}

echo '</table>';