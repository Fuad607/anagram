<?php

namespace ContainerSvInU6P;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0c68a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4f129 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c59a = [
        
    ];

    public function getConnection()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getConnection', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getMetadataFactory', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getExpressionBuilder', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'beginTransaction', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getCache', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'transactional', array('func' => $func), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'commit', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->commit();
    }

    public function rollback()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'rollback', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'createQuery', array('dql' => $dql), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'createQueryBuilder', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'flush', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'clear', array('entityName' => $entityName), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->clear($entityName);
    }

    public function close()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'close', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->close();
    }

    public function persist($entity)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'persist', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'remove', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'refresh', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'detach', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'merge', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'contains', array('entity' => $entity), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getEventManager', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getConfiguration', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'isOpen', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getUnitOfWork', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getProxyFactory', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'getFilters', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'isFiltersStateClean', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'hasFilters', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return $this->valueHolder0c68a->hasFilters();
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

        $instance->initializer4f129 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0c68a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0c68a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0c68a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, '__get', ['name' => $name], $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        if (isset(self::$publicProperties9c59a[$name])) {
            return $this->valueHolder0c68a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c68a;

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

        $targetObject = $this->valueHolder0c68a;
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
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c68a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0c68a;
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
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, '__isset', array('name' => $name), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c68a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0c68a;
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
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, '__unset', array('name' => $name), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c68a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0c68a;
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
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, '__clone', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        $this->valueHolder0c68a = clone $this->valueHolder0c68a;
    }

    public function __sleep()
    {
        $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, '__sleep', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;

        return array('valueHolder0c68a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f129 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f129;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4f129 && ($this->initializer4f129->__invoke($valueHolder0c68a, $this, 'initializeProxy', array(), $this->initializer4f129) || 1) && $this->valueHolder0c68a = $valueHolder0c68a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0c68a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0c68a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
