<?php

/**
 * This function is called on installation and is used to create database schema for the plugin
 */
function extension_install_powershellversion()
{
    $commonObject = new ExtensionCommon;

    $commonObject -> sqlQuery("DROP TABLE `powershellversion`");

    $commonObject -> sqlQuery("CREATE TABLE `powershellversion` (
                              `ID` INT(11) NOT NULL AUTO_INCREMENT,
                              `HARDWARE_ID` INT(11) NOT NULL,
                              `VERSION` VARCHAR(255) DEFAULT NULL,
                              `MAJOR` INT(11) DEFAULT NULL,
                              `MINOR` INT(11) DEFAULT NULL,
                              `BUILD` INT(11) DEFAULT NULL,
                              `REVISION` INT(11) DEFAULT NULL,
                              PRIMARY KEY  (`ID`,`HARDWARE_ID`)
                            ) ENGINE=INNODB ;");
}

/**
 * This function is called on removal and is used to destroy database schema for the plugin
 */
function extension_delete_powershellversion()
{
    $commonObject = new ExtensionCommon;
    $commonObject -> sqlQuery("DROP TABLE `powershellversion`");
}

/**
 * This function is called on plugin upgrade
 */
function extension_upgrade_powershellversion()
{

}
