$("span#switch").click(function() {
    if ($(this).hasClass("switch-night")) {
        $("span#switch").addClass("switch-day");
        $("span#switch").removeClass("switch-night");
    } else {
        $("span#switch").addClass("switch-night");
        $("span#switch").removeClass("switch-day");
    }
});

function addMapfre() {
    let cercle = document.getElementById("valeurs");
    let mapfre = document.createElement("img");
    mapfre.src = "../assets/img/Logo Mapfre-01.png";
    mapfre.style.setProperty("width", "90px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(mapfre);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>Mapfre</h2> <p>Mapfre est une compagnie d’Assurance, de Réassurance et de service, leader sur le marché espagnol et présente dans 45 pays et compte plus de 1250 clients.</p> <br>";
}

function addHannover() {
    let cercle = document.getElementById("valeurs");
    let hannover = document.createElement("img");
    hannover.src = "../assets/img/Logo Hannover-01.png";
    hannover.style.setProperty("width", "90px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(hannover);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>Hannover Re</h2> <p>Hannover Re est une compagnie de Réassurance de renommée mondiale et fait partie des 10 plus importants réassureurs au monde.</p> <br>";
}

function addSg() {
    let cercle = document.getElementById("valeurs");
    let sg = document.createElement("img");
    sg.src = "../assets/img/Logo Societe Generale-01.png";
    sg.style.setProperty("width", "110px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(sg);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>Société Générale Algérie</h2> <p>Société Générale Algérie est l’une des toutes premières banques privées à s’installer en Algérie, soit depuis 2000.</p> <br>";
}

function addScoor() {
    let cercle = document.getElementById("valeurs");
    let scoor = document.createElement("img");
    scoor.src = "../assets/img/Logo Scoor-01.png";
    scoor.style.setProperty("width", "100px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(scoor);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>SCOR</h2> <p>SCOR est un groupe français de réassureurs qui offre à ses clients une gamme innovante de solutions et de services et une assise financière solide.</p> <br>";
}

function addBusfr() {
    let cercle = document.getElementById("valeurs");
    let busfr = document.createElement("img");
    busfr.src = "../assets/img/Logo Business France-01.png";
    busfr.style.setProperty("width", "150px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(busfr);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>Business France</h2> <p>Business France est une institution dont la mission consiste à accompagner des entreprises françaises pour leur développement à l’international.</p> <br>";
}

function addCcr() {
    let cercle = document.getElementById("valeurs");
    let ccr = document.createElement("img");
    ccr.src = "../assets/img/Logo CCR-01.png";
    cercle.innerHTML = "";
    cercle.appendChild(ccr);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>CCR Alger</h2> <p>CCR est une compagnie qui occupe une place majeure dans le secteur de la réassurance en Algérie. Ses activités s’étendent à toutes les branches d’assurances.</p> <br>";
}

function addCbi() {
    let cercle = document.getElementById("valeurs");
    let cbi = document.createElement("img");
    cbi.src = "../assets/img/LogoCBI-01.png";
    cercle.innerHTML = "";
    cercle.appendChild(cbi);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>CareBridges International</h2> <p>CareBridges International est une société de services pour l’accès à la santé et l’organisation de la régulation médicale dans plusieurs pays, notamment la France.</p> <br>";
}

function addAfricaRe() {
    let cercle = document.getElementById("valeurs");
    let afriRe = document.createElement("img");
    afriRe.src = "../assets/img/Logo AfricaRe-01.png";
    afriRe.style.setProperty("width", "90px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(afriRe);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>Africa Re</h2> <p>Africa Re est une société africaine de réassurance créée au Cameroun et compte aujourd’hui 41 membres. Il est le réassureur institutionnel le plus important en Afrique.</p> <br>";
}

function addGenerali() {
    let cercle = document.getElementById("valeurs");
    let generali = document.createElement("img");
    generali.src = "../assets/img/Logo Generali-01.png";
    generali.style.setProperty("width", "175px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(generali);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        "<h2>Assicurazioni Generali S.P.A.</h2> <p>Assicurazioni Generali S.P.A. est une compagnie d’assurance italienne, fondée à Trieste en 1831. C’est l’une des 50 plus grandes entreprises mondiales.</p> <br>";
}

function addMacirLogo() {
    let cercle = document.getElementById("valeurs");
    let macir = document.createElement("img");
    macir.src = "../assets/img/Pnipen.svg";
    macir.alt = "Partenaires";
    macir.style.setProperty("width", "40px", "important");
    cercle.appendChild(macir);
}

addMacirLogo();
AOS.init();
