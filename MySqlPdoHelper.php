<?php

require_once 'autoload.php';

namespace mmxca\MySqlPdoHelper;

use \mmxca\LoggingHelper;

/**
 * Description of MySqlPdoHelper
 *
 * @author David Hoffman
 */
class MySqlPdoHelper {
    
    private $logger = null;
    
    function __construct() {
        $this->logger = new LoggingHelper();
        $this->logger->write("MySqlPdoHelper constructed");
    }
    
    
}
