# SQLI_b0x  (With Love from Team ICA)
This repository contains sample SQL Injection vulnerable code which are not straight forward.

# Setup database for the Lab
Login to database and create a database with name "indishell_lab".
One need to specify the MySQL user credentials in file config.php. In my case, username was root and password was blank. Please change the config file accordingly.

After creating database, import the "indishell_lab.sql" SQL Dump file in newly created database.


# About Vulnerable codes
    add_quote.php

This PHP script is not escaping user supplied data but replace one quote with two quotes from it.
Attacker need to make an adjustment to neutralize one quote so that SQL Injection payload come outside the data limiters. 

    concat.php
 Concat.php is vulnerable to concationaton based blind SQL injection. This script does not allow boolean based blind injection in normal way. 
 Attacker need to perform SQL Injection using concationation approach.
