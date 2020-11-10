const docReady = (fn) => {
  document.readyState === 'complete' || document.readyState === 'interactive' ? setTimeout(fn, 1) : document.addEventListener('DOMContentLoaded', fn);
}

docReady(function() {

  let sidenav = M.Sidenav.init(
    document.querySelectorAll('.sidenav'), {});

  let carousel = M.Carousel.init(
    document.querySelectorAll('.carousel'), {});
});
