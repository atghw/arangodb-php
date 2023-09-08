<?php

/**
 * ArangoDB PHP client: Base URLs
 *
 * @package   ArangoDBClient
 * @author    Jan Steemann
 * @copyright Copyright 2012, triagens GmbH, Cologne, Germany
 */

namespace ArangoDBClient;

/**
 * Some basic URLs
 *
 * @package ArangoDBClient
 * @since   0.2
 */
abstract class Urls
{
    /**
     * URL base part for document-related CRUD operations REST calls
     */
    public const URL_DOCUMENT = '/_api/document';

    /**
     * URL base part for edge-related CRUD operations REST calls
     */
    public const URL_EDGE = '/_api/document';

    /**
     * URL base part for all retrieving connected edges
     */
    public const URL_EDGES = '/_api/edges';

    /**
     * URL base part for all graph-related REST calls
     */
    public const URL_GRAPH = '/_api/gharial';
    
    /**
     * URL base part for all view-related REST calls
     */
    public const URL_VIEW = '/_api/view';
    
    /**
     * URL base part for all analyzer-related REST calls
     */
    public const URL_ANALYZER = '/_api/analyzer';

    /**
     * URL part vertex-related graph REST calls
     */
    public const URLPART_VERTEX = 'vertex';

    /**
     * URL part for edge-related graph REST calls
     */
    public const URLPART_EDGE = 'edge';

    /**
     * URL base part for all collection-related REST calls
     */
    public const URL_COLLECTION = '/_api/collection';

    /**
     * URL base part for all index-related REST calls
     */
    public const URL_INDEX = '/_api/index';

    /**
     * base URL part for cursor related operations
     */
    public const URL_CURSOR = '/_api/cursor';

    /**
     * URL for export related operations
     */
    public const URL_EXPORT = '/_api/export';

    /**
     * URL for AQL explain-related operations
     */
    public const URL_EXPLAIN = '/_api/explain';

    /**
     * URL for AQL query validation-related operations
     */
    public const URL_QUERY = '/_api/query';

    /**
     * URL for select-by-example
     */
    public const URL_EXAMPLE = '/_api/simple/by-example';

    /**
     * URL for first-example
     */
    public const URL_FIRST_EXAMPLE = '/_api/simple/first-example';

    /**
     * URL for any
     */
    public const URL_ANY = '/_api/simple/any';

    /**
     * URL for fulltext
     */
    public const URL_FULLTEXT = '/_api/simple/fulltext';

    /**
     * URL remove-by-example
     */
    public const URL_REMOVE_BY_EXAMPLE = '/_api/simple/remove-by-example';

    /**
     * URL for remove-by-keys
     */
    public const URL_REMOVE_BY_KEYS = '/_api/simple/remove-by-keys';

    /**
     * URL for update-by-example
     */
    public const URL_UPDATE_BY_EXAMPLE = '/_api/simple/update-by-example';

    /**
     * URL for replace-by-example
     */
    public const URL_REPLACE_BY_EXAMPLE = '/_api/simple/replace-by-example';

    /**
     * URL for lookup-by-keys
     */
    public const URL_LOOKUP_BY_KEYS = '/_api/simple/lookup-by-keys';

    /**
     * URL for select-range
     */
    public const URL_RANGE = '/_api/simple/range';

    /**
     * URL for select-all
     */
    public const URL_ALL = '/_api/simple/all';

    /**
     * URL for select-all-keys
     */
    public const URL_ALL_KEYS = '/_api/simple/all-keys';

    /**
     * URL for select-range
     */
    public const URL_NEAR = '/_api/simple/near';

    /**
     * URL for select-range
     */
    public const URL_WITHIN = '/_api/simple/within';

    /**
     * URL for document import
     */
    public const URL_IMPORT = '/_api/import';

    /**
     * URL for batch processing
     */
    public const URL_BATCH = '/_api/batch';

    /**
     * URL for transactions
     */
    public const URL_TRANSACTION = '/_api/transaction';
    
    /**
     * URL for storage engine
     */
    public const URL_ENGINE = '/_api/engine';
    
    /**
     * URL for storage engine stats
     */
    public const URL_ENGINE_STATS = '/_api/engine/stats';

    /**
     * URL for admin version
     */
    public const URL_ADMIN_VERSION = '/_api/version';

    /**
     * URL for server role
     */
    public const URL_ADMIN_SERVER_ROLE = '/_admin/server/role';

    /**
     * URL for admin time
     */
    public const URL_ADMIN_TIME = '/_admin/time';

    /**
     * URL for admin log (deprecated)
     */
    public const URL_ADMIN_LOG = '/_admin/log';
    
    /**
     * URL for admin log entries
     */
    public const URL_ADMIN_LOG_ENTRIES = '/_admin/log/entries';

    /**
     * base URL part for admin routing reload (deprecated)
     */
    public const URL_ADMIN_ROUTING_RELOAD = '/_admin/routing/reload';
    
    /**
     * base URL part for admin statistics
     */
    public const URL_ADMIN_METRICS = '/_admin/metrics/v2';

    /**
     * base URL part for admin statistics (deprecated)
     */
    public const URL_ADMIN_STATISTICS = '/_admin/statistics';

    /**
     * base URL part for admin statistics-description (deprecated)
     */
    public const URL_ADMIN_STATISTICS_DESCRIPTION = '/_admin/statistics-description';

    /**
     * base URL part for AQL user functions
     */
    public const URL_AQL_USER_FUNCTION = '/_api/aqlfunction';

    /**
     * base URL part for user management
     */
    public const URL_USER = '/_api/user';

    /**
     * base URL part for user management
     */
    public const URL_TRAVERSAL = '/_api/traversal';

    /**
     * base URL part for endpoint management
     */
    public const URL_ENDPOINT = '/_api/endpoint';

    /**
     * base URL part for database management
     */
    public const URL_DATABASE = '/_api/database';

    /**
     * URL for AQL query result cache
     */
    public const URL_QUERY_CACHE = '/_api/query-cache';

    /**
     * URL for file uploads
     */
    public const URL_UPLOAD = '/_api/upload';

    /**
     * URL for foxx-app installations
     */
    public const URL_FOXX_INSTALL = '/_admin/foxx/install';

    /**
     * URL for foxx-app deinstallation
     */
    public const URL_FOXX_UNINSTALL = '/_admin/foxx/uninstall';
}

class_alias(Urls::class, '\triagens\ArangoDb\Urls');
