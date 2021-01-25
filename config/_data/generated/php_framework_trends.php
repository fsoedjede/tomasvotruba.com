<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $parameters = $containerConfigurator->parameters();

    $parameters->set('php_framework_trends', ['vendors' => [['vendor_name' => 'Symfony', 'vendor_total_last_year' => 876322272, 'vendor_total_previous_year' => 553316031, 'last_year_trend' => 58.0, 'packages_data' => [['package_name' => 'symfony/messenger', 'package_short_name' => 'messenger', 'last_12_months' => 4629953, 'previous_12_months' => 1327789, 'last_year_trend' => 248.7], ['package_name' => 'symfony/mime', 'package_short_name' => 'mime', 'last_12_months' => 52936983, 'previous_12_months' => 16665777, 'last_year_trend' => 217.6], ['package_name' => 'symfony/mercure', 'package_short_name' => 'mercure', 'last_12_months' => 745712, 'previous_12_months' => 238591, 'last_year_trend' => 212.5], ['package_name' => 'symfony/lock', 'package_short_name' => 'lock', 'last_12_months' => 5045627, 'previous_12_months' => 1732613, 'last_year_trend' => 191.2], ['package_name' => 'symfony/property-info', 'package_short_name' => 'property-info', 'last_12_months' => 13658224, 'previous_12_months' => 5840556, 'last_year_trend' => 133.9], ['package_name' => 'symfony/var-exporter', 'package_short_name' => 'var-exporter', 'last_12_months' => 21261057, 'previous_12_months' => 9834648, 'last_year_trend' => 116.2], ['package_name' => 'symfony/security-core', 'package_short_name' => 'security-core', 'last_12_months' => 11885432, 'previous_12_months' => 5926660, 'last_year_trend' => 100.5], ['package_name' => 'symfony/workflow', 'package_short_name' => 'workflow', 'last_12_months' => 2338294, 'previous_12_months' => 1191336, 'last_year_trend' => 96.3], ['package_name' => 'symfony/web-link', 'package_short_name' => 'web-link', 'last_12_months' => 6503571, 'previous_12_months' => 3331001, 'last_year_trend' => 95.2], ['package_name' => 'symfony/intl', 'package_short_name' => 'intl', 'last_12_months' => 16270042, 'previous_12_months' => 8353527, 'last_year_trend' => 94.8], ['package_name' => 'symfony/var-dumper', 'package_short_name' => 'var-dumper', 'last_12_months' => 28501657, 'previous_12_months' => 15317963, 'last_year_trend' => 86.09999999999999], ['package_name' => 'symfony/options-resolver', 'package_short_name' => 'options-resolver', 'last_12_months' => 19938321, 'previous_12_months' => 10796130, 'last_year_trend' => 84.7], ['package_name' => 'symfony/dotenv', 'package_short_name' => 'dotenv', 'last_12_months' => 15414262, 'previous_12_months' => 8554687, 'last_year_trend' => 80.2], ['package_name' => 'symfony/cache', 'package_short_name' => 'cache', 'last_12_months' => 22447627, 'previous_12_months' => 12472444, 'last_year_trend' => 80.0], ['package_name' => 'symfony/stopwatch', 'package_short_name' => 'stopwatch', 'last_12_months' => 9892665, 'previous_12_months' => 5508547, 'last_year_trend' => 79.59999999999999], ['package_name' => 'symfony/flex', 'package_short_name' => 'flex', 'last_12_months' => 13785636, 'previous_12_months' => 7679553, 'last_year_trend' => 79.5], ['package_name' => 'symfony/asset', 'package_short_name' => 'asset', 'last_12_months' => 12217629, 'previous_12_months' => 6991292, 'last_year_trend' => 74.8], ['package_name' => 'symfony/property-access', 'package_short_name' => 'property-access', 'last_12_months' => 21774166, 'previous_12_months' => 12770057, 'last_year_trend' => 70.5], ['package_name' => 'symfony/expression-language', 'package_short_name' => 'expression-language', 'last_12_months' => 14063520, 'previous_12_months' => 8419796, 'last_year_trend' => 67.0], ['package_name' => 'symfony/form', 'package_short_name' => 'form', 'last_12_months' => 11251331, 'previous_12_months' => 6953817, 'last_year_trend' => 61.8], ['package_name' => 'symfony/http-kernel', 'package_short_name' => 'http-kernel', 'last_12_months' => 22663946, 'previous_12_months' => 14046142, 'last_year_trend' => 61.4], ['package_name' => 'symfony/http-foundation', 'package_short_name' => 'http-foundation', 'last_12_months' => 21399890, 'previous_12_months' => 13290401, 'last_year_trend' => 61.0], ['package_name' => 'symfony/serializer', 'package_short_name' => 'serializer', 'last_12_months' => 21333679, 'previous_12_months' => 13316123, 'last_year_trend' => 60.2], ['package_name' => 'symfony/dependency-injection', 'package_short_name' => 'dependency-injection', 'last_12_months' => 32711931, 'previous_12_months' => 21062225, 'last_year_trend' => 55.3], ['package_name' => 'symfony/routing', 'package_short_name' => 'routing', 'last_12_months' => 23549717, 'previous_12_months' => 15232409, 'last_year_trend' => 54.6], ['package_name' => 'symfony/config', 'package_short_name' => 'config', 'last_12_months' => 31978411, 'previous_12_months' => 20844519, 'last_year_trend' => 53.4], ['package_name' => 'symfony/validator', 'package_short_name' => 'validator', 'last_12_months' => 20355733, 'previous_12_months' => 13390984, 'last_year_trend' => 52.0], ['package_name' => 'symfony/inflector', 'package_short_name' => 'inflector', 'last_12_months' => 17427241, 'previous_12_months' => 11623672, 'last_year_trend' => 49.9], ['package_name' => 'symfony/filesystem', 'package_short_name' => 'filesystem', 'last_12_months' => 33801377, 'previous_12_months' => 22800930, 'last_year_trend' => 48.2], ['package_name' => 'symfony/templating', 'package_short_name' => 'templating', 'last_12_months' => 6766758, 'previous_12_months' => 4580403, 'last_year_trend' => 47.7], ['package_name' => 'symfony/ldap', 'package_short_name' => 'ldap', 'last_12_months' => 460214, 'previous_12_months' => 317491, 'last_year_trend' => 45.0], ['package_name' => 'symfony/css-selector', 'package_short_name' => 'css-selector', 'last_12_months' => 60525984, 'previous_12_months' => 42241299, 'last_year_trend' => 43.3], ['package_name' => 'symfony/translation', 'package_short_name' => 'translation', 'last_12_months' => 67281927, 'previous_12_months' => 47610937, 'last_year_trend' => 41.3], ['package_name' => 'symfony/yaml', 'package_short_name' => 'yaml', 'last_12_months' => 53090853, 'previous_12_months' => 37762693, 'last_year_trend' => 40.6], ['package_name' => 'symfony/dom-crawler', 'package_short_name' => 'dom-crawler', 'last_12_months' => 30486601, 'previous_12_months' => 22146705, 'last_year_trend' => 37.7], ['package_name' => 'symfony/browser-kit', 'package_short_name' => 'browser-kit', 'last_12_months' => 21985891, 'previous_12_months' => 15996958, 'last_year_trend' => 37.4], ['package_name' => 'symfony/console', 'package_short_name' => 'console', 'last_12_months' => 26196901, 'previous_12_months' => 20059200, 'last_year_trend' => 30.6], ['package_name' => 'symfony/finder', 'package_short_name' => 'finder', 'last_12_months' => 19153870, 'previous_12_months' => 14956391, 'last_year_trend' => 28.1], ['package_name' => 'symfony/event-dispatcher', 'package_short_name' => 'event-dispatcher', 'last_12_months' => 25788025, 'previous_12_months' => 20348904, 'last_year_trend' => 26.7], ['package_name' => 'symfony/process', 'package_short_name' => 'process', 'last_12_months' => 16676100, 'previous_12_months' => 13759967, 'last_year_trend' => 21.2], ['package_name' => 'symfony/website-skeleton', 'package_short_name' => 'website-skeleton', 'last_12_months' => 493071, 'previous_12_months' => 429989, 'last_year_trend' => 14.7], ['package_name' => 'symfony/security', 'package_short_name' => 'security', 'last_12_months' => 3662367, 'previous_12_months' => 3416416, 'last_year_trend' => 7.2], ['package_name' => 'symfony/symfony', 'package_short_name' => 'symfony', 'last_12_months' => 9229129, 'previous_12_months' => 8697674, 'last_year_trend' => 6.1], ['package_name' => 'symfony/security-acl', 'package_short_name' => 'security-acl', 'last_12_months' => 4032297, 'previous_12_months' => 4103655, 'last_year_trend' => -1.7], ['package_name' => 'symfony/panther', 'package_short_name' => 'panther', 'last_12_months' => 708650, 'previous_12_months' => 1373160, 'last_year_trend' => -48.4]]], ['vendor_name' => 'Doctrine', 'vendor_total_last_year' => 588146927, 'vendor_total_previous_year' => 407718272, 'last_year_trend' => 44.0, 'packages_data' => [['package_name' => 'doctrine/event-manager', 'package_short_name' => 'event-manager', 'last_12_months' => 42738878, 'previous_12_months' => 25358373, 'last_year_trend' => 68.5], ['package_name' => 'doctrine/persistence', 'package_short_name' => 'persistence', 'last_12_months' => 23620400, 'previous_12_months' => 15487014, 'last_year_trend' => 52.5], ['package_name' => 'doctrine/reflection', 'package_short_name' => 'reflection', 'last_12_months' => 22688064, 'previous_12_months' => 14960825, 'last_year_trend' => 51.6], ['package_name' => 'doctrine/lexer', 'package_short_name' => 'lexer', 'last_12_months' => 77165795, 'previous_12_months' => 51851501, 'last_year_trend' => 48.8], ['package_name' => 'doctrine/dbal', 'package_short_name' => 'dbal', 'last_12_months' => 46680744, 'previous_12_months' => 31538189, 'last_year_trend' => 48.0], ['package_name' => 'doctrine/annotations', 'package_short_name' => 'annotations', 'last_12_months' => 49425505, 'previous_12_months' => 33633792, 'last_year_trend' => 47.0], ['package_name' => 'doctrine/migrations', 'package_short_name' => 'migrations', 'last_12_months' => 16300656, 'previous_12_months' => 11115374, 'last_year_trend' => 46.6], ['package_name' => 'doctrine/cache', 'package_short_name' => 'cache', 'last_12_months' => 54090639, 'previous_12_months' => 37085538, 'last_year_trend' => 45.9], ['package_name' => 'doctrine/instantiator', 'package_short_name' => 'instantiator', 'last_12_months' => 80314771, 'previous_12_months' => 55641694, 'last_year_trend' => 44.3], ['package_name' => 'doctrine/inflector', 'package_short_name' => 'inflector', 'last_12_months' => 72749065, 'previous_12_months' => 50696581, 'last_year_trend' => 43.5], ['package_name' => 'doctrine/orm', 'package_short_name' => 'orm', 'last_12_months' => 22813536, 'previous_12_months' => 16435381, 'last_year_trend' => 38.8], ['package_name' => 'doctrine/data-fixtures', 'package_short_name' => 'data-fixtures', 'last_12_months' => 10787625, 'previous_12_months' => 7947594, 'last_year_trend' => 35.7], ['package_name' => 'doctrine/common', 'package_short_name' => 'common', 'last_12_months' => 31609087, 'previous_12_months' => 25354217, 'last_year_trend' => 24.7], ['package_name' => 'doctrine/collections', 'package_short_name' => 'collections', 'last_12_months' => 34483050, 'previous_12_months' => 28080115, 'last_year_trend' => 22.8], ['package_name' => 'doctrine/mongodb-odm', 'package_short_name' => 'mongodb-odm', 'last_12_months' => 1564181, 'previous_12_months' => 1300464, 'last_year_trend' => 20.3], ['package_name' => 'doctrine/mongodb', 'package_short_name' => 'mongodb', 'last_12_months' => 1114931, 'previous_12_months' => 1231620, 'last_year_trend' => -9.5]]], ['vendor_name' => 'CakePHP', 'vendor_total_last_year' => 25816447, 'vendor_total_previous_year' => 18317819, 'last_year_trend' => 41.0, 'packages_data' => [['package_name' => 'cakephp/chronos', 'package_short_name' => 'chronos', 'last_12_months' => 6608229, 'previous_12_months' => 4133379, 'last_year_trend' => 59.9], ['package_name' => 'cakephp/datasource', 'package_short_name' => 'datasource', 'last_12_months' => 1842610, 'previous_12_months' => 1201164, 'last_year_trend' => 53.4], ['package_name' => 'cakephp/core', 'package_short_name' => 'core', 'last_12_months' => 2078815, 'previous_12_months' => 1355786, 'last_year_trend' => 53.3], ['package_name' => 'cakephp/database', 'package_short_name' => 'database', 'last_12_months' => 1834091, 'previous_12_months' => 1197117, 'last_year_trend' => 53.2], ['package_name' => 'cakephp/utility', 'package_short_name' => 'utility', 'last_12_months' => 2098412, 'previous_12_months' => 1373118, 'last_year_trend' => 52.8], ['package_name' => 'cakephp/log', 'package_short_name' => 'log', 'last_12_months' => 1471197, 'previous_12_months' => 1000613, 'last_year_trend' => 47.0], ['package_name' => 'cakephp/collection', 'package_short_name' => 'collection', 'last_12_months' => 1699234, 'previous_12_months' => 1206480, 'last_year_trend' => 40.8], ['package_name' => 'cakephp/cache', 'package_short_name' => 'cache', 'last_12_months' => 1548694, 'previous_12_months' => 1199297, 'last_year_trend' => 29.1], ['package_name' => 'cakephp/cakephp-codesniffer', 'package_short_name' => 'cakephp-codesniffer', 'last_12_months' => 916179, 'previous_12_months' => 725504, 'last_year_trend' => 26.3], ['package_name' => 'cakephp/plugin-installer', 'package_short_name' => 'plugin-installer', 'last_12_months' => 1040730, 'previous_12_months' => 887876, 'last_year_trend' => 17.2], ['package_name' => 'cakephp/debug_kit', 'package_short_name' => 'debug_kit', 'last_12_months' => 1196092, 'previous_12_months' => 1028268, 'last_year_trend' => 16.3], ['package_name' => 'cakephp/bake', 'package_short_name' => 'bake', 'last_12_months' => 916761, 'previous_12_months' => 790863, 'last_year_trend' => 15.9], ['package_name' => 'cakephp/migrations', 'package_short_name' => 'migrations', 'last_12_months' => 1013141, 'previous_12_months' => 875322, 'last_year_trend' => 15.7], ['package_name' => 'cakephp/cakephp', 'package_short_name' => 'cakephp', 'last_12_months' => 1552262, 'previous_12_months' => 1343032, 'last_year_trend' => 15.6]]], ['vendor_name' => 'Laravel', 'vendor_total_last_year' => 126250912, 'vendor_total_previous_year' => 90388061, 'last_year_trend' => 40.0, 'packages_data' => [['package_name' => 'illuminate/log', 'package_short_name' => 'log', 'last_12_months' => 2459731, 'previous_12_months' => 1486595, 'last_year_trend' => 65.5], ['package_name' => 'illuminate/routing', 'package_short_name' => 'routing', 'last_12_months' => 813551, 'previous_12_months' => 545526, 'last_year_trend' => 49.1], ['package_name' => 'illuminate/pipeline', 'package_short_name' => 'pipeline', 'last_12_months' => 3385893, 'previous_12_months' => 2322167, 'last_year_trend' => 45.8], ['package_name' => 'laravel/framework', 'package_short_name' => 'framework', 'last_12_months' => 38019369, 'previous_12_months' => 26147899, 'last_year_trend' => 45.4], ['package_name' => 'illuminate/console', 'package_short_name' => 'console', 'last_12_months' => 3853720, 'previous_12_months' => 2698433, 'last_year_trend' => 42.8], ['package_name' => 'illuminate/session', 'package_short_name' => 'session', 'last_12_months' => 3368132, 'previous_12_months' => 2367929, 'last_year_trend' => 42.2], ['package_name' => 'illuminate/bus', 'package_short_name' => 'bus', 'last_12_months' => 3094955, 'previous_12_months' => 2180104, 'last_year_trend' => 42.0], ['package_name' => 'illuminate/translation', 'package_short_name' => 'translation', 'last_12_months' => 3269761, 'previous_12_months' => 2303006, 'last_year_trend' => 42.0], ['package_name' => 'illuminate/broadcasting', 'package_short_name' => 'broadcasting', 'last_12_months' => 2870984, 'previous_12_months' => 2026770, 'last_year_trend' => 41.7], ['package_name' => 'illuminate/validation', 'package_short_name' => 'validation', 'last_12_months' => 3275654, 'previous_12_months' => 2313946, 'last_year_trend' => 41.6], ['package_name' => 'illuminate/http', 'package_short_name' => 'http', 'last_12_months' => 3280586, 'previous_12_months' => 2317945, 'last_year_trend' => 41.5], ['package_name' => 'illuminate/config', 'package_short_name' => 'config', 'last_12_months' => 4172623, 'previous_12_months' => 2950771, 'last_year_trend' => 41.4], ['package_name' => 'illuminate/mail', 'package_short_name' => 'mail', 'last_12_months' => 939857, 'previous_12_months' => 664747, 'last_year_trend' => 41.4], ['package_name' => 'illuminate/hashing', 'package_short_name' => 'hashing', 'last_12_months' => 2949370, 'previous_12_months' => 2086757, 'last_year_trend' => 41.3], ['package_name' => 'illuminate/cache', 'package_short_name' => 'cache', 'last_12_months' => 3326523, 'previous_12_months' => 2358479, 'last_year_trend' => 41.0], ['package_name' => 'illuminate/queue', 'package_short_name' => 'queue', 'last_12_months' => 3212420, 'previous_12_months' => 2289507, 'last_year_trend' => 40.3], ['package_name' => 'illuminate/auth', 'package_short_name' => 'auth', 'last_12_months' => 2904878, 'previous_12_months' => 2074306, 'last_year_trend' => 40.0], ['package_name' => 'illuminate/filesystem', 'package_short_name' => 'filesystem', 'last_12_months' => 4871425, 'previous_12_months' => 3554750, 'last_year_trend' => 37.0], ['package_name' => 'illuminate/view', 'package_short_name' => 'view', 'last_12_months' => 3818167, 'previous_12_months' => 2792357, 'last_year_trend' => 36.7], ['package_name' => 'illuminate/pagination', 'package_short_name' => 'pagination', 'last_12_months' => 3192729, 'previous_12_months' => 2339489, 'last_year_trend' => 36.5], ['package_name' => 'illuminate/encryption', 'package_short_name' => 'encryption', 'last_12_months' => 3070662, 'previous_12_months' => 2253113, 'last_year_trend' => 36.3], ['package_name' => 'illuminate/redis', 'package_short_name' => 'redis', 'last_12_months' => 1435163, 'previous_12_months' => 1060263, 'last_year_trend' => 35.4], ['package_name' => 'illuminate/events', 'package_short_name' => 'events', 'last_12_months' => 4631606, 'previous_12_months' => 3488068, 'last_year_trend' => 32.8], ['package_name' => 'illuminate/support', 'package_short_name' => 'support', 'last_12_months' => 8836120, 'previous_12_months' => 6788890, 'last_year_trend' => 30.2], ['package_name' => 'illuminate/container', 'package_short_name' => 'container', 'last_12_months' => 6488697, 'previous_12_months' => 5188262, 'last_year_trend' => 25.1], ['package_name' => 'illuminate/database', 'package_short_name' => 'database', 'last_12_months' => 4708336, 'previous_12_months' => 3787982, 'last_year_trend' => 24.3]]], ['vendor_name' => 'Yii', 'vendor_total_last_year' => 20470167, 'vendor_total_previous_year' => 18221000, 'last_year_trend' => 12.0, 'packages_data' => [['package_name' => 'yiisoft/yii2-queue', 'package_short_name' => 'yii2-queue', 'last_12_months' => 1059175, 'previous_12_months' => 780626, 'last_year_trend' => 35.7], ['package_name' => 'yiisoft/yii2-redis', 'package_short_name' => 'yii2-redis', 'last_12_months' => 1075603, 'previous_12_months' => 840255, 'last_year_trend' => 28.0], ['package_name' => 'yiisoft/yii2-imagine', 'package_short_name' => 'yii2-imagine', 'last_12_months' => 498855, 'previous_12_months' => 408798, 'last_year_trend' => 22.0], ['package_name' => 'yiisoft/yii2-composer', 'package_short_name' => 'yii2-composer', 'last_12_months' => 2772469, 'previous_12_months' => 2338014, 'last_year_trend' => 18.6], ['package_name' => 'yiisoft/yii2-httpclient', 'package_short_name' => 'yii2-httpclient', 'last_12_months' => 1010816, 'previous_12_months' => 872407, 'last_year_trend' => 15.9], ['package_name' => 'yiisoft/yii2-swiftmailer', 'package_short_name' => 'yii2-swiftmailer', 'last_12_months' => 2284956, 'previous_12_months' => 1985081, 'last_year_trend' => 15.1], ['package_name' => 'yiisoft/yii2', 'package_short_name' => 'yii2', 'last_12_months' => 2800329, 'previous_12_months' => 2481717, 'last_year_trend' => 12.8], ['package_name' => 'yiisoft/yii2-jui', 'package_short_name' => 'yii2-jui', 'last_12_months' => 807920, 'previous_12_months' => 718270, 'last_year_trend' => 12.5], ['package_name' => 'yiisoft/yii2-debug', 'package_short_name' => 'yii2-debug', 'last_12_months' => 2208079, 'previous_12_months' => 1995884, 'last_year_trend' => 10.6], ['package_name' => 'yiisoft/yii2-authclient', 'package_short_name' => 'yii2-authclient', 'last_12_months' => 528115, 'previous_12_months' => 481382, 'last_year_trend' => 9.699999999999999], ['package_name' => 'yiisoft/yii2-faker', 'package_short_name' => 'yii2-faker', 'last_12_months' => 1461728, 'previous_12_months' => 1344237, 'last_year_trend' => 8.699999999999999], ['package_name' => 'yiisoft/yii2-gii', 'package_short_name' => 'yii2-gii', 'last_12_months' => 1641879, 'previous_12_months' => 1540748, 'last_year_trend' => 6.6], ['package_name' => 'yiisoft/yii', 'package_short_name' => 'yii', 'last_12_months' => 469334, 'previous_12_months' => 479066, 'last_year_trend' => -2.0], ['package_name' => 'yiisoft/yii2-bootstrap', 'package_short_name' => 'yii2-bootstrap', 'last_12_months' => 1850909, 'previous_12_months' => 1954515, 'last_year_trend' => -5.3]]], ['vendor_name' => 'Nette', 'vendor_total_last_year' => 36390958, 'vendor_total_previous_year' => 37151283, 'last_year_trend' => -2.0, 'packages_data' => [['package_name' => 'nette/application', 'package_short_name' => 'application', 'last_12_months' => 1355880, 'previous_12_months' => 536946, 'last_year_trend' => 152.5], ['package_name' => 'nette/http', 'package_short_name' => 'http', 'last_12_months' => 1487173, 'previous_12_months' => 600494, 'last_year_trend' => 147.7], ['package_name' => 'nette/component-model', 'package_short_name' => 'component-model', 'last_12_months' => 1387577, 'previous_12_months' => 566753, 'last_year_trend' => 144.8], ['package_name' => 'nette/tester', 'package_short_name' => 'tester', 'last_12_months' => 461818, 'previous_12_months' => 300196, 'last_year_trend' => 53.8], ['package_name' => 'nette/forms', 'package_short_name' => 'forms', 'last_12_months' => 715722, 'previous_12_months' => 502956, 'last_year_trend' => 42.3], ['package_name' => 'nette/utils', 'package_short_name' => 'utils', 'last_12_months' => 7179467, 'previous_12_months' => 5463787, 'last_year_trend' => 31.4], ['package_name' => 'nette/caching', 'package_short_name' => 'caching', 'last_12_months' => 1176634, 'previous_12_months' => 900846, 'last_year_trend' => 30.6], ['package_name' => 'nette/finder', 'package_short_name' => 'finder', 'last_12_months' => 5734455, 'previous_12_months' => 4700526, 'last_year_trend' => 22.0], ['package_name' => 'nette/security', 'package_short_name' => 'security', 'last_12_months' => 546764, 'previous_12_months' => 467900, 'last_year_trend' => 16.9], ['package_name' => 'nette/mail', 'package_short_name' => 'mail', 'last_12_months' => 625977, 'previous_12_months' => 559005, 'last_year_trend' => 12.0], ['package_name' => 'nette/database', 'package_short_name' => 'database', 'last_12_months' => 387484, 'previous_12_months' => 351046, 'last_year_trend' => 10.4], ['package_name' => 'nette/robot-loader', 'package_short_name' => 'robot-loader', 'last_12_months' => 4455802, 'previous_12_months' => 4381463, 'last_year_trend' => 1.7], ['package_name' => 'nette/reflection', 'package_short_name' => 'reflection', 'last_12_months' => 506327, 'previous_12_months' => 541458, 'last_year_trend' => -6.5], ['package_name' => 'nette/neon', 'package_short_name' => 'neon', 'last_12_months' => 2984173, 'previous_12_months' => 4154663, 'last_year_trend' => -28.2], ['package_name' => 'nette/php-generator', 'package_short_name' => 'php-generator', 'last_12_months' => 2884730, 'previous_12_months' => 4766125, 'last_year_trend' => -39.5], ['package_name' => 'nette/di', 'package_short_name' => 'di', 'last_12_months' => 2445100, 'previous_12_months' => 4221690, 'last_year_trend' => -42.1], ['package_name' => 'nette/bootstrap', 'package_short_name' => 'bootstrap', 'last_12_months' => 2055875, 'previous_12_months' => 4135429, 'last_year_trend' => -50.3]]], ['vendor_name' => 'Zend', 'vendor_total_last_year' => 180532958, 'vendor_total_previous_year' => 200073868, 'last_year_trend' => -10.0, 'packages_data' => [['package_name' => 'zendframework/zend-barcode', 'package_short_name' => 'zend-barcode', 'last_12_months' => 1662118, 'previous_12_months' => 1333933, 'last_year_trend' => 24.6], ['package_name' => 'zendframework/zend-psr7bridge', 'package_short_name' => 'zend-psr7bridge', 'last_12_months' => 2164100, 'previous_12_months' => 2157382, 'last_year_trend' => 0.3], ['package_name' => 'zendframework/zend-server', 'package_short_name' => 'zend-server', 'last_12_months' => 2876229, 'previous_12_months' => 2898421, 'last_year_trend' => -0.8], ['package_name' => 'zendframework/zend-code', 'package_short_name' => 'zend-code', 'last_12_months' => 16660120, 'previous_12_months' => 16807865, 'last_year_trend' => -0.9], ['package_name' => 'zendframework/zend-hydrator', 'package_short_name' => 'zend-hydrator', 'last_12_months' => 3654525, 'previous_12_months' => 3698585, 'last_year_trend' => -1.2], ['package_name' => 'zendframework/zend-text', 'package_short_name' => 'zend-text', 'last_12_months' => 2498552, 'previous_12_months' => 2533352, 'last_year_trend' => -1.4], ['package_name' => 'zendframework/zend-eventmanager', 'package_short_name' => 'zend-eventmanager', 'last_12_months' => 16758640, 'previous_12_months' => 17137631, 'last_year_trend' => -2.2], ['package_name' => 'zendframework/zend-db', 'package_short_name' => 'zend-db', 'last_12_months' => 2616433, 'previous_12_months' => 2682917, 'last_year_trend' => -2.5], ['package_name' => 'zendframework/zend-soap', 'package_short_name' => 'zend-soap', 'last_12_months' => 2624867, 'previous_12_months' => 2696250, 'last_year_trend' => -2.6], ['package_name' => 'zendframework/zend-captcha', 'package_short_name' => 'zend-captcha', 'last_12_months' => 2079954, 'previous_12_months' => 2140654, 'last_year_trend' => -2.8], ['package_name' => 'zendframework/zend-memory', 'package_short_name' => 'zend-memory', 'last_12_months' => 681815, 'previous_12_months' => 702352, 'last_year_trend' => -2.9], ['package_name' => 'zendframework/zend-log', 'package_short_name' => 'zend-log', 'last_12_months' => 2731368, 'previous_12_months' => 2843651, 'last_year_trend' => -3.9], ['package_name' => 'zendframework/zend-mail', 'package_short_name' => 'zend-mail', 'last_12_months' => 2824483, 'previous_12_months' => 2939854, 'last_year_trend' => -3.9], ['package_name' => 'zendframework/zend-di', 'package_short_name' => 'zend-di', 'last_12_months' => 2183044, 'previous_12_months' => 2278557, 'last_year_trend' => -4.2], ['package_name' => 'zendframework/zend-mime', 'package_short_name' => 'zend-mime', 'last_12_months' => 2992800, 'previous_12_months' => 3140480, 'last_year_trend' => -4.7], ['package_name' => 'zendframework/zend-uri', 'package_short_name' => 'zend-uri', 'last_12_months' => 4449200, 'previous_12_months' => 4692861, 'last_year_trend' => -5.2], ['package_name' => 'zendframework/zend-paginator', 'package_short_name' => 'zend-paginator', 'last_12_months' => 1005884, 'previous_12_months' => 1070361, 'last_year_trend' => -6.0], ['package_name' => 'zendframework/zend-config', 'package_short_name' => 'zend-config', 'last_12_months' => 3284543, 'previous_12_months' => 3504942, 'last_year_trend' => -6.3], ['package_name' => 'zendframework/zend-console', 'package_short_name' => 'zend-console', 'last_12_months' => 2530403, 'previous_12_months' => 2711188, 'last_year_trend' => -6.7], ['package_name' => 'zendframework/zend-modulemanager', 'package_short_name' => 'zend-modulemanager', 'last_12_months' => 2638153, 'previous_12_months' => 2837749, 'last_year_trend' => -7.0], ['package_name' => 'zendframework/zend-serializer', 'package_short_name' => 'zend-serializer', 'last_12_months' => 2682832, 'previous_12_months' => 2888757, 'last_year_trend' => -7.1], ['package_name' => 'zendframework/zend-session', 'package_short_name' => 'zend-session', 'last_12_months' => 2462109, 'previous_12_months' => 2648957, 'last_year_trend' => -7.1], ['package_name' => 'zendframework/zend-http', 'package_short_name' => 'zend-http', 'last_12_months' => 4010526, 'previous_12_months' => 4319402, 'last_year_trend' => -7.2], ['package_name' => 'zendframework/zendservice-apple-apns', 'package_short_name' => 'zendservice-apple-apns', 'last_12_months' => 549140, 'previous_12_months' => 591586, 'last_year_trend' => -7.2], ['package_name' => 'zendframework/zend-i18n', 'package_short_name' => 'zend-i18n', 'last_12_months' => 2969523, 'previous_12_months' => 3212617, 'last_year_trend' => -7.6], ['package_name' => 'zendframework/zend-crypt', 'package_short_name' => 'zend-crypt', 'last_12_months' => 2574975, 'previous_12_months' => 2808107, 'last_year_trend' => -8.300000000000001], ['package_name' => 'zendframework/zend-mvc', 'package_short_name' => 'zend-mvc', 'last_12_months' => 2580151, 'previous_12_months' => 2816681, 'last_year_trend' => -8.4], ['package_name' => 'zendframework/zend-escaper', 'package_short_name' => 'zend-escaper', 'last_12_months' => 8776845, 'previous_12_months' => 9607676, 'last_year_trend' => -8.6], ['package_name' => 'zendframework/zend-form', 'package_short_name' => 'zend-form', 'last_12_months' => 2570391, 'previous_12_months' => 2851014, 'last_year_trend' => -9.800000000000001], ['package_name' => 'zendframework/zend-json', 'package_short_name' => 'zend-json', 'last_12_months' => 3722486, 'previous_12_months' => 4150107, 'last_year_trend' => -10.3], ['package_name' => 'zendframework/zend-math', 'package_short_name' => 'zend-math', 'last_12_months' => 2880958, 'previous_12_months' => 3226366, 'last_year_trend' => -10.7], ['package_name' => 'zendframework/zend-servicemanager', 'package_short_name' => 'zend-servicemanager', 'last_12_months' => 4441263, 'previous_12_months' => 4974981, 'last_year_trend' => -10.7], ['package_name' => 'zendframework/zend-view', 'package_short_name' => 'zend-view', 'last_12_months' => 2702273, 'previous_12_months' => 3047757, 'last_year_trend' => -11.3], ['package_name' => 'zendframework/zend-loader', 'package_short_name' => 'zend-loader', 'last_12_months' => 4608634, 'previous_12_months' => 5206274, 'last_year_trend' => -11.5], ['package_name' => 'zendframework/zendservice-google-gcm', 'package_short_name' => 'zendservice-google-gcm', 'last_12_months' => 462084, 'previous_12_months' => 524352, 'last_year_trend' => -11.9], ['package_name' => 'zendframework/zend-validator', 'package_short_name' => 'zend-validator', 'last_12_months' => 5661107, 'previous_12_months' => 6570314, 'last_year_trend' => -13.8], ['package_name' => 'zendframework/zend-stdlib', 'package_short_name' => 'zend-stdlib', 'last_12_months' => 10346333, 'previous_12_months' => 12100059, 'last_year_trend' => -14.5], ['package_name' => 'zendframework/zend-cache', 'package_short_name' => 'zend-cache', 'last_12_months' => 1380466, 'previous_12_months' => 1616042, 'last_year_trend' => -14.6], ['package_name' => 'zendframework/zendframework', 'package_short_name' => 'zendframework', 'last_12_months' => 616993, 'previous_12_months' => 722280, 'last_year_trend' => -14.6], ['package_name' => 'zendframework/zend-feed', 'package_short_name' => 'zend-feed', 'last_12_months' => 4344074, 'previous_12_months' => 5147170, 'last_year_trend' => -15.6], ['package_name' => 'zendframework/zendxml', 'package_short_name' => 'zendxml', 'last_12_months' => 933041, 'previous_12_months' => 1108425, 'last_year_trend' => -15.8], ['package_name' => 'zendframework/zend-xmlrpc', 'package_short_name' => 'zend-xmlrpc', 'last_12_months' => 532135, 'previous_12_months' => 638256, 'last_year_trend' => -16.6], ['package_name' => 'zendframework/zend-filter', 'package_short_name' => 'zend-filter', 'last_12_months' => 3417057, 'previous_12_months' => 4112631, 'last_year_trend' => -16.9], ['package_name' => 'zendframework/zend-permissions-rbac', 'package_short_name' => 'zend-permissions-rbac', 'last_12_months' => 564110, 'previous_12_months' => 678599, 'last_year_trend' => -16.9], ['package_name' => 'zendframework/zend-i18n-resources', 'package_short_name' => 'zend-i18n-resources', 'last_12_months' => 456196, 'previous_12_months' => 551614, 'last_year_trend' => -17.3], ['package_name' => 'zendframework/zend-permissions-acl', 'package_short_name' => 'zend-permissions-acl', 'last_12_months' => 750753, 'previous_12_months' => 912684, 'last_year_trend' => -17.7], ['package_name' => 'zendframework/zend-file', 'package_short_name' => 'zend-file', 'last_12_months' => 429090, 'previous_12_months' => 524600, 'last_year_trend' => -18.2], ['package_name' => 'zendframework/zend-progressbar', 'package_short_name' => 'zend-progressbar', 'last_12_months' => 380334, 'previous_12_months' => 469879, 'last_year_trend' => -19.1], ['package_name' => 'zendframework/zend-inputfilter', 'package_short_name' => 'zend-inputfilter', 'last_12_months' => 2711693, 'previous_12_months' => 3368789, 'last_year_trend' => -19.5], ['package_name' => 'zendframework/zend-dom', 'package_short_name' => 'zend-dom', 'last_12_months' => 582009, 'previous_12_months' => 734383, 'last_year_trend' => -20.7], ['package_name' => 'zendframework/zend-navigation', 'package_short_name' => 'zend-navigation', 'last_12_months' => 489852, 'previous_12_months' => 622361, 'last_year_trend' => -21.3], ['package_name' => 'zendframework/zend-authentication', 'package_short_name' => 'zend-authentication', 'last_12_months' => 857019, 'previous_12_months' => 1091113, 'last_year_trend' => -21.5], ['package_name' => 'zendframework/zend-version', 'package_short_name' => 'zend-version', 'last_12_months' => 379481, 'previous_12_months' => 489236, 'last_year_trend' => -22.4], ['package_name' => 'zendframework/zend-diactoros', 'package_short_name' => 'zend-diactoros', 'last_12_months' => 15522687, 'previous_12_months' => 20018210, 'last_year_trend' => -22.5], ['package_name' => 'zendframework/zendframework1', 'package_short_name' => 'zendframework1', 'last_12_months' => 657441, 'previous_12_months' => 848786, 'last_year_trend' => -22.5], ['package_name' => 'zendframework/zend-test', 'package_short_name' => 'zend-test', 'last_12_months' => 499063, 'previous_12_months' => 647678, 'last_year_trend' => -22.9], ['package_name' => 'zendframework/zend-debug', 'package_short_name' => 'zend-debug', 'last_12_months' => 492226, 'previous_12_months' => 677676, 'last_year_trend' => -27.4], ['package_name' => 'zendframework/zend-router', 'package_short_name' => 'zend-router', 'last_12_months' => 570842, 'previous_12_months' => 787240, 'last_year_trend' => -27.5], ['package_name' => 'zendframework/zenddiagnostics', 'package_short_name' => 'zenddiagnostics', 'last_12_months' => 1047535, 'previous_12_months' => 1952224, 'last_year_trend' => -46.3]]]], 'updated_at' => '2021-01-05 15:39:55']);
};