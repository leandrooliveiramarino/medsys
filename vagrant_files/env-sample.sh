ADDITIONAL_SOFTWARES="vim htop"

PHP_VERSION="7.1"

# Vagrant constants
MACHINE_NAME="MedSys"
PRIVATE_IP="10.10.10.100"
VAGRANT_TARGET="/var/www/medsys"
VAGRANT_DOCUMENT_ROOT="/var/www/medsys/public"
LOCAL_PATH="/mnt/data/Linux/www/MedSys/project"

SERVER_NAME="dev.medsys.com.br"

SYNCFOLDER_PATH="/mnt/data/Linux/www/MedSys/vagrant_files/sync"
SYNCFOLDER_TARGET="/tmp/sync"

MYSQL_USER_NAME="root"
MYSQL_DUMP_NAME="medsys.sql"
MYSQL_PASSWORD="password"
MYSQL_HOST="127.0.0.1"
MYSQL_DATABASE_NAME="medsys"

# --- Laravel Settings begin --- #

APP_NAME="MedSys"
APP_ENV="local"
APP_KEY="base64:YywhptP4rSJgGt+M0w94k2QszhyhdNYTvNyJjIwhudY="
APP_DEBUG="true"
APP_LOG_LEVEL="debug"
APP_URL="$SERVER_NAME"

DB_CONNECTION="mysql"
DB_HOST="$MYSQL_HOST"
DB_PORT="3306"
DB_DATABASE="$MYSQL_DATABASE_NAME"
DB_USERNAME="$MYSQL_USER_NAME"
DB_PASSWORD="$MYSQL_PASSWORD"

# --- Laravel Settings end --- #

VIRTUAL_HOST="<VirtualHost *:80>
        # The ServerName directive sets the request scheme, hostname and port t$
        # the server uses to identify itself. This is used when creating
        # redirection URLs. In the context of virtual hosts, the ServerName
        # specifies what hostname must appear in the request's Host: header to
        # match this virtual host. For the default virtual host (this file) this
        # value is not decisive as it is used as a last resort host regardless.
        # However, you must set it for any further virtual host explicitly.
        #ServerName www.example.com

        ServerAdmin webmaster@localhost
        ServerName $SERVER_NAME
        DocumentRoot $VAGRANT_DOCUMENT_ROOT
        <Directory $VAGRANT_DOCUMENT_ROOT>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Require all granted
        </Directory>

        # Available loglevels: trace8, ..., trace1, debug, info, notice, warn,
        # error, crit, alert, emerg.
        # It is also possible to configure the loglevel for particular
        # modules, e.g.
        #LogLevel info ssl:warn

        ErrorLog \${APACHE_LOG_DIR}/error.log
        CustomLog \${APACHE_LOG_DIR}/access.log combined

        # For most configuration files from conf-available/, which are
        # enabled or disabled at a global level, it is possible to
        # include a line for only one particular virtual host. For example the
        # following line enables the CGI configuration for this host only
        # after it has been globally disabled with \"a2disconf\".
        #Include conf-available/serve-cgi-bin.conf
</VirtualHost>"

