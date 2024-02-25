<?php

session_start();

// Verifica se a variável de sessão 'tarefas' existe
if (!isset($_SESSION['tarefas'])) {
    $_SESSION['tarefas'] = []; // Inicializa como um array vazio se não existir
}

// Adiciona uma nova tarefa se o formulário for submetido
if (isset($_POST['texto'])) {
    $texto = $_POST['texto'];
    $_SESSION['tarefas'][] = $texto; // Adiciona

}






?>