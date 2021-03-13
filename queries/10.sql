10. What roles and access do users have?
------------------------------------------------------------

----registration
create or replace PROCEDURE regis2( p_id1 in varchar2, p_id2 in varchar2, p_id3 in varchar2, p_id4 in varchar2, 
p_id5 in number, p_id6 in varchar2)
 as
BEGIN
    insert into iteka_signup( name1,surname,city,emaill,mobile,password1 ) values (p_id1,p_id2,p_id3,p_id4,p_id5,p_id6);
END;
 
 
 
 
 
---information about user
 
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
 
 
 
 
------------function_to_analye
 
create or replace FUNCTION F_Function_to_ANALYZE( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_ANALYZES WHERE (EMAILL=p1);
  RETURN my_cursor;
END F_Function_to_ANALYZE;
 
 
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
 
------------------------------------function_to_doctor
create or replace FUNCTION F_Function_to_doctor( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_DOCTORS_USER WHERE emaill = p1;
  RETURN my_cursor;
END F_Function_to_doctor;
 
 
 
 
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
 
 
 
 
-------diagnos_to_user
 
create or replace FUNCTION F_Function_to_diagnoz( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_DIAGNOS WHERE (EMAILL=p1);
  RETURN my_cursor;
END F_Function_to_diagnoz;
 
 
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
 
 
 
 
----------user_give ssome medic _to free 
 
create or replace FUNCTION F_Function_to_kayrim( p1    varchar2)
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM KAYRIMDILIK  WHERE emaill = p1;
  RETURN my_cursor;
END F_Function_to_kayrim;
 
 
 
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
 
 
 
 
 
create or replace FUNCTION F_Function8
  RETURN SYS_REFCURSOR
AS
  my_cursor SYS_REFCURSOR;
BEGIN
  OPEN my_cursor 
    FOR SELECT * FROM ITEKA_APTEKA_TOLTIRU ;
  RETURN my_cursor;
END F_Function8;
