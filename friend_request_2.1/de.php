<?php
	$german = array(
		'friend_request' => "Freundschaftsanfrage",
		'friend_request:menu' => "Freundschaftsanfragen",
		'friend_request:title' => "Freundschaftsanfragen",

		'friend_request:new' => "Neue Freundschaftsanfrage",

		'friend_request:newfriend:subject' => "%s möchte Dein(e) Freund(in) werden!",
		'friend_request:newfriend:body' => "%s möchte Dein(e) Freund(in) werden! Aber vorher mußt Du die Freundschaftsanfrage noch annehmen... also melde Dich jetzt gleich an, damit Du der Anfrage zustimmen kannst!

Um Deine noch nicht beantworteten Freundschaftsanfragen zu sehen, folge dem Link (Du mußt angemeldet sein, bevor Du den Link anklickst oder Du wirst auf die Anmeldeseite umgeleitet werden):

%s

(Du kannst auf diese Email NICHT antworten.)",

		// Actions
		// Add request
		'friend_request:add:failure' => "Entschuldigung, es ist ein Problem aufgetreten und die Anfrage konnte nicht verarbeitet werden. Bitte versuche es noch einmal.",
		'friend_request:add:successful' => "Du hast %s gebeten, Dein(e) Freund(in) zu werden. Er/Sie muss Deine Anfrage erst annehmen, bevor er/sie in Deine Freundesliste aufgenommen werden wird.",
		'friend_request:add:exists' => "Du hast bereits eine Freundschaftsanfrage an %s geschickt.",

		// Approve request
		'friend_request:approve' => "Annehmen",
		'friend_request:approve:successful' => "%s ist nun mit Dir befreundet",
		'friend_request:approve:fail' => "Bei der Erzeugung der Freunschaftsbeziehung mit %s ist ein Fehler aufgetreten",

		// Decline request
		'friend_request:decline' => "Ablehnen",
		'friend_request:decline:subject' => "%s hat Deine Freundschaftsanfrage abgelehnt",
		'friend_request:decline:message' => "Hallo %s,

%s hat Deine Freundschaftsanfrage leider abgelehnt.",
		'friend_request:decline:success' => "Die Freundschaftsanfrage wurde abgelehnt",
		'friend_request:decline:fail' => "Bei der Ablehnung der Freundschaftsanfrage ist ein Fehler aufgetreten. Bitte versuche es noch einmal.",

		// Revoke request
		'friend_request:revoke' => "Zurücknehmen",
		'friend_request:revoke:success' => "Die Freundschaftsanfrage wurde zurückgenommen",
		'friend_request:revoke:fail' => "Beim Zurücknehmen der Freundschaftsanfrage ist ein Fehler aufgetreten. Bitte versuche es noch einmal.",

		// Views
		// Received
		'friend_request:received:title' => "Empfangene Freundschaftsanfragen",
		'friend_request:received:none' => "Derzeit gibt es keine unbeantworteten Anfragen.",

		// Sent
		'friend_request:sent:title' => "Versendete Freundschaftsanfragen",
		'friend_request:sent:none' => "Derzeit sind keine von Dir versendeten Freundschaftsanfragen unbeantwortet.",
	);

	add_translation("de", $german);
?>