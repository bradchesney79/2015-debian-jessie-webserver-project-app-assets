namespace bradchesney79/config/AppSettings

// Application Settings //

class AppSettings {

    private var $webroot;
    private var $documentroot;
    private var $host;
    private var $domain;

    function __construct() {
        this->$webroot       = "/var/www";
        this->$documentroot  = $webroot . "/https";
        this->$host          = "www";
        this->$domain        = "rustbeltrebellion.com";
    }

    function printAppSettings() {
        var_dump(this);
    }

    function getWebroot() {
        return this->webroot;
    }

    function getDocumentroot() {
        return this->documentroot;
    }

    function getHost() {
        return this->host;
    }

    function getDomain() {
        return this->domain;
    }
}