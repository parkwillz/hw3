<?php
function selectQBWR($qbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select w.widereceiver_id, w.widereceiver_name, w.widereceiver_adot, t.teamname from widereceiver w join team t on w.widereceiver_id = t.widereceiver_id where t.quarterback_id=?");
         $stmt->bind_param("i", $qbid);  
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
