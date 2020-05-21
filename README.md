# php-router

info: é uma classe static.

###Como usar?

O router é composto de uma classe com tres metodos.

1. Metodo set() - este metodo é onde deve-se setar a url.
   O metodo set tem duas variaveis - Router::set(url,controller);
   Ex: Router::set('/blog','Controller:blog');
   
2. Metodo showRoutes() - Usado apenas para teste no desenvolvimento da classe
   Ex:Router::showRoutes(); retorna um json com as rotas setadaas.
   
3. Metodo validRoutes() - Usado para retornar error no caso de uma rota invalida.
   Ex:Router::validRoutes(); - retorna um json com o erro 404.
   
