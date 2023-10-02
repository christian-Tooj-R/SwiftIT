create database recrutement;
\c recrutement;

create table utilisateur(
    idUtilisateur SERIAL PRIMARY key,
    nom varchar(20),
    email varchar(20),
    mdp varchar(20),
    estAdmin int
);

insert into utilisateur values (default,'Admin','admin@gmail.com','0000',0);
insert into utilisateur values (default,'Christooj','christooj@gmail.com','1234',1);
insert into utilisateur values (default,'Hendry','hendry@gmail.com','1234',1);
insert into utilisateur values (default,'Mirindra','Mirindra@gmail.com','1234',1);


create table services(
    idService serial primary key,
    nomService varchar(20)
);

insert into services values (default,'Informatique');
insert into services values (default,'Marketing');
insert into services values (default,'Vente');

create table annonce(
    idAnnonce SERIAL PRIMARY key,
    idService int,
    poste varchar(20),
    diplome varchar(20),
    sexe varchar(20),
    age varchar(20),
    situationMatrimoniale varchar(20),
    adresse varchar(20),
    anneeExperience varchar(20),
    horaire int,
    foreign key (idService) references services(idService)
);

insert into annonce values (default,1,'dev','master','homme','20,40','mariee','Andoharanofotsy','3',200);
insert into annonce values (default,2,'vente','bacc','femme','20,40','mariee','Andoharanofotsy','3',200);
insert into annonce values (default,1,'dev','licence','femme','20,40','mariee','Andoharanofotsy','3',200);

create table cv(
    idCv serial primary key,
    idUtilisateur int,
    diplome varchar(20),
    sexe varchar(20),
    dateDeNaissance date,
    situationMatrimoniale varchar(20),
    adresse varchar(20),
    anneeExperience varchar(20)
);

insert into cv values (default,2,'licence','homme','1999-01-15','celibatiare','Andoharanoftsy','2');
insert into cv values (default,3,'master','homme','1999-01-15','celibatiare','Andoharanoftsy','3');
insert into cv values (default,4,'bacc','femme','1999-01-15','celibatiare','Andoharanoftsy','1');


create table cv_Postule(
    idCvPost serial primary key,
    idAnnonce int,
    idUtilisateur int,
    foreign key (idAnnonce) references annonce (idAnnonce),
    foreign key (idUtilisateur) references utilisateur (idUtilisateur)
);  

create table userSelectionne(
    idUserSelection serial  primary key,
    idUtilisateur int,
    idAnnonce int,
    idService int,
    foreign key (idUtilisateur) references utilisateur (idUtilisateur),
    foreign key (idAnnonce) references annonce (idAnnonce),
    foreign key (idService) references services (idService)
);

create view cvPostuleUser as 
select utilisateur.idUtilisateur,annonce.poste,annonce.adresse from cv_Postule 
join annonce on cv_Postule.idAnnonce = annonce.idAnnonce
join utilisateur on utilisateur.idUtilisateur = cv_Postule.idUtilisateur;

create view selectionned as
select utilisateur.idUtilisateur,utilisateur.nom,utilisateur.email,annonce.idAnnonce,annonce.poste,services.idService from userSelectionne
join utilisateur on userSelectionne.idUtilisateur = utilisateur.idUtilisateur
join annonce on userSelectionne.idAnnonce = annonce.idAnnonce
join services on userSelectionne.idService = services.idService;




