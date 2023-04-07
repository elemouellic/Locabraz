<?php

// namespace Locabraz\controllers;

// use Locabraz\models\modelClass\User;

// class UserController {

//     public function createUser($email, $name, $firstname, $phone, $address, $zipcode, $password) {
//         try {
//             $user = new User();
//             $user->insertUser($email, $name, $firstname, $phone, $address, $zipcode, $password);
//             // Succès de l'insertion, renvoyer un message de réussite
//             return "Nouvel utilisateur créé avec succès";
//         } catch (\Exception $e) {
//             // Erreur lors de l'insertion, renvoyer le message d'erreur
//             return $e->getMessage();
//         }
//     }

//     public function updateUser($email, $name, $firstname, $phone, $address, $zipcode) {
//         try {
//             $user = new User();
//             $user->updateUser($email, $name, $firstname, $phone, $address, $zipcode);
//             // Succès de la mise à jour, renvoyer un message de réussite
//             return "Utilisateur mis à jour avec succès";
//         } catch (\Exception $e) {
//             // Erreur lors de la mise à jour, renvoyer le message d'erreur
//             return $e->getMessage();
//         }
//     }

//     public function deleteUser($email) {
//         try {
//             $user = new User();
//             $user->deleteUser($email);
//             // Succès de la suppression, renvoyer un message de réussite
//             return "Utilisateur supprimé avec succès";
//         } catch (\Exception $e) {
//             // Erreur lors de la suppression, renvoyer le message d'erreur
//             return $e->getMessage();
//         }
//     }

//     public function loginUser($email, $password) {
//         try {
//             $user = new User();
//             $loggedInUser = $user->userLogin($email, $password);
//             // Connexion réussie, renvoyer l'utilisateur connecté
//             return $loggedInUser;
//         } catch (\Exception $e) {
//             // Erreur lors de la connexion, renvoyer le message d'erreur
//             return $e->getMessage();
//         }
//     }

//     public function getAllUsers($email) {
//         try {
//             $user = new User();
//             $users = $user->getUsersByEmail($email);
//             // Récupération réussie, renvoyer la liste des utilisateurs
//             return $users;
//         } catch (\Exception $e) {
//             // Erreur lors de la récupération, renvoyer le message d'erreur
//             return $e->getMessage();
//         }
//     }
// }
