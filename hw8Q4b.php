
$method = $_SERVER['REQUEST_METHOD'];
$url = rtrim($_SERVER['REQUEST_URI'], '/');
$urlParts = explode('/', $url);


if ($urlParts[1] == 'posts' && $method == 'POST') {
    $postController = new PostController();
    $postController->create($_POST); 
}
