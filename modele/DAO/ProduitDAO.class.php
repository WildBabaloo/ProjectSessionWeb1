<?php
	/* Description : DAO pour la classe produit de la BD commerce
	 * Date        : 6 avril 2020
     * Auteur      : Pierre Coutu
	*/
	
	// ****** INLCUSIONS *******
	// si la constante n'existe pas, on la crée
	if (defined("DOSSIER_BASE_INCLUDE") == false) {
		define("DOSSIER_BASE_INCLUDE", $_SERVER['DOCUMENT_ROOT']."my-app/projet-session-andrew/");
	}
	// Importe l'interface DAO et la classe Produit
	include_once(DOSSIER_BASE_INCLUDE."modele/DAO/DAO.interface.php");
	include_once(DOSSIER_BASE_INCLUDE."modele/produit.class.php");

	// ****** CLASSE *******
	class ProduitDAO implements DAO {	
	
		// Cette méthode doit retourner l'objet dont la clé primaire a été reçu en paramètre
		// Notes : 1) On retourne null si non-trouvé, 
		//         2) Si la clé primaire est composée, alors le paramètre est un tableau assiociatif
		// ici la seule $clés est un int représentant le code du produit
		public static function chercher($cles) { 
			// obtenir la connexion
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// valeur par défaut pour la variable à retourner si non-trouvée
			$unProduit=null;
			// Préparer une requête de type PDOStatement avec des paramètres SQL	
			$requete=$connexion->prepare("SELECT * FROM produit WHERE code=?");
			// Exécuter la requête
			$requete->execute(array($cles));
			// Analyser l’enregistrement, s’il existe, et créer l’instance du Produit
			// note on pourait aussi lancer une exception si on a plus d’un résultat …
			if ($requete->rowCount()!=0) {
				$enr=$requete->fetch();
				$unProduit=new Produit($enr['code'],$enr['description'],$enr['marque'],
										$enr['url_photo'],$enr['prix'],$enr['quantite']);										
			}
			// fermer le curseur de la requête et la connexion à la BD
			$requete->closeCursor();
			ConnexionBD::close();
			return $unProduit;
		} 
		
		// Cette méthode doit retourner une liste de tous les objets reliés à la table de la BD
		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
		} 
		
		// Comme la méthode chercherTous, mais en applicant le filtre (clause WHERE ...) reçue en param.
		static public function chercherAvecFiltre($filtre){ 
			// obtenir la connexion
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// initialisation du tableau vide
			$tableau=[];	
			// Préparer une requête de type PDOStatement avec des paramètres SQL	
			$requete=$connexion->prepare("SELECT * FROM produit ".$filtre);
			// Exécuter la requête
			$requete->execute();
			// Analyser les enregistrements s'il y en a 
			foreach ($requete as $enr) {
				$unProduit=new Produit($enr['code'],$enr['description'],$enr['marque'],
										$enr['url_photo'],$enr['prix'],$enr['quantite']);										
				array_push($tableau,$unProduit);
			}
			// fermer le curseur de la requête et la connexion à la BD
			$requete-> closeCursor();
			ConnexionBD::close();	
			return $tableau;
		} 

		static function inserer($unProduit){ 
			// on essaie d’établir la connexion
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// On prépare la commande insert
			$requete=$connexion->prepare("INSERT INTO produit (code,description,marque,prix,quantite,url_photo) VALUES (?,?,?,?,?,?)");
			// On l’exécute, et on retourne l’état de réussite (true/false)
			$tableauInfos=[$unProduit->getCode(),$unProduit->getDescription(),$unProduit->getMarque(),
							$unProduit->getPrix(),$unProduit->getQuantite(),$unProduit->getUrlPhoto()];
			return $requete->execute($tableauInfos);
		}

		// Cette méthode modifie tous les champs (non-clé primaire) de l'objet reçu en paramètre dans la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function modifier($unProduit) {
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// On prépare la commande insert
			$requete=$connexion->prepare("UPDATE produit SET description=?,marque=?,prix=?,quantite=?,url_photo=? WHERE code=?");
			// On l’exécute, et on retourne l’état de réussite (true/false)
			$tableauInfos=[$unProduit->getDescription(),$unProduit->getDescription(),
							$unProduit->getPrix(),$unProduit->getQuantite(),$unProduit->getUrlPhoto(),$unProduit->getCode()];
			return $requete->execute($tableauInfos);
		}
		// Cette méthode supprime l'objet reçu en paramètre de la table
		// Retourne true/false selon que l'opération a été un succès ou pas.
		static public function supprimer($unProduit){
			try {
				$connexion=ConnexionBD::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			// On prépare la commande insert
			$requete=$connexion->prepare("DELETE FROM produit WHERE code=?");
			// On l’exécute, et on retourne l’état de réussite (true/false)
			$tableauInfos=[$unProduit->getCode()];
			return $requete->execute($tableauInfos);
		} 
		
		// ================================== Exercice #1 =================================================
		//************************************ A compléter *************************************************
		// Cette méthode retourne la liste de tous les produit qui sont entre deux prix et que la description contient la partieDescritpion.
		// ............. À faire en exercice avec requête paramétrée (ne pas utiliser les autres méthodes de la classe)
		static public function chercherParPrixDesc($prixMin, $prixMax, $partieDesc) {
		    // Obtenir la connexion

			// liste à retourner, vide pour l'instant ...

			// preparer la requête avec un ? par paramètre (prixMin, prixMax, et partieDesc)

			// exécuter la requête en passant en tableau les 3 paramètres

			// remplir la liste avec les résutlats

			// retourner la liste

			
		}
		
		// Cette méthode ajuste la quantite en stock d'un item (paramètre positif on ajoute, paramètre négatif on enleve)
		// ............. À faire en exercice avec requête paramétrée (ne pas utiliser les autres méthodes de la classe)
		static public function ajusterStock($unCode,$quantiteAAjuster){
			// Obtenir la connexion

			// preparer la requête avec un ? par paramètre ($quantiteAAjuster et $unCode)

			// exécuter la requête en passant en tableau les 2 paramètres (attention à l'ordre)
			
		}
		
		
	}
	
?>