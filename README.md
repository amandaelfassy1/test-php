# sql
1. SELECT first_name, last_name 
   FROM primeo_actors 
   ORDER by last_name DESC;

2. SELECT year FROM primeo_movies 
   GROUP BY year 
   HAVING COUNT(*) > 1; Puis : 

   SELECT year, title 
   FROM primeo_movies 
   WHERE year IN (1995, 1973)
   ORDER BY year ASC, title ASC;

3. SELECT pa.first_name, pa.last_name, pm.year, pm.title 
   FROM primeo_movies pm JOIN primeo_movies_actors pma ON pm.id = pma.movie_id 
   JOIN primeo_actors pa ON pma.actor_id = pa.id
   WHERE pa.gender = 1 
   ORDER BY pa.last_name ASC, pa.first_name ASC, pm.year DESC

5. SELECT pm.title, SUM(pt.tickets * ptp.price) 
   AS total_revenue FROM primeo_tickets pt
   JOIN primeo_movies pm ON pt.movie_id = pm.id
   JOIN primeo_ticket_prices ptp ON pm.year = ptp.year
   GROUP BY pm.title ORDER BY total_revenue DESC LIMIT 10;

6. SELECT ptp.year, SUM(pt.tickets * ptp.price) AS total_revenue
   FROM primeo_tickets pt
   JOIN primeo_movies pm ON pt.movie_id = pm.id
   JOIN primeo_ticket_prices ptp ON pm.year = ptp.year
   GROUP BY ptp.year
   ORDER BY ptp.year DESC;
