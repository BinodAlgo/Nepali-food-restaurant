CREATE DATABASE clarycandle;

CREATE USER 'gitaganesh'@'localhost' IDENTIFIED BY 'gitaganesh@123';

GRANT ALL PRIVILEGES ON clarycandle.* TO 'gitaganesh'@'localhost';

FLUSH PRIVILEGES;

USE clarycandle;

-- Tables
CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dish_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    delivery_address TEXT NOT NULL,
    special_instructions TEXT,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    people INT NOT NULL
);

CREATE TABLE deliveries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    postcode VARCHAR(10) NOT NULL,
    is_available BOOLEAN NOT NULL DEFAULT 0,
    UNIQUE(postcode)
);
INSERT INTO deliveries (postcode, is_available) VALUES 
('10001', 1), 
('10002', 0), 
('20001', 1), 
('30000', 0),
('40000', 1),
('50000', 1),
('60000', 0),
('70000', 1),
('80000', 0),
('90000', 1);



CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

