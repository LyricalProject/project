8. How does this project help medical centers?
---------------------------------------------------------------------
SELECT * FROM APTEKI2   --- apteki2
SELECT * FROM APTEKI2 WHERE lower(APTEKI) like  lower('%$p1%' )
 
!!--- Table registration  for new medical centres
 
DECLARE   
    TYPE c_names_type IS TABLE OF
    TABLE_REG.APTEKI%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT APTEKI FROM TABLE_REG ;
BEGIN   
 
    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.APTEKI; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
 
 
 
 
 
---------------------------------
 
 
create or replace PACKAGE good_job AS 
 
    PROCEDURE auistyru ( p_id1  table_reg.apteki%TYpe);
   -- Adds a customer 
 
 
   -- Removes a customer 
 
 
END good_job; 
create or replace PACKAGE BODY good_job AS 
    PROCEDURE auistyru ( p_id1  table_reg.apteki%TYpe)
   IS 
   BEGIN 
 
    INSERT INTO APTEKI2 (APTEKI, Apteka_number, Apteka_number_url,apteka_address)
    SELECT APTEKI, Apteka_number, Apteka_number_url,apteka_address
    FROm table_reg
 
    where APTEKI=p_id1;
    END auistyru;
 
 
END good_job; 
 
 
---------------------------------------
 
create or replace PACKAGE good_job3 AS 
 
    PROCEDURE oshiru99 ( p_id1  table_reg.apteki%TYpe);
   -- Adds a customer 
 
 
   -- Removes a customer 
 
 
END good_job3; 
 
create or replace PACKAGE BODY good_job3 AS 
    PROCEDURE oshiru99 ( p_id1  table_reg.apteki%TYpe)
   IS 
   BEGIN 
     DELETE FROM Table_reg WHERE apteki = p_id1;
    END oshiru99;
 
 
END good_job3; 
