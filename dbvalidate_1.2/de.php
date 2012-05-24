<?php

$german = array(

	'dbvalidate:title' => "Datenbank-Helfer",
	'dbvalidate:validate' => "Validieren",
	'dbvalidate:repair' => "Reparieren",
	'dbvalidate:instructions' => "Dieses Plugin durchsucht die Elgg-Datenbank nach Benutzern ohne Benutzernamen, Entities mit ungültigem Eintrag für den Eigentümer und unvollständigen Entity-Einträgen. Die Reparaturfunktion beseitigt diese Fehler. Die Benutzereinträge bekommen Benutzernamen der Form \"userxx\" zugewiesen. Entities mit ungültigen Einträgen des Eigentümers werden Deinem Benutzeraccount zugewiesen und unvollständige Entities werden gelöscht. Bitte sichere zuerst Deine Datenbank bevor Du die Reparaturfunktion verwendest!",
	'dbvalidate:badusernames' => "Benutzeraccounts ohne Benutzernamen",
	'dbvalidate:nobadusernames' => "Keine Benutzeraccounts ohne Benutzernamen gefunden",
	'dbvalidate:fixbadusernames' => "Repariere Benutzeraccounts ohne Benutzernamen",
	'dbvalidate:badowners' => "Entities mit ungültigem Eintrag für den Eigentümer",
	'dbvalidate:nobadowners' => "Keine Entities ohne gültigen Eintrag für den Eigentümer gefunden",
	'dbvalidate:fixbadowners' => "Repariere Entities mit ungültigem Eintrag für den Eigentümer",
	'dbvalidate:newowner' => "Du bist nun der Eigentümer",
	'dbvalidate:failowner' => "Das Zuweisen des Eigentümers ist fehlgeschlagen",
	'dbvalidate:done' => "Fertig!",
	'dbvalidate:type' => "Objekttyp",
	'dbvalidate:incompleteentities' => 'Unvollständige Entity-Einträge',
	'dbvalidate:noincompleteentities' => 'Keine unvollständigen Entity-Einträge',
	'dbvalidate:fixincompleteentities' => 'Entferne unvollständige Entity-Einträge',
	'dbvalidate:removed' => 'Entfernen abgeschlossen',

);

add_translation("de",$german);

?>