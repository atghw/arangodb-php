<?php

/**
 * ArangoDB PHP client: default values
 *
 * @package   ArangoDBClient
 * @author    Jan Steemann
 * @copyright Copyright 2012, triagens GmbH, Cologne, Germany
 */

namespace ArangoDBClient;

/**
 * Contains default values used by the client
 *
 * <br>
 *
 * @package   ArangoDBClient
 * @since     0.2
 */
abstract class DefaultValues
{
    /**
     * Default port number (used if no port specified)
     */
    public const DEFAULT_PORT = 8529;

    /**
     * Default timeout value (used if no timeout value specified)
     * @deprecated superseded by DEFAULT_CONNECT_TIMEOUT and DEFAULT_REQUEST_TIMEOUT
     */
    public const DEFAULT_TIMEOUT = 30;
    
    /**
     * Default connect timeout value (used if no timeout value specified)
     */
    public const DEFAULT_CONNECT_TIMEOUT = 30;
    
    /**
     * Default request timeout value (used if no timeout value specified)
     */
    public const DEFAULT_REQUEST_TIMEOUT = 30;
    
    /**
     * Default number of failover servers to try (used in case there is an automatic failover)
     * if set to 0, then an unlimited amount of servers will be tried
     */
    public const DEFAULT_FAILOVER_TRIES = 3;
    
    /**
     * Default max amount of time (in seconds) that is spent waiting on failover
     */
    public const DEFAULT_FAILOVER_TIMEOUT = 30;
    
    /**
     * Default Authorization type (use HTTP basic authentication)
     */
    public const DEFAULT_AUTH_TYPE = 'Basic';

    /**
     * Default value for waitForSync (fsync all data to disk on document updates/insertions/deletions)
     */
    public const DEFAULT_WAIT_SYNC = false;

    /**
     * Default value for createCollection (create the collection on the fly when the first document is added to an unknown collection)
     */
    public const DEFAULT_CREATE = false;

    /**
     * Default value for HTTP Connection header
     */
    public const DEFAULT_CONNECTION = 'Keep-Alive';

    /**
     * Default value for SSL certificate verification
     */
    public const DEFAULT_VERIFY_CERT = false;
    
    /**
     * Default value for SSL certificate host name verification
     */
    public const DEFAULT_VERIFY_CERT_NAME = false;

    /**
     * Default value for accepting self-signed SSL certificates
     */
    public const DEFAULT_ALLOW_SELF_SIGNED = true;

    /**
     * Default value for ciphers to be used in SSL
     */
    public const DEFAULT_CIPHERS = null;

    /**
     * Default update policy
     */
    public const DEFAULT_UPDATE_POLICY = UpdatePolicy::ERROR;

    /**
     * Default replace policy
     */
    public const DEFAULT_REPLACE_POLICY = UpdatePolicy::ERROR;

    /**
     * Default delete policy
     */
    public const DEFAULT_DELETE_POLICY = UpdatePolicy::ERROR;

    /**
     * Default value for checking if data is UTF-8 conform
     */
    public const DEFAULT_CHECK_UTF8_CONFORM = false;
}

class_alias(DefaultValues::class, '\triagens\ArangoDb\DefaultValues');
