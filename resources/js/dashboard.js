import * as bootstrap from "bootstrap";
import DashboardSidebar from "./components/dashboard-sidebar";

window.bootstrap = bootstrap;

window.addEventListener("load", () => {
    new DashboardSidebar().init();
});
