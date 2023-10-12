<?php
function selectRunningbacks() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT runningback_id,runningback_name, runningback_ryoa FROM `runningback`");
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
