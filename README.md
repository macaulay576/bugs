# Bugs

[Visit the project](http://pixeline.github.io/bugs/)

![Printscreen](http://pixeline.github.io/bugs/images/bugs-index.png "Main screen")

# Installing Bugs

- Create a MySQL Database
- Make /uploads/ write-able (CHMOD 777)
- Open /install/ in your browser
- Delete or rename /install/

Enjoy!

# Upgrading from a previous installation

- backup config.app.php and your uploads folder.
- simply replace the codebase with the new version (via an ftp client such as Filezilla).
- make sure your uploads folder and config.app.php are still there
- If necessary, add this line to your config.app.php -> please see the last config.app.example.php


## Requirements:

- Tested on: Apache, IIS
- PHP 5.3+
- MySQL 5+
- PDO Extension for PHP (MySQL)
- MCrypt Extension for PHP
- Javascript Enabled - Bugs also uses heavy Javascript to make it easier to use

### How to contribute

We welcome and appreciate all contributions. The `develop` branch is the branch you should base all pull requests and development off of.
The `master` branch is tagged releases only.

# Changelog
- v.1.5.2 : 15 March 2017
	- reassign issue
	- email system based on PHPmail: work every time you change assignation
	- projects sorted by name
	- percentage work done
	- percentage time passed before deadline
	- every single word on screen may be translated by app/application/language files
	- install in many language
	
- v1.5 : 12 July 2015:
	- fix: Time Display format now configurable, see config.example.php
	- fix: SQL « tags » table not included during installation
	- fix: Bugs assets now load correctly if inside a subfolder

various layout tweaks.

- v1.2 : 28 August 2014: 
	- French translation updates
	- Various fixes
	- Multilingual email (code by [Wolfgang Gassler](http://wolfgang.gassler.org/) - [source](https://github.com/mikelbring/tinyissue/pull/197))
	- Kanban-style planning board (code by [Steve McCullough](http://irrational.ca/) - [source](https://github.com/mikelbring/tinyissue/pull/194))
- v1.1 : 26 August 2014: 
	- Tags (code by [Anton Kanevsky](http://about.me/akanevsky) - [source](https://github.com/mikelbring/tinyissue/pull/180) )
	- Visual identity. Project rebaptized Bugs. As in "Hugs", with a B.
- v1.0 : 25 August 2014:
	- project forked from Tiny Issue 1.3, by [Michael Hasselbring](http://michaelhasselbring.com), [Zachary Hoover](http://zachoover.com) and [Suthan Sangaralingham](http://suthanwebs.com/)

# Main Developers

- [Alexandre Plennevaux](https://pixeline.be)
