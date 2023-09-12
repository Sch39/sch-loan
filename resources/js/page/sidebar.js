
let side_bar_toggle = document.getElementsByClassName('sidebar-toggle');
let drop_down_toggle = document.getElementsByClassName('dropdown-toggle');


ToggleClass(side_bar_toggle, 'sidebarTarget', ['-translate-x-full'], ['transform-none']);
ToggleClass(drop_down_toggle, 'dropdownTarget', ['hidden'], ['block']);


function ToggleClass(class_collcetion, attr, nd1_class, nd2_class) {
  let default_class = nd1_class;
  let after_event = nd2_class;
  let all_class = default_class.concat(after_event);


  for (let el of class_collcetion) {

    if (typeof el.dataset[attr] !== 'undefined') {
      el.addEventListener('click', (ev) => {
        let drawed = document.getElementById(el.dataset[attr])

        ev.preventDefault()


        all_class.every((c) => {
          if (default_class.includes(c)) {
            // console.log(default_class.includes(c));
            drawed.classList.remove(...default_class)
            drawed.classList.add(...after_event)
            all_class = after_event
            return false
          } else if (after_event.includes(c)) {
            // console.log(after_event.includes(c));
            drawed.classList.remove(...after_event)
            drawed.classList.add(...default_class);
            all_class = default_class
            return false

          }
        })


      })
    }
  }
}