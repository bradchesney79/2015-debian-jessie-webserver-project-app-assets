namespace bradchesney79/config/AppSettings

// Application Settings //

class AppSettings {

    var $WEBROOT;
    var $DOCUMENTROOT;
    var $HOST;
    var $DOMAIN;

    function __construct() {
        this->$WEBROOT       = "/var/www";
        this->$DOCUMENTROOT  = $WEBROOT . "/https";
        this->$HOST          = "www";
        this->$DOMAIN        = "rustbeltrebellion.com";
    }

    function printAppSettings() {
        var_dump(this);
    }
}