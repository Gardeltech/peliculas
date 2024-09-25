-- Active: 1721374146198@@127.0.0.1@3306@peliculas
USE peliculas;

SELECT * FROM catalogo;

CREATE TABLE usuario (
    nombre_usuario VARCHAR(255) NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);

INSERT INTO
    usuario (nombre_usuario, contrasena)
VALUES ('admin', 'admin123');

ALTER TABLE catalogo ADD imagen VARCHAR(255);

UPDATE `catalogo` SET `imagen` = 'el_padrino.jpg' WHERE id = 1;

UPDATE `catalogo` SET `imagen` = 'el_padrino_2.jpg' WHERE id = 2;

UPDATE `catalogo` SET `imagen` = 'caballero_oscuro.jpg' WHERE id = 3;

UPDATE `catalogo` SET `imagen` = 'pulp_fiction.jpg' WHERE id = 4;

INSERT INTO
    catalogo (titulo, imagen)
VALUES (
        'El Padrino',
        'el_padrino.jpg'
    ),
    (
        'El Padrino II',
        'el_padrino_2.jpg'
    ),
    (
        'El Caballero Oscuro',
        'caballero_oscuro.jpg'
    ),
    (
        'Pulp Fiction',
        'pulp_fiction.jpg'
    ),
    (
        'Forrest Gump',
        'forrest_gump.jpg'
    ),
    ('Matrix', 'matrix.jpg'),
    (
        'El Señor de los Anillos: El Retorno del Rey',
        'el-senor-de-los-anillos-el-retorno-del-rey.jpg'
    ),
    (
        'El Imperio Contraataca',
        'el-imperio-contraataca.jpg'
    ),
    ('Gladiador', 'gladiador.jpg'),
    ('Titanic', 'titanic.jpg'),
    (
        'Ciudad de Dios',
        'Ciudad-de-Dios.jpg'
    ),
    (
        'Salvar al Soldado Ryan',
        'Salvar_al_soldado_Ryan.jpg'
    ),
    (
        'Los Intocables',
        'Los_intocables.jpg'
    ),
    ('Avatar', 'avatar.jpg'),
    (
        'Django Sin Cadenas',
        'django-desencadenado.jpg'
    ),
    (
        'La Vida es Bella',
        'La_vida_es_bella.jpg'
    ),
    (
        'Los Siete Samuráis',
        'Seven_Samurai_poster.jpg'
    ),
    (
        'Terminator 2: El Juicio Final',
        'terminator-2.jpg'
    ),
    (
        'Braveheart',
        'corazon-valiente.jpg'
    ),
    (
        'El Gran Lebowski',
        'el-gran-lebowski.jpg'
    ),
    (
        'Casablanca',
        'Casablanca.jpg'
    ),
    (
        'El Rey León',
        'el-rey-leon.jpg'
    ),
    (
        'Interestelar',
        'Interstellar.jpg'
    ),
    ('Parásitos', 'parasitos.jpg'),
    (
        'El Pianista',
        'El_pianista.jpg'
    ),
    (
        'Intensamente',
        'intensamente.jpg'
    ),
    (
        'El Silencio de los Corderos',
        'el-silencio-de-los-inocentes.jpg'
    ),
    (
        'Vengadores: Endgame',
        'vengadores-end-game.jpg'
    ),
    (
        'Apocalypse Now',
        'apocalypse.jpg'
    ),
    ('WALL·E', 'WALL_AaE.jpg'),
    (
        'La La Land',
        'la-la-land.jpg'
    ),
    (
        'El Viaje de Chihiro',
        'el-viaje-de-chihiro.jpg'
    ),
    ('Coco', 'coco.jpg'),
    (
        'La Lista de Schindler',
        'La-lista-de-Schindler.jpg'
    ),
    (
        'Mad Max: Furia en la Carretera',
        'mad_max_fury_road.jpg'
    ),
    (
        'Los Increíbles',
        'Los-Increibles.jpg'
    ),
    ('Whiplash', 'whiplash.jpg'),
    (
        'La Llegada',
        'la-llegada.jpg'
    ),
    ('Toy Story', 'toystory.jpg'),
    (
        'El Laberinto del Fauno',
        'El-laberinto-del-Fauno.jpg'
    ),
    (
        'El Bueno, el Malo y el Feo',
        'el-bueno-el-feo-y-el-malo.jpg'
    ),
    ('Dunkerque', 'dunkerque.jpg'),
    (
        'Blade Runner 2049',
        'blade-runner-poster.jpg'
    ),
    ('Amélie', 'amelie.jpg'),
    (
        'La Naranja Mecánica',
        'naranja-mecanica.jpg'
    ),
    (
        'El Gran Hotel Budapest',
        'hotel-budapest.jpg'
    ),
    (
        'El Club de la Pelea',
        'club-de-la-pelea.jpg'
    ),
    ('Inception', 'inception.jpg');

SELECT * FROM catalogo;