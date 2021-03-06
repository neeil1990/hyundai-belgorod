CREATE TABLE IF NOT EXISTS `b_karudo_vcs_changed_items` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `DRIVER_CODE` varchar(30) NOT NULL,
  `ORIG_ID` varchar(255) NOT NULL,
  `ORIG_ID_HASH` varchar(32) NOT NULL,
  `SOURCE_HASH` varchar(32) DEFAULT NULL,
  `SOURCE` longblob,
  `STATUS` varchar(3) NOT NULL DEFAULT 'NEW',
  `TIMESTAMP_X` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `IX_ITEM` (`DRIVER_CODE`,`ORIG_ID_HASH`)
);

CREATE TABLE IF NOT EXISTS `b_karudo_vcs_drivers` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DRIVER_CODE` varchar(30) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `ACTIVE` int(11) NOT NULL DEFAULT '0',
  `SETTINGS` text NOT NULL,
  `TIMESTAMP_X` datetime NOT NULL,
  `LAST_CHECK` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `DRIVER_CODE` (`DRIVER_CODE`)
);

CREATE TABLE IF NOT EXISTS `b_karudo_vcs_items` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `DRIVER_CODE` varchar(30) NOT NULL,
  `ORIG_ID` varchar(255) NOT NULL,
  `ORIG_ID_HASH` varchar(32) NOT NULL,
  `DELETED` int(11) NOT NULL DEFAULT '0',
  `FIRST_REVISION_ID` bigint(20) NOT NULL DEFAULT '0',
  `REVISION_ID` bigint(20) NOT NULL DEFAULT '0',
  `TIMESTAMP_X` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `IX_ITEM` (`DRIVER_CODE`,`ORIG_ID_HASH`),
  KEY `REVISION_ID` (`REVISION_ID`)
);

CREATE TABLE IF NOT EXISTS `b_karudo_vcs_revisions` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `DESCRIPTION` varchar(255) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `DATEADD` datetime NOT NULL,
  PRIMARY KEY (`ID`)
);

CREATE TABLE IF NOT EXISTS `b_karudo_vcs_sources` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ITEM_ID` bigint(20) NOT NULL,
  `REVISION_ID` bigint(20) NOT NULL,
  `SOURCE_HASH` varchar(32) DEFAULT NULL,
  `SOURCE` longblob,
  `IS_COMPRESSED` int(11) NOT NULL DEFAULT '0',
  `TIMESTAMP_X` datetime DEFAULT NULL,
  `IS_NEW` int(11) NOT NULL DEFAULT '0',
  `DELETED` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `ITEM_ID` (`ITEM_ID`),
  KEY `REVISION_ID` (`REVISION_ID`)
);
