# problemUrl = https://leetcode.com/problems/consecutive-numbers/description/

SELECT DISTINCT Logs1.num AS ConsecutiveNums
FROM Logs Logs1
JOIN Logs Logs2 ON Logs1.id = Logs2.id - 1 AND Logs1.num = Logs2.num
JOIN Logs Logs3 ON Logs2.id = Logs3.id - 1 AND Logs2.num = Logs3.num;