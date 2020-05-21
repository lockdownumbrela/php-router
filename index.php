require_once('./classes/router.php');

require_once('./controller/App.php');

//routes must be here

Router::set('/index.php', "App:home");

Router::set('/about', "App:about");

Router::set('/home', "App:home1");

Router::set('/form', "App:formHandler");


Router::validRoutes();
