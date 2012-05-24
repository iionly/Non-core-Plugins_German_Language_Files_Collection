<?php

	$german = array(

		/**
		 * Menu items and titles
		 */

			'poll' => "Rundfrage",
			'polls' => "Rundfragen",
			'poll:user' => "Rundfragen von %s",
			'poll:user:friends' => "Rundfragen der Freunde von %s",
			'poll:your' => "Deine Rundfragen",
			'poll:posttitle' => "Rundfrage von %s: %s",
			'poll:friends' => "Rundfragen von Freunden",
			'poll:yourfriends' => "Die neuesten Rundfragen Deiner Freunde",
			'poll:everyone' => "Alle Rundfragen",
			'poll:read' => "Rundfrage aufrufen",
			'poll:addpost' => "Rundfrage hinzufügen",
			'poll:editpost' => "Rundfrage bearbeiten",
			'poll:text' => "Text der Rundfrage",
			'poll:strapline' => "%s",
			'item:object:poll' => 'Rundfragen',
			'poll:question' => "Frage",
			'poll:responses' => "Antwortmöglichkeiten (durch Kommas getrennt)",
			'poll:results' => "[+] Zeige die Ergebnisse",
		/**
	     * poll widget
	     **/
			'poll:widget:label:displaynum' => "Anzahl der anzuzeigenden Rundfragen",

         /**
	     * poll river
	     **/

	        //generic terms to use
	        'poll:river:created' => "%s startete",
	        'poll:river:updated' => "%s aktualisierte",
	        'poll:river:posted' => "%s schrieb",
	        'poll:river:voted' => "%s voted",
	        //these get inserted into the river links to take the user to the entity
	        'poll:river:create' => "eine neue Rundfrage: ",
	        'poll:river:update' => "die Rundfrage: ",
	        'poll:river:annotate' => "einen Kommentar zu der Rundfrage: ",
	        'poll:river:vote' => "on the poll: ",
		/**
		 * Status messages
		 */

			'poll:posted' => "Deine Rundfrage wurde hinzugefügt.",
			'poll:responded' => "Danke für Deine Teilnahme. Deine Stimme wurde registriert.",
			'poll:deleted' => "Deine Rundfrage wurde gelöscht.",
			'poll:totalvotes' => "Gesamtzahl der abgegebenen Stimmen: ",
			'poll:voted' => "Deine Stimme wurde in dieser Rundfrage bereits registriert. Danke für die Teilnahme.",


		/**
		 * Error messages
		 */

			'poll:save:failure' => "Deine Rundfrage konnte nicht gespeichert werden. Bitte versuche es noch einmal.",
			'poll:blank' => "Entschuldigung. Du mußt sowohl eine Frage als auch die Antwortmöglichkeiten eingeben bevor Du die Rundfrage starten kannst.",
			'poll:notfound' => "Entschuldigung. Wir konnten diese Rundfrage nicht finden.",
			'polls:nonefound' => "Es wurden keine Rundfragen von %s gefunden.",
			'poll:notdeleted' => "Entschuldigung. Die Rundfrage konnte nicht gelöscht werden."
	);

	add_translation("de",$german);

?>