CREATE DATABASE lol;

USE lol;

CREATE TABLE lol_skin (
  skin_id int(11) NOT NULL auto_increment,
  skin_name varchar(100) collate utf8_unicode_ci NOT NULL,
  skin_designer varchar(100) collate utf8_unicode_ci NOT NULL,
  skin_vote_number int(11) NOT NULL default '0',
  skin_file_location varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`skin_id`)
);

CREATE TABLE lol_voice (
  voice_id int(11) NOT NULL auto_increment,
  voice_name varchar(100) collate utf8_unicode_ci NOT NULL,
  voice_designer varchar(100) collate utf8_unicode_ci NOT NULL,
  voice_vote_number int(11) NOT NULL default '0',
  voice_file_location varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`voice_id`)
);

CREATE USER lol_user IDENTIFIED BY 'your password';

GRANT SELECT,UPDATE,INSERT,DELETE on lol.* to lol_user;