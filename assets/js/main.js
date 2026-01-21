// Small UI interactions
document.addEventListener('DOMContentLoaded', function(){
  // set footer years
  ['year','year2','year3','year4','year5'].forEach(id=>{
    const el = document.getElementById(id);
    if(el) el.textContent = new Date().getFullYear();
  });

  // mobile nav toggles (works with multiple pages)
  document.querySelectorAll('.nav-toggle').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      const nav = btn.nextElementSibling || document.getElementById(btn.getAttribute('aria-controls')) || document.querySelector('.main-nav');
      if(!nav) return;
      const open = nav.classList.toggle('open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });

  // simple form UI feedback
  const form = document.getElementById('contactForm');
  if(form){
    form.addEventListener('submit', function(){
      // naive: disable submit to avoid double-posts
      const btn = form.querySelector('button[type=submit]');
      if(btn) btn.disabled = true; btn && (btn.textContent = 'Sending...');
    });
  }
});
