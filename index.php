<?php

try {
    $host = "localhost";
    $dbname = "oauth_server_db";
    $username = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connectioasdadadadaaadadn failed: adaadadad" . $e->getMessage();
}

echo 'connected to db';

// To install Git:
// 1. For Windows: Download from https://git-scm.com/download/win
// 2. For Mac: brew install git
// 3. For Linux: sudo apt-get install git
//
// After installing, verify with: git --version