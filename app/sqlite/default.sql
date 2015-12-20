DROP TABLE IF EXISTS "categories";
CREATE TABLE categories(
  id INTEGER PRIMARY KEY ASC,
  title TEXT
);
INSERT INTO "categories" VALUES(2,'Dangereux');
INSERT INTO "categories" VALUES(3,'Calme');
INSERT INTO "categories" VALUES(4,'Rechercher');
DROP TABLE IF EXISTS "comments";
CREATE TABLE comments(
  id INTEGER PRIMARY KEY ASC,
  prisoner_id INTEGER,
  name TEXT,
  email TEXT,
  text TEXT,
  created TEXT,
  modified TEXT
);
INSERT INTO "comments" VALUES(13,7,'Meurtre commis en cellule','membre@hotmail.com','Bob a tuer son partenaire de cellule.','2015-10-07','2015-10-07');
INSERT INTO "comments" VALUES(14,5,'Suicide','super@hotmail.com','Charles a tenté de ce suicidé.','2015-10-07','2015-10-07');
DROP TABLE IF EXISTS "ethnies";
CREATE TABLE ethnies(
  id INTEGER PRIMARY KEY ASC,
  sex_id INTEGER,
  name TEXT
);
INSERT INTO "ethnies" VALUES(1,2,'Afro-Américaine');
INSERT INTO "ethnies" VALUES(2,2,'Coréene');
INSERT INTO "ethnies" VALUES(3,2,'Galloise');
INSERT INTO "ethnies" VALUES(4,3,'Afro-Américain');
INSERT INTO "ethnies" VALUES(5,3,'Coréen');
INSERT INTO "ethnies" VALUES(6,3,'Gallois');
INSERT INTO "ethnies" VALUES(10,2,'Arabe');
INSERT INTO "ethnies" VALUES(11,3,'Arabe');
DROP TABLE IF EXISTS "names";
CREATE TABLE names(
  id INTEGER PRIMARY KEY ASC,
  name TEXT,
  created TEXT,
  modified TEXT
);
INSERT INTO "names" VALUES(36,'Adam','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(37,'Alex','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(38,'Alexandre','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(39,'Alexis','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(40,'Anthony','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(41,'Antoine','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(42,'benjamin','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(43,'Cédric','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(44,'Charles','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(45,'Christopher','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(46,'David','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(47,'Dylan','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(48,'Édouard','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(49,'Elliot','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(50,'Émile','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(51,'Étienne','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(52,'Félix','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(53,'Gabriel','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(54,'Guillaume','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(55,'Hugo','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(56,'Isaac','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(57,'Jacob','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(58,'Jérémy','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(59,'Jonathan','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(60,'Julien','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(61,'Justin','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(62,'Léo','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(63,'Logan','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(64,'Mathieu','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(65,'Mathis','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(66,'Nathan','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(67,'Nicolas','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(68,'Raphaël','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(69,'Samuel','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(70,'Tristan','2015-11-09 17:50:05','2015-11-09 17:50:05');
INSERT INTO "names" VALUES(71,'Alice','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(72,'Catherine','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(73,'Coralie','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(74,'Élodie','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(75,'Émilie','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(76,'Ève','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(77,'Florence','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(78,'Justine','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(79,'Léanne','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(80,'Maika','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(81,'Marianne','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(82,'Mégan','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(83,'Noémie','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(84,'Océane','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(85,'Olivia','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(86,'Rosalie','2015-11-09 18:01:43','2015-11-09 18:01:43');
INSERT INTO "names" VALUES(87,'Rose','2015-11-09 18:01:43','2015-11-09 18:01:43');
DROP TABLE IF EXISTS "offences";
CREATE TABLE offences(
  id INTEGER PRIMARY KEY ASC,
  name TEXT NOT NULL,
  description TEXT NOT NULL
);
INSERT INTO "offences" VALUES(3,'Vol','S''approprier furtivement ou par la force le bien d''autrui.');
INSERT INTO "offences" VALUES(4,'Meurtre','Fait de tuer volontairement quelqu''un.');
INSERT INTO "offences" VALUES(5,'Viol','Rapport sexuel imposé à quelqu''un par la violence, obtenu par la contrainte, qui constitue pénalement un crime.');
DROP TABLE IF EXISTS "prisoners";
CREATE TABLE prisoners(
  id INTEGER PRIMARY KEY ASC,
  name TEXT,
  number INTEGER,
  details TEXT,
  user_id INTEGER,
  category_id INTEGER,
  created TEXT,
  modified TEXT,
  filename TEXT,
  ethny_id INTEGER
);
INSERT INTO "prisoners" VALUES(6,'Mathieu',3545342,'Solitaire',12,3,'2015-10-07','2015-10-07',NULL,1);
INSERT INTO "prisoners" VALUES(7,'Bob',48457345,'Être 2 gardiens lors de déplacement.',12,2,'2015-10-07','2015-10-07',NULL,1);
INSERT INTO "prisoners" VALUES(8,'sdfsdf',5,'dfsdfsdf',10,3,'2015-11-06','2015-11-07','uploads/Penguins.jpg',1);
INSERT INTO "prisoners" VALUES(9,'Anthony',2147483647,'dfsdfsdfsdfsdfds',10,2,'2015-11-09','2015-11-10','uploads/Tulips.jpg',5);
DROP TABLE IF EXISTS "prisoners_offences";
CREATE TABLE prisoners_offences(
  id INTEGER PRIMARY KEY ASC,
  prisoner_id INTEGER,
  offence_id INTEGER
);
INSERT INTO "prisoners_offences" VALUES(11,6,3);
INSERT INTO "prisoners_offences" VALUES(12,7,3);
INSERT INTO "prisoners_offences" VALUES(13,7,4);
INSERT INTO "prisoners_offences" VALUES(14,8,4);
INSERT INTO "prisoners_offences" VALUES(15,9,3);
INSERT INTO "prisoners_offences" VALUES(16,9,4);
INSERT INTO "prisoners_offences" VALUES(17,9,5);
DROP TABLE IF EXISTS "sexes";
CREATE TABLE sexes(
  id INTEGER PRIMARY KEY ASC,
  name TEXT
);
INSERT INTO "sexes" VALUES(1,' ');
INSERT INTO "sexes" VALUES(2,'Femme');
INSERT INTO "sexes" VALUES(3,'Homme');
DROP TABLE IF EXISTS "users";
CREATE TABLE users(
  id INTEGER PRIMARY KEY ASC,
  username TEXT,
  password TEXT,
  role TEXT,
  email TEXT,
  created TEXT,
  modified TEXT,
  active INTEGER
);
INSERT INTO "users" VALUES(10,'admin','$2a$10$EmDwJDM69tFzXCHZx1SYg.LAAaSPIA7nRZ3ZpYX9hu8srxE9AqusC','admin','admin@hotmail.com','2015-10-07','2015-10-07',1);
INSERT INTO "users" VALUES(12,'super','$2a$10$Snsw5oKuOq7.5Mt0agdYb.fACoXnMKUvb.ySPjiYntBFaI5e8G0iq','super-users','super@hotmail.com','2015-10-07','2015-10-07',0);
INSERT INTO "users" VALUES(13,'membre','$2a$10$EbVMfuu476PVOINJEYm/IOc.L5kblXnZir.lC8u9ZgeBpmywYvSIC','membre','membre@hotmail.com','2015-10-07','2015-10-07',0);
INSERT INTO "users" VALUES(14,'simon','$2a$10$G151iOOSttv0lAxxdqUy7.5QuSAIQCwGYeUxzix74r0fDjEPZHlnq','admin','mathieu.dubreuil33@gmail.com','2015-11-11','2015-11-11',0);
INSERT INTO "users" VALUES(15,'malik','$2a$10$oMJ5.6.l/o2C8hTdPSxNO.WvoT35JLQAGOdEyoyhiNRVR2UmJ9tq2','admin','mathieu.dubreuil33@gmail.com','2015-11-11','2015-11-11',0);
INSERT INTO "users" VALUES(16,'bobtest','$2a$10$wwPD/.DtkOOu7g1P44YtpejZ5RTxpE5cdn1rJ8maulEC6bgnWvV7G','admin','mathieu.dubreuil33@gmail.com','2015-11-11','2015-11-11',1);
INSERT INTO "users" VALUES(17,'boby','$2a$10$KhqkYZVlzpVZg6IyJJGj4.4mlmYYedPvRJCGY9LPQJ2FEFfz3g9xm','super-users','mathieu.dubreuil33@gmail.com','2015-11-11','2015-11-11',1);
INSERT INTO "users" VALUES(23,'ant','$2a$10$bYxxSaAzl875P8t62bOvv.HToaNUSmkojQcsxwufP2LIRfjmtj.Ci','super-users','mathieu.dubreuil33@gmail.com','2015-11-11','2015-11-11',1);
