
# FINETRACKER

FineTracker est une application de gestion des finances personnelles developpee avec Laravel. Elle permet aux utilisateurs de suivre leurs depenses et revenus, de categoriser leurs depenses, et de visualiser un tableau de bord personnalise avec un resume de leurs transactions.

## Table des Matieres
- Installation
- Configuration
- Fonctionnalites
- Utilisation
- Tests
- Technologies Utilisees
- Contribuer
- Licence

## Installation

Pour installer et executer l'application localement, suivez ces etapes :

1. **Clonez le depot :**
   ```bash
   git clone https://github.com/votre-utilisateur/finetracker.git
   cd finetracker
   ```

2. **Installez les dependances :**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Configurez les variables d'environnement :**
   Copiez le fichier `.env.example` en `.env` et modifiez-le pour correspondre à vos parametres de base de donnees :
   ```bash
   cp .env.example .env
   ```

   Mettez à jour les informations de connexion à la base de donnees dans le fichier `.env` :
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=finetracker
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

4. **Generez la cle de l'application :**
   ```bash
   php artisan key:generate
   ```

5. **Executez les migrations :**
   ```bash
   php artisan migrate
   ```

6. **Lancez le serveur de developpement :**
   ```bash
   php artisan serve
   ```

L'application sera accessible à `http://127.0.0.1:8000`.

## Configuration

- **Configuration de l'authentification :** Laravel Breeze est utilise pour la gestion de l'authentification. Les utilisateurs peuvent s'inscrire, se connecter et se deconnecter de l'application.

- **Base de donnees :** L'application utilise MySQL. Assurez-vous de configurer correctement les informations de la base de donnees dans le fichier `.env`.

## Fonctionnalites

- **Gestion des Categories :** Creez, modifiez et supprimez des categories de depenses.
- **Suivi des Revenus et Depenses :** Enregistrez et visualisez vos revenus et depenses.
- **Tableau de Bord :** Un tableau de bord personnel affiche le total des depenses, des revenus et le solde actuel.
- **Authentification :** Inscription, connexion et gestion des sessions utilisateur.
- **Interface Utilisateur :** Conçue avec Bootstrap pour une interface propre et reactive.

## Utilisation

1. **Inscription et Connexion :**
   - Visitez la page d'accueil (`http://127.0.0.1:8000`) pour vous inscrire ou vous connecter. Après la connexion cliquez sur Finetracker pour accéder au dashboard

2. **Gestion des Categories :**
   - Accedez à la page de gestion des categories pour creer, modifier ou supprimer des categories.

3. **Ajout de Revenus et Depenses :**
   - Utilisez les pages dediees pour ajouter de nouvelles entrees de revenus ou de depenses.

4. **Visualisation du Tableau de Bord :**
   - Consultez le tableau de bord pour voir un resume de vos transactions.

## Tests

Pour executer les tests, suivez ces etapes :

1. **Tests Unitaires et Fonctionnels :**
   - Laravel utilise PHPUnit pour les tests. Executez tous les tests avec :
     ```bash
     php artisan test
     ```

2. **Tests de Navigation (Laravel Dusk) :**
   - Installez Laravel Dusk pour les tests de navigation.
   - Executez les tests Dusk avec :
     ```bash
     php artisan dusk
     ```

## Technologies Utilisees

- **Laravel** - Framework PHP pour le developpement web.
- **Bootstrap** - Framework CSS pour la conception de l'interface utilisateur.
- **MySQL** - Systeme de gestion de base de donnees relationnelle.
- **PHPUnit** - Framework de test pour PHP.
- **Laravel Dusk** - Tests automatises de navigation.

## Contribuer

Les contributions sont les bienvenues ! Pour toute suggestion ou amelioration, veuillez suivre les etapes suivantes :

1. **Forkez le depot**
2. **Creez une branche pour votre fonctionnalite** (`git checkout -b feature/YourFeature`)
3. **Commitez vos modifications** (`git commit -m 'Ajout de YourFeature'`)
4. **Poussez vers la branche** (`git push origin feature/YourFeature`)
5. **Ouvrez une Pull Request**

## Licence

Ce projet est sous licence MIT. Veuillez consulter le fichier [LICENSE] pour plus de details.
