<?php
function selectWidereceivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT widereceiver_id, widereceiver_name, widereceiver_adot FROM `widereceiver`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertWidereceivers($wName, $wADOT) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO widereceiver (widereceiver_name, widereceiver_adot) VALUES (?, ?)");
        $stmt->bind_param("ss", $wName, $wADOT);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateWidereceivers($wName, $wADOT, $wrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update widereceiver set widereceiver_name = ?, widereceiver_adot = ? where widereceiver_id = ?");
        $stmt->bind_param("ssi", $wName, $wADOT, $wrid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteWidereceivers($wrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from widereceiver where widereceiver_id=?");
        $stmt->bind_param("i", $wrid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
