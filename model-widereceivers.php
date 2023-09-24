<?php
function selectWidereceivers() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select widereceiver_id, widereceiver_name, widereceiver_adot from 'widereceiver'");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
