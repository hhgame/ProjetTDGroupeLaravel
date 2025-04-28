# Projet Laravel

Bienvenue dans ce projet Laravel !

## 🚀 Installation

Suivez les étapes ci-dessous pour installer et démarrer le projet localement.

### 1. Cloner le dépôt

```bash
git clone https://github.com/votre-utilisateur/votre-depot.git
cd votre-depot
```

(Remplacez `votre-utilisateur` et `votre-depot` par votre vrai compte GitHub et nom de dépôt.)

---

### 2. Installer les dépendances PHP

```bash
composer install
```

Cela va recréer le dossier `/vendor` contenant toutes les dépendances PHP nécessaires.

---

### 3. Installer les dépendances front-end (si nécessaire)

Si votre projet utilise Laravel Mix ou Vite :

```bash
npm install
```
ou (selon ce que vous utilisez) :
```bash
yarn install
```

Cela va recréer le dossier `/node_modules`.

---

### 4. Configurer l'environnement

Copiez le fichier `.env.example` en `.env` :

```bash
cp .env.example .env
```

Puis générez la clé d'application Laravel :

```bash
php artisan key:generate
```

---

### 5. Configurer la base de données

Dans le fichier `.env`, renseignez les paramètres de votre base de données :
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_votre_bdd
DB_USERNAME=votre_utilisateur
DB_PASSWORD=votre_mot_de_passe
```

Puis lancez les migrations pour créer les tables :

```bash
php artisan migrate
```

---

### 6. Lancer le serveur de développement

Démarrez votre serveur Laravel :

```bash
php artisan serve
```

Par défaut, votre application sera disponible à l'adresse :  
[http://localhost:8000](http://localhost:8000)

---

## 📦 Informations importantes

- Le dossier `/vendor` est ignoré via `.gitignore` ➔ il doit être régénéré avec `composer install`.
- Le dossier `/node_modules` est ignoré ➔ il doit être régénéré avec `npm install`.
- Le fichier `.env` est ignoré pour des raisons de sécurité ➔ pensez à le créer manuellement ou copier `.env.example`.

---

## ✅ Résumé rapide

| Action | Commande |
|:-------|:---------|
| Installer les dépendances PHP | `composer install` |
| Installer les dépendances front-end | `npm install` |
| Copier la config d'environnement | `cp .env.example .env` |
| Générer la clé Laravel | `php artisan key:generate` |
| Lancer les migrations | `php artisan migrate` |
| Démarrer le serveur | `php artisan serve` |

---

## 🔥 Bon développement !

---