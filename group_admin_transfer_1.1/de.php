<?php
	$german = array(

		'group_admin_transfer:transfer' => 'Gründer-Status der Gruppe übertragen auf',
		'group_admin_transfer:transfer:myself' => 'Mich',
		'group_admin_transfer:transfer:nofriends' => 'Sobald Du andere Mitglieder der Seite als Freunde hast, hast Du die Möglichkeit, den Gründer-Status auf sie zu übertragen.',
		'group_admin_transfer:transfer_submit' => 'Übertragen',
		'group_admin_transfer:confirm' => 'Achtung: nach der Bestätigung kannst Du die Übertragung des Gründer-Status nicht mehr rückgängig machen! Bitte informiere Deinen Freund / Deine Freundin vorher darüber!\n Bestätigst Du die Übertragung des Gründer-Status dieser Gruppe auf',

		'group_admin_transfer:transfer:error' => 'Der folgende Fehler ist aufgetreten',
		'group_admin_transfer:transfer:error:notowner' => 'Der Benutzer unter dem Du gerade angemeldet bist, ist nicht der derzeitige Gründer dieser Gruppe',
		'group_admin_transfer:transfer:error:owner' => 'Der als neuer Gründer der Gruppe gewählte Benutzer ist der gleiche wie der alte',
		'group_admin_transfer:transfer:error:input' => 'Unzulässige Eingabe',

		'group_admin_transfer:transfer:success' => 'Der Gründer-Status der Gruppe wurde auf %s übertragen',

		// admin settings
		'group_admin_transfer:admin:settings:transferrights' => 'Wähle aus, wer den Gründer-Status von Gruppen ändern darf',
		'group_admin_transfer:admin:settings:transferrights:option:all' => 'Alle Admins',
		'group_admin_transfer:admin:settings:transferrights:option:admin_only' => 'Nur der Haupt-Administrator',

	);

	add_translation("de",$german);
?>