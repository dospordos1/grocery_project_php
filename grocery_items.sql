-- Create database
CREATE DATABASE grocery_store;
USE grocery_store;

-- Create table for grocery items
CREATE TABLE grocery_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100) NOT NULL,
    category VARCHAR(50),
    quantity INT DEFAULT 0,
    price DECIMAL(10,2),
    expiry_date DATE,
    supplier VARCHAR(100)
);

-- Insert sample records
INSERT INTO grocery_items (item_name, category, quantity, price, expiry_date, supplier)
VALUES 
('Milk', 'Dairy', 50, 45.00, '2025-12-01', 'Nestle Philippines'),
('Eggs', 'Poultry', 200, 7.00, '2025-11-30', 'San Miguel Farms'),
('Apples', 'Fruits', 120, 25.00, '2025-11-15', 'FreshHarvest Co.'),
('Rice', 'Grains', 500, 42.00, NULL, 'Golden Grain'),
('Toothpaste', 'Personal Care', 75, 60.00, '2027-01-01', 'Unilever PH');
