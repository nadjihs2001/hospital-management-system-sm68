# Page d'accueil Welcome2 - EPSP Bachir Mentouri

## 📋 Description

La page **Welcome2** est une page d'accueil moderne et professionnelle créée spécialement pour l'**EPSP Bachir Mentouri** (Établissement Public de Santé de Proximité). Cette page présente une interface utilisateur élégante avec un design médical professionnel.

## 🎨 Caractéristiques du Design

### Couleurs
- **Couleur principale**: Bleu médical (#007BFF)
- **Couleur secondaire**: Bleu foncé (#0056b3)
- **Arrière-plan**: Blanc et gris clair (#f8f9fa)
- **Typographie**: Poppins, Roboto, Inter

### Sections de la Page

#### 1. **Carrousel Principal (Hero Slider)**
- 3 slides avec images plein écran
- Textes d'accroche professionnels:
  - "Protéger la santé de notre communauté"
  - "Des soins de qualité pour tous"
  - "Votre santé, notre priorité"
- Boutons d'action: "Découvrir nos services", "Prendre rendez-vous", "En savoir plus"
- Animations fluides avec Revolution Slider

#### 2. **Section "Qui sommes-nous"**
- Image à gauche, contenu à droite
- Présentation de l'EPSP Bachir Mentouri
- Mission et Vision de l'établissement
- Bouton "En savoir plus"
- Animations WOW.js (fadeInLeft, fadeInRight)

#### 3. **Section "Nos Services"**
- 6 cartes de services avec icônes médicales:
  - Médecine Générale
  - Pédiatrie
  - Radiologie
  - Laboratoire
  - Urgences
  - Vaccination
- Effet hover avec élévation des cartes
- Bouton "Voir tous nos services"
- Arrière-plan dégradé

#### 4. **Section "Nos Structures"**
- 3 structures de santé présentées:
  - Polyclinique Principale
  - Centre de Santé Nord
  - Salle de Soins Sud
- Images avec overlay au survol
- Adresses et numéros de téléphone
- Boutons "Voir plus"

#### 5. **Section "Témoignages"**
- 3 témoignages de patients
- Photos des patients
- Citations avec style italique
- Design en cartes avec ombre portée
- Icône de citation

## 🚀 Accès à la Page

### URL d'accès
```
http://localhost/welcome2
```

Ou avec support multilingue:
```
http://localhost/en/welcome2  (Anglais)
http://localhost/ar/welcome2  (Arabe)
http://localhost/fr/welcome2  (Français)
```

## 📁 Fichiers Créés

### 1. Vue Blade
- **Fichier**: `resources/views/welcome2.blade.php`
- **Description**: Template principal de la page d'accueil

### 2. CSS Personnalisé
- **Fichier**: `public/WebSite/css/welcome2-custom.css`
- **Description**: Styles personnalisés pour améliorer le design

### 3. Route
- **Fichier**: `routes/web.php`
- **Route ajoutée**: 
```php
Route::get('/welcome2', function () {
    return view('welcome2');
})->name('welcome2');
```

## 🎯 Fonctionnalités

### ✅ Responsive Design
- Compatible avec tous les appareils (Desktop, Tablet, Mobile)
- Breakpoints: 1440px → 768px → 375px
- Grille Bootstrap responsive

### ✅ Animations
- WOW.js pour les animations au scroll
- Effets fadeInUp, fadeInLeft, fadeInRight
- Délais d'animation progressifs (0ms, 300ms, 600ms)
- Transitions CSS fluides

### ✅ Interactivité
- Effets hover sur les cartes de services
- Overlay sur les images de structures
- Boutons avec animations
- Carrousel automatique avec contrôles

### ✅ Multi-langue
- Support complet de LaravelLocalization
- Compatible avec Arabe (RTL), Français, Anglais
- Utilisation de clés de traduction

## 🔧 Personnalisation

### Modifier les Images

Pour changer les images du carrousel, remplacez les fichiers suivants:
```
public/WebSite/images/main-slider/slider-1.jpg
public/WebSite/images/main-slider/slider-2.jpg
public/WebSite/images/main-slider/slider-3.jpg
```

Pour les structures:
```
public/WebSite/images/resource/structure-1.jpg
public/WebSite/images/resource/structure-2.jpg
public/WebSite/images/resource/structure-3.jpg
```

Pour la section "Qui sommes-nous":
```
public/WebSite/images/resource/about-epsp.jpg
```

### Modifier les Couleurs

Éditez le fichier `public/WebSite/css/welcome2-custom.css`:
```css
:root {
    --primary-color: #007BFF;      /* Couleur principale */
    --secondary-color: #0056b3;    /* Couleur secondaire */
    --light-bg: #f8f9fa;           /* Arrière-plan clair */
    --text-color: #333;            /* Couleur du texte */
}
```

### Modifier les Textes

Les textes sont directement dans le fichier `resources/views/welcome2.blade.php`. Vous pouvez:
1. Les modifier directement dans le fichier
2. Ou créer des clés de traduction dans `resources/lang/*/website.php`

### Ajouter des Services

Dans la section "Nos Services", dupliquez un bloc de service:
```html
<div class="service-block col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeInUp" data-wow-delay="0ms">
        <div class="icon-box">
            <span class="icon flaticon-YOUR-ICON" style="color: #007BFF; font-size: 60px;"></span>
        </div>
        <h3><a href="{{ url('services') }}">Nom du Service</a></h3>
        <div class="text">Description du service</div>
    </div>
</div>
```

## 📱 Responsive Breakpoints

- **Desktop**: > 1200px
- **Tablet**: 768px - 1199px
- **Mobile**: < 767px

## 🎨 Icônes Disponibles

Les icônes utilisées proviennent de Flaticon. Exemples:
- `flaticon-heart-2` - Médecine Générale
- `flaticon-baby` - Pédiatrie
- `flaticon-x-ray` - Radiologie
- `flaticon-microscope` - Laboratoire
- `flaticon-ambulance-1` - Urgences
- `flaticon-syringe` - Vaccination

## 🔗 Liens Internes

La page contient des liens vers:
- `/services` - Page des services
- `/about` - Page À propos
- `/contact` - Page de contact

## 📞 Support

Pour toute question ou personnalisation supplémentaire, contactez l'équipe de développement.

---

**Créé pour**: EPSP Bachir Mentouri  
**Framework**: Laravel + Blade Templates  
**Design**: Responsive, Modern, Medical Theme  
**Date**: 2025

