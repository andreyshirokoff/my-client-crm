<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kBLznvobuxIMfYNM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JZ8OJdmYyOEPOHej',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/profile-information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-profile-information.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user-password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::op13AI1yjOmrKWgs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/confirmed-password-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirmation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::sdzoU3rpnYQNaqqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/impersonate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::TKfbHE5Nu6wITAkn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::qjEYzIUQhivkWyC8',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/nova-notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::4tbKxYGeLFsT56Yt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/nova-api/nova-notifications/read-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::xN1UE3sowAfaC7Fc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::huN4oJmQLipHpxul',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9PBE3EsS99xDsq74',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.password.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/403' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.403',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/404' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.404',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/administrator/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nOmKJxJVAhh3MwQA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wm4LXXXi6QBeQj7k',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/client-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'createClient',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/client-search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'searchClient',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/functions/document_search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'documentSearch',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/ustawienia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/ustawienia/worker-create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/ustawienia/save-sign' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'save.sign',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/ustawienia/submit-visual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submit.visual',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/ustawienia/rodo-reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rodo.reset',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/ustawienia/send-answers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'send.answers',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/functions/treatment-create-add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'treatment.create.add',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'clients',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/add-procedure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dobav.zabiegKlient',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/edit-procedure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.procedure',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/usrimage' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7T6a4LROZ8yoyQoQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/editaccount' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xT7BwTpyn79UYJoA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/usrsignature' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hCTAGj4c1DWQvOO7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/rodoreset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S9LFyg9DrywKq0js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/document_kartaklienta_edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AO5Qet5EnE56Nelf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/treatment_template' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jZzrxOHcplpfsvl2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/treatment_create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::00OxKPfKhOHB3Dag',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/treatment_question' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'treatment.question',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/functions/product_create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RIralLXZv9AHkrtB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/reset\\-password/([^/]++)(*:32)|/nova\\-api/(?|s(?|cripts/([^/]++)(*:72)|tyles/([^/]++)(*:93))|([^/]++)/(?|field(?|/([^/]++)(?|(*:133)|/preview(*:149))|\\-attachment/([^/]++)(?|(*:182)|/(?|draftId(*:201)|([^/]++)(*:217))))|creation\\-fields(*:244)|([^/]++)/(?|update\\-(?|fields(*:281)|pivot\\-fields/([^/]++)/([^/]++)(*:320))|creation\\-pivot\\-fields/([^/]++)(*:361))|creation\\-fields(*:386)|([^/]++)/(?|update\\-(?|fields(*:423)|pivot\\-fields/([^/]++)/([^/]++)(*:462))|creation\\-pivot\\-fields/([^/]++)(*:503)|download/([^/]++)(*:528)|field/([^/]++)(*:550)|([^/]++)/([^/]++)/field/([^/]++)(*:590)))|dashboards/(?|([^/]++)(*:622)|cards/([^/]++)(*:644))|nova\\-notifications/([^/]++)/(?|read(*:689)|delete(*:703))|([^/]++)/(?|action(?|s(*:734)|(*:742))|filters(*:758)|lens(?|es(*:775)|/([^/]++)(?|(*:795)|/(?|count(*:812)|f(?|orce(*:828)|ilters(*:842))|restore(*:858)|action(?|s(*:876)|(*:884)))|(*:894))))|metrics/([^/]++)(*:921)|([^/]++)(?|/(?|metrics(?|(*:954)|/([^/]++)(*:971))|([^/]++)/metrics/([^/]++)(*:1005)|lens/([^/]++)/(?|metrics(?|(*:1041)|/([^/]++)(*:1059))|cards(*:1074))|c(?|ards(*:1092)|ount(*:1105))|re(?|late\\-authorization(*:1139)|store(*:1153))|s(?|oft\\-deletes(*:1179)|earch(*:1193))|detach(*:1209)|force(*:1223)|([^/]++)(?|(*:1243)|/p(?|review(*:1263)|eek(*:1275))|(*:1285))|associatable/([^/]++)(*:1316)|([^/]++)/attachable/([^/]++)(*:1353)|morphable/([^/]++)(*:1380)|([^/]++)/(?|attach(?|/([^/]++)(*:1419)|\\-morphed/([^/]++)(*:1446))|update\\-attached/([^/]++)/([^/]++)(*:1490)))|(*:1501)))|/livewire/message/([^/]++)(*:1538)|/([^/]++)/livewire/message/([^/]++)(*:1582)|/livewire/preview\\-file/([^/]++)(*:1623)|/administrator/(?|password/reset/([^/]++)(*:1673)|dashboards/([^/]++)(*:1701)|resources/([^/]++)(?|(*:1731)|/(?|new(*:1747)|([^/]++)(?|(*:1767)|/(?|edit(*:1784)|replicate(*:1802)))|lens/([^/]++)(*:1826)|([^/]++)/(?|attach/([^/]++)(*:1862)|edit\\-attached/([^/]++)/([^/]++)(*:1903)))))|/dashboard/news/([^/]++)(*:1940))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      72 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      93 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::89DHqspSLZSv6Fe6',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      133 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::zpqzO32e8t0TDe1v',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::6ljMpnXiN2i0fzAC',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::c4ngOKjyVzTZoNpV',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::7diZanKMjNiCQ4qc',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::b08nzOHArOLkEabB',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      217 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::QsJz1n3S1GNzup8R',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
            2 => 'draftId',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::KGX39zkWL6OE2noq',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::ftmMuxFzvDPxjCHd',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      320 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::Q95UFhHMd42jtqDM',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::j7ETtwydWL1TSoNf',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::OK3SXfo9bW6KBYm8',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::0dMjJ6eGgTQklp0Z',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::KDOt1l08EyYhHw2n',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::M6bTitlJ2QPyLoyz',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::9cgKw5zo9pdFiB8N',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::MrOaChEUeNSgb6Au',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::Q8sZhchsaz8DrVOy',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
            4 => 'field',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::xvkBuDxh4BAPmVUX',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::h33dO5IlXRY47snC',
          ),
          1 => 
          array (
            0 => 'dashboard',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::rHHIgaqpOZSIqFaP',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::0vE3vN5NhWxDGUzv',
          ),
          1 => 
          array (
            0 => 'notification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      734 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::0gOpmejcmD2yhLfT',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      742 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::6YODrkvT3pfPIPV0',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::R4AeEoY3TFlIMzcn',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::9zVdBnsNiFvNKvmK',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::YYqUnQYkGLva398a',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      795 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::kmJFWql4U8C6DKyU',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      812 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::Q7OW4HuMOrGwCgVJ',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      828 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::2LJG8bG8up5Qy5mV',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      842 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::W6XWN7MTqQdu9vYI',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::kyC6Vs0anXLuK054',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      876 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::9DX10gdWreLz7s8x',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      884 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::kIXxvz9XwAzSXhhm',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::v5vsfkoZmdukxDbd',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      894 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::zf496dXJk1TdhrFK',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::J17gnoLXdj1a5UwX',
          ),
          1 => 
          array (
            0 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      954 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::CLlWYnDwOP7XzNW6',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      971 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::Dpq2MjTcd0s5kTjR',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::9jlB5kKYbwXroZyU',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::KJMA6V05vIJi6VcB',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::B9bzxMHZ1hgD6uOj',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
            2 => 'metric',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1074 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::hWq1YNEoukCDRNLE',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::YLneb3PVYAk6ozuT',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::xhJSlR1uv6fZk5wH',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::vTVaacbSPiR39txQ',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1153 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::kei1B1QPjhhL7mPf',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::OCHZMETR0b7Z1W6n',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::yVLkI89v5gI3qo8m',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::1p5kOhPhzQ7U46dG',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::6JwzCwa4wY91nGEN',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::V8OkbEhbZkGBqbLj',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::RfbtS6N7R1788tVM',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::PREF3NRyO9Dl1Mw8',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1285 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::UzxEiOQkd602COLp',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::b91usZw97KtK6R3Y',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1353 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::GIguBqoeJR2KQ6Tc',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1380 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::rx7GWEhyo48QIFUs',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'field',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::cNKMGj06iZJfQWtJ',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::nJkQQ8VZHnPuoOzF',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::yw3SpYbcyCy3H63S',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::YDXAoTH6ZuWWR6DH',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::00R4xUyGw8P1rQuH',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'nova.api.generated::Sqde2mArU2N8sNca',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.dashboard.custom',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.index',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.create',
          ),
          1 => 
          array (
            0 => 'resource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1767 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.detail',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1784 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.edit',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1802 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.replicate',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.lens',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'lens',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.attach',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'nova.pages.edit-attached',
          ),
          1 => 
          array (
            0 => 'resource',
            1 => 'resourceId',
            2 => 'relatedResource',
            3 => 'relatedResourceId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'news',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kBLznvobuxIMfYNM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
          2 => 'throttle:login',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kBLznvobuxIMfYNM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\AuthenticatedSessionController@destroy',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordResetLinkController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\NewPasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@create',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JZ8OJdmYyOEPOHej' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\RegisteredUserController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JZ8OJdmYyOEPOHej',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-profile-information.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile-information',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ProfileInformationController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-profile-information.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user-password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\PasswordController@update',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user-password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::op13AI1yjOmrKWgs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::op13AI1yjOmrKWgs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirmation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/confirmed-password-status',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmedPasswordStatusController@show',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirmation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/confirm-password',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'controller' => 'Laravel\\Fortify\\Http\\Controllers\\ConfirmablePasswordController@store',
        'namespace' => 'Laravel\\Fortify\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/scripts/{script}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova:api',
          1 => 'Illuminate\\Http\\Middleware\\CheckResponseForModifications',
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ScriptController',
        'as' => 'nova.api.',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::89DHqspSLZSv6Fe6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/styles/{style}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova:api',
          1 => 'Illuminate\\Http\\Middleware\\CheckResponseForModifications',
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\StyleController',
        'as' => 'nova.api.generated::89DHqspSLZSv6Fe6',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::sdzoU3rpnYQNaqqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/search',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\SearchController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\SearchController',
        'as' => 'nova.api.generated::sdzoU3rpnYQNaqqs',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::TKfbHE5Nu6wITAkn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/impersonate',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ImpersonateController@startImpersonating',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ImpersonateController@startImpersonating',
        'as' => 'nova.api.generated::TKfbHE5Nu6wITAkn',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::qjEYzIUQhivkWyC8' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/impersonate',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ImpersonateController@stopImpersonating',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ImpersonateController@stopImpersonating',
        'as' => 'nova.api.generated::qjEYzIUQhivkWyC8',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::zpqzO32e8t0TDe1v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/field/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldController',
        'as' => 'nova.api.generated::zpqzO32e8t0TDe1v',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::6ljMpnXiN2i0fzAC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/field/{field}/preview',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldPreviewController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldPreviewController',
        'as' => 'nova.api.generated::6ljMpnXiN2i0fzAC',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::c4ngOKjyVzTZoNpV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/field-attachment/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@store',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@store',
        'as' => 'nova.api.generated::c4ngOKjyVzTZoNpV',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::7diZanKMjNiCQ4qc' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/field-attachment/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@destroyAttachment',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@destroyAttachment',
        'as' => 'nova.api.generated::7diZanKMjNiCQ4qc',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::b08nzOHArOLkEabB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/field-attachment/{field}/draftId',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@draftId',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@draftId',
        'as' => 'nova.api.generated::b08nzOHArOLkEabB',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::QsJz1n3S1GNzup8R' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/field-attachment/{field}/{draftId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@destroyPending',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldAttachmentController@destroyPending',
        'as' => 'nova.api.generated::QsJz1n3S1GNzup8R',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::KGX39zkWL6OE2noq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/creation-fields',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CreationFieldController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CreationFieldController',
        'as' => 'nova.api.generated::KGX39zkWL6OE2noq',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::ftmMuxFzvDPxjCHd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-fields',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\UpdateFieldController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\UpdateFieldController',
        'as' => 'nova.api.generated::ftmMuxFzvDPxjCHd',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::j7ETtwydWL1TSoNf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/creation-pivot-fields/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CreationPivotFieldController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CreationPivotFieldController',
        'as' => 'nova.api.generated::j7ETtwydWL1TSoNf',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::Q95UFhHMd42jtqDM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-pivot-fields/{relatedResource}/{relatedResourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\UpdatePivotFieldController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\UpdatePivotFieldController',
        'as' => 'nova.api.generated::Q95UFhHMd42jtqDM',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::OK3SXfo9bW6KBYm8' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'nova-api/{resource}/creation-fields',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CreationFieldSyncController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CreationFieldSyncController',
        'as' => 'nova.api.generated::OK3SXfo9bW6KBYm8',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::0dMjJ6eGgTQklp0Z' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-fields',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\UpdateFieldController@sync',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\UpdateFieldController@sync',
        'as' => 'nova.api.generated::0dMjJ6eGgTQklp0Z',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::M6bTitlJ2QPyLoyz' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/creation-pivot-fields/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CreationPivotFieldController@sync',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CreationPivotFieldController@sync',
        'as' => 'nova.api.generated::M6bTitlJ2QPyLoyz',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::KDOt1l08EyYhHw2n' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-pivot-fields/{relatedResource}/{relatedResourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\UpdatePivotFieldController@sync',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\UpdatePivotFieldController@sync',
        'as' => 'nova.api.generated::KDOt1l08EyYhHw2n',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::9cgKw5zo9pdFiB8N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/download/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldDownloadController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldDownloadController',
        'as' => 'nova.api.generated::9cgKw5zo9pdFiB8N',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::MrOaChEUeNSgb6Au' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/field/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FieldDestroyController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FieldDestroyController',
        'as' => 'nova.api.generated::MrOaChEUeNSgb6Au',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::Q8sZhchsaz8DrVOy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/{relatedResource}/{relatedResourceId}/field/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\PivotFieldDestroyController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\PivotFieldDestroyController',
        'as' => 'nova.api.generated::Q8sZhchsaz8DrVOy',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::xvkBuDxh4BAPmVUX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/dashboards/{dashboard}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardController',
        'as' => 'nova.api.generated::xvkBuDxh4BAPmVUX',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::h33dO5IlXRY47snC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/dashboards/cards/{dashboard}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardCardController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardCardController',
        'as' => 'nova.api.generated::h33dO5IlXRY47snC',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::4tbKxYGeLFsT56Yt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/nova-notifications',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\NotificationIndexController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\NotificationIndexController',
        'as' => 'nova.api.generated::4tbKxYGeLFsT56Yt',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::xN1UE3sowAfaC7Fc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/nova-notifications/read-all',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\NotificationReadAllController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\NotificationReadAllController',
        'as' => 'nova.api.generated::xN1UE3sowAfaC7Fc',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::rHHIgaqpOZSIqFaP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/nova-notifications/{notification}/read',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\NotificationReadController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\NotificationReadController',
        'as' => 'nova.api.generated::rHHIgaqpOZSIqFaP',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::0vE3vN5NhWxDGUzv' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/nova-notifications/{notification}/delete',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\NotificationDeleteController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\NotificationDeleteController',
        'as' => 'nova.api.generated::0vE3vN5NhWxDGUzv',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::0gOpmejcmD2yhLfT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/actions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@index',
        'as' => 'nova.api.generated::0gOpmejcmD2yhLfT',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::6YODrkvT3pfPIPV0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/action',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@store',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@store',
        'as' => 'nova.api.generated::6YODrkvT3pfPIPV0',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::R4AeEoY3TFlIMzcn' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'nova-api/{resource}/action',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@sync',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ActionController@sync',
        'as' => 'nova.api.generated::R4AeEoY3TFlIMzcn',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::9zVdBnsNiFvNKvmK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/filters',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\FilterController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\FilterController',
        'as' => 'nova.api.generated::9zVdBnsNiFvNKvmK',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::YYqUnQYkGLva398a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lenses',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensController@index',
        'as' => 'nova.api.generated::YYqUnQYkGLva398a',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::kmJFWql4U8C6DKyU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensController@show',
        'as' => 'nova.api.generated::kmJFWql4U8C6DKyU',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::Q7OW4HuMOrGwCgVJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/count',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceCountController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceCountController',
        'as' => 'nova.api.generated::Q7OW4HuMOrGwCgVJ',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::zf496dXJk1TdhrFK' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceDestroyController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceDestroyController',
        'as' => 'nova.api.generated::zf496dXJk1TdhrFK',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::2LJG8bG8up5Qy5mV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/force',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceForceDeleteController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceForceDeleteController',
        'as' => 'nova.api.generated::2LJG8bG8up5Qy5mV',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::kyC6Vs0anXLuK054' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/restore',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceRestoreController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensResourceRestoreController',
        'as' => 'nova.api.generated::kyC6Vs0anXLuK054',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::9DX10gdWreLz7s8x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/actions',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@index',
        'as' => 'nova.api.generated::9DX10gdWreLz7s8x',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::kIXxvz9XwAzSXhhm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/action',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@store',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@store',
        'as' => 'nova.api.generated::kIXxvz9XwAzSXhhm',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::v5vsfkoZmdukxDbd' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/action',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@sync',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensActionController@sync',
        'as' => 'nova.api.generated::v5vsfkoZmdukxDbd',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::W6XWN7MTqQdu9vYI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/filters',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensFilterController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensFilterController@index',
        'as' => 'nova.api.generated::W6XWN7MTqQdu9vYI',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::J17gnoLXdj1a5UwX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DashboardMetricController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DashboardMetricController',
        'as' => 'nova.api.generated::J17gnoLXdj1a5UwX',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::CLlWYnDwOP7XzNW6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/metrics',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@index',
        'as' => 'nova.api.generated::CLlWYnDwOP7XzNW6',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::Dpq2MjTcd0s5kTjR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MetricController@show',
        'as' => 'nova.api.generated::Dpq2MjTcd0s5kTjR',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::9jlB5kKYbwXroZyU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\DetailMetricController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\DetailMetricController',
        'as' => 'nova.api.generated::9jlB5kKYbwXroZyU',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::KJMA6V05vIJi6VcB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/metrics',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@index',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@index',
        'as' => 'nova.api.generated::KJMA6V05vIJi6VcB',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::B9bzxMHZ1hgD6uOj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/metrics/{metric}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@show',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensMetricController@show',
        'as' => 'nova.api.generated::B9bzxMHZ1hgD6uOj',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::YLneb3PVYAk6ozuT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/cards',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\CardController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\CardController',
        'as' => 'nova.api.generated::YLneb3PVYAk6ozuT',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::hWq1YNEoukCDRNLE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/lens/{lens}/cards',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LensCardController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LensCardController',
        'as' => 'nova.api.generated::hWq1YNEoukCDRNLE',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::vTVaacbSPiR39txQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/relate-authorization',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\RelatableAuthorizationController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\RelatableAuthorizationController',
        'as' => 'nova.api.generated::vTVaacbSPiR39txQ',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::OCHZMETR0b7Z1W6n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/soft-deletes',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\SoftDeleteStatusController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\SoftDeleteStatusController',
        'as' => 'nova.api.generated::OCHZMETR0b7Z1W6n',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::YDXAoTH6ZuWWR6DH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceIndexController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceIndexController',
        'as' => 'nova.api.generated::YDXAoTH6ZuWWR6DH',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::yVLkI89v5gI3qo8m' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/search',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceSearchController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceSearchController',
        'as' => 'nova.api.generated::yVLkI89v5gI3qo8m',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::xhJSlR1uv6fZk5wH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/count',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceCountController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceCountController',
        'as' => 'nova.api.generated::xhJSlR1uv6fZk5wH',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::1p5kOhPhzQ7U46dG' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/detach',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDetachController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDetachController',
        'as' => 'nova.api.generated::1p5kOhPhzQ7U46dG',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::kei1B1QPjhhL7mPf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'nova-api/{resource}/restore',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceRestoreController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceRestoreController',
        'as' => 'nova.api.generated::kei1B1QPjhhL7mPf',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::6JwzCwa4wY91nGEN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}/force',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceForceDeleteController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceForceDeleteController',
        'as' => 'nova.api.generated::6JwzCwa4wY91nGEN',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::V8OkbEhbZkGBqbLj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceShowController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceShowController',
        'as' => 'nova.api.generated::V8OkbEhbZkGBqbLj',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::RfbtS6N7R1788tVM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/preview',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourcePreviewController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourcePreviewController',
        'as' => 'nova.api.generated::RfbtS6N7R1788tVM',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::PREF3NRyO9Dl1Mw8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/peek',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourcePeekController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourcePeekController',
        'as' => 'nova.api.generated::PREF3NRyO9Dl1Mw8',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::00R4xUyGw8P1rQuH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceStoreController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceStoreController',
        'as' => 'nova.api.generated::00R4xUyGw8P1rQuH',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::UzxEiOQkd602COLp' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceUpdateController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceUpdateController',
        'as' => 'nova.api.generated::UzxEiOQkd602COLp',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::Sqde2mArU2N8sNca' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'nova-api/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDestroyController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceDestroyController',
        'as' => 'nova.api.generated::Sqde2mArU2N8sNca',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::b91usZw97KtK6R3Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/associatable/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\AssociatableController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\AssociatableController',
        'as' => 'nova.api.generated::b91usZw97KtK6R3Y',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::GIguBqoeJR2KQ6Tc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/attachable/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\AttachableController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\AttachableController',
        'as' => 'nova.api.generated::GIguBqoeJR2KQ6Tc',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::rx7GWEhyo48QIFUs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'nova-api/{resource}/morphable/{field}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MorphableController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MorphableController',
        'as' => 'nova.api.generated::rx7GWEhyo48QIFUs',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::cNKMGj06iZJfQWtJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/attach/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResourceAttachController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResourceAttachController',
        'as' => 'nova.api.generated::cNKMGj06iZJfQWtJ',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::yw3SpYbcyCy3H63S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/update-attached/{relatedResource}/{relatedResourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\AttachedResourceUpdateController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\AttachedResourceUpdateController',
        'as' => 'nova.api.generated::yw3SpYbcyCy3H63S',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.api.generated::nJkQQ8VZHnPuoOzF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'nova-api/{resource}/{resourceId}/attach-morphed/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 'nova:api',
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\MorphedResourceAttachController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\MorphedResourceAttachController',
        'as' => 'nova.api.generated::nJkQQ8VZHnPuoOzF',
        'namespace' => NULL,
        'prefix' => 'nova-api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::huN4oJmQLipHpxul' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::huN4oJmQLipHpxul',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9PBE3EsS99xDsq74' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::9PBE3EsS99xDsq74',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@showLoginForm',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@showLoginForm',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.pages.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/login',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@login',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@login',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/logout',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Laravel\\Nova\\Http\\Middleware\\HandleInertiaRequests',
          2 => 'Laravel\\Nova\\Http\\Middleware\\DispatchServingNovaEvent',
          3 => 'Laravel\\Nova\\Http\\Middleware\\BootTools',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@logout',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\LoginController@logout',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/password/reset',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.pages.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/password/email',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/password/reset/{token}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@showResetForm',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.pages.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'administrator/password/reset',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@reset',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\ResetPasswordController@reset',
        'namespace' => NULL,
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
        'as' => 'nova.password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.403' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/403',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Laravel\\Nova\\Http\\Middleware\\HandleInertiaRequests',
          2 => 'Laravel\\Nova\\Http\\Middleware\\DispatchServingNovaEvent',
          3 => 'Laravel\\Nova\\Http\\Middleware\\BootTools',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\Error403Controller@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\Error403Controller',
        'as' => 'nova.pages.403',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.404' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/404',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
          1 => 'Laravel\\Nova\\Http\\Middleware\\HandleInertiaRequests',
          2 => 'Laravel\\Nova\\Http\\Middleware\\DispatchServingNovaEvent',
          3 => 'Laravel\\Nova\\Http\\Middleware\\BootTools',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\Error404Controller@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\Error404Controller',
        'as' => 'nova.pages.404',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\HomeController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\HomeController',
        'as' => 'nova.pages.home',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'administrator/dashboard',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'as' => 'nova.pages.dashboard',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/administrator/',
        'status' => 302,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.dashboard.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/dashboards/{name}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\DashboardController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\DashboardController',
        'as' => 'nova.pages.dashboard.custom',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceIndexController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceIndexController',
        'as' => 'nova.pages.index',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/new',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceCreateController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceCreateController',
        'as' => 'nova.pages.create',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/{resourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceDetailController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceDetailController',
        'as' => 'nova.pages.detail',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/{resourceId}/edit',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceUpdateController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceUpdateController',
        'as' => 'nova.pages.edit',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.replicate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/{resourceId}/replicate',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceReplicateController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\ResourceReplicateController',
        'as' => 'nova.pages.replicate',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.lens' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/lens/{lens}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\LensController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\LensController',
        'as' => 'nova.pages.lens',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.attach' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/{resourceId}/attach/{relatedResource}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\AttachableController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\AttachableController',
        'as' => 'nova.pages.attach',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'nova.pages.edit-attached' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'administrator/resources/{resource}/{resourceId}/edit-attached/{relatedResource}/{relatedResourceId}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'nova',
          1 => 'Laravel\\Nova\\Http\\Middleware\\Authenticate',
          2 => 'Laravel\\Nova\\Http\\Middleware\\Authorize',
        ),
        'uses' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\AttachedResourceUpdateController@__invoke',
        'controller' => 'Laravel\\Nova\\Http\\Controllers\\Pages\\AttachedResourceUpdateController',
        'as' => 'nova.pages.edit-attached',
        'namespace' => 'Laravel\\Nova\\Http\\Controllers',
        'prefix' => '/administrator',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nOmKJxJVAhh3MwQA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006000000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::nOmKJxJVAhh3MwQA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wm4LXXXi6QBeQj7k' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:124:"function (){
    if (\\auth()->user()) return \\redirect()->route(\'dashboard\');
    else return \\redirect()->route(\'login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006020000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Wm4LXXXi6QBeQj7k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@index',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'createClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/client-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@createClient',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@createClient',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'createClient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'searchClient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/client-search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@searchClient',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@searchClient',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'searchClient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'documentSearch' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/functions/document_search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@documentSearch',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@documentSearch',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'documentSearch',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/ustawienia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@settings',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@settings',
        'namespace' => NULL,
        'prefix' => 'dashboard/ustawienia',
        'where' => 
        array (
        ),
        'as' => 'settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/ustawienia/worker-create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@workers',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@workers',
        'namespace' => NULL,
        'prefix' => 'dashboard/ustawienia',
        'where' => 
        array (
        ),
        'as' => 'workers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'save.sign' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/ustawienia/save-sign',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@saveSign',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@saveSign',
        'namespace' => NULL,
        'prefix' => 'dashboard/ustawienia',
        'where' => 
        array (
        ),
        'as' => 'save.sign',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submit.visual' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/ustawienia/submit-visual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@submitVisual',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@submitVisual',
        'namespace' => NULL,
        'prefix' => 'dashboard/ustawienia',
        'where' => 
        array (
        ),
        'as' => 'submit.visual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rodo.reset' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/ustawienia/rodo-reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@rodoReset',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@rodoReset',
        'namespace' => NULL,
        'prefix' => 'dashboard/ustawienia',
        'where' => 
        array (
        ),
        'as' => 'rodo.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'send.answers' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/ustawienia/send-answers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@sendAnswers',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@sendAnswers',
        'namespace' => NULL,
        'prefix' => 'dashboard/ustawienia',
        'where' => 
        array (
        ),
        'as' => 'send.answers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'news' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/news/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\NewsPageController@index',
        'controller' => 'App\\Http\\Controllers\\NewsPageController@index',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'news',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'treatment.create.add' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/functions/treatment-create-add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\DashboardPageController@treatmentCreate',
        'controller' => 'App\\Http\\Controllers\\DashboardPageController@treatmentCreate',
        'namespace' => NULL,
        'prefix' => 'dashboard/functions',
        'where' => 
        array (
        ),
        'as' => 'treatment.create.add',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'clients' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:55:"function (){
        return \\view(\'client_page\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006120000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'clients',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dobav.zabiegKlient' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/add-procedure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:57:"function (){
        return \\view(\'add_procedure\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006140000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'dobav.zabiegKlient',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.procedure' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/edit-procedure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:58:"function (){
        return \\view(\'edit_procedure\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006170000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'edit.procedure',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7T6a4LROZ8yoyQoQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/usrimage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:56:"function () {
    return \\view(\'ustawienia.usrimage\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006040000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::7T6a4LROZ8yoyQoQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xT7BwTpyn79UYJoA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/editaccount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:59:"function () {
    return \\view(\'ustawienia.editaccount\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006190000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xT7BwTpyn79UYJoA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hCTAGj4c1DWQvOO7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/usrsignature',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:60:"function () {
    return \\view(\'ustawienia.usrsignature\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000061b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hCTAGj4c1DWQvOO7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S9LFyg9DrywKq0js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/rodoreset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:57:"function () {
    return \\view(\'ustawienia.rodoreset\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000061d0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::S9LFyg9DrywKq0js',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AO5Qet5EnE56Nelf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/document_kartaklienta_edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:74:"function () {
    return \\view(\'ustawienia.document_kartaklienta_edit\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000061f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::AO5Qet5EnE56Nelf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jZzrxOHcplpfsvl2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/treatment_template',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:66:"function () {
    return \\view(\'ustawienia.treatment_template\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006210000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jZzrxOHcplpfsvl2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::00OxKPfKhOHB3Dag' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/treatment_create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:64:"function () {
    return \\view(\'ustawienia.treatment_create\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006230000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::00OxKPfKhOHB3Dag',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'treatment.question' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/treatment_question',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'check.getParameters',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:66:"function () {
    return \\view(\'ustawienia.treatment_question\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006250000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'treatment.question',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RIralLXZv9AHkrtB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'functions/product_create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:62:"function () {
    return \\view(\'ustawienia.product_create\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000006270000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RIralLXZv9AHkrtB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
