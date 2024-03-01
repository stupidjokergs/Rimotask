CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL,
    referral_code VARCHAR(8),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE activations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mpesa_code VARCHAR(255) NOT NULL,
    time_of_payment TIME NOT NULL,
    date_of_payment DATE NOT NULL,
    phone_number VARCHAR(20) NOT NULL,
    username VARCHAR(255) NOT NULL
);
