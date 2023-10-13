<?php
function selectQuarterbacks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT quarterback_id, quarterback_name, quarterback_adot FROM `quarterback`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertQuarterbacks($qName, $qADOT) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO quarterback (quarterback_name, quarterback_adot) VALUES (?, ?)");
        $stmt->bind_param("ss", $qName, $qADOT);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateQuarterbacks($qName, $qADOT, $qbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update 'quarterback' set 'quarterback_name' = ?, 'quarterback_adot' = ?) where quarterback_id = ?");
        $stmt->bind_param("ssi", $qName, $qADOT, $qbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteQuarterbacks($qbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from 'quarterback' where quarterback_id=?");
        $stmt->bind_param("i", $qbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
