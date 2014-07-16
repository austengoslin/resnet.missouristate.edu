<?php
    $authorized_computers = array(
        "RLSURESNETUSS.MissouriState.edu",
        "RLSRESNET.MissouriState.edu",
		"RLSURESNETADMIN.MissouriState.edu"
    );
    
    function get_contact_form_messages($pdo, $latest_id){
        $sql = "SELECT * FROM messages WHERE id > ?;";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(array($latest_id));
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return json_encode($results);
    }
    
    if(!isset($_GET['latest_id'])){
        die("API Error. Please contact ResNet.");
    }
    
    if(!in_array(gethostbyaddr($_SERVER["REMOTE_ADDR"]), $authorized_computers)){
        die("Auth Error. ResNet has been notified.");
    }
    
    $latest_id = intval($_GET['latest_id']);
    $db = new PDO("sqlite:C:\wwwdata\contact_form_messages.sqlite3");
    print(get_contact_form_messages($db, $latest_id));
    
    
?>