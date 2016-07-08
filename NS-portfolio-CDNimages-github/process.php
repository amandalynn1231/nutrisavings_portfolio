
<?php 
if (($_SERVER['REQUEST_METHOD'] == 'POST') && (!empty($_POST['action']))):
	 
// include "process.php"; 
	if (isset($_POST['projectName'])) { $project_name = $_POST['projectName']; }
	if (isset($_POST['requester'])) { $requester = $_POST['requester']; }
	if (isset($_POST['authorizer'])) { $authorizer = $_POST['authorizer']; }
	if (isset($_POST['dateNeeded'])) { $date_needed = $_POST['dateNeeded']; }
	if (isset($_POST['new_work_type'])) { $work_type = $_POST['new_work_type']; }
	if (isset($_POST['projectOverview'])) { $project_overview = $_POST['projectOverview']; }

	if (isset($_POST['reference'])) { $reference = $_POST['reference']; }
	if (isset($_POST['requesttype'])) { $requesttype = $_POST['requesttype']; }
	if (isset($_POST['ajaxrequest'])) { $ajaxrequest = $_POST['ajaxrequest']; }

	$formerrors = false;

	$formdata = array (
		'projectName' => $project_name,
		'requester' => $requester,
		'authorizer' => $authorizer,
		'dateNeeded' => $date_needed,
		'new_work_type' => $work_type,
		'projectOverview' => $project_overview,
		);

	if($project_name === '') :
		$err_required = <div class="error">Required</div>;
		$formerrors = true;
	endif;

	if (!($formerrors)) :
		$to = "amandalynn1231@gmail.com";
		$subject = "From $requester -- Marketing Request";
		$message = json_encode($formdata);

		$replyto = "From: info@nutrisavings.com /r/n".
					"Reply-To: donotreply@nutrisavings.com /r/n";

		if (mail($to, $subject, $message)):
			$msg = "Your form has been submitted";
			if ( $ajaxrequest ) :
				echo "<script>$('#myform').before(<div id=\'\"formmessage\"><p>Your request has been successfully sent to the Marketing Team!</p></div>'); $('#myform').hide();</script>";
				endif;
		else:
			$msg = "Sorry, there has been a problem sending your request. Please retry.";
		endif; 

	endif;
?>