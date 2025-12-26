<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshMart Grocery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #2e7d32;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            background-color: #1b5e20;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .banner {
            background-image: url('Gro.jpg');
            background-size: cover;
            background-position: center;
            height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2em;
            font-weight: bold;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px;
        }
        .product-card {
            background: white;
            width: 200px;
            margin: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            text-align: center;
            padding: 15px;
        }
        .product-card img {
            width: 100%;
            border-radius: 8px;
        }
        .product-card h3 {
            margin: 10px 0 5px;
        }
        .product-card p {
            color: green;
            font-weight: bold;
        }
        .product-card button {
            background-color: #2e7d32;
            color: white;
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .product-card button:hover {
            background-color: #1b5e20;
        }
        footer {
            background-color: #2e7d32;
            color: white;
            text-align: center;
            padding: 10px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>FreshMart Grocery</h1>
    <p>Fresh & Healthy Groceries at Your Doorstep</p>
</header>

<nav>
    <a href="#">Home</a>
    <a href="#">Products</a>
    <a href="#">Offers</a>
    <a href="#">Contact</a>
</nav>

<div class="banner">
    Fresh Deals Everyday!
</div>

<section class="products">
    <div class="product-card">
        <img src="Apples.webp" alt="Apples">
        <h3>Fresh Apples</h3>
        <p>₹120 / kg</p>
        <button>Add to Cart</button>
    </div>
    <div class="product-card">
        <img src="Tomatoes.webp" alt="Tomatoes">
        <h3>Tomatoes</h3>
        <p>₹50 / kg</p>
        <button>Add to Cart</button>
    </div>
    <div class="product-card">
        <img src="Basmati Rice.jpg" alt="Rice">
        <h3>Basmati Rice</h3>
        <p>₹90 / kg</p>
        <button>Add to Cart</button>
    </div>
    <div class="product-card">
        <img src="Mango.jpg" alt="Mango">
        <h3>Mango</h3>
        <p>₹45 / kg</p>
        <button>Add to Cart</button>
    </div>
</section>

<footer>
    <p>&copy; 2025 FreshMart Grocery | All Rights Reserved</p>
</footer>

</body>
</html>
