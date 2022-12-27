<?php

class homeController {
    
    public function index() {
        view::load("home");
    }

    public function tours() {
        view::load("Tours");
    }

    public function about() {
        view::load("about");
    }

    public function contact() {
        view::load("Contact");
    }

    public function dashboard() {
        view::load("dashboard");
    }

    public function login() {
        view::load("login");
    }

    public function signIn() {
        view::load("includes/signIn");
    }

    public function signUp() {
        view::load("includes/signUp");
    }

    public function logout() {
        view::load("includes/logout");
    }
    
    public function add() {
        view::load("addDestination");
    }

    public function addTour() {
        view::load("includes/add");
    }
}