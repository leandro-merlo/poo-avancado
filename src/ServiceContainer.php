<?php

namespace Source;

require_once '../src/db_config.php';

/**
 * Classe Singleton utilizada para servir a aplicação com os mais
 * variados tipos de instâncias. Utilizado para injeção de dependência.
 */
class ServiceContainer {

    private static $container;
    private static $instance;
    
    /**
     * Responsável por obter a instância do ServiceContainer
     * @return ServiceContainer;
     */
    public static function getInstance(){
        if (NULL == self::$instance):
            self::$instance = new ServiceContainer();
        endif;
        return self::$instance;
    }

    /**
     * Construtor privado para evitar sua instanciação direta.
     */
    private function __construct() {
        self::$container = new \Pimple\Container();
        ServiceContainer::register();
    }    
    
    /**
     * Método responsável por registrar todos os recursos no container
     */
    private static function register(){
        self::$container['pdoDB'] = new \Source\PDOConn(
                DB_PDO_TYPE, DB_NAME, HOST, USER, PASS);
        self::$container['product'] = self::$container->factory(
                function (){ return new \Source\Product(); });
        self::$container['productRepository'] = self::$container->factory(
                function ($self){ return new \Source\ProductRepository($self['pdoDB'], $self['product']); });
    }
    
    /**
     * Retorna o container que contém todos os recursos registrados na aplicação
     * @return \Pimple\Container
     */
    public function getContainer(){
        return self::$container;
    }
    
    

}
