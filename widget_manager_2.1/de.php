<?php

	$german = array(

		// special access level
		'LOGGED_OUT' => "Nicht-angemeldete Benutzer",
		'access:admin_only' => "Nur Administratoren",

		// widget edit wrapper
		'widget_manager:widgets:edit:custom_title' => "Benutzerdefinierter Titel",
		'widget_manager:widgets:edit:hide_header' => "Header verbergen",
		'widget_manager:widgets:edit:disable_widget_content_style' => "Kein Widget-Stil anwenden",

		// menu items
		'widget_manager:menu:dashboard' => "Dashboard-Widgets",
		'widget_manager:menu:profile' => "Profilseiten-Widgets",
		'widget_manager:menu:manage_index' => "Benutzerdefinierte Indexseite bearbeiten",

		// admin settings
		'widget_manager:admin:lazy_loading_disabled' => "Lazy Loading deaktivieren?",
		'widget_manager:admin:use_widget_lightbox' => "Eine Lightbox für das Hinzufügen von Widgets einblenden?",
		'widget_manager:admin:show_broken_widgets' => "Verwaiste bzw. fehlerhafte Widgets anzeigen?",
		'widget_manager:admin:target_column' => "Wähle die Spalte, in der neue Widgets eingefügt werden",
		'widget_manager:admin:target_column:left' => "Links",
		'widget_manager:admin:target_column:middle' => "Mitte",
		'widget_manager:admin:target_column:right' => "Rechts",

		'widget_manager:admin:custom_index' => "Benutzerdefinierte Indexseite des Widget Managers verwenden?",
		'widget_manager:admin:custom_index:non_loggedin' => "Nur für nicht-angemeldete Benutzer",
		'widget_manager:admin:custom_index:loggedin' => "Nur für angemeldete Benutzer",
		'widget_manager:admin:custom_index:all' => "Für alle Benutzer",

		'widget_manager:admin:widget_layout' => "Wähle ein Widgets-Layout",
		'widget_manager:admin:widget_layout:33|33|33' => "Standard (33% per column)",
		'widget_manager:admin:widget_layout:50|25|25' => "Breite linke Spalte (50%, 25%, 25%)",
		'widget_manager:admin:widget_layout:25|50|25' => "Breite mittlere Spalte (25%, 50%, 25%)",
		'widget_manager:admin:widget_layout:25|25|50' => "Breite rechte Spalte (25%, 25%, 50%)",
		'widget_manager:admin:widget_layout:75|25' => "Zwei Spalten (75%, 25%)",
		'widget_manager:admin:widget_layout:60|40' => "Zwei Spalten (60%, 40%)",
		'widget_manager:admin:widget_layout:50|50' => "Zwei Spalten (50%, 50%)",
		'widget_manager:admin:widget_layout:40|60' => "Zwei Spalten (40%, 60%)",
		'widget_manager:admin:widget_layout:25|75' => "Zwei Spalten (25%, 75%)",

		'widget_manager:admin:index_top_row' => "Eine spezielle oberste Zeile auf der Indexseite einblenden",
		'widget_manager:admin:index_top_row:none' => "Keine spezielle oberste Zeile",
		'widget_manager:admin:index_top_row:full_row' => "Einspaltige oberste Zeile",
		'widget_manager:admin:index_top_row:two_column_left' => "Zweispaltige, linksbündige oberste Zeile",
		'widget_manager:admin:index_top_row:two_column_right' => "Zweispaltige, rechtsbündige oberste Zeile",

		'widget_manager:admin:disable_free_html_filter' => "HTML-Filterung für frei-konfigurierbare HTML-Widgets auf Indexseite deaktivieren (nur für ADMINS)",

		// tooltips
		'widget_manager:tooltips:fixed' => "Ziehe Widgets in diese Spalten, um die Anzeige dieser Widgets auf dem Dashboard oder den Profilseiten der Benutzer zu erzwingen.<br /><br />Die Benutzer können diese Widgets <b>nicht</b> frei platzieren oder entfernen.",
		'widget_manager:tooltips:free' => "Ziehe Widgets in diese Spalten, um die Anzeige dieser Widgets auf dem Dashboard oder den Profilseiten der Benutzer standardmäßig zu aktivieren (optional zu erzwingen).<br /><br />Die Benutzer können diese Widgets frei platzieren oder entfernen.<br /><br />Für bestehende Benutzeraccounts wird nur die Anzeige der Widgets erzwungen (falls diese Option aktiviert ist) und nicht die Anordnung.",

		// views
		// manage form
		'widget_manager:dashboard:title' => "Konfiguration der Dashboard-Widgets",
		'widget_manager:profile:title' => "Konfiguration der Profilseiten-Widgets",

		'widget_manager:form:enforce_presence' => "Anzeige der frei platzierbaren Widgets erzwingen (für bestehende Benutzeraccounts)",

		'widget_manager:manage:form:nav:placement' => "Widget-Platzierung",
		'widget_manager:manage:form:nav:settings' => "Widget-Einstellungen",

		'widget_manager:manage:form:placement:fixed:title' => "Fest platzierte Widgets",
		'widget_manager:manage:form:placement:free:title' => "Frei platzierbare Widgets",

		// settings
		'widget_manager:forms:settings:can_add' => "Kann hinzugefügt werden",
		'widget_manager:forms:settings:can_remove' => "Kann entfernt werden",
		'widget_manager:forms:settings:allow_multiple' => "Mehrfach anzeigen erlauben",
		'widget_manager:forms:settings:hide' => "Verbergen",

		// lightbox
		'widget_manager:button:add' => "Widget hinzufügen",
		'widget_manager:widgets:lightbox:title:dashboard' => "Füge Widgets zu Deinem persönlichen Dashboard hinzu",
		'widget_manager:widgets:lightbox:title:profile' => "Füge Widgets zu Deiner Profilseite hinzu",
		'widget_manager:widgets:lightbox:title:index' => "Füge Widgets zu der Indexseite hinzu",
		'widget_manager:widgets:lightbox:not_allowed' => "Kann nicht mehrmals hinzugefügt werden",

		// actions
		// manage
		'widget_manager:action:manage:error:context' => "Fehler: Die Widget-Einstellungen können aufgrund einer unzulässigen Eingabe nicht gespeichert werden",
		'widget_manager:action:manage:error:save_setting' => "Beim Speichern der Einstellung %s für das Widget %s ist ein Fehler aufgetreten",
		'widget_manager:action:manage:error:save_placement' => "Fehler beim Speichern der Widget-Anordnung für Spalte: %s",
		'widget_manager:action:manage:success' => "Die Konfiguration der Widgets wurde gespeichert",

		// widgets
		'widget_manager:add' => "Hier klicken, um ein neues Widget hinzuzufügen",
		'widget_manager:delete' => "Bist Du sicher, dass Du dieses Widget entfernen möchtest?",

		// twitter_search
		'widget_manager:widgets:twitter_search:name' => "Twitter-Suche",
		'widget_manager:widgets:twitter_search:description' => "Ermöglicht eine benutzerdefinierte Suche auf Twitter",

		'widget_manager:widgets:twitter_search:query' => "Suchanfrage",
		'widget_manager:widgets:twitter_search:query:help' => "Versuche eine erweiterte Anfrage",
		'widget_manager:widgets:twitter_search:title' => "Widget-Titel (optional)",
		'widget_manager:widgets:twitter_search:subtitle' => "Widget-Untertitel (optional)",
		'widget_manager:widgets:twitter_search:height' => "Höhe des Widget (in Pixel)",
		'widget_manager:widgets:twitter_search:background' => "Wähle eine Hintergrundfarbe (in HEX-Format, z.B. 4690d6)",

		'widget_manager:widgets:twitter_search:not_configured' => "Dieses Widget wurde noch nicht konfiguriert",

		// content_by_tag
		'widget_manager:widgets:content_by_tag:name' => "Inhalt laut Tag",
		'widget_manager:widgets:content_by_tag:description' => "Suche nach Inhalt mit Hilfe von Tags",

		'widget_manager:widgets:content_by_tag:content_count' => "Wie viele Einträge sollen angezeigt werden",
		'widget_manager:widgets:content_by_tag:entities' => "Welche Entities sollen angezeigt werden",
		'widget_manager:widgets:content_by_tag:tags' => "Tag(s) (durch Kommas getrennt)",
		'widget_manager:widgets:content_by_tag:tags_option' => "Wie sollen die Tags verknüpft werden",
		'widget_manager:widgets:content_by_tag:tags_option:and' => "AND",
		'widget_manager:widgets:content_by_tag:tags_option:or' => "OR",

		'widget_manager:widgets:content_by_tag:no_result' => "Keine Treffer",

		// index_login
		'widget_manager:widgets:index_login:name' => "Anmeldung",
		'widget_manager:widgets:index_login:description' => "Zeige ein Widget für die Anmeldung auf der Community-Seite",
		'widget_manager:widgets:index_login:welcome' => "<b>%s</b>, willkommen in der <b>%s</b> Community",

		// index_members
		'widget_manager:widgets:index_members:name' => "Mitglieder",
		'widget_manager:widgets:index_members:description' => "Zeigt die Mitgleider Deiner Community-Seite an",

		'widget_manager:widgets:index_members:member_count' => "Wie viele Mitglieder sollen angezeigt werden",

		'widget_manager:widgets:index_members:user_icon' => "Sollen nur Mitglieder mit Profilbild angezeigt werden",

		'widget_manager:widgets:index_members:no_result' => "Keine Mitglieder gefunden",

		// index_memebers_online
		'widget_manager:widgets:index_members_online:name' => "Angemeldete Mitglieder",
		'widget_manager:widgets:index_members_online:description' => "Zeigt die momentan angemeldeten Mitglieder Deiner Community-Seite an",

		'widget_manager:widgets:index_members_online:member_count' => "Wie viele Mitglieder sollen angezeigt werden",

		'widget_manager:widgets:index_members_online:user_icon' => "Sollen nur Mitglieder mit Profilbild angezeigt werden",

		'widget_manager:widgets:index_members_online:no_result' => "Keine Mitglieder gefunden",

		// index_file
		'widget_manager:widgets:index_file:name' => "Dateien",
		'widget_manager:widgets:index_file:description' => "Zeigt die neuesten Dateien Deiner Community-Seite an",

		'widget_manager:widgets:index_file:file_count' => "Wie viele Dateien sollen angezeigt werden",

		'widget_manager:widgets:index_file:no_result' => "Keine Dateien gefunden",

		// index_blog
		'widget_manager:widgets:index_blog:name' => "Blogs",
		'widget_manager:widgets:index_blog:description' => "Zeigt die neuesten Blogs Deiner Community-Seite an",

		'widget_manager:widgets:index_blog:blog_count' => "Wie viele Blogs sollen angezeigt werden",
		'widget_manager:widgets:index_blog:view_mode' => "Wie sollen die Blog-Einträge angezeigt werden",
		'widget_manager:widgets:index_blog:view_mode:list' => "Listen-Ansicht",
		'widget_manager:widgets:index_blog:view_mode:preview' => "Vorschau-Ansicht",

		'widget_manager:widgets:index_blog:no_result' => "Keine Blogs gefunden",

		// index_pages
		'widget_manager:widgets:index_pages:name' => "Coop-Seiten",
		'widget_manager:widgets:index_pages:description' => "Zeigt die neuesten Coop-Seiten Deiner Community-Seite an",

		'widget_manager:widgets:index_pages:pages_count' => "Wie viele Coop-Seiten sollen angezeigt werden",

		'widget_manager:widgets:index_pages:no_result' => "Keine Coop-Seiten gefunden",

		// index_thewire
		'widget_manager:widgets:index_thewire:name' => "Der Heiße Draht",
		'widget_manager:widgets:index_thewire:description' => "Zeigt die neuesten Einträge im Heißen Draht Deiner Community-Seite an",

		'widget_manager:widgets:index_thewire:wire_count' => "Wie viele Einträge sollen angezeigt werden",

		'widget_manager:widgets:index_thewire:no_result' => "Keine Einträge gefunden",

		// index_bookmarks
		'widget_manager:widgets:index_bookmarks:name' => "Lesezeichen",
		'widget_manager:widgets:index_bookmarks:description' => "Zeigt die neuesten Lesezeichen Deiner Community-Seite an",

		'widget_manager:widgets:index_bookmarks:bookmark_count' => "Wie viele Lesezeichen sollen angezeigt werden",

		'widget_manager:widgets:index_bookmarks:no_result' => "Keine Lesezeichen gefunden",

		// index_groups
		'widget_manager:widgets:index_groups:name' => "Gruppen",
		'widget_manager:widgets:index_groups:description' => "Zeigt die neuesten Gruppen Deiner Community-Seite an",

		'widget_manager:widgets:index_groups:group_count' => "Wie viele Gruppen sollen angezeigt werden",
		'widget_manager:widgets:index_groups:featured' => "Nur besondere Gruppen anzeigen",

		'widget_manager:widgets:index_groups:no_result' => "Keine Gruppen gefunden",

		// index_freehtml
		'widget_manager:widgets:index_freehtml:name' => "Frei-konfigurierbares HTML-Widget",
		'widget_manager:widgets:index_freehtml:description' => "Zeigt die vor Dir angegebenen HTML-Inhalte an",

		'widget_manager:widgets:index_freehtml:html' => "Bitte gebe den HTML-Code ein, der angezeigt werden soll",
		'widget_manager:widgets:index_freehtml:no_content' => "Diese Widget wurde noch nicht konfiguriert",

		// index_activity
		'widget_manager:widgets:index_activity:name' => "Aktivitäten",
		'widget_manager:widgets:index_activity:description' => "Zeigt die neuesten Aktivitäten aud Deiner Community-Seite an",

		'widget_manager:widgets:index_activity:activity_count' => "Wie viele Einträge sollen angezeigt werden",
		'widget_manager:widgets:index_activity:no_results' => "Keine Aktivitäten gefunden",

		// image_slider
		'widget_manager:widgets:image_slider:name' => "Diashow",
		'widget_manager:widgets:image_slider:description' => "Zeigt eine Diashow an",
		'widget_manager:widgets:image_slider:seconds_per_slide' => "Sekunden pro Bild",
		'widget_manager:widgets:image_slider:slider_height' => "Höhe der Bilder (in Pixel)",
		'widget_manager:widgets:image_slider:overlay_color' => "Farbe für Bildwechsel (in HEX-Format)",
		'widget_manager:widgets:image_slider:title' => "Diashow",
		'widget_manager:widgets:image_slider:label:url' => "Bild-Url",
		'widget_manager:widgets:image_slider:label:text' => "Text",
		'widget_manager:widgets:image_slider:label:link' => "Link",
		'widget_manager:widgets:image_slider:label:direction' => "Richtung",

		'widget_manager:widgets:image_slider:direction:top' => "Hoch",
		'widget_manager:widgets:image_slider:direction:right' => "Rechts",
		'widget_manager:widgets:image_slider:direction:bottom' => "Tiefer",
		'widget_manager:widgets:image_slider:direction:left' => "Links",

		'' => "",
	);

	add_translation("de", $german);

?>