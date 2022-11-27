# SQLI_b0x
This repository contains sample SQL Injection vulnerable codes which are not straight forward. I will publish write-up for each scenario as well. 

# Setup database for the Lab
Login to database and create a database with name `indishell_lab`.

One need to specify the MySQL user credentials in file `config.php`. In my case, username was root and password was blank. Please change the config file accordingly.

After creating database, import the `indishell_lab.sql` SQL Dump file in newly created database.


# About Vulnerable codes


### 1. add_quote.php

This PHP script is not escaping user-supplied data but replace one quote with two quotes.

Attacker need to make an adjustment to neutralize one quote so that SQL Injection payload come outside the data limiter. 

Example payload: 

`add_quote.php?member=1\' order by 1-- -` 


### 2. concat.php
   
 `concat.php` is vulnerable to concationaton based blind SQL injection. This script does not allow boolean based blind injection in normal way. 
 
 Attacker need to perform SQL Injection using concationation approach.
 
 Example payload: 

<b>True condition payload</b>

`?core=Window'%2b(select sleep(5) from dual where 1=1)%2b's` 

<b>False condition payload</b>

`?core=Window'%2b(select sleep(5) from dual where 1=2)%2b's` 

### 3. order_by.php

This PHP script is passing user-supplied data to `order by` clause and script is not showing any SQL server error message.

An attacker can exploit blind injection by injecting an inline select statement which returns multiple rows as output if condition is true. In such condition order by clause raise an error because it can't process multiple rows. 

If the condition in inline Select statement is incorrect, zero rows will be returned and order by clause won't raise any error and the web application returns data.

Example payload: 

<b>True condition payload</b>

`(select table_name from information_schema.tables where 1=1)` 

<b>False condition payload</b>

`(select table_name from information_schema.tables where 1=2)` 

### 4. order_by_sort.php

In this script, user-supplied data `ASC` is passing to `order by` clause to sort the SQL query output in Ascending order. 

When script is not showing any SQL server error message, an attacker can exploit blind SQL injection by injecting an inline Select statement as another column name.

Example payload: 

<b>True condition payload</b>

`,(select table_name from information_schema.tables where 1=1)` 

<b>False condition payload</b>

`,(select table_name from information_schema.tables where 1=2)` 

<b>./init 0</b>

<b>--==[[ With Love From IndiShell ]]==--</b> <img src="https://web.archive.org/web/20140704135452/freesmileys.org/smileys/smiley-flag010.gif">

--==[[ Greetz To ]]==--

	Guru ji zero, Code breaker ICA, root_devil, INX_r0ot, Darkwolf indishell, Baba, Silent poison India, Magnum sniper, ethicalnoob Indishell, 
    Reborn India, L0rd Crus4d3r, cool toad, Hackuin, Alicks, mike waals, cyber gladiator, Cyber Ace, Golden boy INDIA, d3, rafay baloch, nag256
	Ketan Singh, AR AR, saad abbasi, Minhal Mehdi, Raj bhai ji, Hacking queen, lovetherisk, D2, Bikash Dash and rest of the Team INDISHELL

--==[[Love to]]==--

	My Father, my Ex Teacher, cold fire hacker, Mannu, ViKi, Ashu bhai ji, Soldier Of God, Bhuppi, Gujjar PCP
	Mohit, Ffe, Shardhanand, Budhaoo, Jagriti, Hacker fantastic, Jennifer Arcuri, Thecolonial and Don(Deepika kaushik)
