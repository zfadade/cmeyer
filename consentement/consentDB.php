<?php	

require_once('../includes/config.php');

function updateConsent($userEmail, $consent)  {
	try {
		global $db;

		echo "Updating consent for $userEmail to $consent\n";

		// update into database
		$stmt = $db->prepare('UPDATE user_info SET consent = :consent, consentModDate = NOW() WHERE userEmail = :userEmail') ;
		$retVal = $stmt->execute(array(
			':userEmail' => $userEmail,
			':consent' => $consent
		));

		if ($stmt->rowCount() > 0) {
			echo "It worked! Modified " . $stmt->rowCount() . " row";
		}
		else {
			echo "ERROR! Unable to update consent for user $userEmail to $consent: \n" ;
			error_log("ERROR! Unable to update consent for user $userEmail to $consent", 1, "zfadade@yahoo.com");
		}

		// } else {		// } else {


		// 	// //insert into DB
		// 	// $stmt = $db->prepare('UPDATE userEmail SET username = :username, email = :email WHERE memberID = :memberID') ;
		// 	// $stmt->execute(array(
		// 	// 	':username' => $username,
		// 	// 	':email' => $email,
		// 	// 	':memberID' => $memberID
		// 	// ));

		// }
		

		//redirect to index page
		// header('Location: users.php?action=updated');
		// exit;

	} catch(PDOException $e) {
		// TODO:  log error
		echo "Unable to update consent for user $userEmail to $consent: " . $e->getMessage();
	    echo $e->getMessage();
	}
}