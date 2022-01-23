CREATE TABLE urls (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    sufix VARCHAR(64) NOT NULL,
    or_url VARCHAR(64) NOT NULL,
    user_id INT,
    count INT,
    creation_date DATE,
    expiration_date DATE,
    is_active BOOLEAN
);