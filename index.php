require_once('./classes/router.php');

require_once('./controller/App.php');

//routes must be here

Router::set('/index.php', "App:home");

Router::set('/about', "App:about");


Router::validRoutes();
