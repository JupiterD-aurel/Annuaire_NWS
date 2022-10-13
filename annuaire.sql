#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: niveau
#------------------------------------------------------------

CREATE TABLE niveau(
        an_niveau_id Int  Auto_increment  NOT NULL COMMENT "BDD Niveau scolaire"  ,
        an_name      Varchar (50) NOT NULL
	,CONSTRAINT niveau_PK PRIMARY KEY (an_niveau_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: cycle
#------------------------------------------------------------

CREATE TABLE cycle(
        an_cycle_id Int  Auto_increment  NOT NULL ,
        cycle_name  Varchar (50) NOT NULL
	,CONSTRAINT cycle_PK PRIMARY KEY (an_cycle_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: specialite
#------------------------------------------------------------

CREATE TABLE specialite(
        an_spe_id Int  Auto_increment  NOT NULL ,
        spe_name  Varchar (50) NOT NULL
	,CONSTRAINT specialite_PK PRIMARY KEY (an_spe_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Sexe
#------------------------------------------------------------

CREATE TABLE Sexe(
        an_sexe_id  Int  Auto_increment  NOT NULL ,
        sexe_genres Varchar (10) NOT NULL
	,CONSTRAINT Sexe_PK PRIMARY KEY (an_sexe_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: annuaire
#------------------------------------------------------------

CREATE TABLE annuaire(
        an_id                          Int  Auto_increment  NOT NULL ,
        an_nom                         Varchar (255) NOT NULL ,
        an_prenom                      Varchar (255) NOT NULL ,
        an_sexe_id                     Int NOT NULL ,
        an_age                         Int NOT NULL ,
        an_ville                       Varchar (50) NOT NULL ,
        an_postal                      Int NOT NULL ,
        an_email                       Varchar (255) NOT NULL ,
        an_phone                       Varchar (50) NOT NULL ,
        an_niveau_id                   Int NOT NULL ,
        an_cycle_id                    Int NOT NULL COMMENT "BBD Annuaire complete"  ,
        an_spe_id                      Int NOT NULL ,
        an_sexe_id_genre_de_l_etudiant Int NOT NULL ,
        an_niveau_id_niveau_actuel     Int NOT NULL COMMENT "BDD Niveau scolaire"  ,
        an_spe_id_specialite           Int NOT NULL ,
        an_cycle_id_cycle_choisi       Int NOT NULL
	,CONSTRAINT annuaire_PK PRIMARY KEY (an_id)

	,CONSTRAINT annuaire_Sexe_FK FOREIGN KEY (an_sexe_id_genre_de_l_etudiant) REFERENCES Sexe(an_sexe_id)
	,CONSTRAINT annuaire_niveau0_FK FOREIGN KEY (an_niveau_id_niveau_actuel) REFERENCES niveau(an_niveau_id)
	,CONSTRAINT annuaire_specialite1_FK FOREIGN KEY (an_spe_id_specialite) REFERENCES specialite(an_spe_id)
	,CONSTRAINT annuaire_cycle2_FK FOREIGN KEY (an_cycle_id_cycle_choisi) REFERENCES cycle(an_cycle_id)
)ENGINE=InnoDB;

