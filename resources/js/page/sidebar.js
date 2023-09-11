
let btn_toggle = document.getElementsByClassName('btn-toggle');

for (let el of btn_toggle) {

  if (typeof el.dataset.drawerTarget !== 'undefined') {
    el.addEventListener('click', () => {
      let drawed = document.getElementById(el.dataset.drawerTarget)
      let default_class = '-translate-x-full';
      let after_event = 'transform-none';

      if (drawed.classList.contains(default_class)) {
        drawed.classList.remove(default_class)
        drawed.classList.add(after_event)
      } else if (drawed.classList.contains(after_event)) {
        drawed.classList.add(default_class)
        drawed.classList.remove(after_event)
      }

    })
  }
}