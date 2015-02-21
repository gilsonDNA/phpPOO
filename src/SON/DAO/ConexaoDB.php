<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 13/02/15
 * Time: 08:11
 */

namespace SON\DAO;


class ConexaoDB
{


    static function getConexao()
    {

        try {

            $host = '127.0.0.1';
            $dbname = 'phpOOP';
            $user = 'root';
            $password = 'dna123456';

            return new \PDO("mysql:host={$host};dbname={$dbname}", $user, $password);


        } catch (\PDOException $e) {
            echo $e->getMessage() . "\n";
            echo $e->getTraceAsString() . "\n";
        }
    }

} 