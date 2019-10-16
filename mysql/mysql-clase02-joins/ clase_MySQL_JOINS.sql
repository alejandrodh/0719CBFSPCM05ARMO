-- Mostrar los géneros de las películas (genres), ordenados de mayor a 
-- menor por su nombre, con referencia a las películas (movies) utilizando joins.
-- Solicitan que el informe muestre: name y title.

SELECT genres.name, movies.title
FROM genres
INNER JOIN movies on genres.id = movies.genre_id
ORDER BY name DESC;

-- Mostrar las películas (movies) con sus géneros (genres) y los actores (actors)
-- que participen en cada una de ellas utilizando joins.
-- Solicitan que el informe muestre: title, name, first_name y last_name.
SELECT movies.title, genres.name, actors.first_name, actors.last_name
FROM movies
LEFT JOIN genres ON movies.genre_id = genres.id
LEFT JOIN actor_movie ON movies.id = actor_movie.movie_id
LEFT JOIN actors ON actor_movie.actor_id = actors.id;


-- Mostrar los actores (actors) y las películas (movies) en las que participaron.
-- Ordenar por nombre de actor.
-- Mostrar: first_name y title.
SELECT actors.first_name, movies.title
FROM actors
LEFT JOIN actor_movie ON actors.id = actor_movie.actor_id
LEFT JOIN movies ON actor_movie.movie_id = movies.id;



-- Mostrar las películas (movies) con sus géneros (genres) si los posee 
-- y los géneros con todas las películas que le corresponden, ambas en una 
-- sola consulta, sin ordenamiento.

SELECT title, 
	COALESCE(genre_id, " - ") as genero_id,
	COALESCE(name, " - ") as name
FROM movies
LEFT JOIN genres ON movies.genre_id = genres.id
UNION
SELECT title, genre_id, name
FROM movies
RIGHT JOIN genres ON movies.genre_id = genres.id
ORDER BY title;

-- Mostrar por cada capítulo (episodes) el número de temporada (seasons), el nombre 
-- de la serie (series), el género (genres) y la cantidad de actores (actors) que tiene.

SELECT episodes.title as capitulo, seasons.title, seasons.number, series.title, genres.name, 
count(actors.first_name) as actores
FROM episodes
LEFT JOIN seasons on episodes.season_id = seasons.id
LEFT JOIN series on seasons.serie_id = series.id
LEFT JOIN genres on series.genre_id = genres.id
LEFT JOIN actor_episode on actor_episode.episode_id = episodes.id
LEFT JOIN actors on actor_episode.actor_id = actors.id
GROUP BY episodes.title;

-- Mostrar todos los géneros (genres) y el promedio de rating (rating) 
-- de sus películas (movies). Considerar solamente las películas con rating mayor a 5.
SELECT genres.name, AVG(movies.rating) as promedio
FROM genres
LEFT JOIN movies on genres.id = movies.genre_id
WHERE movies.rating > 5
GROUP BY genres.name;

-- Mostrar todas las series (series) y la cantidad de capítulos (episodes) 
-- que se emitieron en el 2016 (usar release_date).
SELECT series.title, series.release_date, episodes.release_date, count(episodes.title)
FROM series
LEFT JOIN seasons ON series.id = seasons.serie_id
LEFT JOIN episodes ON seasons.id = episodes.season_id
WHERE YEAR(episodes.release_date) = 2016
GROUP BY series.title;

-- Mostrar todas las series (series) y la cantidad de capítulos (episodes) 
-- que se emitieron en el año actual (usar release_date).
-- Igual que la anterior cambiando el año a filtrar.
SELECT series.title, series.release_date, episodes.release_date, count(episodes.title)
FROM series
LEFT JOIN seasons ON series.id = seasons.serie_id
LEFT JOIN episodes ON seasons.id = episodes.season_id
WHERE YEAR(episodes.release_date) = YEAR(NOW())
GROUP BY series.title;



