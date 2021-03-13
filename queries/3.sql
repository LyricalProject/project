3. Who are the users of the website?
------------------------------------------------------------
create or replace FUNCTION user22
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM iteka_signup
    ;
  RETURN my_cursor;
END user22;
 
---------- ---------------
 
DECLARE   
    TYPE c_names_type IS TABLE OF
    ITEKA_SIGNUP.NAME1%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT NAME1 FROM ITEKA_SIGNUP ;
BEGIN   
    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.NAME1; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE('Пользователи  : ' || c_names.COUNT);
END;
