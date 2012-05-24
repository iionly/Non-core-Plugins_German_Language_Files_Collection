<?php

	$german = array(
		// hack for core bug
			'untitled' => "Unbenannt",

		// Menu items and titles

			'image' => "Bild",
			'images' => "Bilder",
			'caption' => "Beschreibung",
			'photos' => "Bilder",
			'images:upload' => "Bilder hochladen",
			'images:multiupload' => "Flash Multi-Upload Tool",
			'images:multiupload:todo' => "Ein oder mehrere Bilder zum Hochladen wählen!",
			'album' => "Bilderalbum",
			'albums' => "Bilderalben",
			'album:slideshow' => "Diashow ansehen",
			'album:yours' => "Deine Bilderalben",
			'album:yours:friends' => "Bilderalben Deiner Freunde",
			'album:user' => "Bilderalben von %s",
			'album:friends' => "Bilderalben der Freunde von %s",
			'album:all' => "Alle Bilderalben",
			'album:group' => "Gruppen-Alben",
			'item:object:image' => "Bilder",
			'item:object:album' => "Alben",
			'tidypics:uploading:images' => "Die Bilder werden hochgeladen",
			'tidypics:enablephotos' => 'Gruppen-Alben aktivieren',
			'tidypics:editprops' => 'Bild bearbeiten',
			'tidypics:mostcommented' => 'Meist kommentierte Bilder',
			'tidypics:mostcommentedthismonth' => 'Meist kommentierte Bilder des Monats',
			'tidypics:mostcommentedtoday' => 'Meist kommentierte Bilder des Tages',
			'tidypics:mostviewed' => 'Am häufigsten angesehene Bilder',
			'tidypics:mostvieweddashboard' => 'Am häufigsten angesehene Bilder auf Dashboard',
			'tidypics:mostviewedthisyear' => 'Am häufigsten angesehene Bilder des Jahres',
			'tidypics:mostviewedthismonth' => 'Am häufigsten angesehene Bilder des Monats',
			'tidypics:mostviewedlastmonth' => 'Am häufigsten angesehene Bilder im letzten Monat',
			'tidypics:mostviewedtoday' => 'Am häufigsten angesehene Bilder des Tages',
			'tidypics:recentlyviewed' => 'Zuletzt angesehene Bilder',
                        'tidypics:recentlycommented' => 'Zuletzt kommentierte Bilder',
			'tidypics:mostrecent' => 'Neue Bilder der Community-Seite',
			'tidypics:yourmostviewed' => 'Deine am häufigsten angesehenen Bilder',
			'tidypics:yourmostrecent' => 'Zuletzt hochgeladene Bilder',
			'tidypics:friendmostviewed' => "Am häufigsten angesehene Bilder von %s",
			'tidypics:friendmostrecent' => "Zuletzt hochgeladene Bilder von %s",
			'tidypics:highestrated' => "Am höchsten bewertete Bilder",
			'tidypics:views' => "Zugriffe: %s",
			'tidypics:viewsbyowner' => "Zugriffe: %s von %s Mitglieder (Dich nicht mitgerechnet)",
			'tidypics:viewsbyothers' => "Zugriffe: %s (%s von Dir)",
			'tidypics:administration' => 'Tidypics-Administration',
			'tidypics:stats' => 'Statistik',
                        'tidypics:nophotosingroup' => 'Diese Gruppe hat noch keine Bilder',

                        'flickr:setup' => 'Flickr-Konfiguration',
                        'flickr:usernamesetup' => 'Bitte gib Deinen Flickr-Benutzernamen an:',
                        'flickr:selectalbum' => 'Wähle ein Album aus, in das die Bilder importiert werden sollen',
                        'flickr:albumdesc' => 'Album in das die Bilder importiert werden:',
                        'flickr:importmanager' => 'Bilderserien-Import-Manager',
                        'flickr:desc' => 'Wähle die Bilderserie aus, die Du zu dieser Community-Seite hinzufügen willst.<br />Es werden Kopien der Bilder erstellt werden, die auf dieser Community-Seite gespeichert werden, wo sie dann betrachtet und kommentiert werden können.',
                        'flickr:intro' => 'Die Flickr-Integration ermöglicht es Dir, Bilder aus Deinem Flickr-Account zu dieser Community-Seite hinzuzufügen. Nach Angabe Deines Flickr-Benutzernamens und Auswahl eines Albums, in das die Bilder importiert werden, kannst Du damit beginnen. <br />Nachdem Du die Einstellungen für Deinen Flickr-Benutzernamen und das Album zum Importieren gespeichert hast, klicke auf den Link Flickr-Bilder Importieren im Menu auf der linken Seite, um die Bilderserie auf Flickr auszuwählen, aus der Du Bilder importieren willst.',
                        'flickr:menusetup' => 'Flickr-Einstellungen',
                        'flickr:menuimport' => 'Flickr-Bilder Importieren',

		//settings
			'tidypics:settings' => 'Einstellungen',
			'tidypics:admin:instructions' => 'Hier können die Grundeinstellungen für das Tidypics-Plugin vorgenommen werden. Passe die Einstellungen Deinen Bedürfnissen an und speichere sie dann ab.',
			'tidypics:settings:image_lib' => "Image Library",
			'tidypics:settings:thumbnail' => "Erzeugung von Vorschaubildern",
                        'tidypics:settings:help' => "Hilfe",
			'tidypics:settings:download_link' => "Zeige Download-Link",
			'tidypics:settings:tagging' => "Aktiviere das Tagging von Bildern",
			'tidypics:settings:photo_ratings' => "Aktiviere das Bewerten von Bildern (benötigt das Rate-Plugin von Miguel Montes oder ein vergleichbares Plugin)",
			'tidypics:settings:exif' => "Aktiviere die Anzeige von EXIF-Daten",
			'tidypics:settings:view_count' => "Aktiviere die Anzeige des Ansichtszählers",
			'tidypics:settings:grp_perm_override' => "Erlaube Gruppen-Mitgliedern unbeschränkten Zugriff auf die Verwaltung von Gruppen-Alben",
			'tidypics:settings:maxfilesize' => "Maximal erlaubte Bildgröße in Megabytes (MB):",
			'tidypics:settings:quota' => "Quota für Benutzer / Gruppen in Megabytes (MB) (0 = kein Quota)",
			'tidypics:settings:watermark' => "Gib den Text ein, der als Wasserzeichen eingefügt wird - ImageMagick Cmdline muss dafür als Image Library verwendet werden",
			'tidypics:settings:im_path' => "Der Pfad zu den ImageMagick Kommandos mit einem Slash-Zeichen (\"/\") am Ende",
			'tidypics:settings:img_river_view' => "Wie viele Einträge sollen im River beim Hochladen von mehreren Bildern angezeigt werden ",
			'tidypics:settings:album_river_view' => "Anzeige des Albumcovers oder eines Sets von Bildern für neue Alben ",
			'tidypics:settings:largesize' => "Bildgröße in der Hauptansicht",
			'tidypics:settings:smallsize' => "Bildgröße in der Alben-Ansicht",
			'tidypics:settings:thumbsize' => "Bildgröße von Vorschaubildern",
                        'tidypics:settings:im_id' => "Bilder-ID",

                        'tidypics:settings:heading:img_lib' => "Image Library-Einstellungen",
                        'tidypics:settings:heading:main' => "Grundeinstellungen",
                        'tidypics:settings:heading:river' => "Einstellungen für die River-Integration",
                        'tidypics:settings:heading:sizes' => "Größe der Vorschaubilder",
                        'tidypics:settings:heading:groups' => "Einstellungen für die Gruppen-Integration",

		//actions

			'album:create' => "Neues Album hinzufügen",
			'album:add' => "Neues Album hinzufügen",
			'album:addpix' => "Bilder hinzufügen",
			'album:edit' => "Album bearbeiten",
			'album:delete' => "Album löschen",

			'image:edit' => "Bild bearbeiten",
			'image:delete' => "Bild löschen",
			'image:download' => "Bild herunterladen",

		//forms

			'album:title' => "Titel",
			'album:desc' => "Beschreibung",
			'album:tags' => "Tags",
			'album:cover' => "Das Bild als Albumcover verwenden?",
			'tidypics:quota' => "Quotaauslastung:",

		//views

			'image:total' => "Bilder im Album:",
			'image:by' => "Bild hinzugefügt von",
			'album:by' => "Album erstellt von",
			'album:created:on' => "Erstellt",
			'image:none' => "Es wurden noch keine Bilder hinzugefügt.",
			'image:back' => "Vorheriges",
			'image:next' => "Nächstes",

		// tagging
			'tidypics:taginstruct' => 'Wähle einen Bereich auf dem Bild, für das Du ein Tag setzen willst',
			'tidypics:deltag_title' => 'Wähle die Tags, die gelöscht werden sollen',
			'tidypics:finish_tagging' => 'Tagging abbrechen',
			'tidypics:tagthisphoto' => 'Bild taggen',
			'tidypics:deletetag' => 'Ein Tag löschen',
			'tidypics:actiontag' => 'Tag setzen',
			'tidypics:actiondelete' => 'Löschen',
			'tidypics:actioncancel' => 'Abbrechen',
			'tidypics:inthisphoto' => 'Tags in diesem Bild',
			'tidypics:usertag' => "Bilder mit Tags auf das Mitglied %s",
			'tidypics:phototagging:success' => 'Das Bild wurde getaggt',
			'tidypics:phototagging:error' => 'Beim Hinzufügen des Tags ist ein unerwartetes Problem aufgetreten',
			'tidypics:deletetag:success' => 'Ausgewählte Tags wurden gelöscht',

			'tidypics:tag:subject' => "Du wurdest in einem Bild getaggt",
			'tidypics:tag:body' => "Du wurdest im Bild %s von %s getaggt.

Um das Bild zu sehen, folge diesem Link: %s",


		//rss
			'tidypics:posted' => 'hat ein Bild hinzugefügt:',

		//widgets

			'tidypics:widget:albums' => "Bilderalben",
			'tidypics:widget:album_descr' => "Auflistung Deiner neuesten Bilderalben",
			'tidypics:widget:num_albums' => "Anzahl der anzuzeigenden Alben",
			'tidypics:widget:latest' => "Neueste Bilder",
			'tidypics:widget:latest_descr' => "Auflistung Deiner neuesten Bilder",
			'tidypics:widget:num_latest' => "Anzahl der anzuzeigenden Bilder",
			'album:more' => "Alle Alben anzeigen",

		//river

			//images
			'image:river:created' => "%s hat das Bild %s zum Album %s hinzugefügt",
			'image:river:item' => "ein Bild",
			'image:river:annotate' => "einen Kommentar zum Bild",
			'image:river:tagged' => "wurde im Bild getaggt",

			//albums
			'album:river:created' => "%s hat ein neues Album erstellt",
			'album:river:group' => "in der Gruppe",
			'album:river:item' => "ein Album",
			'album:river:annotate' => "einen Kommentar zum Album",

		// notifications
			'tidypics:newalbum' => 'Neues Bilderalbum',


		//  Status messages

			'tidypics:upl_success' => "Deine Bilder wurden hochgeladen",
			'image:saved' => "Das Bild wurde gespeichert",
			'images:saved' => "Alle Bilder wurden gespeichert",
			'image:deleted' => "Das Bild wurde gelöscht",
			'image:delete:confirm' => "Bist Du sicher, dass Du das Bild löschen willst?",

			'images:edited' => "Die Einstellungen für Deine Bilder wurden aktualisiert.",
			'album:edited' => "Die Einstellungen für Dein Album wurden aktualisiert.",
			'album:saved' => "Das Album wurde hinzugefügt.",
			'album:deleted' => "Das Album wurde gelöscht.",
			'album:delete:confirm' => "Bist Du sicher, dass Du das Album löschen willst?",
			'album:created' => "Dein neues Album wurde hinzugefügt.",
			'tidypics:settings:save:ok' => 'Die Einstellungen für das Tidypics-Plugin wurden gespeichert',

                        'tidypics:upgrade:success' => 'Das Upgrade des Tidypics-Plugins war erfolgreich',

                        'flickr:enterusername' => 'Du mußt Deinen Flickr-Benutzernamen eingeben',
                        'flickr:savedusername' => 'Der Flickr-Benutzername von %s wurde gespeichert',
                        'flickr:saveduserid' => 'Die Benutzer-ID von %s wurde gespeichert',
                        'flickr:savedalbum' => 'Das Album wurde gespeichert - %s',

		//Error messages

                        'tidypics:baduploadform' => "Es gab ein unerwartetes Problem mit dem Upload-Form",
			'tidypics:partialuploadfailure' => "Beim Hochladen einiger Bilder sind Fehler aufgetreten (bei %s von %s Bildern).",
			'tidypics:completeuploadfailure' => "Das Hochladen der Bilder ist fehlgeschlagen.",
			'tidypics:exceedpostlimit' => "Zu viele große Bilder auf einmal - versuche weniger Bilder auf einmal oder kleinere Bilder hochzuladen.",
			'tidypics:noimages' => "Es wurden keine Bilder zum Hochladen ausgewählt.",
			'tidypics:image_mem' => "Die Bilddatei ist zu groß.",
			'tidypics:image_pixels' => "Das Bild hat zu viele Pixel.",
			'tidypics:unk_error' => "Unbekannter Fehler beim Hochladen",
			'tidypics:save_error' => "Unbekannter Fehler beim Speichern des Bildes auf dem Server",
			'tidypics:not_image' => "Das Dateiformat des Bildes wurde nicht erkannt oder wird nicht unterstützt",
                        'tidypics:deletefailed' => "Entschuldigung, das Löschen ist fehlgeschlagen.",
                        'tidypics:deleted' => "Das Löschen war erfolgreich.",
                        'image:downloadfailed' => "Fehler: das Bild ist momentan nicht verfügbar.",
                        'tidypics:nosettings' => "Der Administrator dieser Community-Seite hat leider bisher keine Einstellungen für Bilderalben vorgenommen.",
                        'tidypics:exceed_quota' => "Du hast die von Administrator dieser Community-Seite gesetze Quota für Bilder überschritten.",
                        'images:notedited' => "Es konnten leider nicht alle Einstellungen für Deine Bilder aktualisiert werden.",

			'album:none' => "Es wurden noch keine Alben hinzugefügt.",
			'album:uploadfailed' => "Entschuldigung, Dein Album konnte nicht hinzugefügt werden,",
			'album:deletefailed' => "Entschuldigung, Dein Album konnte nicht gelöscht werden.",
			'album:blank' => "Bitte gib diesem Album einen Titel und eine Beschreibung.",

			'tidypics:upgrade:failed' => "Das Upgrade des Tidypics-Plugins ist gescheitert",

                        'flickr:errorusername' => 'Der Benutzername %s wurde auf Flickr nicht gefunden',
                        'flickr:errorusername2' => 'Du mußt einen Flickr-Benutzernamen angeben',
                        'flickr:errorimageimport' => 'Dieses Bild wurde bereits importiert',
                        'flickr:errornoalbum' => "Es wurde kein Album ausgewählt.  Bitte wähle ein Album aus und speichere die Einstellungen ab: %s"
	);

	add_translation("de",$german);
?>
