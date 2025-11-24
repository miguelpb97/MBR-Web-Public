<?php
require_once __DIR__ . '/../config/config.php';

class Auth
{
    public static function startSession(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function login(string $user, string $pass): bool
    {
        self::startSession();

        if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
            $_SESSION['admin_logged_in'] = true;
            return true;
        }
        return false;
    }

    public static function logout(): void
    {
        self::startSession();
        $_SESSION = [];
        session_destroy();
    }

    public static function isLoggedIn(): bool
    {
        self::startSession();
        return !empty($_SESSION['admin_logged_in']);
    }

    public static function requireLogin(): void
    {
        if (!self::isLoggedIn()) {
            header('Location: admin_login.php');
            exit;
        }
    }
}
