<?php

namespace ContainerJRNYbEp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8a1cb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3c418 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb9044 = [
        
    ];

    public function getConnection()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getConnection', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getMetadataFactory', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getExpressionBuilder', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'beginTransaction', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getCache', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'transactional', array('func' => $func), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->transactional($func);
    }

    public function commit()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'commit', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->commit();
    }

    public function rollback()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'rollback', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getClassMetadata', array('className' => $className), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'createQuery', array('dql' => $dql), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'createNamedQuery', array('name' => $name), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'createQueryBuilder', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'flush', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'clear', array('entityName' => $entityName), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->clear($entityName);
    }

    public function close()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'close', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->close();
    }

    public function persist($entity)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'persist', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'remove', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'refresh', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'detach', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'merge', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'contains', array('entity' => $entity), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getEventManager', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getConfiguration', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'isOpen', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getUnitOfWork', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getProxyFactory', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'initializeObject', array('obj' => $obj), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'getFilters', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'isFiltersStateClean', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'hasFilters', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return $this->valueHolder8a1cb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3c418 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8a1cb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8a1cb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8a1cb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, '__get', ['name' => $name], $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        if (isset(self::$publicPropertiesb9044[$name])) {
            return $this->valueHolder8a1cb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a1cb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8a1cb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a1cb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8a1cb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, '__isset', array('name' => $name), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a1cb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8a1cb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, '__unset', array('name' => $name), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8a1cb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8a1cb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, '__clone', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        $this->valueHolder8a1cb = clone $this->valueHolder8a1cb;
    }

    public function __sleep()
    {
        $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, '__sleep', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;

        return array('valueHolder8a1cb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3c418 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3c418;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3c418 && ($this->initializer3c418->__invoke($valueHolder8a1cb, $this, 'initializeProxy', array(), $this->initializer3c418) || 1) && $this->valueHolder8a1cb = $valueHolder8a1cb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8a1cb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8a1cb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
