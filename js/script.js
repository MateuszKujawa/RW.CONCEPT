// Nav
const toggleMenu = () => {
  const body = document.body;
  const menuUl = document.querySelector('ul');
  
  body.classList.toggle("open");
  menuUl.classList.toggle("hidden");
};