CREATE TABLE articulos (
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(255) NOT NULL,   
    descripcion VARCHAR(255) NOT NULL,
    imagen VARCHAR(255) NOT NULL,
);

INSERT INTO `articulos` (`id`, `nombre`, `descripcion`, `imagen`) VALUES (NULL, 'mouse', 'un buen mouse gamer', 'value');
