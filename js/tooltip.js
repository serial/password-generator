/*global jQuery,Popper*/

jQuery(function ($) {
  console.log("%ctooltip.js", "color:#00ff00", "-> Loaded");

  /* Tooltip */
  const tooltipList = document.querySelectorAll('.tooltip');
  //console.log(tooltipList);

  tooltipList.forEach(el => {
    const element = el.querySelector('.tooltip-element');
    const tooltip = el.querySelector('.tooltip-text');

    const popperInstance = Popper.createPopper(element, tooltip, {
      placement: 'top',
      modifiers: [
        {
          name: 'offset',
          options: {
            offset: [0, 8],
          },
        },
        /*
        {
          name: "sameWidth",
          enabled: true,
          fn: ({state}) => {
            state.styles.popper.width = `${state.rects.reference.width}px`;
          },
          phase: "beforeWrite",
          requires: ["computeStyles"],
          effect: ({state}) => {
            console.log(state)
            state.elements.popper.style.width = `${state.elements.reference.clientWidth}px`;
          }
        }
        */

      ],
    });

    function show() {
      // Make the tooltip visible
      tooltip.setAttribute('data-show', '');

      // Enable the event listeners
      popperInstance.setOptions((options) => ({
        ...options,
        modifiers: [
          ...options.modifiers,
          { name: 'eventListeners', enabled: true },
        ],
      }));

      // Update its position
      popperInstance.update();
    }

    function hide() {
      // Hide the tooltip
      tooltip.removeAttribute('data-show');

      // Disable the event listeners
      popperInstance.setOptions((options) => ({
        ...options,
        modifiers: [
          ...options.modifiers,
          { name: 'eventListeners', enabled: false },
        ],
      }));
    }

    const showEvents = ['mouseenter', 'focus'];
    const hideEvents = ['mouseleave', 'blur'];

    showEvents.forEach((event) => {
      element.addEventListener(event, show);
    });

    hideEvents.forEach((event) => {
      element.addEventListener(event, hide);
    });

  });

});
