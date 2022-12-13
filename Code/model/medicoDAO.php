<?php

function conectaDB() {
    
    $pdo =  new PDO("mysql:host=localhost:3308;dbname=rafaelkozlowski", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, $pdo::ERRMODE_EXCEPTION);
    return $pdo;
}

function cadMedicoDAO($medico) {
    $pdo = conectaDB();
    $sql = $pdo->prepare("INSERT INTO medicos VALUES(?,?,?,?,?,?)");
    
    $sql->execute(array_values($medico));
}

function altMedicoDAO($medico) {
    $pdo = conectaDB();
    
    try {
        
        $sql = $pdo->prepare('UPDATE medicos SET
        crm= :crm,
        crm_estado= :crm_estado,
        nome= :nome,
        telefone= :telefone,
        salario= :salario,
        especialidades= :especialidades
        WHERE crm= :crm');
        $sql->execute($medico);
        
    } catch (PDOException $e) {
       
        throw new Exception ($e->getMessage());
    }
}

function delMedicoDAO($crm) {
    $pdo = conectaDB();
    $pdo->exec("DELETE FROM medicos WHERE crm=$crm");
}

function listarMedicosDAO() {
    $pdo = conectaDB();
    
    $sql = $pdo->prepare("SELECT * FROM medicos");
    $sql->execute();
    
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function buscarMedicoDAO($crm) {
    $pdo = conectaDB();
    $sql = $pdo->prepare("SELECT * FROM medicos WHERE crm= ?");
    $sql->execute(array($crm));
   
    return $sql->fetch(PDO::FETCH_ASSOC);
}
