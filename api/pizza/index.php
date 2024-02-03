<?php

// Contrôleur pizzaController.php

// Simuler une base de données de pizzas
$pizzas = array(
    array(
        'id' => 1,
        'title' => 'Barbecue',
        'garniture' => 'La garniture',
        'image' => 'http://localhost/static/images/pizzas/pizza-bbq.jpg',
        'price' => 6.5
    ),
    array(
        'id' => 2,
        'title' => 'Hawaï',
        'garniture' => 'La garniture',
        'image' => 'http://localhost/static/images/pizzas/pizza-hawai.jpg',
        'price' => 9.5
    ),
    array(
        'id' => 3,
        'title' => 'Epinards',
        'garniture' => 'La garniture',
        'image' => 'http://localhost/static/images/pizzas/pizza-spinach.jpg',
        'price' => 8.5
    ),
    array(
        'id' => 4,
        'title' => 'Végétarienne',
        'garniture' => 'La garniture',
        'image' => 'http://localhost/static/images/pizzas/pizza-vegetable.jpg',
        'price' => 10.5
    )
);

// Envoi du contenu en tant que JSON
header('Content-Type: application/json');

// Vérification de la méthode de requête (GET)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode($pizzas);
} else {
    // Si la méthode de requête n'est pas autorisée
    http_response_code(405); // Méthode non autorisée
    echo json_encode(array('message' => 'Méthode non autorisée'));
}

?>
