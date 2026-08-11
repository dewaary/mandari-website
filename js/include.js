/* =========================================================
   include.js — memuat header.html & footer.html
   Cara pakai di HTML:  <div data-include="header.html"></div>
   ========================================================= */

document.querySelectorAll('[data-include]').forEach(async (el) => {
  const res = await fetch(el.dataset.include);
  el.innerHTML = await res.text();
});
