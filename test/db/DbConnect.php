<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classa
 *
 * @author luu.nguyen
 */

class DbConnect {
        
        function connect ()
        {
        $dsn = TEST_DB_DSN;
        $user = TEST_DB_USER;
        $password = TEST_DB_PASSWORD;
        
        try {
        $db = new PDO($dsn, $user, $password);
        return $db;
        } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        }    
        }
          
}

?>
