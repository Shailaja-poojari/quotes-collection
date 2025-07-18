document.addEventListener("DOMContentLoaded", function () {
  const box = document.getElementById("quote-box");
  fetch("https://api.quotable.io/random")
    .then((res) => res.json())
    .then((data) => {
      box.innerHTML = `"${data.content}" — ${data.author}`;
    })
    .catch(() => {
      box.innerHTML = "Could not fetch quote.";
    });
});
