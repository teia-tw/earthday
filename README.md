
A Vagrant + Ansible environment for Drupal development.

Usage
-----

        # Put your Drupal site under `docroot` directory
        $ vagrant up
        # check http://localhost:8080/

You can connect to MySQL at `localhost:3306`.

### Database configuration

* DB Host: 192.168.10.3
* DB User: drupal
* DB Password: foobar

### Drush

        $ cp vg.aliases.drushrc.php ~/.drush/
        $ vagrant ssh-config > ssh_config
        $ drush @vg status
        # and possibly
        $ drush site-set @vg
