

class PostController extends Controller {
    public function create($postData) {
        $name = trim($postData['name'] ?? '');
        $description = trim($postData['description'] ?? '');

        if (empty($name) || empty($description)) {
            http_response_code(400); 
            echo empty($name) ? 'Name is required.' : 'Description is required.';
            return;
        }

        $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $description = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');

       
        echo 'Post created successfully.';
    }
}
