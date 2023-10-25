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

function selectQBWR($qbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("select t.quarterback_id, t.team_id, w.widereceiver_id, w.widereceiver_name, w.widereceiver_adot, t.teamname from widereceiver w join team t on w.widereceiver_id = t.widereceiver_id where t.quarterback_id=?");
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

function selectQuarterbacksForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT quarterback_id, quarterback_name FROM quarterback order by quarterback_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function selectWidereceiversForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT widereceiver_id, widereceiver_name FROM widereceiver order by widereceiver_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertTeam($qbid, $wrid, $tName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO team (quarterback_id, widereceiver_id, teamname) VALUES (?, ?, ?)");
        $stmt->bind_param("iis", $qbid, $wrid, $tName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateTeam($qbid, $wrid, $tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update team set quarterback_id = ?, widereceiver_id = ? where team_id = ?");
        $stmt->bind_param("iii", $qbid, $wrid, $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteTeam($tid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from team where team_id=?");
        $stmt->bind_param("i", $tid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
