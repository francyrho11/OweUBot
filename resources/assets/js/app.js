
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import SweetScroll from "sweet-scroll";

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

document.addEventListener("DOMContentLoaded", () => {
  const sweetScroll = new SweetScroll();
  const hash = window.location.hash;
  const needsInitialScroll = document.getElementById(hash.substr(1)) != null;

  if (needsInitialScroll) {
    window.location.hash = "";
  }

  window.addEventListener("load", () => {
    if (needsInitialScroll) {
      sweetScroll.to(hash, { updateURL: "replace" });
    }
  }, false);
}, false);
