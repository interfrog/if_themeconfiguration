#
# Table structure for table 'tx_ifthemeconfiguration_domain_model_themeconfiguration'
#
CREATE TABLE tx_ifthemeconfiguration_domain_model_themeconfiguration (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,
    theme varchar(255) DEFAULT '' NOT NULL,
    colorshemes int(11) unsigned DEFAULT '0' NOT NULL,
    scssfile varchar(255) DEFAULT '' NOT NULL,
    cssfile varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

    PRIMARY KEY (uid),
    KEY parent (pid),

    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);

#
# Table structure for table 'tx_ifthemeconfiguration_domain_model_color'
#
CREATE TABLE tx_ifthemeconfiguration_domain_model_color (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    name varchar(255) DEFAULT 'Schwarz' NOT NULL,
    red int(11) DEFAULT '0' NOT NULL,
    green int(11) DEFAULT '0' NOT NULL,
    blue int(11) DEFAULT '0' NOT NULL,
    hex varchar(255) DEFAULT '000000' NOT NULL,
    opacity int(11) DEFAULT '100' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

    PRIMARY KEY (uid),
    KEY parent (pid),

    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);

#
# Table structure for table 'tx_ifthemeconfiguration_domain_model_font'
#
CREATE TABLE tx_ifthemeconfiguration_domain_model_font (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,
    url varchar(255) DEFAULT '' NOT NULL,
    fontfamily varchar(255) DEFAULT '' NOT NULL,
    fonttype varchar(255) DEFAULT '' NOT NULL,

    identifier varchar(255) DEFAULT '' NOT NULL,
    ttf varchar(255) DEFAULT '' NOT NULL,
    woff varchar(255) DEFAULT '' NOT NULL,
    eot varchar(255) DEFAULT '' NOT NULL,
    svg varchar(255) DEFAULT '' NOT NULL,
    ttf_bold varchar(255) DEFAULT '' NOT NULL,
    woff_bold varchar(255) DEFAULT '' NOT NULL,
    eot_bold varchar(255) DEFAULT '' NOT NULL,
    svg_bold varchar(255) DEFAULT '' NOT NULL,
    ttf_italic varchar(255) DEFAULT '' NOT NULL,
    woff_italic varchar(255) DEFAULT '' NOT NULL,
    eot_italic varchar(255) DEFAULT '' NOT NULL,
    svg_italic varchar(255) DEFAULT '' NOT NULL,
    ttf_bolditalic varchar(255) DEFAULT '' NOT NULL,
    woff_bolditalic varchar(255) DEFAULT '' NOT NULL,
    eot_bolditalic varchar(255) DEFAULT '' NOT NULL,
    svg_bolditalic varchar(255) DEFAULT '' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    t3ver_oid int(11) DEFAULT '0' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,

    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,


    PRIMARY KEY (uid),
    KEY parent (pid),

    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);

#
# Table structure for table 'tx_ifthemeconfiguration_domain_model_colorsheme'
#
CREATE TABLE tx_ifthemeconfiguration_domain_model_colorsheme (
    uid int(11) NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    name varchar(255) DEFAULT '' NOT NULL,
    theme varchar(255) DEFAULT '0' NOT NULL,
    parent int(11) unsigned DEFAULT '0' NOT NULL,
    identifier varchar(255) DEFAULT '' NOT NULL,
    backgroundcolor int(11) unsigned DEFAULT '0' NOT NULL,
    headercolor int(11) unsigned DEFAULT '0' NOT NULL,
    textcolor int(11) unsigned DEFAULT '0' NOT NULL,
    linkcolor int(11) unsigned DEFAULT '0' NOT NULL,
    linkhovercolor int(11) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    t3ver_oid int(11) DEFAULT '0' NOT NULL,
    t3ver_id int(11) DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,
    t3ver_count int(11) DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) DEFAULT '0' NOT NULL,

    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob,


    PRIMARY KEY (uid),
    KEY parent (pid),

    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    colorsheme int(11) unsigned DEFAULT '0' NOT NULL,
);