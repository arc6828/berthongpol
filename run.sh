#!/bin/bash
cd  /var/www/simsaifah.com/wordpress
git checkout -f
git clean -fd wp-content/plugins
git clean -fd wp-content/themes
#git clean -fd
