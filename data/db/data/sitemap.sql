INSERT INTO `sitemap` (
	`titel`,`language`,`keyword`,`descr`,`robots`,`directory`,`name`,`type`,`path`,`landingpage`,`onlymember`,`onlypayed`) 
VALUES 
	('Spracherkennung / Weiterleitung','de','permanante Weiterleitung','Anwender werden aufgrund ihrer Spracheinstellungen im Browser automatisch auf die richtige Sprache weitergeleitet.','all','/','index','php','/index.php','0','0','0'),
	('BIG5 Persönlichkeitstest','de','Persönlichkeitstest Landingpage','machen Sie hier Ihren Persönlichkeitstest','all','/de/','index','php','/de/index.php','1','0','0'),
	('AGB - Allgemeine Geschäftsbedingungen','de','agb','Unsere allgemeinen Geschäftsbedingungen','all','/de/legal/','terms','php','/de/legal/terms.php','0','0','0'),
	('Datenschutz','de','datenschutz','Unsere Datenschutzrichtlinien','all','/de/legal/','privacy','php','/de/legal/privacy.php','0','0','0'),
	('Impressum','de','impressum','Impressum','all','/de/legal/','legal_notice','php','/de/legal/legal_notice.php','0','0','0'),
	('Kontakt','de','kontakt','Kontakt','all','/de/legal/','contact','php','/de/legal/contact.php','0','0','0'),
	('Login','de','Login','Login','all','/de/legal/','login','php','/de/legal/login.php','0','0','0'),
	('Logout','de','Logout','Script: header:de/index.php','all','/de/legal/','logout','php','/de/legal/logout.php','0','0','0'),
	('Fragen zu Ihrem Persönlichkeitstest','de','Persönlichkeitstest Fragen','Hier finden Sie alle Fragen zum Persönlichkeitstest','all','/de/personalitytest/','questions','php','/de/personalitytest/questions.php','0','0','0'),
	('Auswertung zum Persönlichkeitstest','de','Auswertung','Hier finden Sie Ihre persönliche Auswertung zum Test.','all','/de/personalitytest/','summary','php','/de/personalitytest/summary.php','0','1','0'),
	('Angebot','de','Angebot','Angebot','all','/de/personalitytest/','offer','php','/de/personalitytest/offer.php','0','1','0'),
	('Bestellung','de','Bestellung','Bestellung','all','/de/personalitytest/','order','php','/de/personalitytest/order.php','0','1','0'),
	('Download','de','Download','Download','all','/de/personalitytest/','download','php','/de/personalitytest/download.php','0','1','1'),
	('Bezahlung auf PayPal abgebrochen','de','Bezahlung auf PayPal abgebrochen','Bezahlung auf PayPal abgebrochen','all','/de/payment/paypal/','cancel','php','/de/payment/paypal/cancel.php','0','1','0'),
	('Bezahlung auf PayPal erfolgreich','de','Bezahlung auf PayPal erfolgreich','Bezahlung auf PayPal erfolgreich','all','/de/payment/paypal/','success','php','/de/payment/paypal/success.php','0','1','0'),
	('Bezahlung auf PayPal IPN Script','de','Bezahlung auf PayPal IPN Script','Script: IPN empfangen und senden','all','/de/payment/paypal/','ipn','php','/de/payment/paypal/ipn.php','0','0','0');