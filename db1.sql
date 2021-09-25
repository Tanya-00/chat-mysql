CREATE TABLE IF NOT EXIST 'USER' (
    'login' VARCHAR(20) NOT NULL,
    'password' VARCHAR(15) NOT NULL,
    PRIMARY KEY ('login')
);

CREATE TABLE 'MESSAGES' (
    'login'VARCHAR(20) NOT NULL,
    'message' VARCHAR(200) DEFAULT NULL
    'date' int NOT NULL
)