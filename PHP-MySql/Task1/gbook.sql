CREATE TABLE t
    (qty int, price int);

CREATE VIEW v AS
    SELECT qty, price, qty * price AS value
    FROM t;
SELECT * FROM

