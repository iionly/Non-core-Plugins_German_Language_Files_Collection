<?php

	$german = array(

		'vazco_topbar:settings:linklist' => '<b>Konfiguriere die Links in der Topbar</b><br/>
		<br/>
		<b>Um einen neuen Menueintrag hinzuzufügen, verwende das folgende Format:</b><br/>
		|| Name des Menueintrags | Link-Adresse | Sichtbarkeit<br/>
		Optionen für die Sichtbarkeit sind:<br/>
		0 - sichtbar für jeden<br/>
		1 - sichtbar für angemeldete Benutzer<br/>
		2 - sichtbar nur für Admins<br/>
		Falls die Sichtbarkeit nicht explizit festgelegt wird, ist sie standardmäßig gleich 0 (sichtbar für jeden)
		<b>Um einen neuen Menueintrag hinzuzufügen, verwende das Format:</b><br/>
		Link-Name | Link-Adresse | Sichtbarkeit<br/><br/>
		Die Angabe einer Adresse für die Link-Box selbst ist nicht notwendig:<br/>
		|| Name der Link-Box<br/>
		Du mußt allerdings eine Adresse angeben (zur Not ein Platzhalter), wenn Du die Sichtbarkeits-Einstellung modifizieren willst:<br/>
		|| Name der Link-Box | | 1<br/>',
		'vazco_topbar:title' =>	'Benutzer-Links',

		'vazco_topbar:settings:loginbar' => "Anmelde-Symbolleiste für nicht angemeldete Benutzer in der Topbar anzeigen",
		'vazco_topbar:settings:loginbox' => "Login-Widget auf der Hauptseite anzeigen",
		'login:short' => 'Anmeldung',
		'vazco_topbar:settings:loginremark' => '[ Du kannst nicht sowohl die Anmelde-Symbolleiste als auch das Login-Widget gleichzeitig deaktivieren. Es wird zu jeder Zeit mindestens eine Anmelde-Option aktiviert sein. ]',

		/*Plugin settings*/
		'vazco_topbar:settings:joinicontools' => 'Profilbild und Tools-Dropdown-Menu im Menueintrag "Mein Profil" in der Topbar zusammenführen',
		'vazco_topbar:settings:joinsettings' => 'Account-Eintellungen im Tools-Dropdown-Menu anzeigen (wenn diese Option aktiviert ist und der Tools-Menueintrag deaktiviert ist, wird in der Topbar gar kein Link zu den Account-Einstellungen angezeigt)',
		'vazco_topbar:settings:elgglogo' => 'Das Elgg-Logo in der Topbar anzeigen',
		'vazco_topbar:settings:topbar' => 'Topbar-Einträge anzeigen/verbergen',
		'vazco_topbar:preview' => 'Vorschau der Hauptseite',
		'vazco_topbar:preview:description' => '(Speichere die vorgenommenen Änderungen in den Plugin-Einstellungen vor Aufrug der Vorschau)',
		'vazco_topbar:settings:homebutton' => 'Home-Schaltfläche in der Topbar anzeigen',
		'vazco_topbar:settings:userlinks' => 'Benutzer erlauben, eigene Links in der Topbar zu erstellen',
		'vazco_topbar:specialchars' => 'Du kannst einige spezielle Zeichensequenzen in Deine URLs einfügen:
		<br/>{$username} - Platzhalter für den Benutzernamen des jeweilig angemeldeten Benutzers
		<br/>{$userid} - Platzhalter für die ID des jeweilig angemeldeten Benutzers
		<br/>{$usrl} - Platzhalter für die URL Deiner Community-Seite (mit abschließendem Slash-Zeichen)',
		'vazco_topbar:boxnum' => 'Anzahl der Link-Boxen, die in der Topbar angezeigt werden sollen:',
		'vazco_topbar:settings:usetoolslink' => 'Tools-Dropdown-Menu anzeigen',
		'vazco_topbar:settings:usedashboardlink' => 'Link zum Dashboard anzeigen',

		/*Topbar texts*/
		'vazco_topbar:profile:icon' => 'Mein Profil',
		'vazco_topbar:editprofile' => 'Profil bearbeiten',
		'vazco_topbar:userslinks' => 'Benutzer-Links',
		'vazco_topbar:home' => 'Home',
		'vazco_topbar:welcomemessage' => 'Willkomen,',
		'vazco_topbar:profile:editprofile' => 'Profil bearbeiten',
		'vazco_topbar:profile:editicon' => 'Profilbild bearbeiten',
		'vazco_topbar:profile:settings' => 'Einstellungen',

		/*Administration*/
		'vazco_mainpage:menu:short' => 'Widgets der Hauptseite',
		'defaultwidgets:menu:dashboard:short' => 'Dashboard-Widgets',
		'defaultwidgets:menu:profile:short' => 'Profilseiten-Widgets',
		'defaultwidgets:menu:user:short' => 'Benutzer',
		'defaultwidgets:menu:forms:short' => 'Eingabemasken',
		'vazco_avatar:menu:short' => 'Profilbilder',
		'vazco_ads:menu:short' => 'Werbebanner',
		'vazco_spotlight:menu:short' => 'Spotlight',
		'vazco_gifts:menu:short' => 'Geschenkeliste',
		'vazco_topbar:tidypics:short' => 'Tidypics',
		'vazco_topbar:menu:short' => 'Topbar',
		'vazco_moderation:menu:short' => 'Moderieren',
		'vazco_pages:menu:short' => 'Coop-Seiten',
		'vazco_menu:menu:short' => 'Menu',
		'vazco_tidypics:menu:short' => 'Tidypics',
		'pluginsettings:advertisements' => 'Werbebanner',
		'pluginsettings:menu:groupmoderate' => 'Gruppen-Moderierung',
		'vazco_groups:listing:adminshort' => 'Gruppen-Layouts',

		'vazco_topbar:title:administration' =>	'Topbar-Links',
		'vazco_topbar:bar:desc:title' => 'Anleitungen',

		/*User links texts*/
		'vazco_topbar:link:desc' => 'Setze den Target-Parameter der Links auf:',
		'vazco_topbar:link:self' => 'Self',
		'vazco_topbar:link:blank' => 'Blank',
		'vazco_topbar:link:nofollow' => 'Setze das Nofollow-Attribut für die Links',
		'vazco_topbar:boxname' => 'Name der Link-Box: ',
		'vazco_topbar:boxaddress' => 'URL:',
		'vazco_topbar:boxtype' => 'Für:',
		'vazco_topbar:linkname' => 'Name:',
		'vazco_topbar:linkaddress' => 'URL:',
		'vazco_topbar:linktype'	=> 'Sichtbar für:',
		'vazco_topbar:type:0' => 'jeden',
		'vazco_topbar:type:1' => 'angemeldete Benutzer',
		'vazco_topbar:type:2' => 'Admins',
		'vazco_topbar:type:3' => 'nicht-angemeldete Besucher',
		'vazco_topbar:showlinks' => 'Zeige Links',
		'vazco_topbar:hidelinks' => 'Verberge Links',

		/*Template*/
		'vazco_topbar:settings:template' => 'Wähle Topbar-Template:',
		'vazco_topbar:template:blue' => 'Blue',
		'vazco_topbar:template:violet' => 'Violet',
		'vazco_topbar:template:red' => 'Red',
		'vazco_topbar:template:ocean' => 'Ocean',
		'vazco_topbar:template:green' => 'Green',
		'vazco_topbar:settings:template:notactive' => '[ Du kannst Topbar-Templates <a href="http://www.elggdev.com/vazco_topbar_template">HIER</a> erwerben ]',
		'vazco_topbar:messages' => 'Nachrichten: %s',
		'vazco_topbar:nomessages' => 'Meine Nachrichten',
		'vazco_topbar:caching' => 'Dies sind die momentan definierten Links im Topbar-Plugin. Speichere diesen Text in einer Datei, um die Link-Liste falls notwendig zu einem späteren Zeitpunkt wieder herstellen zu können, indem Du den Text aus der Datei wieder hier einfügst.',
	);

	add_translation("de",$german);
?>
