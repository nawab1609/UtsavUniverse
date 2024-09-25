const pages = [
  { name: "Home", url: "index.php" },
  { name: "Packages", url: "Packages.php" },
  { name: "Booking", url: "Booking.php" },
  { name: "Contact Us", url: "Contact.php" },
  { name: "7 Star Venue", url: "7star.php" },
  { name: "5 Star Venue", url: "5star.php" },
  { name: "3 Star Venue", url: "3star.php" },
  { name: "Garden Venue", url: "Garden.php" },
  { name: "Wedding Food", url: "WeddingFood.php" },
  { name: "Birthday Food", url: "BirthdayFood.php" },
  { name: "Pre-Wedding", url: "PreWedding.php" },
  { name: "Wedding", url: "WeddingShoot.php" },
  { name: "Parties", url: "Parties.php" },
  { name: "Dj", url: "Dj.php" },
  { name: "Wedding Decoration", url: "WeddingDecoration.php" },
  { name: "Parties Decoration", url: "PartiesDecoration.php" },
];
let search_bx2 = document.getElementsByClassName("searchBox")[0];

window.addEventListener("load", () => {
  pages.forEach((element) => {
    const { name, url } = element;
    let card = document.createElement("a");
    card.href = url;
    card.innerHTML = `<div class="aDiv"><p class="aContent" >${name}</p></div>`;
    search_bx2.appendChild(card);
  });
});

sch.addEventListener("keyup", () => {
  let filter = sch.value.toUpperCase();
  let a = search_bx2.getElementsByTagName("a");
  for (let i = 0; i < a.length; i++) {
    let b = a[i].getElementsByClassName("aDiv")[0];
    let c = b.getElementsByTagName("p")[0];
    let TextValue = c.textContent || c.innerText;
    if (TextValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
      search_bx2.style.visibility = "visible";
    } else {
      a[i].style.display = "none";
    }
    if (sch.value == 0) {
      search_bx2.style.visibility = "hidden";
    }
  }
});
