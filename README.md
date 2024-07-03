<h1 align="center">E-commerce Website for Clothes Store</h1>

<p align="center">
  <img src="https://d.top4top.io/p_3101k3svy1.png" alt="E-commerce Logo">
</p>

<p align="center">
  <strong>A modern and responsive e-commerce platform for clothing stores.</strong>
</p>

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [Contact](#contact)

## Features
- **User Authentication**: Secure login and registration.
- **Product Management**: Add, edit, and delete products.
- **Shopping Cart**: Add products to cart and proceed to checkout.
- **Payment Gateway Integration**: Secure payment processing.
- **Responsive Design**: Optimized for all devices.

## Installation
1. **Clone the repository:**
   ```
   git clone https://github.com/KarimHossam362002/E-commerce.git
   
   ```
   
2.Navigate to the project directory:

```
cd E-commerce

```


3.Install dependencies:

```
composer install
npm install

```

4.Set up the environment file:

```
cp .env.example .env

```

5.Generate application key:

```
php artisan key:generate

```

6.Run migrations:

```
php artisan migrate

```

7.Start the development server:

```
php artisan serve

```


Usage

1.Visit the homepage:

Open your browser and go to http://localhost:8000.

2.Register or login:

Create a new account or login with existing credentials.

3.Explore products:

Browse through the various clothing categories and products.

4.Add to cart:

Select products and add them to your shopping cart.

5.Checkout:

Proceed to checkout and complete your purchase.

***Contributing***

Contributions are welcome! Please follow these steps to contribute:

1.Fork the repository.

2.Create a new branch (git checkout -b feature-branch).

3.Make your changes.

4.Commit your changes (git commit -m 'Add some feature').

5.Push to the branch (git push origin feature-branch).

6.Open a pull request.


***Contact***
Karim Hossam - LinkedIn

karim.h.elsayed02@gmail.com - Email


Project Link: https://github.com/KarimHossam362002/E-commerce

### Description
# Laravel E-Commerce Project

## Overview

This Laravel e-commerce project is a comprehensive online store solution that allows users to browse and purchase a wide range of products. The project is built using the Laravel framework and includes various models to handle categories, products, orders, user management, and store settings.

## Models

### Category
- Represents the categories of products available in the store.
- Each category has a name and can be associated with multiple products.

### Order
- Represents an order made by a customer.
- Contains details such as the customer's name, email, shipping address, and the products ordered with their quantities.

### OrderDetail
- Represents the details of a specific product in an order.
- Includes information such as the product's name, price, quantity, and any additional options selected by the customer.

### Product
- Represents a product available for sale in the store.
- Each product has a name, description, price, and can be associated with multiple categories and images.

### ProductColor
- Represents the different colors available for a product.
- Each product color has a name and can be associated with multiple product sizes.

### ProductColorSize
- Represents the combination of a product color and size available for purchase.
- Each product color size has a quantity available for sale.

### ProductImage
- Represents the images associated with a product.
- Each product image has a URL and can be associated with multiple products.

### ProductSize
- Represents the different sizes available for a product.
- Each product size has a name and can be associated with multiple product colors.

### Setting
- Represents the settings for the e-commerce store.
- Includes information such as the store name, contact information, and payment options.

### User
- Represents the users of the e-commerce store.
- Each user has a name, email, and password, and can have multiple addresses associated with their account.

### UserAddress
- Represents the addresses associated with a user account.
- Includes information such as the address line 1, address line 2, city, state, and postal code.

## Features

- **Product Catalog:** Browse and search for products by categories, colors, sizes, etc.
- **User Authentication:** User registration and login.
- **Order Management:** Manage customer orders, view order details, and track order status.
- **User Profile:** Manage user information and addresses.
- **Store Settings:** Configure store information and payment options.

