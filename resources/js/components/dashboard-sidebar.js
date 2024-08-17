export default class DashboardSidebar {
    init() {
        const btnToggleAppSidebarEl = document.querySelector("[data-dashboard-toggle-sidebar]");
        if (btnToggleAppSidebarEl) {
            btnToggleAppSidebarEl.addEventListener("click", async () => {
                if (window.innerWidth >= 1200) {
                    document.body.classList.toggle("hide-dashboard-sidebar");
                    if (document.body.classList.contains("hide-dashboard-sidebar")) {
                        // Hide sidebar
                    } else {
                        // Hide sidebar
                    }
                } else {
                    document.body.classList.toggle("show-dashboard-sidebar");
                }
            });
        }

        const appSidebarBackEl = document.querySelector("[data-dashboard-sidebar-back]");
        if (appSidebarBackEl) {
            appSidebarBackEl.addEventListener("click", function () {
                document.body.classList.remove("show-dashboard-sidebar");
            });
        }

        const submenuItems = document.querySelectorAll(
            ".dashboard-sidebar-menu li:has(ul)",
        );

        Array.from(submenuItems).forEach((submenuItem) => {
            const anchor = submenuItem.querySelector("a");
            anchor.addEventListener("click", (e) => {
                e.preventDefault();
                submenuItem.classList.toggle("active");
            });
        });
    }
}