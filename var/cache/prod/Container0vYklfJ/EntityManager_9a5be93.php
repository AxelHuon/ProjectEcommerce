<?php

namespace Container0vYklfJ;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderfb932 = null;
    private $initializerfed4c = null;
    private static $publicProperties65251 = [
        
    ];
    public function getConnection()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getConnection', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getMetadataFactory', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getExpressionBuilder', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'beginTransaction', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getCache', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getCache();
    }
    public function transactional($func)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'transactional', array('func' => $func), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'wrapInTransaction', array('func' => $func), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'commit', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->commit();
    }
    public function rollback()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'rollback', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getClassMetadata', array('className' => $className), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'createQuery', array('dql' => $dql), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'createNamedQuery', array('name' => $name), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'createQueryBuilder', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'flush', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'clear', array('entityName' => $entityName), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->clear($entityName);
    }
    public function close()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'close', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->close();
    }
    public function persist($entity)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'persist', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'remove', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'refresh', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'detach', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'merge', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'contains', array('entity' => $entity), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getEventManager', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getConfiguration', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'isOpen', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getUnitOfWork', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getProxyFactory', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'initializeObject', array('obj' => $obj), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'getFilters', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'isFiltersStateClean', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'hasFilters', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return $this->valueHolderfb932->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerfed4c = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderfb932) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfb932 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderfb932->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, '__get', ['name' => $name], $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        if (isset(self::$publicProperties65251[$name])) {
            return $this->valueHolderfb932->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb932;
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
        $targetObject = $this->valueHolderfb932;
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
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb932;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderfb932;
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
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, '__isset', array('name' => $name), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb932;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderfb932;
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
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, '__unset', array('name' => $name), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfb932;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderfb932;
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
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, '__clone', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        $this->valueHolderfb932 = clone $this->valueHolderfb932;
    }
    public function __sleep()
    {
        $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, '__sleep', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
        return array('valueHolderfb932');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfed4c = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfed4c;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerfed4c && ($this->initializerfed4c->__invoke($valueHolderfb932, $this, 'initializeProxy', array(), $this->initializerfed4c) || 1) && $this->valueHolderfb932 = $valueHolderfb932;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfb932;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfb932;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
