<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

if ( ! function_exists('admin_notify_mailinglist_title'))
{
	function admin_notify_mailinglist_title()
	{
return <<<EOF
Iemand heeft zich ingeschreven op je mailing list
EOF;
	}
}

if ( ! function_exists('admin_notify_mailinglist'))
{
	function admin_notify_mailinglist()
	{
return <<<EOF
Een nieuwe mailing list inschrijving is geaccepteerd.

E-mailadres: {email}
Mailing List: {mailing_list}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

if ( ! function_exists('admin_notify_entry_title'))
{
	function admin_notify_entry_title()
	{
return <<<EOF
Een nieuw channel bericht is geplaatst
EOF;
	}
}

if ( ! function_exists('admin_notify_entry'))
{
	function admin_notify_entry()
	{
return <<<EOF
Een nieuw bericht is geplaatst in het channel:
{channel_name}

De titel van het bericht is:
{entry_title}

Geplaatst door: {name}
Email: {email}

Om het bericht te bekijken bezoek:
{entry_url}

EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

if ( ! function_exists('admin_notify_reg_title'))
{
	function admin_notify_reg_title()
	{
return <<<EOF
Berichtgeving van de registratie van een nieuwe gebruiker
EOF;
	}
}

if ( ! function_exists('admin_notify_reg'))
{
	function admin_notify_reg()
	{
return <<<EOF
Nieuwe gebruiker geregistreerd op: {site_name}

Schermnaam: {name}
Gebruikersnaam: {username}
E-mailadres: {email}

URL van het beheer: {control_panel_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_comment_title'))
{
	function admin_notify_comment_title()
	{
return <<<EOF
Je hebt zojuist een reactie ontvangen
EOF;
	}
}

if ( ! function_exists('admin_notify_comment'))
{
	function admin_notify_comment()
	{
return <<<EOF
Je hebt zojuist een reactie ontvangen in channel:
{channel_name}

De titel van het bericht:
{entry_title}

Bevindt zich op:
{comment_url}

Geplaatst door: {name}
E-mail adres: {email}
URL: {url}
Locatie: {location}

{comment}
EOF;
	}
}



//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mbr_activation_instructions_title'))
{
	function mbr_activation_instructions_title()
	{
return <<<EOF
Je activatiecode
EOF;
	}
}

if ( ! function_exists('mbr_activation_instructions'))
{
	function mbr_activation_instructions()
	{
return <<<EOF
Bedankt voor het registreren.

Om je account te activeren, bezoek de volgende URL:

{unwrap}{activation_url}{/unwrap}

Bedankt!

{site_name}

{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

if ( ! function_exists('forgot_password_instructions_title'))
{
	function forgot_password_instructions_title()
	{
return <<<EOF
Inlog informatie
EOF;
	}
}

if ( ! function_exists('forgot_password_instructions'))
{
	function forgot_password_instructions()
	{
return <<<EOF
{name},

Om je wachtwoord te resetten, ga naar de volgende pagina:

{reset_url}

Je wachtwoord zal automatisch gereset worden, en het nieuwe wachtwoord wordt naar je gemaild.

Indien je je wachtwoord niet wilt resetten dan kan je dit bericht negeren. Het vervalt binnen 24 uur.

{site_name}
{site_url}
EOF;
	}
}




//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

if ( ! function_exists('reset_password_notification_title'))
{
	function reset_password_notification_title()
	{
return <<<EOF
Nieuwe inlog informatie
EOF;
	}
}

if ( ! function_exists('reset_password_notification'))
{
	function reset_password_notification()
	{
return <<<EOF
{name},

Hier is je nieuwe inlog informatie:

Gebruikersnaam: {username}
Wachtwoord: {password}

{site_name}
{site_url}
EOF;
	}
}




//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

if ( ! function_exists('validated_member_notify_title'))
{
	function validated_member_notify_title()
	{
return <<<EOF
Je account is geactiveerd
EOF;
	}
}

if ( ! function_exists('validated_member_notify'))
{
	function validated_member_notify()
	{
return <<<EOF
{name},

Je account is geactiveerd en klaar voor gebruik.

Bedankt!

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

if ( ! function_exists('decline_member_validation_title'))
{
	function decline_member_validation_title()
	{
return <<<EOF
Je account is geweigerd
EOF;
	}
}

if ( ! function_exists('decline_member_validation'))
{
	function decline_member_validation()
	{
return <<<EOF
{name},

Het spijt ons, maar ons personeel heeft besloten om uw lidmaatschap te weigeren.

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mailinglist_activation_instructions_title'))
{
	function mailinglist_activation_instructions_title()
	{
return <<<EOF
E-mail bevestiging
EOF;
	}
}

if ( ! function_exists('mailinglist_activation_instructions'))
{
	function mailinglist_activation_instructions()
	{
return <<<EOF
Bedankt voor het aansluiten op de "{mailing_list}" mailing lijst!

Graag onderstaande link aanklikken om uw e-mailadres te bevestigen.

Als je niet wilt toegevoegd worden aan onze lijst dan kunt u deze e-mail negeren.

{unwrap}{activation_url}{/unwrap}

Bedankt!

{site_name}
EOF;
	}
}




//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

if ( ! function_exists('comment_notification_title'))
{
	function comment_notification_title()
	{
return <<<EOF
Iemand heeft zojuist geantwoord op een bericht
EOF;
	}
}

if ( ! function_exists('comment_notification'))
{
	function comment_notification()
	{
return <<<EOF
{name_of_commenter} heeft zojuist geantwoord op een bericht waarvoor je je aangemeld hebt in:
{channel_name}

De titel van het bericht:
{entry_title}

Je kan de opmerking zien op de volgende URL:
{comment_url}

{comment}

Wilt u geen meldingen meer voor dit bericht, klik hier:
{notification_removal_url}
EOF;
	}
}

//---------------------------------------------------
//	Comments Opened Notification
//--------------------------------------------------

if ( ! function_exists('comments_opened_notification_title'))
{
	function comments_opened_notification_title()
	{
return <<<EOF
Nieuwe opmerkingen geplaatst
EOF;
	}
}

if ( ! function_exists('comments_opened_notification'))
{
	function comments_opened_notification()
	{
return <<<EOF
Er zijn nieuwe opmerkingen op een bericht waarvoor je je aangemeld hebt in:
{channel_name}

De titel van het bericht:
{entry_title}

Je kan de opmerking zien op de volgende URL:
{comment_url}

{comments}
{comment} 
{/comments}

Wilt u geen meldingen meer voor dit bericht, klik hier:
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_gallery_comment_title'))
{
	function admin_notify_gallery_comment_title()
	{
return <<<EOF
Je hebt zojuist een opmerkingen ontvangen
EOF;
	}
}

if ( ! function_exists('admin_notify_gallery_comment'))
{
	function admin_notify_gallery_comment()
	{
return <<<EOF
Je hebt zojuist een opmerkingen ontvangen in het fotoalbum:
{gallery_name}

De titel van het bericht:
{entry_title}

Bevindt zich op:
{comment_url}

{comment}
EOF;
	}
}


//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

if ( ! function_exists('gallery_comment_notification_title'))
{
	function gallery_comment_notification_title()
	{
return <<<EOF
Iemand heeft zojuist gereageerd op jouw opmerking
EOF;
	}
}

if ( ! function_exists('gallery_comment_notification'))
{
	function gallery_comment_notification()
	{
return <<<EOF
Iemand heeft zojuist gereageerd op een foto in het fotoalbum:
{gallery_name}

Je kan de reactie zien op URL:
{comment_url}

{comment}

Wilt u geen meldingen meer voor dit bericht, klik hier:
{notification_removal_url}
EOF;
	}
}




//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

if ( ! function_exists('admin_notify_forum_post_title'))
{
	function admin_notify_forum_post_title()
	{
return <<<EOF
Iemand heeft zojuist een bericht geplaatst in {forum_name}
EOF;
	}
}

if ( ! function_exists('admin_notify_forum_post'))
{
	function admin_notify_forum_post()
	{
return <<<EOF
{name_of_poster} heeft zojuist een bericht geplaatst in {forum_name}

De titel van de discussie is:
{title}

Het bericht kan gevonden worden op:
{post_url}

{body}
EOF;
	}
}



//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

if ( ! function_exists('forum_post_notification_title'))
{
	function forum_post_notification_title()
	{
return <<<EOF
Iemand heeft zojuist een bericht geplaatst in {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_post_notification'))
{
	function forum_post_notification()
	{
return <<<EOF
Iemand heeft zojuist een bericht geplaatst in een discussie waarop je aangemeld bent in:
{forum_name}

De titel van de dicussie is:
{title}

Het bericht kan gevonden worden op:
{post_url}

{body}

Wilt u geen meldingen meer voor dit bericht, klik hier:
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

if ( ! function_exists('private_message_notification_title'))
{
	function private_message_notification_title()
	{
return <<<EOF
Iemand heeft je een privé bericht gestuurd
EOF;
	}
}

if ( ! function_exists('private_message_notification'))
{
	function private_message_notification()
	{
return <<<EOF

{recipient_name},

{sender_name} heeft je zojuist een privé bericht gestuurd genaamd ‘{message_subject}’.

Je kan het privé bericht lezen door in te loggen en je postvak in te bekijken op:
{site_url}

Bericht:

{message_content}

Om te stoppen met het ontvangen van meldingen van prive-berichten, schakelt u de optie uit in de e-mailinstellingen.

{site_name}
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Full PM Inbox
/* -------------------------------------*/
if ( ! function_exists('pm_inbox_full_title'))
{
	function pm_inbox_full_title()
	{
return <<<EOF
Je privé berichten postvak is vol
EOF;
	}
}

if ( ! function_exists('pm_inbox_full'))
{
	function pm_inbox_full()
	{
return <<<EOF
{recipient_name},

{sender_name} heeft zojuist geprobeerd je een privé bericht te sturen,
maar je postvak zit vol, waarbij het maximum aantal berichten is: {pm_storage_limit}.

Log in om je postvak op te ruimen op:
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/
if ( ! function_exists('forum_moderation_notification_title'))
{
	function forum_moderation_notification_title()
	{
return <<<EOF
Moderatie berichtgeving in {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_moderation_notification'))
{
	function forum_moderation_notification()
	{
return <<<EOF
{name_of_recipient}, een moderator heeft een actie uitgevoerd op je discussie: {moderation_action}

De titel van de dicussie is:
{title}

De dicussie kan gevonden worden op:
{thread_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/
if ( ! function_exists('forum_report_notification_title'))
{
	function forum_report_notification_title()
	{
return <<<EOF
Bericht gerapporteerd in {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_report_notification'))
{
	function forum_report_notification()
	{
return <<<EOF
{reporter_name} heeft zojuist een bericht gerapporteerd geschreven door {author} in:
{forum_name}

De reden van de rapportage:
{reasons}

Opmerkingen van {reporter_name}:
{notes}

Het bericht kan gevonden worden op:
{post_url}

De inhoud van het gerapporteerde bericht:
{body}
EOF;
	}
}



/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/
if ( ! function_exists('offline_template'))
{
	function offline_template()
	{
return <<<EOF
<html>
<head>

<title>Systeem offline</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Systeem offline</h1>

<p>Deze site is momenteel offline.</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/
if ( ! function_exists('message_template'))
{
	function message_template()
	{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/
if ( ! function_exists('mailinglist_template'))
{
	function mailinglist_template()
	{
return <<<EOF
{message_text}

Om je af te melden van deze mailing lijst, klik hier:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
	}
}




/* End of file email_data.php */
/* Location: ./system/expressionengine/language/english/email_data.php */