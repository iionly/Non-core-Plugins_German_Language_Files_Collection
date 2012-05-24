<?php

    /**
     * Elgg Feedback plugin
     * Feedback interface for Elgg sites
     *
     * @package Feedback
     * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
     * @author Prashant Juvekar
     * @copyright Prashant Juvekar
     * @link http://www.linkedin.com/in/prashantjuvekar
     */

	$german = array(

		'item:object:feedback' => 'Feedback',
		'feedback:label' => 'Feedback',
		'feedback:title' => 'Feedback',

		'feedback:message' => 'Zufrieden? Unzufrieden? Du möchtest neue Features vorschlagen oder einen Bug melden? Wir würden uns freuen, von Dir zu hören.',

		'feedback:default:id' => 'Name und/oder Email',
		'feedback:default:txt' => 'Teile uns mit, was Du denkst!',
		'feedback:default:txt:err' => 'Bei Deinem Feedback hat leider die Nachricht gefehlt.\nWir sind auf Deine Vorschläge oder Kritik gespannt.\nBitte gebe Deine Nachricht ein, bevor Du Dein Feedback versendest.',

		'feedback:captcha:blank' => 'Das Captcha wurde nicht korrekt eingegeben.',

		'feedback:submit_msg' => 'Senden...',
		'feedback:submit_err' => 'Beim Versenden des Feedbacks ist ein Problem aufgetreten!',

		'feedback:submit:error' => 'Beim Versenden des Feedbacks ist ein Problem aufgetreten!',
		'feedback:submit:success' => 'Dein Feedback ist eingegangen. Danke!',

		'feedback:admin:menu' => 'Feedback',
		'feedback:admin:title' => 'Feedback für die Community-Seite',

		'feedback:delete:success' => 'Der Feedback-Eintrag wurde gelöscht',

		'feedback:mood:' => 'Keine Angabe',
		'feedback:mood:angry' => 'Ärgerlich',
		'feedback:mood:neutral' => 'Neutral',
		'feedback:mood:happy' => 'Glücklich',

		'feedback:about:' => 'Keine Angabe',
		'feedback:about:bug_report' => 'Bug-Report',
		'feedback:about:content' => 'Seiteninhalt',
		'feedback:about:suggestions' => 'Vorschläge',
		'feedback:about:compliment' => 'Kompliment',
		'feedback:about:other' => 'Anderes',

		'feedback:list:mood' => 'Stimmung',
		'feedback:list:about' => 'Kategorie',
		'feedback:list:page' => 'Versendet von der Seite',
		'feedback:list:from' => 'Von',

		'feedback:user_1' => "Benutzername 1: ",
		'feedback:user_2' => "Benutzername 2: ",
		'feedback:user_3' => "Benutzername 3: ",
		'feedback:user_4' => "Benutzername 4: ",
		'feedback:user_5' => "Benutzername 5: ",

		'feedback:email:subject' => 'Feedback von %s',
		'feedback:email:body' => '%s',
	);

	add_translation("de",$german);
?>