<?php
    $host = "host = localhost";
    $port = "port = 5432";
    $dbname = "dbname = speedzadb";
    $credentials = "user = postgres password=enteryourpass";

    $db = pg_connect("$host $port $dbname $credentials");
    if (!$db)
        echo "Error Error \n";
    else
        echo "Connection successful \n";

    $droptable = "DROP TABLE typesofpizza";

    
    // $tableproduct_category = "CREATE TABLE product_category (
    //     productId SERIAL,
    //     categoryId SERIAL
    // )";
    $tableCategory = "CREATE TABLE Category (
        categoryId SERIAL PRIMARY KEY,
        categoryName VARCHAR (30)
    )";
    
    $tableProduct = "CREATE TABLE Product (
        productId SERIAL PRIMARY KEY,
        productPrice REAL NOT NULL,
        productDescription VARCHAR (100),
        productName VARCHAR (50) NOT NULL,
        productVegetarian BOOLEAN NOT NULL,
        categoryId SERIAL FOREIGN KEY REFERENCES Category(categoryId)
    )";
    $tableproduct_category = "CREATE TABLE Product_Category (
        productId SERIAL FOREIGN KEY REFERENCES Product(productId),
        categoryId SERIAL FOREIGN KEY REFERENCES Category(categoryId)
    )";
    $tableCustomer = "CREATE TABLE Customer (
        customerId SERIAL PRIMARY KEY,
        customerName VARCHAR (50) NOT NULL,
        customerEmail VARCHAR (50) NOT NULL UNIQUE,
        customerPhone BIGINT NOT NULL UNIQUE,
        customerPassword VARCHAR (16) NOT NULL
    )";
    $tableOrder = "CREATE TABLE Order (
        orderId SERIAL PRIMARY KEY,
        customerId SERIAL FOREIGN KEY REFERENCES Customer(customerId),
        subtotal REAL NOT NULL,
        itemCount INT NOT NULL
        
    )";
    $tableOrderDetails = "CREATE TABLE OrderDetails (
        productId SERIAL FOREIGN KEY REFERENCES Product(productId),
        orderId SERIAL FOREIGN KEY REFERENCES Order(orderId)
    )";
    // $tableShoppingCart = "CREATE TABLE Cart (
    //     cartId SERIAL PRIMARY KEY,
    //     productId SERIAL FOREIGN KEY REFERENCES Product(productId),
    //     orderDetailsId SERIAL FOREIGN KEY REFERENCES OrderDetails(orderDetailsId),
        
    // )";
    