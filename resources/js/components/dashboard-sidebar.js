export default class DashboardSidebar {
    constructor(config = {}) {
        this.options = {
            sidebarSelector: ".dashboard-sidebar",
            toggleSidebarButtonSelector: "[data-dashboard-toggle-sidebar]",
            backSidebarElementSelector: "[data-dashboard-sidebar-back]",
            classNameDesktopToHide: "hide-dashboard-sidebar",
            classNameMobileToShow: "show-dashboard-sidebar",
            submenuItemLinksSelector: ".dashboard-sidebar-menu li:has(ul) > a",
            desktopBreakpoint: 1200,
            ...config,
        };
    }

    init() {
        this.initButtonToggleSidebar(this.options.toggleSidebarButtonSelector);
        this.initBack(this.options.backSidebarElementSelector);
        this.initSubmenuItems();
    }

    initButtonToggleSidebar(selector) {
        const button = document.querySelector(selector);
        if (!button) {
            return;
        }

        button.addEventListener("click", async () => {
            this.toggle();
        });
    }

    initBack(selector) {
        const element = document.querySelector(selector);
        if (!element) {
            return;
        }

        element.addEventListener("click", () => {
            this.hide();
        });
    }

    initSubmenuItems() {
        const submenuItems = Array.from(document.querySelectorAll(this.options.submenuItemLinksSelector));
        if (!submenuItems.length) {
            return;
        }

        submenuItems.forEach((anchor) => {
            anchor.addEventListener("click", (e) => {
                e.preventDefault();
                anchor.parentNode.classList.toggle("active");
            });
        });
    }

    isDesktop() {
        return window.innerWidth >= this.options.desktopBreakpoint;
    }

    dispatchShowEvent() {
        const sidebarElement = document.querySelector(this.options.sidebarSelector);

        if (!sidebarElement) {
            return;
        }

        sidebarElement.dispatchEvent(new Event("show"));
    }

    dispatchHideEvent() {
        const sidebarElement = document.querySelector(this.options.sidebarSelector);

        if (!sidebarElement) {
            return;
        }

        sidebarElement.dispatchEvent(new Event("hide"));
    }

    isHidden() {
        if (this.isDesktop()) {
            return document.body.classList.contains(this.options.classNameDesktopToHide);
        }

        return !document.body.classList.contains(this.options.classNameMobileToShow);
    }

    isShown() {
        if (this.isDesktop()) {
            return !document.body.classList.contains(this.options.classNameDesktopToHide);
        }

        return document.body.classList.contains(this.options.classNameMobileToShow);
    }

    show() {
        // Desktop viewport
        if (this.isDesktop()) {
            if (document.body.classList.contains(this.options.classNameDesktopToHide)) {
                document.body.classList.remove(this.options.classNameDesktopToHide);
                this.dispatchShowEvent();
                return;
            }

            return;
        }

        if (document.body.classList.contains(this.options.classNameMobileToShow)) {
            return;
        }

        // Mobile viewport
        document.body.classList.add(this.options.classNameMobileToShow);
        this.dispatchShowEvent();

        return;
    }

    hide() {
        // Desktop viewport
        if (this.isDesktop()) {
            if (!document.body.classList.contains(this.options.classNameDesktopToHide)) {
                document.body.classList.add(this.options.classNameDesktopToHide);
                this.dispatchHideEvent();
                return;
            }
        }

        // Mobile viewport
        if (document.body.classList.contains(this.options.classNameMobileToShow)) {
            document.body.classList.remove(this.options.classNameMobileToShow);
            this.dispatchHideEvent();
        }

        return;
    }

    toggle() {
        if (this.isHidden()) {
            this.show();
            return;
        }

        this.hide();
        return;
    }
}