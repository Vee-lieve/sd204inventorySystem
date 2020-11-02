CREATE TABLE register (
    PRIMARY KEY (userID),
    username varchar(255),
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    password_1 varchar(255)
);

CREATE TABLE product(
    productID int NOT NULL IDENTITY,
    category VARCHAR(255) NOT NULL,
    brand VARCHAR(255) NOT NULL,
    productName VARCHAR(255) NOT NULL,
    quantity int(154) NOT NULL,
    price int(15) NOT NULL,
    dateCreated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    dateUpdated TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    dateEdited TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);


