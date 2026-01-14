import "./bootstrap";
import "./web/events";
import AOS from "aos";
import "./web/slider";

AOS.init({
    duration: 800,
    easing: "ease-out-cubic",
    once: true,
    offset: 120,
});
