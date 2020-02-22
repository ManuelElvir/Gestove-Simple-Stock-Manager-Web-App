-- triger after create product
DROP TRIGGER IF EXISTS `after_create_product`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_create_product` AFTER INSERT ON `products` FOR EACH ROW INSERT INTO actions SET name = CONCAT('create_product_', NEW.slug), value = CONCAT('Création du produit ', NEW.name), type = 'create', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), product_id = NEW.id;

DROP TRIGGER IF EXISTS `after_update_product`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_update_product` AFTER UPDATE ON `products` FOR EACH ROW INSERT INTO actions SET name = CONCAT('update_product_', NEW.slug), value = CONCAT('Modification du produit ', OLD.name, ' set value to :', ' </br> Nom : ', OLD.name, '=>', NEW.name, ' </br> Format : ', OLD.format, '=>', NEW.format, ' </br> Prix : ', OLD.prix, '=>', NEW.prix, ' </br> Nombre de pièce : ', OLD.unites, '=>', NEW.unites, ' </br> Quantitè dans la boutique : ', OLD.qte_shop, '=>', NEW.qte_shop, ' </br> Quantitè dans le magasin : ', OLD.qte_store, '=>', NEW.qte_store, ' </br> Date de péremtion : ', OLD.perimeal_date, '=>', NEW.perimeal_date), type = 'update', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), product_id = NEW.id;

DROP TRIGGER IF EXISTS `after_delete_product`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_delete_product` AFTER DELETE ON `products` FOR EACH ROW INSERT INTO actions SET name = CONCAT('delete_product_', OLD.slug), value = CONCAT('Suppression du produit ', OLD.name), type = 'delete', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), product_id = 0;

DROP TRIGGER IF EXISTS `before_delete_product`;
CREATE DEFINER=`root`@`localhost` TRIGGER `before_delete_product` BEFORE DELETE ON `products` FOR EACH ROW UPDATE `actions` SET `product_id` = 0 WHERE `actions`.`product_id` = OLD.id;

DROP TRIGGER IF EXISTS `after_create_facture`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_create_facture` AFTER INSERT ON `factures` FOR EACH ROW INSERT INTO actions SET name = CONCAT('create_facture_', NEW.ref), value = CONCAT('Nouvelle facture ', NEW.ref, " pour le client ", NEW.client), type = 'create', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), facture_id = NEW.id;

DROP TRIGGER IF EXISTS `after_update_facture`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_update_facture` AFTER UPDATE ON `factures` FOR EACH ROW INSERT INTO actions SET name = CONCAT('update_facture_', NEW.ref), value = CONCAT('Modification de la facture ', OLD.ref, ' </br> les informations : ', ' </br> Nom du client : ', OLD.client, '=>', NEW.client, ' </br> Remise : ', OLD.remise, '=>', NEW.remise, ' </br> Prix Total : ', OLD.prix, '=>', NEW.prix, ' </br> Fichier facture : ', OLD.file_path, '=>', NEW.file_path), type = 'update', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), facture_id = NEW.id;

DROP TRIGGER IF EXISTS `after_create_commande`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_create_commande` AFTER INSERT ON `commandes` FOR EACH ROW INSERT INTO actions SET name = CONCAT('create_commande_', NEW.ref), value = CONCAT('Nouvelle commande ', NEW.ref), type = 'create', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), commande_id = NEW.id;

DROP TRIGGER IF EXISTS `after_update_commande`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_update_commande` AFTER UPDATE ON `commandes` FOR EACH ROW INSERT INTO actions SET name = CONCAT('update_commande_', NEW.ref), value = CONCAT('Modification de la commande ', NEW.ref, ' </br> les informations : ', ' </br> Statut : ', OLD.statut, ' => ', NEW.statut, ' </br> Fichier : ', OLD.file_path, ' => ', NEW.file_path), type = 'update', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), commande_id = NEW.id;

DROP TRIGGER IF EXISTS `before_delete_commande`;
CREATE DEFINER=`root`@`localhost` TRIGGER `before_delete_commande` BEFORE DELETE ON `commandes` FOR EACH ROW UPDATE `actions` SET `commande_id` = 0 WHERE `actions`.`commande_id` = OLD.id;

DROP TRIGGER IF EXISTS `after_delete_commande`;
CREATE DEFINER=`root`@`localhost` TRIGGER `after_delete_commande` AFTER DELETE ON `commandes` FOR EACH ROW INSERT INTO actions SET name = CONCAT('delete_commande_', OLD.ref), value = CONCAT('Suppression de la commande ', OLD.ref), type = 'delete', created_at = CURRENT_TIME(), updated_at = CURRENT_TIME(), commande_id = 0;