<?php
function selectWRQB($wrid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select q.quarterback_id, q.quarterback_name, q.quarterback_adot, t.teamname from quarterback q join team t on q.quarterback_id = t.quarterback_id where t.quarterback_id=?");
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
