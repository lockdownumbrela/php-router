require_once('./classes/router.php');

require_once('./controller/App.php');

//routes must be here
/*
$name =  "one:hello";

$nome = explode(":",$name);

//$obj = new $nome[0]();
$reflection = new ReflectionMethod($nome[0],$nome[1]);
$reflection->invoke(new $nome[0]);*/




Router::set('/index.php', "App:home");

Router::set('/about', "App:about");

Router::set('/home', "App:home1");

Router::set('/form', "App:formHandler");


Router::validRoutes();
