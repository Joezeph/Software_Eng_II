<?php

function connectToDB()
{
    $dsn = 'mysql:host=localhost;dbname=cyprent_app';
    $username = 'rebecca';
    $password = 'abc';

    try {

        return new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        header("Location: error.php?error=" . $e->getMessage());
        exit;
    }
}

function call_employees($db)
{
    $query_employees = 'SELECT * FROM employees';

    $employees = $db->query($query_employees);
    $employees = $employees->fetchAll();

    return $employees;
}

function call_rentals($db)
{
    $query_rentals = 'SELECT * FROM rentals';

    $rentals = $db->query($query_rentals);
    $rentals = $rentals->fetchAll();

    return $rentals;
}

function call_customers($db)
{
    $query_customers = 'SELECT * FROM customers
    LIMIT 20';

    $customers = $db->query($query_customers);
    $customers = $customers->fetchAll();

    return $customers;
}

function recent_rentals($db)
{
    $query = "SELECT 
    rentals.*, 
    customers.name AS customer_name,
    vehicles.make AS vehicle_make,
    vehicles.license_plate
FROM rentals
JOIN customers ON rentals.customer_id = customers.id
JOIN vehicles ON rentals.vehicle_id = vehicles.id
ORDER BY rentals.rented_from DESC
LIMIT 5";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll();

    return $results;
}

function rental_history($db)
{
    $query = "SELECT 
    rentals.*, 
    customers.name AS customer_name,
    employees.name AS employee_name,
    payment_methods.type AS payment_method,
    vehicles.make AS vehicle_make,
    vehicles.license_plate
FROM rentals
JOIN customers ON rentals.customer_id = customers.id
JOIN vehicles ON rentals.vehicle_id = vehicles.id
JOIN employees ON rentals.employee_id = employees.id
JOIN payment_methods ON rentals.payment_method_id = payment_methods.id
ORDER BY rentals.rented_from DESC
LIMIT 10";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll();

    return $results;
}

function call_acces_logs($db)
{
    $query = "SELECT al.id, al.employee_id,
    e.name AS employee_name,
    al.action, al.description, al.ip_address, al.user_agent, al.updated_at
  FROM 
    access_logs al
  JOIN 
    employees e ON al.employee_id = e.id
  ORDER BY 
    al.updated_at DESC
  LIMIT 50";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll();

    return $results;
}
