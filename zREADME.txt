After installing this in your host. configure first the following PHP Files:

go to: config/siteurl.php
change the default url

go to: config/sysconfig.php
change the database connection configuration. base on your own host or installed_apache_mysql_server

If You want to add another page, do not store them in a separate Folder("/pages").
To Create page. just create "contact-us.php" from where the index.php is placed.

Example:
/index.php
/contact-us.php
/about-us.php

Don't:
/pages/contact-us.php
/pages/about-us.php
/index.php