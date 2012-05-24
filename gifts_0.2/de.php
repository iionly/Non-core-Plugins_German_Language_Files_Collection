<?php

	/**
	 * Elgg Gifts plugin
	 * Send gifts to you friends
	 *
	 * @package Gifts
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Christian Heckelmann
	 * @copyright Christian Heckelmann
	 * @link http://www.heckelmann.info
	 */


$german = array(
	 'gifts:menu'  =>  "Geschenke" ,
	 'gifts:yourgifts'  =>  "Meine Geschenke",
         'gifts:allgifts'  =>  "Alle Geschenke",
	 'gifts:sent'  =>  "Versendete Geschenke",
         'gifts:sendgifts' => "Versende ein Geschenk",
         'gifts:friend' => "Freund(in)",
	 'gifts:message' => "Nachricht",
         'gifts:selectgift' => "Wähle ein Geschenk",
         'gifts:gift' => "Geschenk",
         'gifts:send' => "Absenden",
	 'gifts:sendok' => "Das Geschenk wurde zugestellt",
         'gifts:object' => "%s hat %s von %s erhalten",
         'gifts:river' => "%s erhielt %s von ",
         'gifts:blank' => "Bitte wähle den Freund / die Freundin aus, die das Geschenk erhalten soll!",

	 'gifts:widget' => "Geschenke",
         'gifts:widget:num_display' => "Anzahl der anzuzeigenden Geschenke",
         'gifts:widget:description' => "Zeige Deine erhaltenen Geschenke",

	 'gifts:pointssum' => "Du hast noch %s Aktivitätspunkte zum Versenden von Geschenken übrig.",
	 'gifts:notenoughpoints' => "Du hast nicht genügend Aktivitätspunkte, um dieses Geschenk zu versenden!",
	 'gifts:pointscost' => "Dieses Geschenk kostet ",
	 'gifts:pointfail' => "Bei der Verrechnung der Aktivitätspunkte ist ein Fehler aufgetreten!",
	 'gifts:pointsuccess' => "Die Kosten für das Geschenk wurden von Deinen Aktivitätspunkten abgezogen!",

         'item:object:gift' => 'Geschenke',
         'gifts:settings:number' => "Anzahl der Geschenke",
         'gifts:settings:title' =>  "Geschenk",
	 'gifts:settings:globalsettings' =>  "Einstellungen",
         'gifts:settings:giftsettings' =>  "Geschenke",
	 'gifts:settings:useuserpoints' =>  "Das Elggx-Userpoints-Plugin verwenden",
         'gifts:settings:userpoints' =>  "Aktivitätspunkte",
	 'gifts:settings:image' =>  "Bild",
	 'gifts:settings:showallyes' =>  "Ja",
	 'gifts:settings:showallno' =>  "Nein",
	 'gifts:settings:showallgifts' =>  "Alle Geschenke anzeigen",
	 'gifts:settings:saveok' =>  "Die Einstellungen wurden gespeichert",
	 'gifts:settings:savefail' =>  "Beim Speichern der Einstellungen ist ein Fehler aufgetreten!",

	 'gifts:mail:subject' => "Du hast ein neues Geschenk erhalten!",
	 'gifts:mail:body' => "Du hast ein neues Geschenk von %s bekommen.

Um Dein Geschenk anzusehen, folge dem Link: %s

Du kannst auf diese Email NICHT antworten."
);

add_translation("de",$german);
?>