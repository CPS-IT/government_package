CREATE TABLE tx_governmentpackage_shortlink_item (
    title varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,
    link_icon int(11) unsigned DEFAULT '0',
    tt_content int(11) unsigned DEFAULT '0',
);

CREATE TABLE tx_governmentpackage_shortlink_item (
    title varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,
    link_icon int(11) unsigned DEFAULT '0',
    tt_content int(11) unsigned DEFAULT '0',
);

CREATE TABLE tx_governmentpackage_link_item (
     title varchar(255) DEFAULT '' NOT NULL,
     link varchar(1024) DEFAULT '' NOT NULL,
     tt_content int(11) unsigned DEFAULT '0',
);

CREATE TABLE tx_governmentpackage_teaser_item (
    title varchar(255) DEFAULT '' NOT NULL,
    link varchar(1024) DEFAULT '' NOT NULL,
    bodytext text,
    image int(11) unsigned DEFAULT '0',
    tt_content int(11) unsigned DEFAULT '0',
);



CREATE TABLE tt_content (
    tx_governmentpackage_shortlink_item int(11) unsigned DEFAULT '0',
    tx_governmentpackage_link_item int(11) unsigned DEFAULT '0',
    tx_governmentpackage_teaser_item int(11) unsigned DEFAULT '0',
);