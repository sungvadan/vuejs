import axios from 'axios'
import Vue from 'vue'
import Flickity from 'flickity'
import Tooltip from "tooltip.js";

window.axios = axios
window.Vue = Vue
window.Flickity = Flickity
window.Tooltip =Tooltip


window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

