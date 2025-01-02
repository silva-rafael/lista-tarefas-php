<?php 
require_once 'config.php'; 
require_once 'header.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tarefa = $_POST['tarefa'];


    $stmt = $pdo->prepare("INSERT INTO tarefas (tarefa) VALUES (:tarefa)");
    $stmt->bindValue('tarefa', $tarefa);
    $stmt->execute();

}

?>

<form action="#" method="post">
    <div class="form-group">
        <label for="tarefa">Tarefa</label>
        <input type="text" name="tarefa" id="tarefa" placeholder="Digite sua tarefa">
    </div>
    <input type="submit" value="Enviar">
</form>

<?php require_once 'footer.php'; ?>