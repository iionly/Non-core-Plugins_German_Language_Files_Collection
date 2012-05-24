<?php
	/**
	* ElggChat - Pure Elgg-based chat/IM
	*
	* English language file
	*
	* @package elggchat
	* @author ColdTrick IT Solutions
	* @copyright Coldtrick IT Solutions 2009
	* @link http://www.coldtrick.com/
	* @version 0.4
	*/

	$german = array(
		'elggchat' => "ElggChat",
		'elggchat:title' => "ElggChat",
		'elggchat:chat:profile:invite' => "Zum Chatten einladen",
		'elggchat:chat:send' => "Senden",

		'elggchat:friendspicker:info' => "Freunde online",
		'elggchat:friendspicker:online' => "Online",
		'elggchat:friendspicker:offline' => "Offline",

		'elggchat:chat:invite' => "Einladen",
		'elggchat:chat:leave' => "Verlassen",
		'elggchat:chat:leave:confirm' => "Bist Du sicher, dass Du diese Session verlassen willst?",

		'elggchat:action:invite' => "<b>%s</b> hat <b>%s</b> eingeladen",
		'elggchat:action:leave' => "<b>%s</b> hat die Session verlassen",
		'elggchat:action:join' => "<b>%s</b> ist zur Session dazu gekommen",

		'elggchat:session:name:default' => "Chat-Session (%s)",
		'elggchat:session:onlinestatus' => "Letzte Aktion: %s",

		// Plugin settings
		'elggchat:admin:settings:hours' => "%s Stunde(n)",

		'elggchat:admin:settings:maxsessionage' => "Max. Zeit, die eine Session im Leerlauf sein darf bevor sie geschlossen wird",

		'elggchat:admin:settings:chatupdateinterval' => "Aktualisierungsintervall (in Sekunden) des Chat-Fensters",
		'elggchat:admin:settings:maxchatupdateinterval' => "Wenn innerhalb von 10 Aktualisierungsintervallen keine neuen Daten zurückgesendet werden (\"idle\"), wird das Aktualisierungsintervall verdoppelt bis dieses Maximum (in Sekunden) erreicht ist",
		'elggchat:admin:settings:monitorupdateinterval' => "Aktualisierungsintervall (in Sekunden) der Überwachung der Chat-Sessions auf neue Chat-Anfragen",
		'elggchat:admin:settings:enable_sounds' => "Soundausgabe aktivieren",
		'elggchat:admin:settings:enable_flashing' => "Blinken bei neuen Nachrichten aktivieren",
		'elggchat:admin:settings:enable_extensions' => "Erweiterungen aktivieren",

		'elggchat:admin:settings:online_status:active' => "Max. Zeit (in Sekunden), bis ein Chat-Teilnehmer als pausierend (\"idle\") betrachtet wird",
		'elggchat:admin:settings:online_status:inactive' => "Max. Zeit (in Sekunden), bis ein Chat-Teilnehmer als inaktiv betrachtet wird",

		// User settings
		'elggchat:usersettings:enable_chat' => "ElggChat-Toolbar aktivieren?",
		'elggchat:usersettings:allow_contact_from' => "Folgende Mitglieder dürfen mich über ElggChat kontaktieren",
		'elggchat:usersettings:allow_contact_from:all' => "Alle können mich kontaktieren",
		'elggchat:usersettings:allow_contact_from:friends' => "Nur Freunde dürfen mich kontaktieren",
		'elggchat:usersettings:allow_contact_from:none' => "Niemand darf mich kontaktieren",
		'elggchat:usersettings:show_offline_user' => "Mitglieder, die offline sind, anzeigen",

		// Toolbar actions
		'elggchat:toolbar:minimize' => "ElggChat-Toolbar minimieren",
		'elggchat:toolbar:maximize' => "ElggChat-Toolbar maximieren",
	);

	add_translation("de", $german);

?>
