const tooltip = new function () {
    // global constants
    const mainEl = document.getElementsByTagName('main')[0];
    const tooltipEl = document.createElement('div');
    const tooltipStyle = tooltipEl.style;

    this.init = () => {
        this.create();

        // mouse events
        mainEl.addEventListener('mouseover', this.show);
        mainEl.addEventListener('mouseleave', this.hide);

        // equivalent keyboard events
        mainEl.addEventListener('focus', this.show, true);
        mainEl.addEventListener('blur', this.hide, true);
        
        // used to make tooltip disappear when ESC key 
        // is pressed.
        mainEl.addEventListener('keyup', this.onKeyup);
    }

    this.create = () => {
        tooltipEl.className = 'tooltip';
        tooltipEl.id = 'tooltip';
        tooltipEl.setAttribute('role', 'tooltip');
        tooltipEl.setAttribute('aria-label', 'enable tooltip');
        tooltipEl.classList.add('tooltip--hidden');
        mainEl.appendChild(tooltipEl);
    }

    this.onKeyup = (e) => {
        // check if escape is pressed
        if (e.which ==27)  {
            this.hide();
            e.preventDefault(); 
        }
    }
    this.show = (e) => {
        // This is the element that needs the tooltip
        const target = e.target;
        
        // The text the tooltip contains is in the
        // data-tooltip attribute
        const text = target.dataset.tooltip;

        // If this is an element with a tooltip,
        if (text) {
            // the coordinates of the target
            const targetRect = target.getBoundingClientRect();

            target.setAttribute('aria-describedby', 'tooltip');

            // show the tool tip
            tooltipEl.innerHTML = text;
            tooltipEl.setAttribute('aria-hidden', "false");
            tooltipEl.classList.remove('tooltip--hidden');

            // position the tooltip below the target
            tooltipStyle.top = 'calc(' + (targetRect.bottom + window.pageYOffset) + 'px + 1em)';
            tooltipStyle.left = (targetRect.left + window.pageXOffset) + 'px';
        }
    }

    this.hide = (e) => {
        tooltipEl.classList.add('tooltip--hidden'); 
    }

}

tooltip.init();