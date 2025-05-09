# EzGo - Système de Gestion de Location de Voitures

## Présentation
Ce projet a été développé dans le cadre du PIDEV (Projet Intégré de Développement) à l'**Esprit School of Engineering**. EzGo est une plateforme complète de gestion de location de voitures, construite avec Symfony 6.4, axée sur la gestion efficace des réservations, le suivi en temps réel de la disponibilité, et une expérience utilisateur fluide.

## Fonctionnalités
- 🚗 **Gestion des Véhicules**
  - Catalogue complet de véhicules
  - Suivi de disponibilité en temps réel
  - Détails techniques et spécifications des véhicules
  - Catégories multiples de véhicules
  - Ajout, modification et suppression de véhicules

- 📅 **Gestion des Réservations**
  - Interface calendrier interactive (FullCalendar)
  - Gestion des réservations en temps réel
  - Suivi du statut (en attente, confirmé, annulé)
  - Système de confirmation automatique
  - Historique des réservations
  - Notifications de réservation

- 👥 **Gestion des Utilisateurs**
  - Contrôle d'accès basé sur les rôles (Admin, Client, Partenaire)
  - Authentification sécurisée
  - Gestion des profils utilisateurs
  - Historique des actions utilisateur

- 📍 **Gestion des Stations**
  - Multiples points de retrait et de dépôt
  - Suivi de la disponibilité des stations
  - Répartition géographique des stations
  - Ajout et gestion des stations

- 🤝 **Gestion des Partenaires**
  - Ajout et gestion des partenaires
  - Attribution de véhicules aux partenaires
  - Suivi des contrats de partenariat

- 📝 **Gestion des Réclamations**
  - Système de dépôt de réclamations en ligne
  - Suivi du statut des réclamations (en cours, résolue, rejetée)
  - Interface d'administration pour le traitement des réclamations
  - Notifications lors de la mise à jour du statut

- 📦 **Gestion des Locations**
  - Création, modification et annulation de locations
  - Calcul automatique du prix selon la durée et le véhicule
  - Génération de factures
  - Suivi des paiements

- ⚡ **Fonctionnalités Temps Réel**
  - Mise à jour instantanée des réservations
  - Confirmation de réservation en temps réel
  - Vérification dynamique de la disponibilité

## Pile Technologique
### Backend
- Symfony 6.4
- PHP 8.1+
- Base de données MySQL
- Doctrine ORM

### Frontend
- Moteur de templates Twig
- Bootstrap 5
- FullCalendar.js
- Font Awesome
- jQuery

### Outils & Utilitaires
- Composer (gestion des dépendances)
- npm/yarn (gestion des paquets frontend)
- Git (gestion de version)

## Structure du Répertoire
```
autoroad/
├── config/
│   ├── packages/
│   └── routes/
├── public/
│   ├── assets/
│   └── uploads/
├── src/
│   ├── Controller/
│   ├── Entity/
│   ├── Form/
│   ├── Repository/
│   └── Service/
├── templates/
│   ├── base.html.twig
│   ├── security/
│   ├── calendar/
│   ├── reclamation/
│   └── partenaire/
└── tests/
```

## Démarrage Rapide

### Prérequis
- PHP 8.1 ou supérieur
- Composer
- MySQL
- Symfony CLI
- npm ou yarn

### Installation
1. Cloner le dépôt
```bash
git clone https://github.com/yourusername/autoroad.git
cd autoroad
```

2. Installer les dépendances PHP
```bash
composer install
```

3. Installer les dépendances frontend
```bash
npm install
# ou
yarn install
```

4. Configurer l'environnement
```bash
# Copier le fichier d'environnement
cp .env .env.local

# Modifier .env.local avec vos identifiants de base de données
DATABASE_URL="mysql://username:password@127.0.0.1:3306/autoroad"
```

5. Créer et migrer la base de données
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

6. Charger les fixtures (optionnel)
```bash
php bin/console doctrine:fixtures:load
```

7. Démarrer le serveur de développement
```bash
symfony server:start
```

### Identifiants par défaut
- Admin : admin@example.com / admin123
- Client : client@example.com / client123

## Contribution
1. Forkez le dépôt
2. Créez votre branche de fonctionnalité (`git checkout -b feature/NouvelleFonctionnalite`)
3. Commitez vos modifications (`git commit -m 'Ajout d\'une nouvelle fonctionnalité'`)
4. Poussez la branche (`git push origin feature/NouvelleFonctionnalite`)
5. Ouvrez une Pull Request

## Licence
Ce projet est sous licence MIT - voir le fichier [LICENSE](LICENSE) pour plus de détails.

## Remerciements
- Ce projet a été réalisé sous la supervision des professeurs de l'**Esprit School of Engineering**
- Merci à la communauté Symfony pour leur documentation
- Merci à tous les contributeurs ayant participé à ce projet

## Topics (Mots-clés)
- symfony
- php
- location-voiture
- gestion-réservation
- fullcalendar
- bootstrap
- mysql
- doctrine-orm
- twig
- web-application
- partenaire
- réclamation
- station
- gestion-utilisateur
- esprit-school-of-engineering 