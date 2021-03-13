
SELECT * FROM APTEKI2   --- apteki2
SELECT * FROM APTEKI2 WHERE lower(APTEKI) like  lower('%$p1%' )


SELECT * FROM KAYRIMDILIK  -----bespl dary
SELECT * FROM KAYRIMDILIK WHERE lower(NAME_K) like  lower('%$p1%' )


SELECT * FROM LEKARSTVA2  WHERE lower(MEDICINE_NAME) like  lower('$p1%' )
SELECT * FROM LEKARSTVA
