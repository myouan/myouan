'use strict';

var $ = require('jquery');

export default class Masonry {
  constructor(target, params) {
    if (! params) {
      params = {};
    }
    this.target = target;
    this.params = params;
    this.bp_md_min = 992;
    this.is_active = false;
    this.setListener();
  }

  setListener() {
    $(window).load(() => {
      this.toggle();
    });

    $(window).resize(() => {
      this.toggle();
    });
  }

  toggle() {
    if ($('body').width() < this.bp_md_min) {
      if (this.is_active) {
        this.target.masonry('destroy');
      }
      this.target.css('height', '');
      this.is_active = false;
    } else {
      this.target.masonry(this.params);
      this.is_active = true;
    }
  }
}
