<?php

function debuguear($variable): string
{
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html): string
{
    $s = htmlspecialchars($html);
    return $s;
}

function isLast(string $actual, string $proximo): bool
{
    if ($actual !== $proximo) {
        return true;
    }
    return false;
}

// Función que revisa si el usuario está autenticado
function  isAuth(): void
{
    if (!isset($_SESSION)) {
        session_start();
    } elseif (!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

function isSession(): void
{
    if (!isset($_SESSION)) {
        session_start();
    }
}

function isAdmin(): void
{
    if (!isset($_SESSION['admin'])) {
        header('Location: /');
    }
}
