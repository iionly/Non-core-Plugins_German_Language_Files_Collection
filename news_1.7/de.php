<?php

	$german = array(

		/**
		 * Menu items and titles
		 */

	 'new'  =>  "Neuigkeit" ,
	 'news'  =>  "Neuigkeiten" ,
			'news:user' => "Neuigkeiten von %s",
			'news:user:friends' => "Neuigkeiten der Freunde von %s",
			'news:your' => "Deine Neuigkeiten",
			'news:posttitle' => "Neuigkeiten von %s: %s",
			'news:friends' => "Neuigkeiten von Freunden",
			'news:yourfriends' => "Neuigkeiten Deiner Freunde",
			'news:everyone' => "Alle Neuigkeiten",
			'news:newpost' => "Neue Neuigkeit",
			'news:via' => "via Neuigkeiten",
			'news:read' => "Neuigkeit lesen",

			'news:addpost' => "Neuigkeit hinzufügen",
			'news:editpost' => "Neuigkeit bearbeiten",

			'news:text' => "Text der Neuigkeit",

			'news:strapline' => "%s",

			'item:object:news' => 'Neuigkeiten-Einträge',

			'news:never' => 'niemals',
			'news:preview' => 'Vorschau',

			'news:draft:save' => 'Speichere Entwurf',
			'news:draft:saved' => 'Entwurf letztmalig gespeichert',
			'news:comments:allow' => 'Erlaube Kommentare',

			'news:preview:description' => 'Dies ist eine noch nicht gespeicherte Vorschau Deiner Neuigkeit.',
			'news:preview:description:link' => 'Um Deinen Eintrag weiter zu bearbeiten oder zu speichern, hier klicken.',

			'news:enablenews' => 'Gruppen-Neuigkeiten aktivieren',

			'news:group' => 'Gruppen-Neuigkeiten',

         /**
	     * Blog river
	     **/

	        //generic terms to use
	        'news:river:created' => "%s schrieb",
	        'news:river:updated' => "%s aktualisierte",
	        'news:river:posted' => "%s schrieb",

	        //these get inserted into the river links to take the user to the entity
	        'news:river:create' => "eine Neuigkeit mit dem Titel",
	        'news:river:update' => "eine Neuigkeit mit dem Titel",
	        'news:river:annotate' => "einen Kommentar zu der Neuigkeit",


		/**
		 * Status messages
		 */

			'news:posted' => "Deine Neuigkeit wurde hinzugefügt.",
			'news:deleted' => "Deine Neuigkeit wurde gelöscht.",

		/**
		 * Error messages
		 */

			'news:error' => 'Irgendetwas ging schief. Versuche es bitte noch einmal.',
			'news:save:failure' => "Dein Neuigkeiten-Eintrag konnte nicht gespeichert werden. Versuche es bitte noch einmal.",
			'news:blank' => "Entschuldigung, Du must einen Titel und Text im Hauptteil eingeben bevor Du die Neuigkeit veröffentlichen kannst",
			'news:notfound' => "Entschuldigung, wir konnten die gesuchte Neuigkeit nicht finden.",
			'news:notdeleted' => "Entschuldigung, wir konnten diese Neuigkeit nicht löschen.",
			'news:readthis'  =>  "Die Neuigkeit lesen:",
			'news:readmore'  =>  "[Mehr...]",
	        'news:admin:news_characters'  =>  "Wie viele Zeichen sollen in der Vorschau der Neuigkeit angezeigt werden?",
	        'news:admin:characters'  =>  "Zeichen",

	);

	add_translation("de",$german);

?>