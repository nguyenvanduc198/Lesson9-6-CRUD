<?php

function getData($sql){
    require "database.php";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function getDataUnnamedPlaceholder($sql){
    require "database.php";
    try {

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}



function getDataSecure($sql, $input, $fetchAll = true){
    require "database.php";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute($input);
        $result = $fetchAll ? $stmt->fetchAll(PDO::FETCH_ASSOC) : $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function executeQuery($sql){
    require "database.php";
    try {
        $conn->exec($sql);
    
        // If there're result from SQL query, use fetchAll
        // $stmt = $conn->prepare($sql);
        // $stmt->execute($input);
        // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $stmt->closeCursor();
        $conn = null;
        // return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}

function executeQueryPrepare($sql, $input){
    require __DIR__."/database.php";
    try {
        $stmt = $conn->prepare($sql);
        $result = $stmt->execute($input);
        $stmt->closeCursor();

        // $result = $conn->lastInsertId();
        $conn = null;
        return $result;
    
    } catch(PDOException $e) {
        $conn = null;
        echo $sql . "<br>" . $e->getMessage();
    }
}