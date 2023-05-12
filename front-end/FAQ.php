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
      <h1>FAQ</h1>
    <div class="faq">
        <button class="accordion">
        Waar is de site voor bedoeld?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Door middel van deze site worden mensen bewuster van internet criminaliteit.
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Is het essentieel om een virus scanner aan te schaffen?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Nee, het is niet essentieel maar we raden het wel aan.
          </p>
        </div>
      </div>
     <div class="faq">
        <button class="accordion">
        Hoe weet je dat je met een scammer te maken hebt?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Slechte grammatica en spelling in de oorspronkelijke e-mail en een antwoordadres dat niet hetzelfde is als die van de afzender geven al aan dat het waarschijnlijk te mooi is om waar te zijn.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Kun je geld terug krijgen als je bent opgelicht?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        De kans dat je je geld terug krijgt is erg klein. Als de zaak door de politie wordt behandeld, dan bepaalt de rechter of het geld terugbetaald moeten worden.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Hoe komt een hacker bij je binnen?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        Hackers kunnen programma's maken die onbeschermde wegen zoeken naar netwerksystemen en computers.
          </p>
        </div>
      </div>
      <div class="faq">
        <button class="accordion">
        Waar kan ik terecht als ik ben opgelicht?
          <i class="fa-solid fa-chevron-down"></i>
        </button>
        <div class="pannel">
          <p>
        In de meeste gevallen kun je bellen met de politie op 0900-8844 of naar het politiebureau gaan.
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