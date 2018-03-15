<?php

function pr2_select($pdo, $user_id)
{
	$stmt = $pdo->prepare('
        SELECT *
        FROM pr2
        WHERE user_id = :user_id
        LIMIT 1
    ');
	$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
	$result = $stmt->execute();
	if (!$result) {
        throw new Exception('could not fetch from pr2');
    }

    $row = $stmt->fetch(PDO::FETCH_OBJ);
    if (!$row) {
        throw new Exception('user pr2 row not found');
    }

    return $row;
}