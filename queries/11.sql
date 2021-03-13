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
 
 
 
 
DECLARE   
    TYPE c_names_type IS TABLE OF
    LEKARSTVA2.MEDICINE_NAME%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT MEDICINE_NAME FROM LEKARSTVA2 ;
BEGIN   
 
    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.MEDICINE_NAME; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
 
 
DECLARE   
    TYPE c_names_type IS TABLE OF
    APTEKI2.APTEKI%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT APTEKI FROM APTEKI2 ;
BEGIN   
 
    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.APTEKI; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
 
DECLARE   
    TYPE c_names_type IS TABLE OF
    KAYRIMDILIK.NAME_K%TYPE                 
        INDEX BY BINARY_INTEGER;   
    c_names c_names_type;   
    counter integer :=0; 
    CURSOR country_curs IS     
        SELECT NAME_K FROM KAYRIMDILIK ;
BEGIN   
 
    FOR n IN country_curs LOOP 
        counter := counter +1; 
        c_names(counter) := n.NAME_K; 
    END LOOP; 
    
    DBMS_OUTPUT.PUT_LINE(' ' || c_names.COUNT);
END;
 
 
 
 
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
