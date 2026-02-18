<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "restaurant_orders"; // Replace with your database name

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $quantity = $_POST['quantity'];
    $dish_name = $_POST['dish_name'];

    // Create database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the database
    $sql = "INSERT INTO orders (name, email, phone, dish_name, quantity) 
            VALUES ('$name', '$email', '$phone', '$dish_name', $quantity)";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Order placed successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "');</script>";
    }

    // Close connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section id="Home">
        <nav>
            <div class="logo">
                <img src="image/logo.png" alt="">
            </div>

            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="#About">A propos</a></li>
                <li><a href="#Menu">Menu</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#Review">Avis</a></li>

                <li><a href="admin.html
                    ">Admin</a></li>
                <li><a href="#Order">Commandez</a></li>
            </ul>

        </nav>

        <div class="main">

            <div class="men_text">
                <h1>Obtenez des <span>Aliments Frais</span><br>de manière simple</h1>
            </div>

            <div class="main_image">
                <img src="image/main_img.png">
            </div>

        </div>

        <p>
            Bienvenue sur notre site de restaurant où vous pouvez savourer des plats frais préparés avec amour. Notre menu varié offre quelque chose pour tout le monde, que vous préfériez les classiques ou les innovations culinaires.
        </p>

        <div class="main_btn">
            <a href="#Order">Commandez maintenant</a>
            <i class="fa-solid fa-angle-right"></i>
        </div>

    </section>



    <!--About-->

    <div class="about" id="About">
        <div class="about_main">

            <div class="image">
                <img src="image/Food-Plate.png">
            </div>

            <div class="about_text">
                <h1><span>A propos</span>de nous</h1>
                <h3>Pourquoi nous choisir?</h3>
                <p>
                    Notre restaurant se distingue par la qualité de ses ingrédients et le savoir-faire de ses chefs. Nous nous efforçons de créer une expérience culinaire inoubliable à chaque visite, avec un service impeccable et une ambiance accueillante.
                </p>
            </div>

        </div>

        <a href="#Order" class="about_btn">Commandez maintenant</a>

    </div>

    <!-- Menu -->


    <!--Menu-->
    <div class="menu-container">
        <h1 class="menu-title">Notre <span>Menu</span></h1>
        <div class="menu-tabs">
            <button class="tab-button active" data-tab="pizza">Pizza</button>
            <button class="tab-button" data-tab="burgers">Burgers</button>
            <button class="tab-button" data-tab="snacks">Snacks & Sides</button>
            <button class="tab-button" data-tab="salads">Salades</button>
            <button class="tab-button" data-tab="drinks">Boissons</button>
        </div>
        <div class="menu-content">
            <div id="menu-items" class="menu-items"></div>
        </div>
    </div>





    <!--Order-->
    <div class="order" id="Order">
        <h1><span>Commandez</span> Maintenant</h1>
        <div class="order_main">
            <div class="order_image">
                <img src="image/order_image.png" alt="Order Image">
            </div>
            <form action="index.php" method="POST">
                <div class="input">
                    <p>Nom:</p>
                    <input type="text" name="name" placeholder="Votre nom" required>
                </div>
                <div class="input">
                    <p>Email:</p>
                    <input type="email" name="email" placeholder="Votre email" required>
                </div>
                <div class="input">
                    <p>Numéro de téléphone:</p>
                    <input type="text" name="phone" placeholder="Votre numéro de téléphone" required>
                </div>
                <div class="input">
                    <p>Combien de commandes?</p>
                    <input type="number" name="quantity" placeholder="Nombre de commandes" required>
                </div>
                <div class="input">
                    <p>Votre commande:</p>
                    <input type="text" name="dish_name" placeholder="Détails de la commande" required>
                </div>
                <button type="submit" class="order_btn">Commandez</button>
            </form>
        </div>
    </div>

    <!--Gallery-->

    <div id="gallery-section">
    <h1 class="gallery-title">Gallery</h1>
    <div class="gallery-navigation">
        <button id="prev-btn" class="nav-btn">❮</button>
        <div id="gallery" class="gallery"></div>
        <button id="next-btn" class="nav-btn">❯</button>
    </div>
</div>



    <!-- Lightbox with description -->
    <div class="lightbox" id="lightbox">
        <span class="close" id="closeBtn">&times;</span>
        <img id="lightboxImage" src="" alt="Selected Food">
        <p id="lightboxDescription"></p> <!-- Description below the image -->
    </div>


    <!--Review-->

    <div class="review" id="Review">
        <h1>Avis<span>Client</span></h1>

        <div class="review_box">
            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_1.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        "Une expérience incroyable du début à la fin. La nourriture est délicieuse, le service est impeccable, et l'atmosphère est très accueillante. Je recommande vivement ce restaurant à tous mes amis et ma famille."
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_2.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        "Le meilleur restaurant que j'ai visité cette année ! Les plats sont non seulement délicieux, mais aussi magnifiquement présentés. Le personnel est attentionné et l'ambiance est parfaite pour une soirée entre amis ou en famille. Je reviendrai sans hésiter !"
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_3.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        "Nous avons adoré notre dîner au restaurant. Les ingrédients sont frais et les recettes sont inventives, ce qui rend chaque bouchée unique. Le chef mérite des éloges pour sa créativité et son talent. Un endroit idéal pour célébrer des occasions spéciales ou tout simplement se faire plaisir."
                    </p>

                </div>

            </div>

            <div class="review_card">

                <div class="review_profile">
                    <img src="image/review_4.png">
                </div>

                <div class="review_text">
                    <h2 class="name">John Deo</h2>

                    <div class="review_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <div class="review_social">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>

                    <p>
                        "Le meilleur restaurant que j'ai visité cette année ! Les plats sont non seulement délicieux, mais aussi magnifiquement présentés. Le personnel est attentionné et l'ambiance est parfaite pour une soirée entre amis ou en famille. Je reviendrai sans hésiter !"
                    </p>

                </div>

            </div>

        </div>

    </div>



    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <h2>Location</h2>
                <p>El Jadida</p>
                <p>Casablanca</p>
                <p>Rabat</p>
                <p>Tanger</p>
                <p>Agadir</p>
            </div>

            <div class="footer_tag">
                <h2>Liens</h2>
                <p><a href="#Home">Home</a> </p>
                <p><a href="#About">A propos</a> </p>
                <p><a href="#Menu">Menu</a> </p>
                <p><a href="#Gallary">Gallery</a> </p>
                <p><a href="#Order">Commande</a> </p>
            </div>

            <div class="footer_tag">
                <h2>Contact</h2>
                <p>0634664335</p>
                <p>0631020140</p>
                <p>iseem13@gmail.com</p>
                <p>salahedd.r77@gmail.com</p>
            </div>

            <div class="footer_tag">
                <h2>Notre Service</h2>
                <p>Livraison Rapide</p>
                <p>Nourriture délicieuse</p>
                <p>24 x 7 Service</p>
            </div>

            <div class="footer_tag">
                <h2>Suivez Nous</h2>
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>

        </div>

        <p class="end">&copy; Designed by<span>SALAH EDDINE RAJAL </span> 2024</p>

    </footer>


    <script src="sciprt.js" defer></script>

</body>

</html>