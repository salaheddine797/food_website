// Function to handle Menu


   
// Function to handle Menu


    // Menu items array
    document.addEventListener("DOMContentLoaded", () => {
    // Menu data
    const menuData = {
        "pizza": [
            {
                "name": "La Rossa",
                "description": "Sauce tomate, ail, basilic (sans fromage)",
                "price": "15 $ / 24 $",
                "image": "image/pizza.jpg"
            },
            {
                "name": "Burrata",
                "description": "Sauce tomate, burrata, ail, basilic",
                "price": "18 $ / 28 $",
                "image": "image/buratta.jpeg"
            },
            {
                "name": "Pizza hut",
                "description": "Sauce tomate, mozzarella fraîche, basilic",
                "price": "17 $ / 26 $",
                "image": "image/pizza_hut.jpg"
            },
            {
                "name": "Pepperoni",
                "description": "Sauce tomate, mozzarella, pepperoni",
                "price": "19 $ / 29 $",
                "image": "image/pepperoni.jpg"
            }
        ],
        "burgers": [
            {
                "name": "Burger Classique",
                "description": "Steak haché, laitue, tomate, oignon, fromage",
                "price": "12 $",
                "image": "image/buger.jpg"
            },
            {
                "name": "Burger BBQ",
                "description": "Steak haché, sauce BBQ, rondelles d'oignon croustillantes",
                "price": "14 $",
                "image": "image/burger_bbq.jpg"
            },
            {
                "name": "Cheeseburger",
                "description": "Steak haché, double fromage cheddar, cornichons",
                "price": "13 $",
                "image": "image/cheese_brg.jpg"
            },
            {
                "name": "Burger Végétarien",
                "description": "Galette végétarienne grillée, laitue, tomate, avocat",
                "price": "11 $",
                "image": "image/burger_vege.jpg"
            }
        ],
        "snacks": [
            {
                "name": "Frites",
                "description": "Frites dorées et croustillantes",
                "price": "5 $",
                "image": "image/frites.jpg"
            },
            {
                "name": "Rondelles d'Oignon",
                "description": "Rondelles d'oignon enrobées de pâte à bière",
                "price": "6 $",
                "image": "image/onions.jpg"
            },
            {
                "name": "Bâtonnets de Mozzarella",
                "description": "Bâtonnets de mozzarella frits avec sauce marinara",
                "price": "7 $",
                "image": "image/Bâtonnets_Mozzarella.jpg"
            },
            {
                "name": "Ailes de Poulet",
                "description": "Ailes de poulet épicées servies avec une sauce ranch",
                "price": "9 $",
                "image": "image/poulet.jpg"
            }
        ],
        "salads": [
            {
                "name": "Salade César",
                "description": "Laitue romaine, croûtons, sauce César",
                "price": "9 $",
                "image": "image/salade_cesar.jpg"
            },
            {
                "name": "Salade Grecque",
                "description": "Tomates, concombres, feta, olives",
                "price": "10 $",
                "image": "image/salade_grec.jpg"
            },
            {
                "name": "Salade Cobb",
                "description": "Poulet, avocat, œuf, bacon, fromage bleu",
                "price": "12 $",
                "image": "image/salade_cobb.jpg"
            },
            {
                "name": "Salade Arménienne",
                "description": "Mélange de légumes verts, carottes, tomates, concombres",
                "price": "8 $",
                "image": "image/salade_arm.jpg"
            }
        ],
        "drinks": [
            {
                "name": "Soda",
                "description": "Choisissez entre Coca, Pepsi, Sprite",
                "price": "3 $",
                "image": "image/soda.jpg"
            },
            {
                "name": "Thé Glacé",
                "description": "Thé glacé fraîchement infusé",
                "price": "4 $",
                "image": "image/the_glace.jpg"
            },
            {
                "name": "Limonade",
                "description": "Limonade fraîchement pressée",
                "price": "4 $",
                "image": "image/limonade.jpg"
            },
            {
                "name": "Milkshake",
                "description": "Milkshake à la vanille, chocolat ou fraise",
                "price": "6 $",
                "image": "image/milkshake.jpg"
            }
        ]
    }
    

    // References
    const tabButtons = document.querySelectorAll(".tab-button");
    const menuItemsContainer = document.getElementById("menu-items");

    // Function to render menu items
    function renderMenuItems(category) {
        // Clear the container
        menuItemsContainer.innerHTML = "";

        // Get the menu items for the selected category
        const items = menuData[category];

        // Generate HTML for the items
        items.forEach(item => {
            const menuItem = document.createElement("div");
            menuItem.classList.add("menu-item");

            menuItem.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <div>
                    <h3>${item.name}</h3>
                    <p>${item.description}</p>
                    <p class="price">${item.price}</p>
                </div>
            `;

            // Append to container
            menuItemsContainer.appendChild(menuItem);
        });
    }

    // Event listener for tabs
    tabButtons.forEach(button => {
        button.addEventListener("click", () => {
            // Remove active class from all buttons
            tabButtons.forEach(btn => btn.classList.remove("active"));
            button.classList.add("active");

            // Get the selected category
            const category = button.getAttribute("data-tab");

            // Render menu items for the selected category
            renderMenuItems(category);
        });
    });

    // Render the initial category (Pizza)
    renderMenuItems("pizza");
});


//Gallery

    const gallery = document.getElementById("gallery");
    const lightbox = document.getElementById("lightbox");
    const lightboxImage = document.getElementById("lightboxImage");
    const lightboxDescription = document.getElementById("lightboxDescription");
    const closeBtn = document.getElementById("closeBtn");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    // Updated array with image sources and descriptions
    const galleryImages = [
        { imgSrc: "image/gallary_1.jpg", description: "Delicious Food Item 1" },
        { imgSrc: "image/Hot_dog.jpg", description: "Delicious Food Item 2" },
        { imgSrc: "image/gallary_3.jpg", description: "Delicious Food Item 3" },
        { imgSrc: "image/gallary_4.jpg", description: "Delicious Food Item 4" },
        { imgSrc: "image/gallary_5.jpg", description: "Delicious Food Item 5" },
        { imgSrc: "image/gallary_6.jpg", description: "Delicious Food Item 6" },
        { imgSrc: "image/biryani.webp", description: "Delicious Food Item 1" },
        { imgSrc: "image/pizza.jpg", description: "Delicious Food Item 2" },
        { imgSrc: "image/sandwich.jpg", description: "Delicious Food Item 3" },
        { imgSrc: "image/Spanchi.jpg", description: "Delicious Food Item 3" },
        { imgSrc: "image/lasagna.webp", description: "Delicious Food Item 3" },
        { imgSrc: "image/ice_cream.jpg", description: "Delicious Food Item 3" },
        { imgSrc: "image/juse.jpg", description: "Delicious Food Item 3" },
        { imgSrc: "image/tacos.jpg", description: "Delicious Food Item 3" }
    ];
    
    // Dynamically generate gallery items
    galleryImages.forEach((item) => {
        const img = document.createElement("img");
        img.src = item.imgSrc;
        img.alt = item.description;
        img.addEventListener("click", () => {
            lightbox.style.display = "flex"; // Show lightbox
            lightboxImage.src = item.imgSrc; // Set clicked image in lightbox
            lightboxDescription.textContent = item.description; // Set description
        });
        gallery.appendChild(img);
    });
    
    let currentIndex = 0;
const imagesPerPage = 6; // Show 6 images at a time (2 rows of 3)

// Function to render the gallery
function renderGallery() {
    gallery.innerHTML = ""; // Clear existing images
    const endIndex = Math.min(currentIndex + imagesPerPage, galleryImages.length);
    for (let i = currentIndex; i < endIndex; i++) {
        const img = document.createElement("img");
        img.src = galleryImages[i].imgSrc;
        img.alt = galleryImages[i].description;

        // Add lightbox functionality
        img.addEventListener("click", () => {
            lightbox.style.display = "flex"; // Show lightbox
            lightboxImage.src = galleryImages[i].imgSrc; // Set clicked image in lightbox
            lightboxDescription.textContent = galleryImages[i].description; // Set description
        });

        gallery.appendChild(img);
    }

    // Disable navigation buttons at boundaries
    prevBtn.disabled = currentIndex === 0;
    nextBtn.disabled = currentIndex + imagesPerPage >= galleryImages.length;
}

// Event listeners for navigation buttons
prevBtn.addEventListener("click", () => {
    if (currentIndex > 0) {
        currentIndex -= imagesPerPage;
        renderGallery();
    }
});

nextBtn.addEventListener("click", () => {
    if (currentIndex + imagesPerPage < galleryImages.length) {
        currentIndex += imagesPerPage;
        renderGallery();
    }
});

// Initial render
renderGallery();
    
    // Close lightbox when close button is clicked
    closeBtn.addEventListener("click", () => {
        lightbox.style.display = "none";
    });

    // Close lightbox when clicked outside the image
    lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) {
            lightbox.style.display = "none";
        }
    });

