INSERT INTO usuario (NombreApellido,email,psswd,IsAdmin)
VALUES("felipe","email","$2y$10$wXqYnutGX5pzw3G/TIU2sO/F1wpNJBkn422tGJDo0fIUyer51rzhC",1);

INSERT INTO usuario (NombreApellido,email,psswd,IsAdmin)
VALUES("a","a","$2y$10$wXqYnutGX5pzw3G/TIU2sO/F1wpNJBkn422tGJDo0fIUyer51rzhC",0);

INSERT INTO items(idUs,Nombre,Descripcion)
VALUES(1,"Objeto de prueba","Esto es un objeto de prueba para la prueba de base de datos");

INSERT INTO items(idUs,Nombre,Descripcion)
VALUES(1,"Libro de Harry Potter","Libro de harry potter donde aparece la serpiente");


INSERT INTO items(idUs,Nombre,Descripcion)
VALUES2,"Portatil Gaming","Portatil gaming con rtx 3070 16GB RAM 1TB HHD");

INSERT INTO post(idPropietario,idItem)
VALUES(1,0);

INSERT INTO post(idPropietario,idItem)
VALUES(2,1);

INSERT INTO post(idPropietario,idItem)
VALUES(2,2);
