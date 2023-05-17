<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQ</title>
    <link rel="stylesheet" href="faq.css" />
    <link
      rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="wrapper">
      <p>NoSCAM</p>
      <h1>Info</h1>
    <div class="faq">
        <button class="accordion">
        Info over oplichting
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Oplichting is een vorm van bedrog waarbij iemand misleid wordt om geld, eigendommen of persoonlijke informatie af te staan aan een oplichter. Het kan op verschillende manieren plaatsvinden, zowel online als offline. Hier zijn enkele belangrijke punten om te begrijpen over oplichting
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Soorten oplichting
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          Er zijn talloze oplichtingsmethoden, waaronder phishing-e-mails, telefonische oplichting, identiteitsdiefstal, valse investeringen, loterijfraude, romantische zwendel, technische ondersteuningszwendel en meer. Oplichters passen hun methoden voortdurend aan en gebruiken vaak technologie om hun slachtoffers te misleiden.
          </p>
        </div>
      </div>
     <div class="faq">
        <button class="accordion">
        Herken de rode vlaggen
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          Om oplichting te voorkomen, is het belangrijk om waakzaam te zijn en de rode vlaggen te herkennen. Wees alert op ongevraagde verzoeken om persoonlijke informatie, verdachte e-mails van onbekende afzenders, aanbiedingen die te mooi lijken om waar te zijn, druk om snel te handelen, enzovoort.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Melding van oplichting
        <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          Als je slachtoffer bent geworden van oplichting, is het belangrijk om dit te melden bij de juiste instanties. Doe aangifte bij de politie en meld de fraude bij je bank of creditcardmaatschappij. Daarnaast kun je oplichtingspogingen melden bij instanties zoals de Fraudehelpdesk in Nederland of de Federal Trade Commission (FTC) in de Verenigde Staten.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Bescherming van persoonlijke informatie
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          Bescherming van je persoonlijke informatie is essentieel. Geef nooit gevoelige informatie, zoals wachtwoorden, creditcardgegevens of sofinummers, aan onbekende personen of onbeveiligde websites. Controleer altijd de legitimiteit van de partij waarmee je zaken doet voordat je persoonlijke informatie verstrekt.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Internetoplichting
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
          Met de opkomst van internet zijn er veel nieuwe vormen van oplichting ontstaan. Bijvoorbeeld phishing, waarbij oplichters zich voordoen als legitieme organisaties om gevoelige informatie te verkrijgen, zoals wachtwoorden, creditcardgegevens of bankinformatie. Andere vormen van internetoplichting omvatten valse webwinkels, online veilingfraude, vriendschapsverzoeken op sociale media van oplichters enzovoort.
          </p>
        </div>
      </div>
    </div>
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          this.parentElement.classList.toggle("active");
          var pannel = this.nextElementSibling;
          if (pannel.style.display === "block") {
            pannel.style.display = "none";
          } else {
            pannel.style.display = "block";
          }
        });
      }
    </script>
  </body>
</html>