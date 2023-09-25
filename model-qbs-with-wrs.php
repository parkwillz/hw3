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

function selectWRQB($wrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select q.quarterback_id, q.quarterback_name, q.quarterback_adot, t.teamname from quarterback q join team t on q.quarterback_id = t.quarterback_id where t.widereceiver_id=?");
         $stmt->bind_param("i", $wrid);  
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
