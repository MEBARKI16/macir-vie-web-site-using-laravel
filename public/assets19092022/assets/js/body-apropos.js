$("span#switch").click(function() {
    if ($(this).hasClass("switch-night")) {
        $("span#switch").addClass("switch-day");
        $("span#switch").removeClass("switch-night");
    } else {
        $("span#switch").addClass("switch-night");
        $("span#switch").removeClass("switch-day");
    }
  });

  function addMapfre(title, text) {
    let cercle = document.getElementById("valeurs");
    let mapfre = document.createElement("img");
    mapfre.src = "../assets/img/Logo Mapfre-01.png";
    mapfre.style.setProperty("width", "90px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(mapfre);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =
        `<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addHannover(title, text) {
    let cercle = document.getElementById("valeurs");
    let hannover = document.createElement("img");
    hannover.src = "../assets/img/Logo Hannover-01.png";
    hannover.style.setProperty("width", "90px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(hannover);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML = `<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addSg(title, text) {
    let cercle = document.getElementById("valeurs");
    let sg = document.createElement("img");
    sg.src = "../assets/img/Logo Societe Generale-01.png";
    sg.style.setProperty("width", "110px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(sg);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML = `<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addScoor(title, text) {
    let cercle = document.getElementById("valeurs");
    let scoor = document.createElement("img");
    scoor.src = "../assets/img/Logo Scoor-01.png";
    scoor.style.setProperty("width", "100px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(scoor);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =`<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addBusfr(title, text) {
    let cercle = document.getElementById("valeurs");
    let busfr = document.createElement("img");
    busfr.src = "../assets/img/Logo Business France-01.png";
    busfr.style.setProperty("width", "150px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(busfr);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML = `<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addCcr(title, text) {
    let cercle = document.getElementById("valeurs");
    let ccr = document.createElement("img");
    ccr.src = "../assets/img/Logo CCR-01.png";
    cercle.innerHTML = "";
    cercle.appendChild(ccr);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML = `<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addCbi(title, text) {
    let cercle = document.getElementById("valeurs");
    let cbi = document.createElement("img");
    cbi.src = "../assets/img/LogoCBI-01.png";
    cercle.innerHTML = "";
    cercle.appendChild(cbi);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML =`<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addAfricaRe(title, text) {
    let cercle = document.getElementById("valeurs");
    let afriRe = document.createElement("img");
    afriRe.src = "../assets/img/Logo AfricaRe-01.png";
    afriRe.style.setProperty("width", "90px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(afriRe);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML = `<h2>${title}</h2> <p>${text}</p> <br>`;
  }

  function addGenerali(title, text) {
    let cercle = document.getElementById("valeurs");
    let generali = document.createElement("img");
    generali.src = "../assets/img/Logo Generali-01.png";
    generali.style.setProperty("width", "175px", "important");
    cercle.innerHTML = "";
    cercle.appendChild(generali);
    let zonetxt = document.getElementById("animate-logos");
    zonetxt.innerHTML = "";
    zonetxt.innerHTML = `<h2>${title}</h2> <p>${text}</p> <br>`;
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
