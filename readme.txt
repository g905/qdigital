fix in /srv/http/projects/qdigital.lc/vendor/robmorgan/phinx/src/Phinx/Util/Util.php line 111 - implode arguments

phinx migrations
php vendor/bin/phinx create TestMigration -c config-phinx.php
php vendor/bin/phinx migrate -c config-phinx.php
php vendor/bin/phinx rollback -c config-phinx.php