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

function insertRunningbacks($rName, $rRYOA) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO runningback (runningback_name, runningback_ryoa) VALUES (?, ?)");
        $stmt->bind_param("ss", $rName, $rRYOA);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateRunningbacks($rName, $rARYOA, $rbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update runningback set runningback_name = ?, runningback_RYOA = ? where runningback_id = ?");
        $stmt->bind_param("ssi", $rName, $rRYOA, $rbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function deleteQuarterbacks($rbid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from runningback where runningback_id=?");
        $stmt->bind_param("i", $rbid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
