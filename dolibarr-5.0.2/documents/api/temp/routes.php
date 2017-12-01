<?php $o = array();

// ** THIS IS AN AUTO GENERATED FILE. DO NOT EDIT MANUALLY ** 

//==================== v1 ====================

$o['v1'] = array();

//==== v1 * ====

$o['v1']['*'] = array (
    'explorer' => 
    array (
        'GET' => 
        array (
            'url' => 'explorer/*',
            'className' => 'Luracast\\Restler\\Explorer',
            'path' => 'explorer',
            'methodName' => 'get',
            'arguments' => 
            array (
            ),
            'defaults' => 
            array (
            ),
            'metadata' => 
            array (
                'description' => 'Serve static files for exploring',
                'longDescription' => 'Serves explorer html, css, and js files',
                'url' => 'GET *',
                'package' => 'Luracast\\Restler',
                'access' => 'hybrid',
                'version' => '3.0.0rc6',
                'scope' => 
                array (
                    '*' => 'Luracast\\Restler\\',
                    'stdClass' => 'stdClass',
                    'Text' => 'Luracast\\Restler\\Data\\Text',
                    'ValidationInfo' => 'Luracast\\Restler\\Data\\ValidationInfo',
                    'Scope' => 'Luracast\\Restler\\Scope',
                ),
                'resourcePath' => 'explorer',
                'classDescription' => 'Class Explorer',
                'param' => 
                array (
                ),
                'return' => 
                array (
                    'type' => 'array',
                ),
            ),
            'accessLevel' => 1,
        ),
    ),
);

//==== v1 explorer/resources ====

$o['v1']['explorer/resources'] = array (
    'GET' => 
    array (
        'url' => 'explorer/resources',
        'className' => 'Luracast\\Restler\\Explorer',
        'path' => 'explorer',
        'methodName' => 'resources',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Class Explorer',
            'longDescription' => '',
            'package' => 'Luracast\\Restler',
            'access' => 'hybrid',
            'version' => '3.0.0rc6',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'stdClass' => 'stdClass',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'ValidationInfo' => 'Luracast\\Restler\\Data\\ValidationInfo',
                'Scope' => 'Luracast\\Restler\\Scope',
            ),
            'resourcePath' => 'explorer',
            'classDescription' => 'Class Explorer',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 explorer/resources/{s0} ====

$o['v1']['explorer/resources/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'explorer/resources/{id}',
        'className' => 'Luracast\\Restler\\Explorer',
        'path' => 'explorer',
        'methodName' => 'getResources',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Class Explorer',
            'longDescription' => '',
            'package' => 'Luracast\\Restler',
            'access' => 'hybrid',
            'version' => '3.0.0rc6',
            'scope' => 
            array (
                '*' => 'Luracast\\Restler\\',
                'stdClass' => 'stdClass',
                'Text' => 'Luracast\\Restler\\Data\\Text',
                'ValidationInfo' => 'Luracast\\Restler\\Data\\ValidationInfo',
                'Scope' => 'Luracast\\Restler\\Scope',
            ),
            'resourcePath' => 'explorer',
            'classDescription' => 'Class Explorer',
            'param' => 
            array (
                0 => 
                array (
                    'name' => 'id',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'type' => 'string',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 1,
    ),
);

//==== v1 customer/{n0} ====

$o['v1']['customer/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'customer/{id}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getCustomer',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a customer object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with customer informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of customer',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET customer/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'customer/{id}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'putClient',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update customer <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT customer/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'customer/{id}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete thirdparty <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Thirparty ID',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'id',
                        'description' => 'Thirparty ID',
                        'properties' => 
                        array (
                            'from' => 'path',
                        ),
                        'label' => 'Id',
                        'default' => NULL,
                        'required' => true,
                        'children' => 
                        array (
                        ),
                        'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'url' => 
            array (
                'description' => 'DELETE thirdparty/{id}',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer/byemail/{s0} ====

$o['v1']['customer/byemail/{s0}'] = array (
    'GET' => 
    array (
        'url' => 'customer/byemail/{email}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getByEmail',
        'arguments' => 
        array (
            'email' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Search customer by email <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'email',
                    'description' => 'email id',
                    'properties' => 
                    array (
                        'type' => 'email',
                        'from' => 'path',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'object',
                'description' => 'client with given email',
            ),
            'url' => 'GET customer/byemail/{email}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/{n0} ====

$o['v1']['thirdparty/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/{id}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a thirdparty object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with thirdparty informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET thirdparty/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'thirdparty/{id}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update thirdparty <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT thirdparty/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparty/{id}',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete thirdparty <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Thirparty ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'url' => 
            array (
                'description' => 'DELETE thirdparty/{id}',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/list ====

$o['v1']['thirdparty/list'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/list',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'mode' => 0,
            'email' => 1,
            'sortfield' => 2,
            'sortorder' => 3,
            'limit' => 4,
            'page' => 5,
        ),
        'defaults' => 
        array (
            0 => 0,
            1 => NULL,
            2 => 's.rowid',
            3 => 'ASC',
            4 => 0,
            5 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'Luracast\\Restler\\Data\\Text',
                    'name' => 'email',
                    'description' => 'Search by email filter',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Email',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'url' => 'GET /thirdparty/list',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/list/customers ====

$o['v1']['thirdparty/list/customers'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/list/customers',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getListCustomers',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Show customers <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of customers',
            ),
            'url' => 
            array (
                'description' => 'GET /thirdparty/list/customers',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer/list ====

$o['v1']['customer/list'] = array (
    'GET' => 
    array (
        'url' => 'customer/list',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getListCustomers',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Show customers <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of customers',
            ),
            'url' => 
            array (
                'description' => 'GET /thirdparty/list/customers',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/list/prospects ====

$o['v1']['thirdparty/list/prospects'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/list/prospects',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getListProspects',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Show prospects <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of prospects',
            ),
            'url' => 'GET /thirdparty/list/prospects',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/list/others ====

$o['v1']['thirdparty/list/others'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/list/others',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'getListOthers',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Show other <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of thirpdparties who are not customer neither prospect',
            ),
            'url' => 'GET /thirdparty/list/others',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty ====

$o['v1']['thirdparty'] = array (
    'POST' => 
    array (
        'url' => 'thirdparty',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create thirdparty object <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of thirdparty',
            ),
            'url' => 'POST thirdparty/',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer ====

$o['v1']['customer'] = array (
    'POST' => 
    array (
        'url' => 'customer',
        'className' => 'ThirdpartyApi',
        'path' => '',
        'methodName' => 'postCustomer',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create customer object <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'ThirdpartyApiGetlistLuracast\\Restler\\Data\\Text',
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of thirdparty',
            ),
            'url' => 'POST customer/',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Thirdparties instead (defined in api_thirdparties.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for thirdparty object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1  ====

$o['v1'][''] = array (
    'GET' => 
    array (
        'url' => '',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Executed method when API is called without parameter',
            'longDescription' => 'Display a short message an return a http code 200',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 index ====

$o['v1']['index'] = array (
    'GET' => 
    array (
        'url' => '',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Executed method when API is called without parameter',
            'longDescription' => 'Display a short message an return a http code 200',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
            'param' => 
            array (
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contact/{n0} ====

$o['v1']['contact/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'contact/{id}',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a contact object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with contact informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET contact/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'contact/{id}',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update contact <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT contact/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contact/{id}',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete contact <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contact ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'url' => 'DELETE contact/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contact/list ====

$o['v1']['contact/list'] = array (
    'GET' => 
    array (
        'url' => 'contact/list',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'socid' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => 0,
            1 => 'c.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List contacts <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'ID of thirdparty to filter list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'c.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'url' => 
            array (
                'description' => 'GET /contact/list',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contact/list/{n0} ====

$o['v1']['contact/list/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'contact/list/{socid}',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'socid' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => 0,
            1 => 'c.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List contacts <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'ID of thirdparty to filter list',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'c.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'page',
                        'description' => 'Page number',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Page',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'url' => 
            array (
                'description' => 'GET /contact/list',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/{n0}/contacts ====

$o['v1']['thirdparty/{n0}/contacts'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/{socid}/contacts',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'socid' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => 0,
            1 => 'c.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List contacts <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'ID of thirdparty to filter list',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'c.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'page',
                        'description' => 'Page number',
                        'properties' => 
                        array (
                            'type' => 'int',
                            'name' => 'page',
                            'description' => 'Page number',
                            'properties' => 
                            array (
                                'from' => 'body',
                            ),
                            'label' => 'Page',
                            'default' => 0,
                            'required' => false,
                            'children' => 
                            array (
                            ),
                        ),
                        'label' => 'Page',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'url' => 
            array (
                'description' => 'GET /contact/list',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer/{n0}/contacts ====

$o['v1']['customer/{n0}/contacts'] = array (
    'GET' => 
    array (
        'url' => 'customer/{socid}/contacts',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'socid' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => 0,
            1 => 'c.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List contacts <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'ID of thirdparty to filter list',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'c.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'page',
                        'description' => 'Page number',
                        'properties' => 
                        array (
                            'type' => 'int',
                            'name' => 'page',
                            'description' => 'Page number',
                            'properties' => 
                            array (
                                'type' => 'int',
                                'name' => 'page',
                                'description' => 'Page number',
                                'properties' => 
                                array (
                                    'from' => 'body',
                                ),
                                'label' => 'Page',
                                'default' => 0,
                                'required' => false,
                                'children' => 
                                array (
                                ),
                            ),
                            'label' => 'Page',
                            'default' => 0,
                            'required' => false,
                            'children' => 
                            array (
                            ),
                        ),
                        'label' => 'Page',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'url' => 
            array (
                'description' => 'GET /contact/list',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contact ====

$o['v1']['contact'] = array (
    'POST' => 
    array (
        'url' => 'contact',
        'className' => 'ContactApi',
        'path' => '',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create contact object <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of contact',
            ),
            'url' => 'POST contact/',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Contacts instead (defined in api_contacts.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for contact object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order/{n0} ====

$o['v1']['order/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'order/{id}',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'ref' => 1,
            'ref_ext' => 2,
            'ref_int' => 3,
        ),
        'defaults' => 
        array (
            0 => '',
            1 => '',
            2 => '',
            3 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a commande object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with commande informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'ref',
                    'description' => 'Ref of object',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_ext',
                    'description' => 'External reference of object',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref Ext',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'ref_int',
                    'description' => 'Internal reference of other object',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Ref Int',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET order/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'order/{id}',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update order general fields (won\'t touch lines of order) <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT order/{id}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'order/{id}',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE order/{id}',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order/list ====

$o['v1']['order/list'] = array (
    'GET' => 
    array (
        'url' => 'order/list',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'societe' => 5,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List orders <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Use this param to filter list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'societe',
                    'description' => 'Thirdparty filter field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Societe',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET /order/list',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer/{n0}/order/list ====

$o['v1']['customer/{n0}/order/list'] = array (
    'GET' => 
    array (
        'url' => 'customer/{socid}/order/list',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'getListForSoc',
        'arguments' => 
        array (
            'socid' => 0,
        ),
        'defaults' => 
        array (
            0 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List orders for specific thirdparty <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'Id of customer',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /customer/{socid}/order/list',
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/{n0}/order/list ====

$o['v1']['thirdparty/{n0}/order/list'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/{socid}/order/list',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'getListForSoc',
        'arguments' => 
        array (
            'socid' => 0,
        ),
        'defaults' => 
        array (
            0 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List orders for specific thirdparty <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'Id of customer',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'socid',
                        'description' => 'Id of customer',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Socid',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /customer/{socid}/order/list',
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order ====

$o['v1']['order'] = array (
    'POST' => 
    array (
        'url' => 'order',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create order object <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST order/',
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of commande',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order/{n0}/line/list ====

$o['v1']['order/{n0}/line/list'] = array (
    'GET' => 
    array (
        'url' => 'order/{id}/line/list',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of an order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET order/{id}/line/list',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order/{n0}/line ====

$o['v1']['order/{n0}/line'] = array (
    'POST' => 
    array (
        'url' => 'order/{id}/line',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Orderline data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST order/{id}/line',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order/{n0}/line/{n1} ====

$o['v1']['order/{n0}/line/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'order/{id}/line/{lineid}',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line to given order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Orderline data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT order/{id}/line/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'order/{id}/line/{lineid}',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'delLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line to given order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE order/{id}/line/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 order/{n0}/validate ====

$o['v1']['order/{n0}/validate'] = array (
    'GET' => 
    array (
        'url' => 'order/{id}/validate',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'validOrder',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 
            array (
                'description' => 'GET order/{id}/validate',
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'order/{id}/validate',
        'className' => 'CommandeApi',
        'path' => '',
        'methodName' => 'validOrder',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an order <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'idwarehouse',
                        'description' => 'Warehouse ID',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Idwarehouse',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 
            array (
                'description' => 'GET order/{id}/validate',
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'category' => 'Api',
            'package' => 'Api',
            'deprecated' => 'Use Orders instead (defined in api_orders.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for commande object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 user/{n0} ====

$o['v1']['user/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'user/{id}',
        'className' => 'UserApi',
        'path' => '',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an user object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with user informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET user/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Users instead (defined in api_users.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for user object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'user/{id}',
        'className' => 'UserApi',
        'path' => '',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update account <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of account to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT user/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Users instead (defined in api_users.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for user object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'user/{id}',
        'className' => 'UserApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete account <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Account ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'DELETE user/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Users instead (defined in api_users.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for user object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contact/{n0}/createUser ====

$o['v1']['contact/{n0}/createUser'] = array (
    'POST' => 
    array (
        'url' => 'contact/{contactid}/createUser',
        'className' => 'UserApi',
        'path' => '',
        'methodName' => 'createFromContact',
        'arguments' => 
        array (
            'contactid' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create useraccount object from contact <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'contactid',
                    'description' => 'Id of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Contactid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of user',
            ),
            'url' => 'POST /contact/{contactid}/createUser',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Users instead (defined in api_users.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for user object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 user ====

$o['v1']['user'] = array (
    'POST' => 
    array (
        'url' => 'user',
        'className' => 'UserApi',
        'path' => '',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create user account <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'New user data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'POST user/',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Users instead (defined in api_users.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for user object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 user/{n0}/setGroup/{n1} ====

$o['v1']['user/{n0}/setGroup/{n1}'] = array (
    'GET' => 
    array (
        'url' => 'user/{id}/setGroup/{group}',
        'className' => 'UserApi',
        'path' => '',
        'methodName' => 'setGroup',
        'arguments' => 
        array (
            'id' => 0,
            'group' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'add user to group <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'User ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'group',
                    'description' => 'Group ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Group',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'GET user/{id}/setGroup/{group}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Users instead (defined in api_users.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for user object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/{n0} ====

$o['v1']['category/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'category/{id}',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a category object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with category informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET category/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'category/{id}',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update category <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of category to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT category/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'category/{id}',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete category <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Category ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'url' => 'DELETE category/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/list ====

$o['v1']['category/list'] = array (
    'GET' => 
    array (
        'url' => 'category/list',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'type' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => 'product',
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List categories <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of categories',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of category (\'member\', \'customer\', \'supplier\', \'product\', \'contact\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => 'product',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of category objects',
            ),
            'url' => 'GET /category/list',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 product/{n5}/categories ====

$o['v1']['product/{n5}/categories'] = array (
    'GET' => 
    array (
        'url' => 'product/{item}/categories',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListForItem',
        'arguments' => 
        array (
            'type' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
            'item' => 5,
        ),
        'defaults' => 
        array (
            0 => 'product',
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
            5 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'List categories of an entity <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of categories',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of category (\'member\', \'customer\', \'supplier\', \'product\', \'contact\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => 'product',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'item',
                    'description' => 'Id of the item to get categories for',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Item',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of category objects',
            ),
            'url' => 'GET /product/{item}/categories',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/list/member ====

$o['v1']['category/list/member'] = array (
    'GET' => 
    array (
        'url' => 'category/list/member',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListCategoryMember',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get member categories list <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /category/list/member',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/list/customer ====

$o['v1']['category/list/customer'] = array (
    'GET' => 
    array (
        'url' => 'category/list/customer',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListCategoryCustomer',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get customer categories list <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /category/list/customer',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer/{n0}/categories ====

$o['v1']['customer/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'customer/{cusid}/categories',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListCustomerCategories',
        'arguments' => 
        array (
            'cusid' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a customer <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'cusid',
                    'description' => 'Customer id filter',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Cusid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /customer/{cusid}/categories',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 customer/{n0}/addCategory/{n1} ====

$o['v1']['customer/{n0}/addCategory/{n1}'] = array (
    'GET' => 
    array (
        'url' => 'customer/{cusid}/addCategory/{catid}',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'addCustomerCategory',
        'arguments' => 
        array (
            'cusid' => 0,
            'catid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add category to customer <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'cusid',
                    'description' => 'Id of customer',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Cusid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'catid',
                    'description' => 'Id of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Catid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /customer/{cusid}/addCategory/{catid}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/list/supplier ====

$o['v1']['category/list/supplier'] = array (
    'GET' => 
    array (
        'url' => 'category/list/supplier',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListCategorySupplier',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get supplier categories list <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /category/list/supplier',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/list/product ====

$o['v1']['category/list/product'] = array (
    'GET' => 
    array (
        'url' => 'category/list/product',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListCategoryProduct',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get product categories list <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /category/list/product',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category/list/contact ====

$o['v1']['category/list/contact'] = array (
    'GET' => 
    array (
        'url' => 'category/list/contact',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'getListCategoryContact',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get contact categories list <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET /category/list/contact',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 category ====

$o['v1']['category'] = array (
    'POST' => 
    array (
        'url' => 'category',
        'className' => 'CategoryApi',
        'path' => '',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create category object <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of category',
            ),
            'url' => 'POST category/',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Categories instead (defined in api_categories.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for category object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoice/{n0} ====

$o['v1']['invoice/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'invoice/{id}',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a invoice object <b>Warning: Deprecated</b>',
            'longDescription' => 'Return an array with invoice informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'url' => 'GET invoice/{id}',
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'invoice/{id}',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update invoice <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'PUT invoice/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoice/{id}',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete invoice <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'type',
                'description' => '',
            ),
            'url' => 'DELETE invoice/{id}',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoice/list ====

$o['v1']['invoice/list'] = array (
    'GET' => 
    array (
        'url' => 'invoice/list',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'socid' => 4,
            'mode' => 5,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'Filter list with thirdparty ID',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'url' => 
            array (
                'description' => 'GET invoice/list',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoice/list/{s5} ====

$o['v1']['invoice/list/{s5}'] = array (
    'GET' => 
    array (
        'url' => 'invoice/list/{mode}',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'socid' => 4,
            'mode' => 5,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'Filter list with thirdparty ID',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'type' => 'string',
                        'name' => 'mode',
                        'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Mode',
                        'default' => '',
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'path',
                    ),
                    'label' => 'Mode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'url' => 
            array (
                'description' => 'GET invoice/list',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/{n4}/invoice/list ====

$o['v1']['thirdparty/{n4}/invoice/list'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/{socid}/invoice/list',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'socid' => 4,
            'mode' => 5,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'Filter list with thirdparty ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'type' => 'string',
                        'name' => 'mode',
                        'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                        'properties' => 
                        array (
                            'type' => 'string',
                            'name' => 'mode',
                            'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                            'properties' => 
                            array (
                                'from' => 'body',
                            ),
                            'label' => 'Mode',
                            'default' => '',
                            'required' => false,
                            'children' => 
                            array (
                            ),
                        ),
                        'label' => 'Mode',
                        'default' => '',
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'url' => 
            array (
                'description' => 'GET invoice/list',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparty/{n4}/invoice/list/{s5} ====

$o['v1']['thirdparty/{n4}/invoice/list/{s5}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparty/{socid}/invoice/list/{mode}',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'getList',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'socid' => 4,
            'mode' => 5,
        ),
        'defaults' => 
        array (
            0 => 's.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices <b>Warning: Deprecated</b>',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'socid',
                    'description' => 'Filter list with thirdparty ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Socid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'mode',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'type' => 'string',
                        'name' => 'mode',
                        'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                        'properties' => 
                        array (
                            'type' => 'string',
                            'name' => 'mode',
                            'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                            'properties' => 
                            array (
                                'type' => 'string',
                                'name' => 'mode',
                                'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                                'properties' => 
                                array (
                                    'from' => 'body',
                                ),
                                'label' => 'Mode',
                                'default' => '',
                                'required' => false,
                                'children' => 
                                array (
                                ),
                            ),
                            'label' => 'Mode',
                            'default' => '',
                            'required' => false,
                            'children' => 
                            array (
                            ),
                        ),
                        'label' => 'Mode',
                        'default' => '',
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'path',
                    ),
                    'label' => 'Mode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'url' => 
            array (
                'description' => 'GET invoice/list',
            ),
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoice ====

$o['v1']['invoice'] = array (
    'POST' => 
    array (
        'url' => 'invoice',
        'className' => 'InvoiceApi',
        'path' => '',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create invoice object <b>Warning: Deprecated</b>',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of invoice',
            ),
            'url' => 'POST invoice/',
            'smart-auto-routing' => 'false',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'deprecated' => 'Use Invoices instead (defined in api_invoices.class.php)',
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => '',
            'classDescription' => 'API class for invoice object',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 agendaevents/{n0} ====

$o['v1']['agendaevents/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'agendaevents/{id}',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a Agenda Events object',
            'longDescription' => 'Return an array with Agenda Events informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Agenda Events',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'agendaevents/{id}',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete Agenda Event',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Agenda Event ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 agendaevents ====

$o['v1']['agendaevents'] = array (
    'GET' => 
    array (
        'url' => 'agendaevents',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.id',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Agenda Events',
            'longDescription' => 'Get a list of Agenda Events',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.id',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field (owners of event). Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'%dol%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Agenda Events objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'agendaevents',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create Agenda Event object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of Agenda Event',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 agendaevents/index ====

$o['v1']['agendaevents/index'] = array (
    'GET' => 
    array (
        'url' => 'agendaevents',
        'className' => 'Agendaevents',
        'path' => 'agendaevents',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.id',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Agenda Events',
            'longDescription' => 'Get a list of Agenda Events',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.id',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field (owners of event). Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.label:like:\'%dol%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Agenda Events objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'agendaevents',
            'classDescription' => 'API class for Agenda Events',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts ====

$o['v1']['bankaccounts'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of accounts.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of account objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'bankaccounts',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create account object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of account',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/index ====

$o['v1']['bankaccounts/index'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of accounts.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'List of account objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/{n0} ====

$o['v1']['bankaccounts/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts/{id}',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get account by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Account object',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'bankaccounts/{id}',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'bankaccounts/{id}',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/{n0}/lines ====

$o['v1']['bankaccounts/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'bankaccounts/{id}/lines',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of lines of the account.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of AccountLine objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET {id}/lines',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'bankaccounts/{id}/lines',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'addLine',
        'arguments' => 
        array (
            'id' => 0,
            'date' => 1,
            'type' => 2,
            'label' => 3,
            'amount' => 4,
            'category' => 5,
            'cheque_number' => 6,
            'cheque_writer' => 7,
            'cheque_bank' => 8,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => 0,
            6 => '',
            7 => '',
            8 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to an account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'date',
                    'description' => 'Payment date (timestamp)',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Payment mode (TYP,VIR,PRE,LIQ,VAD,CB,CHQ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'float',
                    'name' => 'amount',
                    'description' => 'Amount (may be 0)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Amount',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'int',
                    'name' => 'category',
                    'description' => 'Category',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Category',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'cheque_number',
                    'description' => 'Cheque numberl',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Cheque Number',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                7 => 
                array (
                    'type' => 'string',
                    'name' => 'cheque_writer',
                    'description' => 'Name of cheque writer',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Cheque Writer',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                8 => 
                array (
                    'type' => 'string',
                    'name' => 'cheque_bank',
                    'description' => 'Bank of cheque writer',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Cheque Bank',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of line',
            ),
            'url' => 'POST {id}/lines',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 bankaccounts/{n0}/lines/{n1}/links ====

$o['v1']['bankaccounts/{n0}/lines/{n1}/links'] = array (
    'POST' => 
    array (
        'url' => 'bankaccounts/{account_id}/lines/{line_id}/links',
        'className' => 'Bankaccounts',
        'path' => 'bankaccounts',
        'methodName' => 'addLink',
        'arguments' => 
        array (
            'account_id' => 0,
            'line_id' => 1,
            'url_id' => 2,
            'url' => 3,
            'label' => 4,
            'type' => 5,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => NULL,
            5 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a link to an account line',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'account_id',
                    'description' => 'ID of account',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Account Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'line_id',
                    'description' => 'ID of account line',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Line Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'url_id',
                    'description' => 'ID to set in the URL',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Url Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'string',
                    'name' => 'url',
                    'description' => 'URL of the link',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'url',
                    ),
                    'label' => 'Url',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of link (\'payment\', \'company\', \'member\', ...)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Type',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of link',
            ),
            'url' => 'POST {account_id}/lines/{line_id}/links',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'bankaccounts',
            'classDescription' => 'API class for accounts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 categories/{n0} ====

$o['v1']['categories/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'categories/{id}',
        'className' => 'Categories',
        'path' => 'categories',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a category object',
            'longDescription' => 'Return an array with category informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of category',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'categories',
            'classDescription' => 'API class for categories',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'categories/{id}',
        'className' => 'Categories',
        'path' => 'categories',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update category',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of category to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'categories',
            'classDescription' => 'API class for categories',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'categories/{id}',
        'className' => 'Categories',
        'path' => 'categories',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete category',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Category ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'categories',
            'classDescription' => 'API class for categories',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 categories ====

$o['v1']['categories'] = array (
    'GET' => 
    array (
        'url' => 'categories',
        'className' => 'Categories',
        'path' => 'categories',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'type' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List categories',
            'longDescription' => 'Get a list of categories',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of category (\'member\', \'customer\', \'supplier\', \'product\', \'contact\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of category objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'categories',
            'classDescription' => 'API class for categories',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'categories',
        'className' => 'Categories',
        'path' => 'categories',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create category object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of category',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'categories',
            'classDescription' => 'API class for categories',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 categories/index ====

$o['v1']['categories/index'] = array (
    'GET' => 
    array (
        'url' => 'categories',
        'className' => 'Categories',
        'path' => 'categories',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'type' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List categories',
            'longDescription' => 'Get a list of categories',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'type',
                    'description' => 'Type of category (\'member\', \'customer\', \'supplier\', \'product\', \'contact\')',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Type',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of category objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'categories',
            'classDescription' => 'API class for categories',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0} ====

$o['v1']['contacts/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a contact object',
            'longDescription' => 'Return an array with contact informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'contacts/{id}',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Contact ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts ====

$o['v1']['contacts'] = array (
    'GET' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contacts',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter projects of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create contact object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of contact',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/index ====

$o['v1']['contacts/index'] = array (
    'GET' => 
    array (
        'url' => 'contacts',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List contacts',
            'longDescription' => 'Get a list of contacts',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter projects of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of contact objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/createUser ====

$o['v1']['contacts/{n0}/createUser'] = array (
    'POST' => 
    array (
        'url' => 'contacts/{id}/createUser',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'createUser',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create useraccount object from contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of user',
            ),
            'url' => 'POST {id}/createUser',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 contacts/{n0}/categories ====

$o['v1']['contacts/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'contacts/{id}/categories',
        'className' => 'Contacts',
        'path' => 'contacts',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a contact',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of contact',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'contacts',
            'classDescription' => 'API class for contacts',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 dictionnarycountries ====

$o['v1']['dictionnarycountries'] = array (
    'GET' => 
    array (
        'url' => 'dictionnarycountries',
        'className' => 'Dictionnarycountries',
        'path' => 'dictionnarycountries',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'filter' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of countries.',
            'longDescription' => ' The names of the countries will be translated to the given language if the $lang parameter is provided. The value of $lang must be a language code supported by Dolibarr, for example \'en_US\' or \'fr_FR\'. The returned list is sorted by country ID.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'To filter the countries by name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the countries must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of countries',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'dictionnarycountries',
            'classDescription' => 'API class for countries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 dictionnarycountries/index ====

$o['v1']['dictionnarycountries/index'] = array (
    'GET' => 
    array (
        'url' => 'dictionnarycountries',
        'className' => 'Dictionnarycountries',
        'path' => 'dictionnarycountries',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'filter' => 4,
            'lang' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'code',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of countries.',
            'longDescription' => ' The names of the countries will be translated to the given language if the $lang parameter is provided. The value of $lang must be a language code supported by Dolibarr, for example \'en_US\' or \'fr_FR\'. The returned list is sorted by country ID.',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'code',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'filter',
                    'description' => 'To filter the countries by name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Filter',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the label of the countries must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of countries',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'dictionnarycountries',
            'classDescription' => 'API class for countries',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 dictionnarycountries/{n0} ====

$o['v1']['dictionnarycountries/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'dictionnarycountries/{id}',
        'className' => 'Dictionnarycountries',
        'path' => 'dictionnarycountries',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'lang' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get country by ID.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of country',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'lang',
                    'description' => 'Code of the language the name of the country must be translated to',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Lang',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'dictionnarycountries',
            'classDescription' => 'API class for countries',
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 dictionnarytowns ====

$o['v1']['dictionnarytowns'] = array (
    'GET' => 
    array (
        'url' => 'dictionnarytowns',
        'className' => 'Dictionnarytowns',
        'path' => 'dictionnarytowns',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'zipcode' => 4,
            'town' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'zip,town',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of towns.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'zip,town',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'zipcode',
                    'description' => 'To filter on zipcode',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Zipcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'town',
                    'description' => 'To filter on city name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Town',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of towns',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'dictionnarytowns',
            'classDescription' => 'API class for towns (content of the ziptown dictionary)',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 dictionnarytowns/index ====

$o['v1']['dictionnarytowns/index'] = array (
    'GET' => 
    array (
        'url' => 'dictionnarytowns',
        'className' => 'Dictionnarytowns',
        'path' => 'dictionnarytowns',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'zipcode' => 4,
            'town' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 'zip,town',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Get the list of towns.',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'zip,town',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Number of items per page',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number (starting from zero)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'zipcode',
                    'description' => 'To filter on zipcode',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Zipcode',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'town',
                    'description' => 'To filter on city name',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Town',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.code:like:\'A%\') and (t.active:>=:0)"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'List',
                'description' => 'of towns',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'dictionnarytowns',
            'classDescription' => 'API class for towns (content of the ziptown dictionary)',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 expensereports/{n0} ====

$o['v1']['expensereports/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'expensereports/{id}',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a Expense Report object',
            'longDescription' => 'Return an array with Expense Report informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of Expense Report',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'Data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'expensereports/{id}',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete Expense Report',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Expense Report ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 expensereports ====

$o['v1']['expensereports'] = array (
    'GET' => 
    array (
        'url' => 'expensereports',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Expense Reports',
            'longDescription' => 'Get a list of Expense Reports',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Expense Report objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'expensereports',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create Expense Report object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of Expense Report',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 expensereports/index ====

$o['v1']['expensereports/index'] = array (
    'GET' => 
    array (
        'url' => 'expensereports',
        'className' => 'Expensereports',
        'path' => 'expensereports',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Expense Reports',
            'longDescription' => 'Get a list of Expense Reports',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of Expense Report objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'expensereports',
            'classDescription' => 'API class for Expense Reports',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/{n0} ====

$o['v1']['invoices/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a invoice object',
            'longDescription' => 'Return an array with invoice informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'invoices/{id}',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'type',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices ====

$o['v1']['invoices'] = array (
    'GET' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create invoice object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of invoice',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 invoices/index ====

$o['v1']['invoices/index'] = array (
    'GET' => 
    array (
        'url' => 'invoices',
        'className' => 'Invoices',
        'path' => 'invoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'invoices',
            'classDescription' => 'API class for invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 login ====

$o['v1']['login'] = array (
    'GET' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both method are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "api_key" into field at the top right of page (Note: "api_key" can be found/set on the user page).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'query',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). Empty means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Entity',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
    'POST' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both method are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "api_key" into field at the top right of page (Note: "api_key" can be found/set on the user page).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). Empty means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Entity',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'reset',
                        'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Reset',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'body',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 login/index ====

$o['v1']['login/index'] = array (
    'GET' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both method are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "api_key" into field at the top right of page (Note: "api_key" can be found/set on the user page).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'query',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). Empty means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Entity',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
    'POST' => 
    array (
        'url' => 'login',
        'className' => 'Login',
        'path' => 'login',
        'methodName' => 'index',
        'arguments' => 
        array (
            'login' => 0,
            'password' => 1,
            'entity' => 2,
            'reset' => 3,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => 0,
            3 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Login',
            'longDescription' => 'Request the API token for a couple username / password. Using method POST is recommanded for security reasons (method GET is often logged by default by web servers with parameters so with login and pass into server log file). Both method are provided for developer conveniance. Best is to not use at all the login API method and enter directly the "api_key" into field at the top right of page (Note: "api_key" can be found/set on the user page).',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'login',
                    'description' => 'User login',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Login',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'password',
                    'description' => 'User password',
                    'properties' => 
                    array (
                        'type' => 'password',
                        'from' => 'body',
                    ),
                    'label' => 'Password',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'entity',
                    'description' => 'Entity (when multicompany module is used). Empty means 1=first company.',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Entity',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'reset',
                    'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                    'properties' => 
                    array (
                        'type' => 'int',
                        'name' => 'reset',
                        'description' => 'Reset token (0=get current token, 1=ask a new token and canceled old token. This means access using current existing API token of user will fails: new token will be required for new access)',
                        'properties' => 
                        array (
                            'from' => 'body',
                        ),
                        'label' => 'Reset',
                        'default' => 0,
                        'required' => false,
                        'children' => 
                        array (
                        ),
                        'from' => 'body',
                    ),
                    'label' => 'Reset',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Response status and user token',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 
            array (
                'description' => 'GET /',
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'login',
            'classDescription' => 'API that allows to log in with an user account.',
        ),
        'accessLevel' => 0,
    ),
);

//==== v1 members/{n0} ====

$o['v1']['members/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'members/{id}',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a member object',
            'longDescription' => 'Return an array with member informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'members/{id}',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'members/{id}',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'member ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members ====

$o['v1']['members'] = array (
    'GET' => 
    array (
        'url' => 'members',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'typeid' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List members',
            'longDescription' => 'Get a list of members',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'typeid',
                    'description' => 'ID of the type of member',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Typeid',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of member objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'members',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create member object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of member',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members/index ====

$o['v1']['members/index'] = array (
    'GET' => 
    array (
        'url' => 'members',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'typeid' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List members',
            'longDescription' => 'Get a list of members',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'typeid',
                    'description' => 'ID of the type of member',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Typeid',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of member objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 members/{n0}/subscriptions ====

$o['v1']['members/{n0}/subscriptions'] = array (
    'GET' => 
    array (
        'url' => 'members/{id}/subscriptions',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'getSubscriptions',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'List subscriptions of a member',
            'longDescription' => 'Get a list of subscriptions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of subscription objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'url' => 'GET {id}/subscriptions',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'members/{id}/subscriptions',
        'className' => 'Members',
        'path' => 'members',
        'methodName' => 'createSubscription',
        'arguments' => 
        array (
            'id' => 0,
            'start_date' => 1,
            'end_date' => 2,
            'amount' => 3,
            'label' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => NULL,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add a subscription for a member',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of member',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'start_date',
                    'description' => 'Start date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'Start Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'end_date',
                    'description' => 'End date',
                    'properties' => 
                    array (
                        'from' => 'body',
                        'type' => 'timestamp',
                    ),
                    'label' => 'End Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'float',
                    'name' => 'amount',
                    'description' => 'Amount (may be 0)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Amount',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'label',
                    'description' => 'Label',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Label',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of subscription',
            ),
            'url' => 'POST {id}/subscriptions',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'members',
            'classDescription' => 'API class for members',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0} ====

$o['v1']['orders/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'orders/{id}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a commande object',
            'longDescription' => 'Return an array with commande informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'orders/{id}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update order general fields (won\'t touch lines of order)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'orders/{id}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders ====

$o['v1']['orders'] = array (
    'GET' => 
    array (
        'url' => 'orders',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List orders',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'orders',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create order object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of commande',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/index ====

$o['v1']['orders/index'] = array (
    'GET' => 
    array (
        'url' => 'orders',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List orders',
            'longDescription' => 'Get a list of orders',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter orders of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/lines ====

$o['v1']['orders/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'orders/{id}/lines',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of an order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of order',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'orders/{id}/lines',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Orderline data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/lines/{n1} ====

$o['v1']['orders/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'orders/{id}/lines/{lineid}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line to given order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Orderline data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'orders/{id}/lines/{lineid}',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'delLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line to given order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commande to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 orders/{n0}/validate ====

$o['v1']['orders/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'orders/{id}/validate',
        'className' => 'Orders',
        'path' => 'orders',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'idwarehouse' => 1,
            'notrigger' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
            2 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate an order',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Order ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'idwarehouse',
                    'description' => 'Warehouse ID',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Idwarehouse',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "idwarehouse": 0, "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'orders',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0} ====

$o['v1']['projects/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'projects/{id}',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a project object',
            'longDescription' => 'Return an array with project informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of project',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'projects/{id}',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update project general fields (won\'t touch lines of project)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of project to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'projects/{id}',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete project',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Project ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects ====

$o['v1']['projects'] = array (
    'GET' => 
    array (
        'url' => 'projects',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List projects',
            'longDescription' => 'Get a list of projects',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter projects of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'projects',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create project object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of project',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/index ====

$o['v1']['projects/index'] = array (
    'GET' => 
    array (
        'url' => 'projects',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List projects',
            'longDescription' => 'Get a list of projects',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter projects of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0}/tasks ====

$o['v1']['projects/{n0}/tasks'] = array (
    'GET' => 
    array (
        'url' => 'projects/{id}/tasks',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
            'includetimespent' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get tasks of a project',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of project',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includetimespent',
                    'description' => '0=Return only list of tasks. 1=Include a summary of time spent, 2=Include details of time spent lines (2 is no implemented yet)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetimespent',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'GET {id}/tasks',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0}/roles ====

$o['v1']['projects/{n0}/roles'] = array (
    'GET' => 
    array (
        'url' => 'projects/{id}/roles',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'getRoles',
        'arguments' => 
        array (
            'id' => 0,
            'userid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get roles a user is assigned to a project with',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of project',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'userid',
                    'description' => 'Id of user (0 = connected user)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Userid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/roles',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 projects/{n0}/validate ====

$o['v1']['projects/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'projects/{id}/validate',
        'className' => 'Projects',
        'path' => 'projects',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate a project.',
            'longDescription' => 'You can test this API with the following input message { "notrigger": 0 }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Project ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => '1=Does not execute triggers, 0= execute triggers',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'projects',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0} ====

$o['v1']['proposals/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'proposals/{id}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a commercial proposal object',
            'longDescription' => 'Return an array with commercial proposal informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of commercial proposal',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'proposals/{id}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update commercial proposal general fields (won\'t touch lines of commercial proposal)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'proposals/{id}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Commercial proposal ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals ====

$o['v1']['proposals'] = array (
    'GET' => 
    array (
        'url' => 'proposals',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List commercial proposals',
            'longDescription' => 'Get a list of commercial proposals',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter commercial proposal of. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'proposals',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create commercial proposal object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of propal',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/index ====

$o['v1']['proposals/index'] = array (
    'GET' => 
    array (
        'url' => 'proposals',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List commercial proposals',
            'longDescription' => 'Get a list of commercial proposals',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter commercial proposal of. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of order objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/lines ====

$o['v1']['proposals/{n0}/lines'] = array (
    'GET' => 
    array (
        'url' => 'proposals/{id}/lines',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'getLines',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get lines of a commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'proposals/{id}/lines',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'postLine',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add a line to given commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Commercial proposal line data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/lines',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/lines/{n1} ====

$o['v1']['proposals/{n0}/lines/{n1}'] = array (
    'PUT' => 
    array (
        'url' => 'proposals/{id}/lines/{lineid}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'putLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
            'request_data' => 2,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update a line of given commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Commercial proposal line data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'PUT {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'object',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'proposals/{id}/lines/{lineid}',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'delLine',
        'arguments' => 
        array (
            'id' => 0,
            'lineid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete a line of given commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of commercial proposal to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'lineid',
                    'description' => 'Id of line to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Lineid',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'DELETE {id}/lines/{lineid}',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 proposals/{n0}/validate ====

$o['v1']['proposals/{n0}/validate'] = array (
    'POST' => 
    array (
        'url' => 'proposals/{id}/validate',
        'className' => 'Proposals',
        'path' => 'proposals',
        'methodName' => 'validate',
        'arguments' => 
        array (
            'id' => 0,
            'notrigger' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Validate a commercial proposal',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Commercial proposal ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'notrigger',
                    'description' => 'Use {}',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Notrigger',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'POST {id}/validate',
            'return' => 
            array (
                'type' => 'array',
                'description' => 'FIXME An error 403 is returned if the request has an empty body. Error message: "Forbidden: Content type `text/plain` is not supported." Workaround: send this in the body { "notrigger": 0 }',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'proposals',
            'classDescription' => 'API class for orders',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 status ====

$o['v1']['status'] = array (
    'GET' => 
    array (
        'url' => 'status',
        'className' => 'Status',
        'path' => 'status',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get status (Dolibarr version)',
            'longDescription' => '',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'status',
            'classDescription' => 'API that gives the status of the Dolibarr instance.',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 status/index ====

$o['v1']['status/index'] = array (
    'GET' => 
    array (
        'url' => 'status',
        'className' => 'Status',
        'path' => 'status',
        'methodName' => 'index',
        'arguments' => 
        array (
        ),
        'defaults' => 
        array (
        ),
        'metadata' => 
        array (
            'description' => 'Get status (Dolibarr version)',
            'longDescription' => '',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
            ),
            'resourcePath' => 'status',
            'classDescription' => 'API that gives the status of the Dolibarr instance.',
            'param' => 
            array (
            ),
            'return' => 
            array (
                'type' => 'array',
            ),
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 subscriptions/{n0} ====

$o['v1']['subscriptions/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'subscriptions/{id}',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a subscription object',
            'longDescription' => 'Return an array with subscription informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of subscription',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'subscriptions/{id}',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update subscription',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of subscription to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'subscriptions/{id}',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete subscription',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of subscription to delete',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 subscriptions ====

$o['v1']['subscriptions'] = array (
    'GET' => 
    array (
        'url' => 'subscriptions',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 'dateadh',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List subscriptions',
            'longDescription' => 'Get a list of subscriptions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'dateadh',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of subscription objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'subscriptions',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create subscription object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of subscription',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 subscriptions/index ====

$o['v1']['subscriptions/index'] = array (
    'GET' => 
    array (
        'url' => 'subscriptions',
        'className' => 'Subscriptions',
        'path' => 'subscriptions',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 'dateadh',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List subscriptions',
            'longDescription' => 'Get a list of subscriptions',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 'dateadh',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.import_key:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of subscription objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'subscriptions',
            'classDescription' => 'API class for subscriptions',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices/{n0} ====

$o['v1']['supplierinvoices/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'supplierinvoices/{id}',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a supplier invoice object',
            'longDescription' => 'Return an array with supplier invoice information',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of supplier invoice',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'supplierinvoices/{id}',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update supplier invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of supplier invoice to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'supplierinvoices/{id}',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete supplier invoice',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Supplier invoice ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'type',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices ====

$o['v1']['supplierinvoices'] = array (
    'GET' => 
    array (
        'url' => 'supplierinvoices',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of supplier invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter invoices of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'supplierinvoices',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create supplier invoice object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of supplier invoice',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 supplierinvoices/index ====

$o['v1']['supplierinvoices/index'] = array (
    'GET' => 
    array (
        'url' => 'supplierinvoices',
        'className' => 'Supplierinvoices',
        'path' => 'supplierinvoices',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'thirdparty_ids' => 4,
            'status' => 5,
            'sqlfilters' => 6,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => '',
            5 => '',
            6 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List invoices',
            'longDescription' => 'Get a list of supplier invoices',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'thirdparty_ids',
                    'description' => 'Thirdparty ids to filter invoices of.',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'example' => '\'1\' or \'1,2,3\'',
                        'from' => 'query',
                    ),
                    'label' => 'Thirdparty Ids',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'status',
                    'description' => 'Filter by invoice status : draft | unpaid | paid | cancelled',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Status',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                6 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.datec:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of invoice objects',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'supplierinvoices',
            'classDescription' => 'API class for supplier invoices',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/{n0} ====

$o['v1']['tasks/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'tasks/{id}',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
            'includetimespent' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a task object',
            'longDescription' => 'Return an array with task informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of task',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'includetimespent',
                    'description' => '0=Return only task. 1=Include a summary of time spent, 2=Include details of time spent lines (2 is no implemented yet)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Includetimespent',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'tasks/{id}',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update task general fields (won\'t touch time spent of task)',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of task to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'tasks/{id}',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete task',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Task ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks ====

$o['v1']['tasks'] = array (
    'GET' => 
    array (
        'url' => 'tasks',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List tasks',
            'longDescription' => 'Get a list of tasks',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'tasks',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create task object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of project',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/index ====

$o['v1']['tasks/index'] = array (
    'GET' => 
    array (
        'url' => 'tasks',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'sqlfilters' => 4,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 100,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List tasks',
            'longDescription' => 'Get a list of tasks',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 100,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of project objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/{n0}/roles ====

$o['v1']['tasks/{n0}/roles'] = array (
    'GET' => 
    array (
        'url' => 'tasks/{id}/roles',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'getRoles',
        'arguments' => 
        array (
            'id' => 0,
            'userid' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get roles a user is assigned to a task with',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of task',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'userid',
                    'description' => 'Id of user (0 = connected user)',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Userid',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'url' => 'GET {id}/roles',
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 tasks/{n0}/addtimespent ====

$o['v1']['tasks/{n0}/addtimespent'] = array (
    'POST' => 
    array (
        'url' => 'tasks/{id}/addtimespent',
        'className' => 'Tasks',
        'path' => 'tasks',
        'methodName' => 'addTimeSpent',
        'arguments' => 
        array (
            'id' => 0,
            'date' => 1,
            'duration' => 2,
            'user_id' => 3,
            'note' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
            2 => NULL,
            3 => 0,
            4 => '',
        ),
        'metadata' => 
        array (
            'description' => 'Add time spent to a task of a project.',
            'longDescription' => 'You can test this API with the following input message { "date": "2016-12-31 23:15:00", "duration": 1800, "user_id": 1, "note": "My time test" }',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Task ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'DateTime',
                    'name' => 'date',
                    'description' => 'Date (YYYY-MM-DD HH:MI:SS in GMT)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Date',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'duration',
                    'description' => 'Duration in seconds (3600 = 1h)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Duration',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'user_id',
                    'description' => 'User (Use 0 for connected user)',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'User Id',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'note',
                    'description' => 'Note',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Note',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                    'model' => 'TasksAddtimespentDateTime',
                ),
            ),
            'url' => 'POST {id}/addtimespent',
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'tasks',
            'classDescription' => 'API class for projects',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0} ====

$o['v1']['thirdparties/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of a thirdparty object',
            'longDescription' => 'Return an array with thirdparty informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'thirdparties/{id}',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Thirparty ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'integer',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties ====

$o['v1']['thirdparties'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create thirdparty object',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => 'ID of thirdparty',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/index ====

$o['v1']['thirdparties/index'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'mode' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List thirdparties',
            'longDescription' => 'Get a list of thirdparties',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'mode',
                    'description' => 'Set to 1 to show only customers Set to 2 to show only prospects Set to 3 to show only those are not customer neither prospect',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Mode',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of thirdparty objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/categories ====

$o['v1']['thirdparties/{n0}/categories'] = array (
    'GET' => 
    array (
        'url' => 'thirdparties/{id}/categories',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'getCategories',
        'arguments' => 
        array (
            'id' => 0,
            'sortfield' => 1,
            'sortorder' => 2,
            'limit' => 3,
            'page' => 4,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => 's.rowid',
            2 => 'ASC',
            3 => 0,
            4 => 0,
        ),
        'metadata' => 
        array (
            'description' => 'Get categories for a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 's.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'GET {id}/categories',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 thirdparties/{n0}/addCategory ====

$o['v1']['thirdparties/{n0}/addCategory'] = array (
    'POST' => 
    array (
        'url' => 'thirdparties/{id}/addCategory',
        'className' => 'Thirdparties',
        'path' => 'thirdparties',
        'methodName' => 'addCategory',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Add category to a thirdparty',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of thirdparty',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Request datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'mixed',
                'description' => '',
            ),
            'url' => 'POST {id}/addCategory',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'thirdparties',
            'classDescription' => 'API class for thirdparties',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users ====

$o['v1']['users'] = array (
    'GET' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Users',
            'longDescription' => 'Get a list of Users',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'POST' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'post',
        'arguments' => 
        array (
            'request_data' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Create user account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'New user data',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/index ====

$o['v1']['users/index'] = array (
    'GET' => 
    array (
        'url' => 'users',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'index',
        'arguments' => 
        array (
            'sortfield' => 0,
            'sortorder' => 1,
            'limit' => 2,
            'page' => 3,
            'user_ids' => 4,
            'sqlfilters' => 5,
        ),
        'defaults' => 
        array (
            0 => 't.rowid',
            1 => 'ASC',
            2 => 0,
            3 => 0,
            4 => 0,
            5 => '',
        ),
        'metadata' => 
        array (
            'description' => 'List Users',
            'longDescription' => 'Get a list of Users',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'string',
                    'name' => 'sortfield',
                    'description' => 'Sort field',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortfield',
                    'default' => 't.rowid',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'string',
                    'name' => 'sortorder',
                    'description' => 'Sort order',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sortorder',
                    'default' => 'ASC',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                2 => 
                array (
                    'type' => 'int',
                    'name' => 'limit',
                    'description' => 'Limit for list',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Limit',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                3 => 
                array (
                    'type' => 'int',
                    'name' => 'page',
                    'description' => 'Page number',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Page',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                4 => 
                array (
                    'type' => 'string',
                    'name' => 'user_ids',
                    'description' => 'User ids filter field. Example: \'1\' or \'1,2,3\'',
                    'properties' => 
                    array (
                        'pattern' => '/^[0-9,]*$/i',
                        'from' => 'query',
                    ),
                    'label' => 'User Ids',
                    'default' => 0,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
                5 => 
                array (
                    'type' => 'string',
                    'name' => 'sqlfilters',
                    'description' => 'Other criteria to filter answers separated by a comma. Syntax example "(t.ref:like:\'SO-%\') and (t.date_creation:<:\'20160101\')"',
                    'properties' => 
                    array (
                        'from' => 'query',
                    ),
                    'label' => 'Sqlfilters',
                    'default' => '',
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => 'Array of User objects',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0} ====

$o['v1']['users/{n0}'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'get',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Get properties of an user object',
            'longDescription' => 'Return an array with user informations',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'ID of user',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 
                array (
                    0 => 'array',
                    1 => 'mixed',
                ),
                'description' => 'data without useless information',
            ),
            'throws' => 
            array (
                0 => 
                array (
                    'code' => 500,
                    'message' => 'RestException',
                    'exception' => 'Exception',
                ),
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'PUT' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'put',
        'arguments' => 
        array (
            'id' => 0,
            'request_data' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Update account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Id of account to update',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'array',
                    'name' => 'request_data',
                    'description' => 'Datas',
                    'properties' => 
                    array (
                        'from' => 'body',
                    ),
                    'label' => 'Request Data',
                    'default' => NULL,
                    'required' => false,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
    'DELETE' => 
    array (
        'url' => 'users/{id}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'delete',
        'arguments' => 
        array (
            'id' => 0,
        ),
        'defaults' => 
        array (
            0 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'Delete account',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'Account ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'array',
                'description' => '',
            ),
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==== v1 users/{n0}/setGroup/{n1} ====

$o['v1']['users/{n0}/setGroup/{n1}'] = array (
    'GET' => 
    array (
        'url' => 'users/{id}/setGroup/{group}',
        'className' => 'Users',
        'path' => 'users',
        'methodName' => 'setGroup',
        'arguments' => 
        array (
            'id' => 0,
            'group' => 1,
        ),
        'defaults' => 
        array (
            0 => NULL,
            1 => NULL,
        ),
        'metadata' => 
        array (
            'description' => 'add user to group',
            'longDescription' => '',
            'param' => 
            array (
                0 => 
                array (
                    'type' => 'int',
                    'name' => 'id',
                    'description' => 'User ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Id',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
                1 => 
                array (
                    'type' => 'int',
                    'name' => 'group',
                    'description' => 'Group ID',
                    'properties' => 
                    array (
                        'from' => 'path',
                    ),
                    'label' => 'Group',
                    'default' => NULL,
                    'required' => true,
                    'children' => 
                    array (
                    ),
                ),
            ),
            'return' => 
            array (
                'type' => 'int',
                'description' => '',
            ),
            'url' => 'GET {id}/setGroup/{group}',
            'access' => 'protected',
            'class' => 
            array (
                'DolibarrApiAccess' => 
                array (
                    'description' => '',
                    'properties' => 
                    array (
                        'requires' => 'user,external',
                    ),
                ),
            ),
            'scope' => 
            array (
                '*' => '',
                'RestException' => 'Luracast\\Restler\\RestException',
            ),
            'resourcePath' => 'users',
            'classDescription' => 'API class for users',
        ),
        'accessLevel' => 2,
    ),
);

//==================== apiVersionMap ====================

$o['apiVersionMap'] = array();

//==== apiVersionMap Luracast\Restler\Explorer ====

$o['apiVersionMap']['Luracast\Restler\Explorer'] = array (
    1 => 'Luracast\\Restler\\Explorer',
);

//==== apiVersionMap DolibarrApiAccess ====

$o['apiVersionMap']['DolibarrApiAccess'] = array (
    1 => 'DolibarrApiAccess',
);

//==== apiVersionMap ThirdpartyApi ====

$o['apiVersionMap']['ThirdpartyApi'] = array (
    1 => 'ThirdpartyApi',
);

//==== apiVersionMap ContactApi ====

$o['apiVersionMap']['ContactApi'] = array (
    1 => 'ContactApi',
);

//==== apiVersionMap CommandeApi ====

$o['apiVersionMap']['CommandeApi'] = array (
    1 => 'CommandeApi',
);

//==== apiVersionMap UserApi ====

$o['apiVersionMap']['UserApi'] = array (
    1 => 'UserApi',
);

//==== apiVersionMap CategoryApi ====

$o['apiVersionMap']['CategoryApi'] = array (
    1 => 'CategoryApi',
);

//==== apiVersionMap InvoiceApi ====

$o['apiVersionMap']['InvoiceApi'] = array (
    1 => 'InvoiceApi',
);

//==== apiVersionMap Agendaevents ====

$o['apiVersionMap']['Agendaevents'] = array (
    1 => 'Agendaevents',
);

//==== apiVersionMap Bankaccounts ====

$o['apiVersionMap']['Bankaccounts'] = array (
    1 => 'Bankaccounts',
);

//==== apiVersionMap Categories ====

$o['apiVersionMap']['Categories'] = array (
    1 => 'Categories',
);

//==== apiVersionMap Contacts ====

$o['apiVersionMap']['Contacts'] = array (
    1 => 'Contacts',
);

//==== apiVersionMap Dictionnarycountries ====

$o['apiVersionMap']['Dictionnarycountries'] = array (
    1 => 'Dictionnarycountries',
);

//==== apiVersionMap Dictionnarytowns ====

$o['apiVersionMap']['Dictionnarytowns'] = array (
    1 => 'Dictionnarytowns',
);

//==== apiVersionMap Expensereports ====

$o['apiVersionMap']['Expensereports'] = array (
    1 => 'Expensereports',
);

//==== apiVersionMap Invoices ====

$o['apiVersionMap']['Invoices'] = array (
    1 => 'Invoices',
);

//==== apiVersionMap Login ====

$o['apiVersionMap']['Login'] = array (
    1 => 'Login',
);

//==== apiVersionMap Members ====

$o['apiVersionMap']['Members'] = array (
    1 => 'Members',
);

//==== apiVersionMap Orders ====

$o['apiVersionMap']['Orders'] = array (
    1 => 'Orders',
);

//==== apiVersionMap Projects ====

$o['apiVersionMap']['Projects'] = array (
    1 => 'Projects',
);

//==== apiVersionMap Proposals ====

$o['apiVersionMap']['Proposals'] = array (
    1 => 'Proposals',
);

//==== apiVersionMap Status ====

$o['apiVersionMap']['Status'] = array (
    1 => 'Status',
);

//==== apiVersionMap Subscriptions ====

$o['apiVersionMap']['Subscriptions'] = array (
    1 => 'Subscriptions',
);

//==== apiVersionMap Supplierinvoices ====

$o['apiVersionMap']['Supplierinvoices'] = array (
    1 => 'Supplierinvoices',
);

//==== apiVersionMap Tasks ====

$o['apiVersionMap']['Tasks'] = array (
    1 => 'Tasks',
);

//==== apiVersionMap Thirdparties ====

$o['apiVersionMap']['Thirdparties'] = array (
    1 => 'Thirdparties',
);

//==== apiVersionMap Users ====

$o['apiVersionMap']['Users'] = array (
    1 => 'Users',
);
return $o;