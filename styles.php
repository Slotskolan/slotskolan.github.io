:root {
    --primary-color: #F8E0E0;
    --secondary-color: #F85F95;
    --third-color: #631731; /* Uppdaterad färg */
    --accent-color: #ffffff;
    --text-color: #333333;
    --hover-color: #F85F95;
}

@font-face {
    font-family: 'CasinoFlat';
    src: url('CasinoFlat.ttf') format('truetype');
}

body {
    font-family: 'Open Sans', Arial, sans-serif;
    background-color: var(--primary-color);
    color: var(--text-color);
    text-align: center;
    padding: 20px;
    opacity: 0;
    animation: fadeIn 1s forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}

.hero {
    background: url('hero-background.jpg') no-repeat center center/cover;
    padding: 80px 20px; /* Minskat från 100px till 80px */
    color: #631731;
    text-align: center;
    position: relative; /* Viktigt för absolut positionering av texten */
    border-radius: 8px;

    display: flex; /* Flexbox för bättre layoutkontroll */
    flex-direction: column;
    align-items: center;
    gap: 10px; /* Minskat gap mellan logotyp och text */
}

.hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #F8E0E0;
    z-index: 1;
}

.hero > * {
    position: relative;
    z-index: 2;
}

/* Förstora logotypen */
.logo {
    width: 650px; /* Förstorat från 150px till 650px */
    height: auto;
    margin-bottom: 10px; /* Minskat från 20px till 10px */
}

.logo video {
    width: 100%;
    height: auto;
    border-radius: 8px;
}

/* Positionera texten över videon */
.hero-text {
    position: absolute;
    top:83%; /* Centrera vertikalt */
    left: 50%; /* Centrera horisontellt */
    transform: translate(-50%, -50%); /* Justera för exakt centrering */
    color: var(--accent-color);
    text-align: center;
    z-index: 3; /* Se till att den ligger över videon */
    background: rgba(0, 0, 0, 0); /* Valfritt: lägg till en halvtransparent bakgrund för bättre läsbarhet */
    padding: 20px;
    border-radius: 8px;
}

.hero-text h1 {
    font-family: 'CasinoFlat', Arial, sans-serif;
    font-size: 3em;
    margin-bottom: 10px;
    color: var(--secondary-color); /* Färg #F85F95 */
    text-shadow: none; /* Ingen textskugga */
}

.hero-text p {
    font-size: 1.2em;
    color: #631731; /* Ändrat till #F85F95 */
    text-shadow: none; /* Ingen textskugga */
}

.cta-button {
    display: inline-block;
    margin-top: 20px;
    padding: 15px 30px;
    background-color: var(--secondary-color);
    color: var(--accent-color);
    text-decoration: none;
    border-radius: 25px;
    font-weight: bold;
    transition: background-color 0.3s, transform 0.3s;
}

.cta-button:hover {
    background-color: var(--hover-color);
    transform: scale(1.05);
}

/* CSS för Casino Banners */
.casino-banners {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 40px 0;
}

.casino-banner {
    width: 500px; /* Fast bredd för banners */
    height: 300px; /* Initial höjd för att beskära bilden till 500x200 */
    overflow: hidden; /* Dölj överflödande delar av bilden */
    position: relative;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #631731;
    transition: height 0.3s ease, box-shadow 0.3s ease; /* Smidig övergång för höjdförändring och skugga */
}

.casino-banner:hover {
    height: 500px; /* Expandera höjden till 500px vid hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.casino-banner img {
    width: 500px; /* Bildens bredd matchar bannerbredden */
    height: 500px; /* Bildens höjd */
    object-fit: cover; /* Täcker hela bannerområdet */
    object-position: top; /* Positionerar bilden så att toppen alltid visas */
    transition: transform 0.3s ease; /* Smidig övergång för eventuella transformeringar */
}

.casino-banner:hover img {
    transform: scale(1.0); /* Ingen förstoring av bilden, bara visa hela bilden */
}

/* Overlay Effekt: Texten syns initialt och försvinner vid hover */
.casino-banner .info {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background: rgba(0, 0, 0, 0.8); /* Halvtransparent bakgrund */
    color: #fff;
    padding: 10px;
    transition: opacity 0.3s ease; /* Smidig övergång för opacitet */
    opacity: 1; /* Synlig initialt */
}

.casino-banner:hover .info {
    opacity: 0; /* Försvinner vid hover */
}

/* Responsiv Design */
@media (max-width: 768px) {
    .casino-banner {
        width: 80%; /* Anpassa bredden för mindre skärmar */
        height: 160px; /* Justera höjden proportionellt */
    }

    .casino-banner img {
        width: 100%;
        height: 500px; /* Bevara bildens höjd för att undvika förvrängning */
        object-position: top;
    }

    .casino-banner:hover {
        height: 500px; /* Expandera höjden vid hover även på mindre skärmar */
    }
}

.contact-section {
    margin-top: 60px;
    padding: 40px 20px;
    background-color: #ffffff;
    border-radius: 8px;
}

.contact-section h2 {
    font-family: 'CasinoFlat', Arial, sans-serif;
    color: var(--third-color);
    margin-bottom: 10px;
}

.contact-section p {
    font-size: 1.1em;
}

footer {
    border-top: 1px solid var(--third-color);
    padding-top: 20px;
    margin-top: 40px;
}

.social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 20px;
}

.social-banner {
    width: 100px; /* Justera storlek efter behov */
    height: 100px;
    object-fit: scale-down;
    border-radius: 8px;
    transition: transform 0.3s;
}

.social-banner:hover {
    transform: scale(1.1);
}

footer p {
    margin-top: 10px;
    color: #777;
}

/* Back-to-Top Knapp */
.back-to-top {
    position: fixed;
    bottom: 40px;
    right: 40px;
    background-color: var(--third-color);
    color: var(--accent-color);
    padding: 10px 15px;
    border-radius: 50%;
    text-decoration: none;
    font-size: 1em;
    display: none; /* Initialt dolt */
    transition: background-color 0.3s, transform 0.3s;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.back-to-top:hover {
    background-color: var(--hover-color);
    transform: scale(1.1);
}

/* Visa knappen när användaren scrollar ner */
.back-to-top.show {
    display: flex;
}

html {
    scroll-behavior: smooth;
}

/* Accessibility: Fokusstilar */
a:focus, button:focus {
    outline: 3px solid var(--secondary-color);
    outline-offset: 2px;
}

/* Modal Styles */
.modal {
    display: none; /* Dold initialt */
    position: fixed; /* Fäst modal i viewport */
    z-index: 1001; /* Högre än övriga element */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto; /* Scroll om nödvändigt */
    background-color: rgba(0, 0, 0, 0.8); /* Mörk bakgrund */
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modal.show {
    display: flex; /* Visa modalen */
    opacity: 1;
}

.modal-content {
    max-width: 80%;
    max-height: 80%;
    border-radius: 8px;
}

.close-button {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #fff;
    font-size: 40px;
    font-weight: bold;
    transition: color 0.3s;
    cursor: pointer;
}

.close-button:hover,
.close-button:focus {
    color: #F85F95;
    text-decoration: none;
    cursor: pointer;
}
