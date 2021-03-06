
create or replace PACKAGE del_analyzee AS 
    PROCEDURE oshiru99 ( p_id1  iteka_analyzes.ID2%TYpe);
   -- Adds a customer 
   -- Removes a customer 
END del_analyzee; 


create or replace PACKAGE BODY del_analyzee AS 
  PROCEDURE oshiru99(p_id1  iteka_analyzes.ID2%TYpe)
   IS 
   BEGIN 
     DELETE FROM iteka_analyzes WHERE ID2 = p_id1;
    END oshiru99;
END del_analyzee; 
-------------------------------------------------------------------------------
create or replace PACKAGE del_apt AS 

    PROCEDURE oshiru99 ( p_id1  iteka_apteka_toltiru.hire_date%TYpe);
   -- Adds a customer 


   -- Removes a customer


END del_apt;
create or replace PACKAGE BODY del_apt AS 
    PROCEDURE oshiru99 ( p_id1  iteka_apteka_toltiru.hire_date%TYpe)
   IS 
   BEGIN 
     DELETE FROM iteka_apteka_toltiru WHERE hire_date = p_id1;
    END oshiru99;


END del_apt; 
-------------------------------------------------------------------------------


create or replace PACKAGE del_dary_kayrimdilik AS 

    PROCEDURE oshiru99 ( p_id1  KAYRIMDILIK.ID2%TYpe);
   -- Adds a customer 


   -- Removes a customer 


END del_dary_kayrimdilik; 
create or replace PACKAGE BODY del_dary_kayrimdilik AS 
  PROCEDURE oshiru99(p_id1  KAYRIMDILIK.ID2%TYpe)
   IS 
   BEGIN 
     DELETE FROM KAYRIMDILIK WHERE ID2 = p_id1;
    END oshiru99;


END del_dary_kayrimdilik; 
-------------------------------------------------------------------------------
create or replace PACKAGE del_diagnos2 AS 

    PROCEDURE oshiru( b  iteka_diagnos.ID2%TYpe);


END del_diagnos2;
create or replace PACKAGE BODY del_diagnos2 AS 
  PROCEDURE oshiru( b  ITEKA_DIAGNOS.ID2%TYpe)
   -- Adds a customer 
   IS 
   BEGIN 
     DELETE FROM ITEKA_DIAGNOS WHERE  ID2 = b;
    END oshiru;


END del_diagnos2;

-------------------------------------------------------------------------------
create or replace PACKAGE del_doctor AS 

    PROCEDURE oshiru99 ( p_id1  ITEKA_DOCTORS_USER.ID2%TYpe);
   -- Adds a customer 


   -- Removes a customer
    

END del_doctor;
create or replace PACKAGE BODY del_doctor AS 
    PROCEDURE oshiru99 ( p_id1  ITEKA_DOCTORS_USER.ID2%TYpe)
   IS 
   BEGIN 
     DELETE FROM ITEKA_DOCTORS_USER WHERE ID2 = p_id1;
    END oshiru99;


END del_doctor; 

------------------------------------------------------------------------
create or replace PACKAGE dob AS 

    PROCEDURE salu( p_id1  iteka_apteka_toltiru.name_dary%TYpe,p_id2  iteka_apteka_toltiru.numberr_dary%TYpe,
    p_id3  iteka_apteka_toltiru.start_date%TYpe, p_id4  iteka_apteka_toltiru.end_date%TYpe,p_id5  iteka_apteka_toltiru.user_roww%TYpe);
   -- Adds a customer 


   -- Removes a customer 


END dob; 
create or replace PACKAGE BODY dob AS 
   PROCEDURE salu( p_id1  iteka_apteka_toltiru.name_dary%TYpe,p_id2  iteka_apteka_toltiru.numberr_dary%TYpe,
    p_id3  iteka_apteka_toltiru.start_date%TYpe, p_id4  iteka_apteka_toltiru.end_date%TYpe,p_id5  iteka_apteka_toltiru.user_roww%TYpe)
   IS 
   BEGIN 
      insert into ITEKA_APTEKA_TOLTIRU( name_dary,numberr_dary,start_date,end_date,user_roww,hire_date ) values
        (p_id1,p_id2,p_id3,p_id4,p_id5,sysdate);
    END salu;


END dob;

------------------------------------------------------------------------

create or replace PACKAGE dob_user AS 

    PROCEDURE salu_user(
    p_id1  iteka_users.name%TYpe,
    p_id2  iteka_users.emaill%TYpe,
    p_id3  iteka_users.password%TYpe, 
    p_id4  iteka_users.day_of_l%TYpe,
    p_id5  iteka_users.pol%TYpe,
     p_id6  iteka_users.height%TYpe,
    p_id7  iteka_users.weight%TYpe,
    p_id8  iteka_users.city%TYpe
  );
   -- Adds a customer 


   -- Removes a customer 


END dob_user; 


create or replace PACKAGE BODY dob_user AS 
   PROCEDURE salu_user(
    p_id1  iteka_users.name%TYpe,
    p_id2  iteka_users.emaill%TYpe,
    p_id3  iteka_users.password%TYpe, 
    p_id4  iteka_users.day_of_l%TYpe,
    p_id5  iteka_users.pol%TYpe,
     p_id6  iteka_users.height%TYpe,
    p_id7  iteka_users.weight%TYpe,
    p_id8  iteka_users.city%TYpe
  )
   IS 
   BEGIN 
      insert into ITEKA_USERS( name,emaill,password,day_of_l,pol,height,weight,city ) values
        (p_id1,p_id2,p_id3,p_id4,p_id5,p_id6,p_id7,p_id8);
    END salu_user;


END dob_user; 

------------------------------------------------------------------------
create or replace PACKAGE dob_user_analyses AS 

    PROCEDURE salu_user_diagnos(
    p_id1  ITEKA_ANALYZES.emaill%TYpe,
    p_id2  ITEKA_ANALYZES.password%TYpe,
    p_id3  ITEKA_ANALYZES.name_of_an%TYpe, 
    p_id4  ITEKA_ANALYZES.start_date%TYpe,
    p_id5  ITEKA_ANALYZES.end_date%TYpe
   
  );
   -- Adds a customer 


   -- Removes a customer 


END dob_user_analyses; 
create or replace PACKAGE BODY dob_user_analyses AS 
     PROCEDURE salu_user_diagnos(
    p_id1  ITEKA_ANALYZES.emaill%TYpe,
    p_id2  ITEKA_ANALYZES.password%TYpe,
    p_id3  ITEKA_ANALYZES.name_of_an%TYpe, 
    p_id4  ITEKA_ANALYZES.start_date%TYpe,
    p_id5  ITEKA_ANALYZES.end_date%TYpe
   
  )
   IS 
   BEGIN 
      insert into ITEKA_ANALYZES( emaill,password,name_of_an,start_date,end_date ) values
        (p_id1,p_id2,p_id3,p_id4,p_id5);
    END salu_user_diagnos;


END dob_user_analyses; 
------------------------------------------------------------------------
create or replace PACKAGE dob_user_diagnos AS 

    PROCEDURE salu_user_diagnos(
    p_id1  iteka_diagnos.emaill%TYpe,
    p_id2  iteka_diagnos.password%TYpe,
    p_id3  iteka_diagnos.name_of_d%TYpe, 
    p_id4  iteka_diagnos.type%TYpe,
    p_id5  iteka_diagnos.start_date%TYpe,
     p_id6  iteka_diagnos.end_date%TYpe,
    p_id7  iteka_diagnos.name_dary%TYpe,
    p_id8  iteka_diagnos.diets%TYpe,
      p_id9  iteka_diagnos.rejim_lechenya%TYpe,
    p_id10  iteka_diagnos.notes%TYpe
  );
   -- Adds a customer 


   -- Removes a customer 


END dob_user_diagnos; 
create or replace PACKAGE BODY dob_user_diagnos AS 
    PROCEDURE salu_user_diagnos(
    p_id1  iteka_diagnos.emaill%TYpe,
    p_id2  iteka_diagnos.password%TYpe,
    p_id3  iteka_diagnos.name_of_d%TYpe, 
    p_id4  iteka_diagnos.type%TYpe,
    p_id5  iteka_diagnos.start_date%TYpe,
     p_id6  iteka_diagnos.end_date%TYpe,
    p_id7  iteka_diagnos.name_dary%TYpe,
    p_id8  iteka_diagnos.diets%TYpe,
      p_id9  iteka_diagnos.rejim_lechenya%TYpe,
    p_id10  iteka_diagnos.notes%TYpe
  )
   IS 
   BEGIN 
      insert into iteka_diagnos( emaill,password,name_of_d,type,start_date,end_date,name_dary,diets,rejim_lechenya,notes) values
        (p_id1,p_id2,p_id3,p_id4,p_id5,p_id6,p_id7,p_id8,p_id9,p_id10 );
    END salu_user_diagnos;


END dob_user_diagnos;
--------------------------------------------------------------------------
create or replace PACKAGE dob_user_doctor AS 

    PROCEDURE salu_user_doctor(
    p_id1  iteka_doctors_user.name%TYpe,
    p_id2  iteka_doctors_user.start_date%TYpe,
    p_id3  iteka_doctors_user.adress%TYpe, 
    p_id4  iteka_doctors_user.clock1%TYpe,
    p_id5  iteka_doctors_user.type1%TYpe
    ,
    p_id6  iteka_doctors_user.emaill%TYpe,
    p_id7  iteka_doctors_user.password%TYpe
    
   
  );
   -- Adds a customer 


   -- Removes a customer 


END dob_user_doctor; 
create or replace PACKAGE BODY dob_user_doctor AS 
    PROCEDURE salu_user_doctor(
    p_id1  iteka_doctors_user.name%TYpe,
    p_id2  iteka_doctors_user.start_date%TYpe,
    p_id3  iteka_doctors_user.adress%TYpe, 
    p_id4  iteka_doctors_user.clock1%TYpe,
    p_id5  iteka_doctors_user.type1%TYpe
    ,
    p_id6  iteka_doctors_user.emaill%TYpe,
    p_id7  iteka_doctors_user.password%TYpe
   
   
  )
   IS 
   BEGIN 
      insert into iteka_doctors_user( name,start_date,adress,clock1,type1,emaill,password ,id2) values
        (p_id1,p_id2,p_id3,p_id4,p_id5,p_id6,p_id7,SYSDATE);
    END salu_user_doctor;


END dob_user_doctor; 
--------------------------------------------------------------------------
create or replace PACKAGE dob09 AS 

    PROCEDURE salu( p_id1  iteka_apteka_toltiru.name_dary%TYpe,p_id2  iteka_apteka_toltiru.numberr_dary%TYpe,
    p_id3  iteka_apteka_toltiru.start_date%TYpe, p_id4  iteka_apteka_toltiru.end_date%TYpe,p_id5  iteka_apteka_toltiru.user_roww%TYpe);
   -- Adds a customer 


   -- Removes a customer 


END dob09; 
create or replace PACKAGE BODY dob09 AS 
   PROCEDURE salu( p_id1  iteka_apteka_toltiru.name_dary%TYpe,p_id2  iteka_apteka_toltiru.numberr_dary%TYpe,
    p_id3  iteka_apteka_toltiru.start_date%TYpe, p_id4  iteka_apteka_toltiru.end_date%TYpe,p_id5  iteka_apteka_toltiru.user_roww%TYpe)
   IS 
   BEGIN 
      insert into ITEKA_APTEKA_TOLTIRU( name_dary,numberr_dary,start_date,end_date,user_roww,hire_date ) values
        (p_id1,p_id2,p_id3,p_id4,p_id5,sysdate);
    END salu;


END dob09; 
--------------------------------------------
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






create or replace PACKAGE good_job2 AS 

    PROCEDURE auistyru ( p_id1  table_reg.apteki%TYpe);
   -- Adds a customer 


   -- Removes a customer 


END good_job2; 
create or replace PACKAGE BODY good_job2 AS 
    PROCEDURE auistyru ( p_id1  table_reg.apteki%TYpe)
   IS 
   BEGIN 

    INSERT INTO APTEKI2 (APTEKI, Apteka_number, Apteka_number_url,apteka_address)
    SELECT APTEKI, Apteka_number, Apteka_number_url,apteka_address
    FROm table_reg

    where APTEKI='p_id1';
    END auistyru;


END good_job2; 




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

-----------------------------
create or replace PACKAGE kayrimdilik_covid AS 

    PROCEDURE jandar(
    p_id1  kayrimdilik.name%TYpe,
    p_id2  kayrimdilik.emaill%TYpe,
    p_id3  kayrimdilik.name_k%TYpe, 
    p_id4  kayrimdilik.srok_k%TYpe,
    p_id5  kayrimdilik.number_your%TYpe
   
  );
   -- Adds a customer 


   -- Removes a customer 


END kayrimdilik_covid; 

create or replace PACKAGE BODY kayrimdilik_covid AS 
     PROCEDURE jandar(
    p_id1  kayrimdilik.name%TYpe,
    p_id2  kayrimdilik.emaill%TYpe,
    p_id3  kayrimdilik.name_k%TYpe, 
    p_id4  kayrimdilik.srok_k%TYpe,
    p_id5  kayrimdilik.number_your%TYpe
   
  )
   IS 
   BEGIN 
      insert into kayrimdilik( name,emaill,name_k,srok_k,number_your ) values
        (p_id1,p_id2,p_id3,p_id4,p_id5);
    END jandar;


END kayrimdilik_covid; 























----------------------------------------
create or replace PROCEDURE regis2( p_id1 in varchar2, p_id2 in varchar2, p_id3 in varchar2, p_id4 in varchar2, 
p_id5 in number, p_id6 in varchar2)
 as
BEGIN
    insert into iteka_signup( name1,surname,city,emaill,mobile,password1 ) values (p_id1,p_id2,p_id3,p_id4,p_id5,p_id6);
END;
create or replace PROCEDURE regis222( p_id1 in varchar2, p_id2 in varchar2, p_id3 in varchar2, p_id4 in varchar2)
 as
BEGIN
    insert into table_reg( apteki,apteka_address,apteka_number,apteka_number_url ) values (p_id1,p_id2,p_id3,p_id4);
END;




create or replace PROCEDURE  sayHello2 (name12 IN VARCHAR2, passs in VARCHAR2)


 AS
  qq iteka_signup.name1%type;
  qqz iteka_signup.password1%type;
 BEGIN


    select name1,password1 into qq ,qqz  from iteka_signup where name1 like name12  and  password1 like passs;



END ;















create or replace FUNCTION APTEKI_JANA
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM TABLE_REG ;
  RETURN my_cursor;
END APTEKI_JANA;


create or replace FUNCTION APTEKI_JANA22
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM LEKARSTVA2 ;
  RETURN my_cursor;
END APTEKI_JANA22;


create or replace FUNCTION APTEKI22
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM APTEKI2 ;
  RETURN my_cursor;
END APTEKI22;

create or replace FUNCTION ast( p1     VARCHAR)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM apteki2 WHERE APTEKI like '%p1%';
  RETURN my_cursor;
END ast; 

create or replace FUNCTION ast2( p1     VARCHAR)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM apteki2 WHERE APTEKI = 'p1';
  RETURN my_cursor;
END ast2; 
create or replace FUNCTION ast4( p1     int)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM apteki2 WHERE apteki like '%p1%';
  RETURN my_cursor;
END ast4; 
create or replace FUNCTION ast3( p1     VARCHAR2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM apteki2 WHERE apteki = 'p1';
  RETURN my_cursor;
END ast3; 
create or replace FUNCTION basz2( p1     char)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM apteki2 WHERE apteki like '%p1%';
  RETURN my_cursor;
END basz2; 


create or replace FUNCTION F_Function_to_ANALYZE( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_ANALYZES WHERE (EMAILL=p1);
  RETURN my_cursor;
END F_Function_to_ANALYZE;
create or replace FUNCTION F_Function_to_diagnoz( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_DIAGNOS WHERE (EMAILL=p1);
  RETURN my_cursor;
END F_Function_to_diagnoz;
create or replace FUNCTION F_Function_to_doctor( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_DOCTORS_USER WHERE emaill = p1;
  RETURN my_cursor;
END F_Function_to_doctor;
create or replace FUNCTION F_Function_to_kayrim( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM KAYRIMDILIK  WHERE emaill = p1;
  RETURN my_cursor;
END F_Function_to_kayrim;
create or replace FUNCTION F_Function77( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM apteki2 ;
  RETURN my_cursor;
END F_Function77;
create or replace FUNCTION F_Function8
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_APTEKA_TOLTIRU ;
  RETURN my_cursor;
END F_Function8;
create or replace FUNCTION tima12( p1     VARCHAR2)
      RETURN SYS_REFCURSOR
    AS
      my_cursor SYS_REFCURSOR;
    BEGIN
      OPEN my_cursor 
        FOR SELECT * FROM APTEKI2 WHERE lower(APTEKI) like  lower('p1' );
      RETURN my_cursor;
    END tima12; 



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

