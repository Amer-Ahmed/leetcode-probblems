# problemUrl = https://leetcode.com/problems/department-highest-salary/description/

WITH MaxSalaries AS (
    SELECT
        departmentId,
        MAX(salary) AS max_salary
    FROM
        Employee
    GROUP BY
        departmentId
)
SELECT
    d.name AS Department,
    e.name AS Employee,
    e.salary AS Salary
FROM
    Employee e
JOIN
    Department d ON e.departmentId = d.id
JOIN
    MaxSalaries ms ON e.departmentId = ms.departmentId AND e.salary = ms.max_salary;