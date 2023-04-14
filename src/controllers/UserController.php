<?php

namespace Locabraz\controllers;


class UserController extends MainController
{
    /**
     * Affiche la page d'accueil
     */
    public function homePage(): void
    {
        require_once $this->getViewFront('home');
    }

    /**
     * Affiche la page appartement
     */
    public function apartmentPage(): void
    {
        require_once $this->getViewFront('apartment');
    }

    /**
     * Affiche la page news
     */
    public function newsPage(): void
    {
        require_once $this->getViewFront('news');
    }

    /**
     * Affiche la page de contact
     */
    public function contactPage(): void
    {
        require_once $this->getViewFront('contact/contact');
    }

    /**
     * Affiche la page mentions légales
     */
    public function mentionsPage(): void
    {
        require_once $this->getViewFront('mentions');
    }

    /** Pages utilisateurs */

    /**
     * Affiche la page du compte utilisateur
     */
    public function accountPage(): void
    {
        require_once $this->getViewFront('user/account');
    }

    /**
     * Affiche la page de connexion utilisateur
     */
    public function loginPage(): void
    {
        require_once $this->getViewFront('user/login');
    }

    /**
     * Affiche la page de profil utilisateur
     */
    public function profilePage(): void
    {
        require_once $this->getViewFront('user/profile');
    }

    /**
     * Affiche la page d'inscription utilisateur
     */
    public function registerPage(): void
    {
        require_once $this->getViewFront('user/register');
    }

    /**
     * Affiche la page de réservation utilisateur
     */
    public function bookingPage(): void
    {
        require_once $this->getViewFront('user/booking');
    }

    /**
     * Confirmation du formulaire
     */
    public function confirmationPage(): void
    {
        require_once $this->getViewFront('contact/contact-confirm');
    }
}
