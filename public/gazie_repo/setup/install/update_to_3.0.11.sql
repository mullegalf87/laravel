UPDATE `gaz_config` SET `cvalue` = '37' WHERE `id` =2;
ALTER TABLE `gaz_aziend` CHANGE `codiva` `cod_ateco` INT( 6 ) NOT NULL DEFAULT '0';
UPDATE `gaz_config` SET `cvalue` = '38' WHERE `id` =2;
ALTER TABLE `gaz_admin` CHANGE `table_prefix` `enterprise_id` INT( 3 ) NOT NULL;
ALTER TABLE `gaz_admin_module` ADD `enterpriseid` INT( 3 ) NOT NULL AFTER `adminid`;
ALTER TABLE `gaz_admin_module` DROP PRIMARY KEY , ADD PRIMARY KEY ( `adminid` , `enterpriseid` , `moduleid` );
UPDATE `gaz_config` SET `cvalue` = '39' WHERE `id` =2;
UPDATE `gaz_aziend` SET `artsea` = 'D' WHERE `artsea` = '' LIMIT 1 ;
UPDATE `gaz_config` SET `cvalue` = '40' WHERE `id` =2;
ALTER TABLE `gaz_aziend` CHANGE `magazz` `magazz` INT( 1 ) NOT NULL;
ALTER TABLE `gaz_aziend` ADD `stock_eval_method` INT( 1 ) NOT NULL AFTER `magazz`;
UPDATE `gaz_aziend` SET `stock_eval_method` = 1 WHERE 1;
ALTER TABLE `gaz_aziend` DROP `magazz`;  
UPDATE `gaz_config` SET `cvalue` = '41' WHERE `id` =2;
ALTER TABLE `gaz_artico` ADD `last_cost` DECIMAL( 14, 5 ) NULL AFTER `valore`;
UPDATE `gaz_config` SET `cvalue` = '42' WHERE `id` =2;
INSERT INTO `gaz_menu_script` (`id` ,`id_menu` ,`link` ,`icon` ,`class` ,`translate_key` ,`accesskey` ,`weight`) VALUES ('52', '23', 'recalc_exist_value.php', '', '', '2', '', '2');