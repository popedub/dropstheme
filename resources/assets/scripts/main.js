// import external dependencies
import 'jquery';
import 'slick-carousel/slick/slick.min.js';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import templateAbout from './routes/templateAbout';
import single from './routes/single';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  templateAbout,
  single,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
