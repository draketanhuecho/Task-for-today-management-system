use App\Controllers\TaskController;

$routes->get('/', [TaskController::class, 'index']);
$routes->get('/tasks', [TaskController::class, 'listAll']);
$routes->get('/profile', [TaskController::class, 'profile']);
$routes->get('/about', [TaskController::class, 'about']);