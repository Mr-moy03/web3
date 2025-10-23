-- Base de datos: `ci3_db`

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(100)
);

INSERT INTO usuarios (nombre, email) VALUES
('Juan Perez', 'juan@email.com'),
('Maria Gomez', 'maria@email.com'),
('Carlos Diaz', 'carlos@email.com');