<?php
	/**
	 * Elgg Antispam Registration plugin
	 * Developed by Dr Sanu P Moideen @ Team Webgalli
	 * http://webgalli.com
	 * Looking for Elgg development/hosting ? Visit us
	 * webgalli@gmail.com
	 * Skype : "drsanupmoideen" or "team.webgalli"
	 * @package Webgalli_antispammer
	 */

$german = array(
		// IP related
	'webgalli_antispammer:title' => "Mitglieder mit IP-Adresse: %s",
	'webgalli_antispammer:find' => "Finde andere Mitglieder mit der gleichen IP-Adresse",
	'webgalli_antispammer:moreinfo' => "Ausführliche Informationen über die IP-Adresse",
	'webgalli_antispammer:info' => "Info",
	'webgalli_antispammer:searchip' => "IP-Adresse prüfen",
	'webgalli_antispammer:search:info' => "Ausführliche IP-Info",
	'webgalli_antispammer:adminlink' => "IP-Adresse anzeigen",

	'webgalli_antispammer:addedtodb' => "Der Benutzer wurde zur Datenbank hinzugefügt",
	'webgalli_antispammer:cannotaddtodb' => "Das Hinzufügen des Benutzers zur Datenbank ist fehlgeschlagen",
	'webgalli_antispammer:nouserfound' => "Der Benutzer konnte nicht gefunden werden",
	'webgalli_antispammer:getanapi' => "Beziehe von Stop forum spam einen API-Key, um dieses Plugin zu verwenden",
	'webgalli_antispammer:markasspammer' => "Als Spammer kennzeichnen",
	'webgalli_antispammer:checkip' => "IP-Adresse prüfen",
	'webgalli_antispammer:maindomains' => "Haupt-Spam-Domains; Du kannst mehr Domains durch Kommas getrennt in die Liste aufnehmen. Verwende das Format 'domain1','domain2'",
	'webgalli_antispammer:inputapi' => "Gebe Deien API-Key ein",
	'webgalli_antispammer:problem' => "Es gibt ein Problem!!!",
	'webgalli_antispammer:noapikeyfound' => "Du hast das Webgalli_Antispammer-Plugin aktiviert, aber keinen API-Key eingegeben",
	'webgalli_antispammer:noip' => "Die IP-Adresse des Benutzers wurde nicht gefunden",
	'webgalli_antispammer:deleteuser' => "Den Account des Benutzers löschen, nachdem er in die Datenbank aufgenommen wurde?",
	'webgalli_antispammer:yes' => "Ja",
	'webgalli_antispammer:no' => "Nein",
	'webgalli_antispammer:youareaspammer' => "Entschuldigung. Die Registrierung ist fehlgeschlagen, da Du als Spammer identifiziert wurdest.",
	'webgalli_antispammer:hide' => "Entschuldigung. Die Registrierung ist fehlgeschlagen, da Deine IP-Adresse nicht ermittelt werden konnte. Die Registrierung zu dieser Community-Seite setzt voraus, dass Du Deine IP-Adresse nicht verschleierst, damit möglichen Spammern der Beitritt verwehrt werden kann."

	);

add_translation("de",$german);
?>