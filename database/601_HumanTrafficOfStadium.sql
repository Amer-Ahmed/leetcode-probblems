# problemUrl = https://leetcode.com/problems/human-traffic-of-stadium/description/
WITH stadium_with_rnk AS (
    SELECT
        id,
        visit_date,
        people,
        RANK() OVER (ORDER BY id) AS rnk,
        id - RANK() OVER (ORDER BY id) AS group_id
    FROM stadium
    WHERE people >= 100
)
SELECT id, visit_date, people
FROM stadium_with_rnk
WHERE group_id IN (
    SELECT group_id
    FROM stadium_with_rnk
    GROUP BY group_id
    HAVING COUNT(*) >= 3
)
ORDER BY visit_date;